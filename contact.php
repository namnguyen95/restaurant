<?php 
	require_once 'smarty/libs/Smarty.class.php';
	$smarty = new Smarty();
	
	$smarty->setConfigDir('smarty/configs/');
	$smarty->setCacheDir("smarty/cache/");
	
	$smarty->setTemplateDir("smarty/templates/");
	$smarty->setCompileDir("smarty/templates_c/");

	$smarty->assign("title","Liên hệ");
	$smarty->assign("view",'views/contact/v_contact.tpl');

	$smarty->display("master_layout.tpl");	
 ?>