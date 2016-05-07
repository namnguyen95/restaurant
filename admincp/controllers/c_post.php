<?php 
/**
* 
*/
session_start();
class C_post
{
  var $_smarty = NULL;

  public function __construct(){
    if (!isset($_SESSION['username'])) {
      header("location:login.php"); 
    }
    require 'smarty_restaurant.php';
    require 'models/m_post.php';
    require 'pagination.class.php';

    $this->_smarty = new smarty_restaurant();
  }

  public function showAllPost(){
    $m_post   = new M_post();
    $posts    = $m_post->getAllPost();

    //phân trang
    $currentPage    = (isset($_GET['page'])) ? $_GET['page'] : 1;
    $pagination     = new pagination(count($posts),$currentPage,4,3);
    $paginationHTML = $pagination->showPagination();
    $position       = ($currentPage-1)*$pagination->_nItemOnPage;
    $posts          = $m_post->getAllPost($position,$pagination->_nItemOnPage);

    $this->_smarty->assign('posts',$posts);
    $this->_smarty->assign('now','<li class="active">Danh sách bài viết</li>');
    $this->_smarty->assign("title",'Danh sách bài viết');
    $this->_smarty->assign("paginationHTML",$paginationHTML);
    $this->_smarty->assign("view",'views/post/v_listpost.tpl');
    $this->showTheme();
  }
  public function addPost(){
    $m_post   = new M_post();
    $editors  = $m_post->showEditor();

    if (isset($_POST['addpost'])) {
      require 'upload.class.php';
      require 'validate.class.php';
      $source     = $_POST;
      $validate   = new Validate($source);
      $validate->addRule('title','string',10,150)
                ->addRule('mini_content','string',10,600);

      //run validate
      $validate->run();
      $errValidate    = $validate->showErrors();
//id_post, title, mini_content, content, image, author, time_post, time_edit, n_views, slide_show
      if($errValidate==''){
        //echo "<h1>".$_POST['slideshow']."</h1>";
        $title        = $_POST['title'];
        $mini_content = $_POST['mini_content'];
        $content      = $_POST['content'];
        $editor       = NULL;
        $slideshow    = isset($_POST['slideshow'])?1:0;
        $imgpost      = 'default.jpg';
        
        $loi = '';
        if (isset($_FILES['img_post'])) {
          $upload   = new Upload('img_post');
          $upload->setFileExtension(array('png','jpg','gif','jpeg'));
          $upload->setFileSize(1024,520000);
          $upload->setUploadDir('../public/images/post/');

          if ($upload->isVail()==true && $_FILES['img_post']['error']==0) {
            $imgpost  = $upload->upload();
          }else{
            $loi .= '<ul class="loi">';
            foreach($upload->_error as $error){
              $loi .= '<li>'.$error.'</li>';
            }
            $loi .='</ul>';
            $this->_smarty->assign("loi",$loi);
          }
        }
        if ($loi=='') {
          $data     = array(NULL,$title,$mini_content,$content,
                          $imgpost,$editor,time(),time(),13,$slideshow
                          );
          $resultAddPost = $m_post->insertPost($data);
          if ($resultAddPost>0) {
            header('Location:listpost.php');
          }
        }
        
      }else{
        $this->_smarty->assign("loi",$errValidate);
      }
    }
    $this->_smarty->assign('now','<li class="active">Thêm bài viết</li>');
    $this->_smarty->assign("title",'Thêm bài viết');
    $this->_smarty->assign("view",'views/post/v_addpost.tpl');
    $this->showTheme();
    
  }

  public function delPost(){
    if (isset($_GET['id_post'])) {
      $id     = $_GET['id_post'];
      $m_post = new M_post();
      $post   = $m_post->getDetailpost($id);
      if (!$post) {
        header("Location:page-404.html");
        //exit();
      }
      $resultDelPost = $m_post->delPost(array($id));
      if ($resultDelPost) {
        header('Location:listpost.php');
      }
      
    }else{
      header("Location:page-404.html");
    }
  }

  private function showTheme(){
    $this->_smarty->display("master_layout.tpl");
  }

}

 ?>