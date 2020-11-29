<?php
require("../model/database.php");
require("../model/users_db.php");
require_once("../util/main.php");

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'registration_form';
    }
}

if($action == 'registration_form'){
  include('registration_form.php');
}
elseif ($action == 'register_user') {
  $user_name = filter_input(INPUT_POST, 'username');
  $pw = filter_input(INPUT_POST, 'password');
  $first_name = filter_input(INPUT_POST, 'firstName');
  $last_name = filter_input(INPUT_POST, 'lastName');

  add_user($user_name, $pw, $first_name, $last_name);
  include('registration_complete.php');
}
 ?>
