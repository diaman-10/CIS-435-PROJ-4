<?php
require("../model/database.php");
require("../model/users_db.php");

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'login_form';
    }
}

if($action == 'login_form'){
  include("login_form.php");
}
elseif ($action == 'login') {
  $user_name = filter_input(INPUT_POST, 'user_name');
  $pw = filter_input(INPUT_POST, 'pw');
  $login = try_login($user_name, $pw);
  echo "hello";
  if($login == true){
    // get the users info
  }

}
?>
