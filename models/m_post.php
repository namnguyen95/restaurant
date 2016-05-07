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
  public function getContentPost($id_post){
    $sql = "SELECT *
            FROM post
            WHERE id_post = ?";
    $this->setQuery($sql);
    return $this->loadRow(array($id_post));
  }
  public function getHotPost(){ 
    $sql = "SELECT *
            FROM post
            ORDER BY n_views DESC
            LIMIT 0,5";
    $this->setQuery($sql);
    return $this->loadAllRows();
  }
}
 ?>