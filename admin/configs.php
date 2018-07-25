<?php
/**
 * 이 파일은 iModule selfdiagnosis 모듈의 일부입니다. (https://www.imodule.kr)
 *
 * 모듈 설정패널
 * 
 * @file /modules/selfdiagnosis/admin/configs.php
 * @author Eunseop Lim (dmstjq12@naver.com)
 * @license GPLv3
 * @version 0.0.1
 * @modified 2018. 7. 23.
 */
if (defined('__IM__') == false) exit;
?>
<script>
var config = new Ext.form.Panel({
	id:"ModuleConfigForm",
	border:false,
	bodyPadding:"10 10 5 10",
	width:500,
	fieldDefaults:{labelAlign:"right",labelWidth:80,anchor:"100%",allowBlank:true},
	items:[
		new Ext.form.FieldSet({
			title:Selfdiagnosis.getText("admin/configs/form/default_setting"),
			items:[
				Admin.templetField(Selfdiagnosis.getText("admin/configs/form/templet"),"templet","module","selfdiagnosis",false)
			]
		})
	]
});
</script>