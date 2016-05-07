<?php 
require_once('database.php');
class M_user extends database
{
	public function getAllUser($position=-1,$nItemOnPage=-1){ // ở admin 
		$sql = "SELECT *
						FROM user";
		if ($position>-1 and $nItemOnPage>0) {
			$sql .=" LIMIT $position, $nItemOnPage";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getAllRole(){
		$sql = "SELECT role
						FROM role_resource";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function insertUser($data = array()) {
		if (!empty($data)) {
			return $this->insert('user',$data);
		}
		return false;
  }
  public function editUser($data,$id){
  	if (!empty($data)) {
  		$where = "id = $id";
	  	return $this->update('user',$data,$where);
	  }
	  return false;
  }
  public function getUserLogin($user,$pass){
		$sql = "SELECT * FROM user WHERE username=? AND password=?";
		$this->setQuery($sql);
		return $this->loadRow(array($user,md5($pass)));	
	}	
	public function getDetailUser($id_user){
		$sql = "SELECT * FROM user WHERE id=?";
		$this->setQuery($sql);
		return $this->loadRow(array($id_user));	
	}	
}
?>