<?php 
require_once('database.php');
class M_post extends database
{
  public function getAllPost($position=-1,$nItemOnPage=-1){ 
    $sql = "SELECT *
            FROM post";
    if ($position>-1 and $nItemOnPage>0) {
      $sql .=" LIMIT $position, $nItemOnPage";
    }
    $this->setQuery($sql);
    return $this->loadAllRows();
  }
  public function insertPost($data = array()) {
    if (!empty($data)) {
      return $this->insert('post',$data);
    }
    return false;
  }
  public function showEditor(){
    $sql = "SELECT fullname,birthdate,id
            FROM user
            WHERE role='editor'";
    $this->setQuery($sql);
    return $this->loadAllRows();
  }
  public function getDetailpost($id){
    $sql = "SELECT *
            FROM post
            WHERE id_post = ?";
    $this->setQuery($sql);
    return $this->loadRow(array($id));
  }
  // truyền array id để xóa nhiều hơn 1
   public function delPost($id_posts=array()){
    if (!empty($id_posts)) {
      $count = count($id_posts);
      $sql   = "DELETE FROM post WHERE id_post IN (".substr(str_repeat('?,', $count),0,-1).")";
      $this->setQuery($sql);
      return $this->execute($id_posts);
    }
    return false;
  }
}
?>