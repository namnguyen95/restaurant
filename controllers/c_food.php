<?php 
/**
*/
class C_food
{
  var $_smarty = NULL;

  public function __construct(){
    require 'smarty_restaurant.php';
    require 'models/m_food.php';
    require 'models/m_post.php';
    require 'pagination.class.php';
    
    $this->_smarty = new smarty_restaurant();
  }
  public function showFoodToday(){
    //models
    $m_food         = new M_food();
    $foodTodays     = $m_food->getAllFoodToday();
    $foodNews       = $m_food->getNewFood();

    $m_post    = new M_post();
    $hotPosts = $m_post->getHotPost();
    $this->_smarty->assign("hotPosts",$hotPosts);
    //views
    $this->_smarty->assign("foodTodays",$foodTodays);
    $this->_smarty->assign("foodNews",$foodNews);
    $this->_smarty->assign("title",'Trang chủ');
    $this->_smarty->assign('view','views/home/v_home.tpl');
    $this->_smarty->display("master_layout.tpl");
  }
  public function loadDetailFood(){
    //models
    if (isset($_GET['id_food'])) {
      $m_food   = new M_food();
      $food     = $m_food->getDetailFood($_GET['id_food']);
      $id_type  = $food->id_type;
      $foodSameTypes = $m_food->getFoodSameType($id_type,$_GET['id_food']);
      //views

      $m_post    = new M_post();
    $hotPosts = $m_post->getHotPost();
    $this->_smarty->assign("hotPosts",$hotPosts);

      $this->_smarty->assign("food",$food);
      $this->_smarty->assign("foodSameTypes",$foodSameTypes);

      $this->_smarty->assign("title",'Chi tiết món '.$food->name_food);
      $this->_smarty->assign('view','views/detail_food/v_detail_food.tpl');
      $this->_smarty->display("temp_sidebar/layout.tpl");
    }
  }
  public function showFoodOnMenu(){
    //models
    $m_food         = new M_food();
    $foodBreakfasts = $m_food->getFoodbyType(1);
    $foodAppetizers = $m_food->getFoodbyType(2);  
    $foodMains      = $m_food->getFoodbyType(3);
    $foodDesserts   = $m_food->getFoodbyType(5);

    $m_post    = new M_post();
    $hotPosts = $m_post->getHotPost();
    $this->_smarty->assign("hotPosts",$hotPosts);
    //views
    $this->_smarty->assign("foodBreakfasts",$foodBreakfasts);
    $this->_smarty->assign("foodAppetizers",$foodAppetizers);
    $this->_smarty->assign("foodMains",$foodMains);
    $this->_smarty->assign("foodDesserts",$foodDesserts);
    $this->_smarty->assign("title",'Các món trong menu');
    $this->_smarty->assign('view','views/menu/v_menu.tpl');
    $this->_smarty->display("master_layout.tpl");
  }
}
?>