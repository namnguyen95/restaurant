<?php 
class Upload{
  private $_fileName; 
  private $_fileSize;
  private $_fileExtension;
  private $_tmpFile; //dường dãn thư mục tạm
  public  $_error;
  private $_uploadDir;

  public function __construct($fileName){
    $fileInfo = $_FILES[$fileName];
    $this->_fileName    = $fileInfo['name'];
    $this->_fileSize    = $fileInfo['size'];
    $this->_fileExtension   = $this->getFileExtension();
    $this->_tmpFile     = $fileInfo['tmp_name'];
  }
  public function getFileExtension(){
    $ext  = pathinfo($this->_fileName,PATHINFO_EXTENSION);
    return $ext;
  }
  public function setFileExtension($arrExtension){
    if (in_array(strtolower($this->_fileExtension), $arrExtension)==false) {
      $this->_error[] = 'kieu file khong phu hop';
    }
  }
  public function setFileSize($min,$max){
    if ($this->_fileSize < $min || $this->_fileSize > $max) {
      $this->_error[] = 'kich co file khong phu hop';
    }
  }
  public function setUploadDir($value){
    if (file_exists($value)) {
      $this->_uploadDir = $value;
    }else{
      $this->_error[] = 'thu muc khong hop le';
    }
  }
  public function isVail(){//kiễm tra điều kiện
    $flag = true;
    if (count($this->_error)>0) {
      $flag = false;
    }
    return $flag;
  }
  public function upload(){
    $nameF = explode('.',$this->_fileName);
    $finalName = $this->_uploadDir.$nameF[0].time().'.'.$this->_fileExtension;
    @move_uploaded_file($this->_tmpFile,$finalName);
    return $nameF[0].time().'.'.$this->_fileExtension;
  }
}
?>