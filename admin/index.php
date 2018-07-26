<?php
/**
 * 이 파일은 iModule Selfdiagnosis 모듈의 일부입니다. (https://www.imodule.kr)
 *
 * Selfdiagnosis 모듈 관리자패널을 구성한다. (로그 조회)
 * 
 * @file /modules/selfdiagnosis/admin/index.php
 * @author Eunseop Lim (dmstjq12@naver.com)
 * @license MIT License
 * @version 0.0.1
 * @modified 2018. 7. 25.
 */
if (defined('__IM__') == false) exit;
?>
<script>
Ext.onReady(function() { Ext.getCmp("iModuleAdminPanel").add(
    new Ext.grid.Panel({
        id: "ModuleSelfdiagnosis",
        title: Selfdiagnosis.getText("admin/logs/title"),
        border: false,
        store: new Ext.data.JsonStore({
            proxy: {
                type: "ajax",
                simpleSortMode: true,
                url: ENV.getProcessUrl("selfdiagnosis", "@getLogs"),
                extraParams:{filterElements:"[]"},
                reader: {type:"json"}
            },
            remoteSort: true,
            sorters: [{property:"idx",direction:"DESC"}],
            autoLoad: true,
            pageSize: 50,
            fields: [
                {name: "midx", type: "number"},
                {name: "name", type: "string"},
                {name: "subject", type: "string"},
                {name: "date", type: "date"}
            ],
            listeners: {
                load: function(store, records, success, e) {
                    if (success == false) {
                        if (e.getError()) {
                            Ext.Msg.show({title:Admin.getText("alert/error"),msg:e.getError(),buttons:Ext.Msg.OK,icon:Ext.Msg.ERROR});
                        } else {
                            Ext.Msg.show({title:Admin.getText("alert/error"),msg:Admin.getText("error/load"),buttons:Ext.Msg.OK,icon:Ext.Msg.ERROR});
                        }
                    }
                },
                filterchange: function(store, filters, eOpts) {
                    var filterElements = [];
                    
                    filters.forEach(function(filter) {

                        /**
                         * MySQL 에서는 EQ LT GT 쓰면 에러난다... 어쩔수 없이 이렇게 바꿔주기로 한다..
                         */
                        var operator = filter._operator;
                        if (filter._operator.toUpperCase() === "EQ") {
                            operator = "=";
                        }
                        if (filter._operator.toUpperCase() === "LT") {
                            operator = "<";
                        }
                        if (filter._operator.toUpperCase() === "GT") {
                            operator = ">";
                        }

                        /**
                         * Date 필터 로직을 DateTime 로직으로 변환
                         * 
                         * PHP로 넘겨줄때 유닉스타임으로 1000 나누기 해서 보내줘야함. date 속성은 filterValue에 시간값 있다.
                         * filterValue로 통일하려했지만 string 컬럼의 필터는 _value에 밖에 값이 없다..ㅋㅋ
                         */
                        var value = filter._value;
                        if (filter._property === "date") {
                            value = filter._filterValue / 1000; // 현재시간을 유닉스시간으로 변환
                            
                            if (operator === ">") {
                                var oneDayLater = value + 86400 - 1; // 11시간 59분 59초 (자정도 포함하기 위함)
                                value = oneDayLater; // extjs에서 DateTime 로직을 지원안하기 때문에 Date 로직을 이렇게 좀 수정해야함
                            }

                            if (operator === "=") {
                                /**
                                 * Date 로직의 한계상 현재날짜 Timestamp보다 크고 하루 이후보다 작게 하도록 로직 재구성.
                                 * 하루 이후보다 작다는 조건의 추가 where 구문 추가
                                 */
                                var oneDayLater = value + 86400;
                                filterElements.push({
                                    whereProp: "date",
                                    whereValue: oneDayLater,
                                    operator: "<"
                                });

                                /**
                                 * 현재날짜 Timestamp 보다 크다는 조건으로 변경
                                 */
                                value = value - 1; // 자정까지 포함하기 위함
                                operator = ">";
                            }
                        }

                        filterElements.push({
                            whereProp: filter._property,
                            whereValue: value,
                            operator: operator
                        });
                    });
                    
                    store.getProxy().setExtraParam("filterElements", JSON.stringify(filterElements));
                    store.loadPage(1);
                }
            }
        }),
        plugins: "gridfilters",
        columns: [{
            text: Selfdiagnosis.getText("admin/logs/columns/midx"),
            width: 120,
            dataIndex: "midx",
            sortable: true,
            filter: {type:"number"},
            renderer: function(value, p) {
                if (value == 0) {
                    p.style = "text-align:center;";
                    return "-";
                }
                return Ext.util.Format.number(value, "0");
            }
        }, {
            text: Selfdiagnosis.getText("admin/logs/columns/name"),
            width: 200,
            dataIndex: "name",
            sortable: true,
            filter: {type:"string"}
        }, {
            text: Selfdiagnosis.getText("admin/logs/columns/subject"),
            width: 200,
            dataIndex: "subject",
            sortable: true,
            align: "right",
            filter: {type:"string"}
        }, {
            text: Selfdiagnosis.getText("admin/logs/columns/date"),
            width: 130,
            align: "center",
            dataIndex: "date",
            xtype: "datecolumn",
            format: "Y-m-d H:i",
            sortable: true,
            filter: {type:"date"},
            renderer: function(value) {
                return value > 0 ? moment(value).format("YYYY-MM-DD HH:mm") : "-";
            }
        }],
        bbar: new Ext.PagingToolbar({
            store: null,
            displayInfo: true,
            listeners: {
                beforerender: function(tool) {
                    tool.bindStore(Ext.getCmp("ModuleSelfdiagnosis").getStore());
                }
            }
        })
    })
)});
</script>