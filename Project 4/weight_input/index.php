<?php
require("../model/database.php");
require("../model/weight_db.php");
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
  }
  else{
    //load the error page
    $error = "Please login to access this page";
    include("../errors/no_login.php");
  }
}
elseif ($action == 'input_weight') {
  $weight = filter_input(INPUT_POST, 'weight');
  $date = filter_input(INPUT_POST, 'user_date');
  $feet = filter_input(INPUT_POST, 'user_feet');
  $inches = filter_input(INPUT_POST, 'user_inches');
  echo "working";
  //get userid from session
  $user_id = $_SESSION['user_id'];
  add_weight($user_id, $weight, $feet, $inches, $date);
  header("Location: .?weight=$weight");
}
 ?>
