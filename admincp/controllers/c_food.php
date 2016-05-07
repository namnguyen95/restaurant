<?php 
/**
* 
*/
session_start();

class C_food
{
	var $_smarty = NULL;

	public function __construct(){
		require 'smarty_restaurant.php';
		require 'models/m_food.php';
		require 'pagination.class.php';
		if (!isset($_SESSION['username'])) {
			header("location:login.php");	
		}
		$this->_smarty = new smarty_restaurant();

	}
	public function showFood(){
		//model
		$m_food 				= new M_food();
		$foods 					= $m_food->getAllFood();

		//phân trang
		$currentPage		= (isset($_GET['page'])) ? $_GET['page'] : 1;
		$pagination 		= new pagination(count($foods),$currentPage,6,3);
		$paginationHTML = $pagination->showPagination();
		$position				= ($currentPage-1)*$pagination->_nItemOnPage;
		$foods 					= $m_food->getAllFood($position,$pagination->_nItemOnPage);
		
		//views
		//$smarty = new smarty_restaurant();
		$this->_smarty->assign("foods",$foods);
		$this->_smarty->assign('now','<li class="active">Danh sách món ăn</li>');
		$this->_smarty->assign("title",'Cập nhật danh sách món ăn');
		$this->_smarty->assign("view",'views/listfood/v_listfood.tpl');
		$this->_smarty->assign("paginationHTML",$paginationHTML);
		$this->showTheme();
	}

	public function addFood(){
		//model
		$m_food 		= new M_food();
		$typeFoods	= $m_food->getAllTypeFood();
		$cooks			= $m_food->getAllCook();
		
		if (isset($_POST['addfood'])) {
			require 'upload.class.php';
			require 'validate.class.php';
			$source 		= $_POST;
			$validate 	= new Validate($source);
			$validate->addRule('namefood','string',8,100)
								->addRule('unit_price','int',10000,3000000)
								->addRule('mini_content','string',10,500);

			//run validate
			$validate->run();
			$errValidate		= $validate->showErrors();
//id_food, id_type, name_food, image_food, mini_content, content, unit_price, time_add, time_edit, today, author, cook
			if($errValidate==''){
				$namefood 		= $_POST['namefood'];
				$unit_price	 	= $_POST['unit_price'];
				$typefood 		= $_POST['typefood'];
				$mini_content = $_POST['mini_content'];
				$content 			= $_POST['content'];
				$cook 				= $_POST['cook'];
				$today 				= ($_POST['today']!=NULL)?1:0;
				$imgfood 			= 'default.jpg';

				$loi = '';
				if (isset($_FILES['img_food'])) {
					$upload 	= new Upload('img_food');
					$upload->setFileExtension(array('png','jpg','gif','jpeg'));
					$upload->setFileSize(1024,520000);
					$upload->setUploadDir('../public/images/menu/');

					if ($upload->isVail()==true && $_FILES['img_food']['error']==0) {
						$imgfood 	= $upload->upload();
					}else{
						$loi = '<ul class="loi">';
						foreach($upload->_error as $error){
							$loi .= '<li>'.$error.'</li>';
						}
						$loi .='</ul>';
						$this->_smarty->assign("loi",$loi);
					}
				}
				if ($loi=='') {
					$data 		= array(NULL,$typefood,$namefood,$imgfood,
														$mini_content,$content,$unit_price,
														time(),time(),$today,NULL,$cook
														);
					$resultAddFood = $m_food->insertFood($data);
					if ($resultAddFood>0) {
						header('Location:listfood.php');
					}
				}
				
			}else{
				$loi  = $errValidate;
				$this->_smarty->assign("loi",$loi);
			}
		}
		
		//views
		$this->_smarty->assign("typeFoods",$typeFoods);
		$this->_smarty->assign("cooks",$cooks);
		$this->_smarty->assign('now','<li class="active">Thêm món ăn</li>');
		$this->_smarty->assign("title",'Thêm món ăn');
		$this->_smarty->assign("view",'views/listfood/v_addfood.tpl');
		$this->showTheme();
	}

	public function editfood(){
		if (isset($_GET['id_food'])) {
			$id_food 		= $_GET['id_food']; 
			$m_food 		= new M_food();
			$typeFoods	= $m_food->getAllTypeFood();
			$cooks			= $m_food->getAllCook();
			$food 			= $m_food->getDetailFood($id_food);
			if (!$food) {
				header("Location:page-404.html");
			}

			if (isset($_POST['editfood'])) {
				require 'validate.class.php';
				require 'upload.class.php';
				$source 		= $_POST;
				$validate 	= new Validate($source);
				$validate->addRule('namefood','string',8,100)
								->addRule('unit_price','int',10000,3000000)
								->addRule('mini_content','string',10,500);
				//run validate
				$validate->run();
				$errValidate		= $validate->showErrors();
				$loi = '';
				if($errValidate==''){
					$namefood 		= $_POST['namefood'];
					$unit_price	 	= $_POST['unit_price'];
					$id_type	 		= $_POST['typefood'];
					$mini_content = $_POST['mini_content'];
					$content 			= $_POST['content'];
					$cook 				= $_POST['cook'];
					$today 				= (isset($_POST['today']))?1:0;
					$imgfood 			= $food->image_food;

					if (isset($_FILES['img_food']) and $_FILES['img_food']['error']==0) {
						print_r($_FILES);
						$upload 	= new Upload('img_food');
						$upload->setFileExtension(array('png','jpg','gif','jpeg'));
						$upload->setFileSize(1024,520000);
						$upload->setUploadDir('../public/images/menu/');

						if ($upload->isVail()==true) {
							$imgfood 	= $upload->upload();
						}else{
							$loi = '<ul class="loi">';
							foreach($upload->_error as $error){
								$loi .= '<li>'.$error.'</li>';
							}
							$loi .='</ul>';
							$this->_smarty->assign("loi",$loi);
						}
					}
				}else{
					$this->_smarty->assign("errValidate",$errValidate);
				}
				
				if ($loi=='') {
					$data = array(
											'id_type' 		=> $id_type,
											'name_food' 	=> $namefood,
											'image_food'	=> $imgfood,
											'mini_content'=> $mini_content,
											'content'			=> $content,
											'unit_price'	=> $unit_price,
											'time_edit'		=> time(),
											'cook'				=> $cook
											);
		
					$resultEditFood = $m_food->editFood($data,$food->id_food);
					if ($resultEditFood>0) {
						header('Location:listfood.php');
					}
				}
			}//isset($_POST['editfood']

			//views
			$this->_smarty->assign("typeFoods",$typeFoods);
			$this->_smarty->assign("food",$food);
			$this->_smarty->assign("cooks",$cooks);
			$this->_smarty->assign('now','<li class="active">Sửa món ăn</li>');
			$this->_smarty->assign("title",'Sửa món ăn');
			$this->_smarty->assign("view",'views/listfood/v_editfood.tpl');
			$this->showTheme();
		}else{
			header("Location:page-404.html");
		}
	}

	public function delFood(){
		if (isset($_GET['id_food'])) {
			$id 		= $_GET['id_food'];
			$m_food = new M_food();
			$food 	= $m_food->getDetailFood($id);
			if (!$food) {
				header("Location:page-404.html");
				//exit();
			}
			$resultDelFood = $m_food->delFood(array($id));

			if ($resultDelFood) {
				header('Location:listfood.php');
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