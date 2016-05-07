<?php 
	require_once 'smarty/libs/Smarty.class.php';
	$smarty = new Smarty();
	
	$smarty->setConfigDir('smarty/configs/');
	$smarty->setCacheDir("smarty/cache/");
	
	$smarty->setTemplateDir("smarty/templates/");
	$smarty->setCompileDir("smarty/templates_c/");

	$smarty->assign("title","Các dịch vụ cung cấp");
	$smarty->assign("view",'views/services/v_services.tpl');

	$smarty->display("master_layout.tpl");	
 ?>