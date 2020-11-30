<?php
  require("../model/database.php");
  require("../model/weight_db.php");
  require("../util/main.php");

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'display_chart';
    }
}

if ($action == 'display_chart') {
  //check for login
  if(isset($_SESSION['valid_login'])){
    //check for weight data
    //get the userID from the session
    $user_id = $_SESSION['user_id'];

    //check if there is input weight for that user
    $is_data = is_there_data($user_id);

    if($is_data == true){
      //get the data and then load the chart
      $userweights = get_weight($user_id);
      include("display_chart.php");
    }
    else{
      //dispaly an error
      $error = "There is no weight input please input weight to use the chart";
      include("../errors/error.php");
    }

  }
  else{
    $error = "Please login to access this page";
    include("../errors/no_login.php");
  }
}
 ?>
