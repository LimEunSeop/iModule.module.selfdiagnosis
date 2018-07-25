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
                url: ENV.getProcessUrl("Selfdiagnosis", "@getLogs"),
                extraParams:{filterElements:"[]"},
                reader: {type:"json"}
            },
            remoteSort: true,
            sorters: [{property:"idx",direction:"DESC"}],
            autoLoad: true,
            pageSize: 50,
            fields: ["midx", "name", "subject", "date"],
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
                        var operator = null;
                        if (filter._operator.toUpperCase() === "EQ") {
                            operator = "=";
                        }
                        if (filter._operator.toUpperCase() === "LT") {
                            operator = "<";
                        }
                        if (filter._operator.toUpperCase() === "GT") {
                            operator = ">";
                        }

                        filterElements.push({
                            whereProp: filter._property,
                            whereValue: filter._value,
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
            sortable: true,
            filter: {type:"date"},
            renderer: function(value) {
                return value > 0 ? moment(value * 1000).format("YYYY-MM-DD HH:mm") : "-";
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