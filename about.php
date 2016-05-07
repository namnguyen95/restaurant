<?php 
	require_once 'smarty/libs/Smarty.class.php';
	$smarty = new Smarty();
	
	$smarty->setConfigDir('smarty/configs/');
	$smarty->setCacheDir("smarty/cache/");
	
	$smarty->setTemplateDir("smarty/templates/");
	$smarty->setCompileDir("smarty/templates_c/");

	$smarty->assign("title","Giới thiệu");
	$smarty->assign("view","views/about/v_about.tpl");
	$smarty->display("master_layout.tpl");	
 ?>