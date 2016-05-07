<?php 
require_once('database.php');
class M_food extends database
{
  public function getAllFoodToday($position=-1,$nItemOnPage=-1){
    $sql = "SELECT *
            FROM food
            WHERE today=1
            LIMIT 0,3";
    /*if ($position>-1 && $nItemOnPage>0) {
      $sql .=" LIMIT $position, $nItemOnPage";
    }*/
    $this->setQuery($sql);
    return $this->loadAllRows();
  }
  public function getFoodSameType($id_type,$id_food=NULL,$position=-1,$nItemOnPage=-1){
    $option = '';
    if ($id_food>0) {
      $option = " and id_food != $id_food ";
    }
    $sql = "SELECT *
            FROM food
            WHERE id_type=$id_type.$option";
    /*if ($position>-1 && $nItemOnPage>0) {
      $sql .=" LIMIT $position, $nItemOnPage";
    }*/

    $this->setQuery($sql);
    return $this->loadAllRows();
  }
  public function getFoodbyType($id_type,$position=-1,$nItemOnPage=-1){
    $sql = "SELECT *
            FROM food
            WHERE id_type=$id_type
            LIMIT 0,3";
    /*if ($position>-1 && $nItemOnPage>0) {
      $sql .=" LIMIT $position, $nItemOnPage";
    }*/

    $this->setQuery($sql);
    return $this->loadAllRows();
  }
  public function getDetailFood($idFood){ // ở admin 
    $sql = "SELECT *
            FROM food
            WHERE id_food=?";
    $this->setQuery($sql);
    return $this->loadRow(array($idFood));
  }
  public function getNewFood(){
    $sql = "SELECT *
            FROM food
            ORDER BY time_add DESC
            LIMIT 0,3";
    /*if ($position>-1 && $nItemOnPage>0) {
      $sql .=" LIMIT $position, $nItemOnPage";
    }*/

    $this->setQuery($sql);
    return $this->loadAllRows();
  }
}
?>