<?php
session_start();
class C_dashboard
{
  var $_smarty = NULL;

  public function __construct(){
    require 'smarty_restaurant.php';
    //require 'models/m_food.php';
    //require 'pagination.class.php';
    if (!isset($_SESSION['username'])) {
      header("location:login.php"); 
    }
    $this->_smarty = new smarty_restaurant();
  } 
  public function showSursey(){
    $this->_smarty->assign("title",'Thống kê');
    $this->_smarty->assign("view",'views/dashboard/v_dashboard.tpl');
    $this->_smarty->display("dashboard/layout.tpl");
  }
}
 ?>
