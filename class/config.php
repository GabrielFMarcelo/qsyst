<?php
  class config{
    //Declare DB Details
    private $user = 'root';
    private $password = '';
    public $pdo = null;

    public function con(){
    try{
      $this->pdo = new PDO('mysql:local=109.106.254.194;dbname=bsit3567_group3_qsyst',$this->user,$this->password);     //DATABASE LOG IN
    }catch (PDOException $e){
      die($e->getMessage());
    }
  return $this->pdo;
  }
}

//
//   class config{
//     //Declare DB Details
//     private $user = 'bsit3567_hvalerio';
//     private $password = 'rnS.HTyDGwOa';
//     public $pdo = null;
//
//     public function con(){
//     try{
//       $this->pdo = new PDO('mysql:local=109.106.254.194:3306;dbname=bsit3567_hvalerio_todo',$this->user,$this->password);     //DATABASE LOG IN
//     }catch (PDOException $e){
//       die($e->getMessage());
//     }
//   return $this->pdo;
//   }
// }
//
//
 ?>
