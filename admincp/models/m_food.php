<?php 
require_once('database.php');
class M_food extends database
{
	//get full table food
	public function getAllFood($position=-1,$nItemOnPage=-1){  
		$sql = "SELECT *,(SELECT name_type
											FROM type_food t,food f
											WHERE t.id_type = f.id_type
											And f.id_food = food.id_food) AS ten_loai
						FROM food";
		if ($position>-1 and $nItemOnPage>0) {
			$sql .=" LIMIT $position, $nItemOnPage";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getAllTypeFood(){
		$sql = "SELECT * 
						FROM type_food";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function insertFood($data = array()) {
		if (!empty($data)) {
			return $this->insert('food',$data);
		}
		return false;
  }

  public function editFood($data,$id){
  	if (!empty($data)) {
  		$where = "id_food = $id";
	  	return $this->update('food',$data,$where);
	  }
	  return false;
  }

  public function getAllCook(){
		$sql = "SELECT fullname,birthdate,id 
						FROM user 
						WHERE role='cook'";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getDetailFood($idFood){
		$sql = "SELECT *
            FROM food
            WHERE id_food=?";
    $this->setQuery($sql);
    return $this->loadRow(array($idFood));
	}
	// truyền array id để xóa nhiều nữa 
	public function delFood($id_foods=array()){
		if (!empty($id_foods)) {
			$count = count($id_foods);
      $sql   = "DELETE FROM food WHERE id_food IN (".substr(str_repeat('?,', $count),0,-1).")";
			$this->setQuery($sql);
			return $this->execute($id_foods);
		}
		return false;
	}
}
?>