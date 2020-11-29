<?php
require("../model/database.php");
require("../model/users_db.php");
require_once("../util/main.php");

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

  if($login == true){
    //get the user
    $user = get_user($user_name, $pw);
    //store the login and user information in the session
    $_SESSION['valid_login'] = true;
    //store userID, first name, last name
    $_SESSION['user_id'] = $user['userID'];
    $_SESSION['first_name'] = $user['firstName'];
    $_SESSION['last_name'] = $user['lastName'];

    include("welcome_user_page.php");
  }
  else {
    ?>
    <html>
    <script>
      alert("Your Username or Password is incorrect");
    </script></html>
    <?php
    
  }


}
?>
