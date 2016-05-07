<?php 
require 'smarty/libs/Smarty.class.php';
class smarty_restaurant extends Smarty
{
	public function __construct(){
		parent::__construct();
		$this->setCacheDir("smarty/cache/");
		$this->setCompileDir("smarty/templates_c/");
		$this->setConfigDir("smarty/configs/");
		$this->setTemplateDir("smarty/templates/");	
	}
}
 ?>