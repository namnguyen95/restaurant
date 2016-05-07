<?php 

class C_post
{
  var $_smarty = NULL;

  public function __construct(){
    require 'smarty_restaurant.php';
    require 'models/m_post.php';
    require 'pagination.class.php';
    
    $this->_smarty = new smarty_restaurant();
  }
  public function loadAllPosts(){
    $m_post    = new M_post();
    $posts     = $m_post->getAllPost();

    $currentPage    = (isset($_GET['page'])) ? $_GET['page'] : 1;
    $pagination     = new pagination(count($posts),$currentPage,3,3);
    $paginationHTML = $pagination->showPagination();
    $position       = ($currentPage-1)*$pagination->_nItemOnPage;
    $posts          = $m_post->getAllPost($position,$pagination->_nItemOnPage);

    $hotPosts = $m_post->getHotPost();

    //views

    $this->_smarty->assign("hotPosts",$hotPosts);

    $this->_smarty->assign("posts",$posts);
    $this->_smarty->assign("paginationHTML",$paginationHTML);
    $this->_smarty->assign("title",'Danh sách tin tức - bài viết');
    $this->_smarty->assign('view','views/post/v_list_post.tpl');
    $this->_smarty->display("temp_sidebar/layout.tpl");
  }
  public function loadContentPost(){
    //models
    if (isset($_GET['id_post'])) {
      $m_post   = new M_post();
      $post     = $m_post->getContentPost($_GET['id_post']);

      $hotPosts = $m_post->getHotPost();
    //views
      $this->_smarty->assign("hotPosts",$hotPosts);
      
      $this->_smarty->assign("post",$post);
      $this->_smarty->assign("title",$post->title);
      $this->_smarty->assign('view','views/post/v_content.tpl');
      $this->_smarty->display("temp_sidebar/layout.tpl");
    }
  }
}
 ?>