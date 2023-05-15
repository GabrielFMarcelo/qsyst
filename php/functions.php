<?php
require_once 'class/config.php';

  function insertN(){
    if (!empty($_POST['names'])) {
      $insert = new insert($_POST['names']);

      if($insert->insert()){
        echo '<div class=" col-md-9 alert alert-success alert-dismissible fadeshow"            role="alert">
              <strong>Holy guacamole!</strong> You have Inserted a Task Successfully.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              </div>';
      }else{
        echo '<div class=" col-md-9 alert alert-danger alert-dismissible fadeshow"            role="alert">
              <strong>Holy guacamole!</strong> Insert Task Error!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              </div>';
      }
    }
  }
 ?>
