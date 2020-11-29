<?php
require("../model/database.php");
require_once("../util/main.php");

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'weight_input';
    }
}

if ($action == 'weight_input') {
  //check if there was a login
  if(isset($_SESSION['valid_login'])){
    //load the page
    include("input_form.php");
    if($action=='input_weight'){
      $weight = filter_input(INPUT_POST, 'weight');
      $date = filter_input(INPUT_POST, 'user_date');

      add_weight($weight, $date);
      echo "done?";
    }
  }
  else{
    //load the error page
    echo "no work";
    $error = "Please login to access this page";
    include("../errors/no_login.php");
  }
}
 ?>
