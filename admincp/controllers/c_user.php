<?php 
/**
* 
*/
session_start();
class C_user
{
	var $_smarty = NULL;

	public function __construct(){
		require ('smarty_restaurant.php');
		require ('models/m_user.php');
		require ('pagination.class.php'); 
		$this->_smarty = new smarty_restaurant();

	}
	public function showUser(){
		//model
		$m_user 		= new M_user();
		$users 			= $m_user->getAllUser(); // để đếm số lượng item

		//phân trang
		$currentPage	= (isset($_GET['page'])) ? $_GET['page'] : 1;
		$pagination 	= new pagination(count($users),$currentPage,3,3);
		$paginationHTML = $pagination->showPagination();
		$position		= ($currentPage-1)*$pagination->_nItemOnPage;
		$users 			= $m_user->getAllUser($position,$pagination->_nItemOnPage);// lấy limit
		//views
		$this->_smarty->assign("users",$users);
		$this->_smarty->assign('now','<li class="active">Danh sách User</li>');
		$this->_smarty->assign("title",'Cập nhật danh sách user');
		$this->_smarty->assign("view",'views/listuser/v_listuser.tpl');
		$this->_smarty->assign("paginationHTML",$paginationHTML);
		$this->showTheme();
	}

	public function loadDetail(){
		//model
		if (isset($_GET['id_user'])) {
			$m_user 	= new M_user();
			$user 		= $m_user->getDetailUser($_GET['id_user']);
			$roles		= $m_user->getAllRole();
			if (!$user) {
				header("Location:page-404.html");
			}
			if (isset($_POST['edituser'])) {
				require 'validate.class.php';
				$source 		= $_POST;
				$validate 	= new Validate($source);
				$validate->addRule('fullname','string',10,100)
									->addRule('email','email')
									->addRule('user','string',5,30);
				//run validate
				$validate->run();
				$errValidate		= $validate->showErrors();
				//$rstValidate = $validate->getResult(); không cần giữ lại kết quả vì có check ở client
				if ($errValidate=='') {
				//id, username, password, fullname, birthdate, gender, address, email, identitycard, mobiphone, role
					$fullname 	= $_POST['fullname'];
					$birthdate 	= $_POST['ngaysinh'];
					$gender 		= $_POST['gender'];
					$address 		= $_POST['address'];
					$email 			= $_POST['email'];
					$idcard 		= $_POST['idcard'];
					$mobiphone 	= $_POST['phone'];
					$role 			= $_POST['role'];

					$data = array('fullname' 	=> $fullname,
												'birthdate' => $birthdate,
												'gender'		=> $gender,
												'address'		=> $address,
												'email'			=> $email,
												'identitycard'=>$idcard,
												'mobiphone'	=> $mobiphone,
												'role'			=> $role
												);

					$resultEditUser = $m_user->editUser($data,$user->id);
					if ($resultEditUser>0) {
						echo "<script>alert('Sửa Thành Công')</script>";
						header('Location:listuser.php');
					}
				}else{
					$this->_smarty->assign("errValidate",$errValidate);
				}
			}
			$this->_smarty->assign("title",'Sửa thông tin cá nhân');
			$this->_smarty->assign("user",$user);
			$this->_smarty->assign("roles",$roles);
			$this->_smarty->assign("view",'views/listuser/v_edituser.tpl');
			$this->showTheme();

		}else{
			header("Location:page-404.html");
		}
		
		//view
		
	}

	public function addUser(){
		//model
		$m_user		= new M_user();
		$roles		= $m_user->getAllRole();

		if (isset($_POST['adduser'])) {
			require 'validate.class.php';
			$source 		= $_POST;
			$validate 	= new Validate($source);
			$validate->addRule('fullname','string',10,100)
								->addRule('email','email')
								->addRule('user','string',6,30)
								->addRule('pass','string',6,30);

			//run validate
			$validate->run();
			$errValidate		= $validate->showErrors();
			//$rstValidate = $validate->getResult(); không cần giữ lại kết quả vì có check ở client
			if ($errValidate=='') {
			//id, username, password, fullname, birthdate, gender, address, email, identitycard, mobiphone, role
				$username 	= $_POST['user'];
				$password 	= md5($_POST['pass']);
				$fullname 	= $_POST['fullname'];
				$birthdate 	= $_POST['ngaysinh'];
				$gender 		= $_POST['gender'];
				$address 		= $_POST['address'];
				$email 			= $_POST['email'];
				$identitycard = $_POST['idcard'];
				$mobiphone 	= $_POST['phone'];
				$role 			= $_POST['role'];

				$data = array(NULL,$username,$password,$fullname,
											$birthdate,$gender,$address,
											$email,$identitycard,$mobiphone,$role);

				$resultAddUser = $m_user->insertUser($data);
				if ($resultAddUser>0) {
					echo "<script>alert('Insert Thành Công')</script>";
					header('Location:listuser.php');
				}
			}else{
				$this->_smarty->assign("errValidate",$errValidate);
			}
		}

		//views
		$this->_smarty->assign("roles",$roles);
		$this->_smarty->assign('now','<li class="active">Thêm thành viên</li>');
		$this->_smarty->assign("title",'Thêm thành viên');

		$this->_smarty->assign("view",'views/listuser/v_adduser.tpl');
		$this->showTheme();
	}

	public function saveLogin($user,$pass){
		$m_user = new M_user();
		$user 	= $m_user->getUserLogin($user,$pass);
		if($user){
			$_SESSION['username'] = $user->username;
			$_SESSION['id_user'] 	= $user->id;
			$_SESSION['role']			= $user->role;
			$_SESSION['fullname']	= $user->fullname;
			$_SESSION['gender']		= $user->gender;
		}
	}

	public function processLogin(){
		if(isset($_POST["login"])){
			$user = $_POST["username"];
			$pass = $_POST["password"];
			$this->saveLogin($user,$pass);
		}
		if(isset($_SESSION['username']) and isset($_SESSION['role'])){
			//$this->_smarty->assign("title",'Thống kê');
	    //$this->showTheme();
	    header("location:dashboard.php");	
		}else{
			$_SESSION['error'] = "Thông tin đăng nhập không hợp lệ";
			//print_r($_SESSION);
			header("location:login.php");	
		}
	}
	public function logout(){
		session_destroy();
		header("location:login.php");	
	}
	private function showTheme(){
    $this->_smarty->display("master_layout.tpl");
  }
}
 ?>