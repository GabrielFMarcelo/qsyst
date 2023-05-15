<?php
require_once 'class/config.php';
class insert extends config{
  public $named;

  public function __construct($named){
    $this->named = $named;
  }

  public function insert(){
    $con = $this->con();
    $tn;
    $types;

    if (isset($_POST['btnW'])) {
      $tn = "W" . rand(0,999999);
      $types = "Withdraw";
    }elseif (isset($_POST['btnD'])) {
      $tn = "D" . rand(0,999999);
      $types = "Deposit";
    }

    $sql = "INSERT INTO `tbl_transaction` (`name`, `tn`, `type`) VALUES ('$this->named', '$tn', '$types')";
    $data = $con->prepare($sql);

    if($data->execute()){
      return true;
    }else{
      return false;
    }
  }
}
 ?>
