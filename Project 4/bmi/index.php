<?php
require("../model/database.php");
require("../model/weight_db.php");
require_once("../util/main.php");

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'bmi_form';
    }
}

if($action == 'bmi_form'){
  if(isset($_SESSION['valid_login'])){
    $user_id = $_SESSION['user_id'];

    $data = is_there_data($user_id);
    if($data == true){
      $last_input = get_last_weight($user_id);

      //calculate bmi
      $weight = $last_input['weight'];
      //height in inches
      $user_height = (($last_input['feet'])*12) + $last_input['inches'];

      //perform calcuation
      $bmi_total = ($weight / (pow($user_height, 2))) * 703;

      //get the bmi category
      if($bmi_total > 40.1){
        $category = 'Severly Obese';
      }
      elseif($bmi_total > 30.1 && $bmi_total < 40){
        $category = "Obese";
      }
      elseif($bmi_total > 25.1 && $bmi_total < 30){
        $category = "Overweight";
      }
      elseif($bmi_total > 18.5 && $bmi_total < 25){
        $category = "Optimal";
      }
      elseif ($bmi_total > 17.5 && $bmi_total < 18.4) {
        $category = "Underweight";
      }
      elseif ($bmi_total < 17.5) {
        $category = "Severly Underweight";
      }
  }
  else{
    $bmi_total = "You need to input weight to get a BMI value";
  }

    include("display_bmi.php");
  }
  else{
    include('../errors/no_login.php');
  }

}
 ?>
