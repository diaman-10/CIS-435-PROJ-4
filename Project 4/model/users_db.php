<?php
function try_login($user_name, $pw){
  global $db;

  $query = "SELECT * FROM users WHERE username=:user_name AND
                                      password=:pw";

  $execStatement = $db->prepare($query);
  $execStatement->bindValue(':user_name', $user_name);
  $execStatement->bindValue(':pw', $pw);
  $execStatement->execute();
  $rowCount = $execStatement->rowCount();
  $execStatement->closeCursor();

  if ($rowCount == 0){
    return false;
  }
  else{
    return true;
  }
}
function get_user($user_name, $pw){
  global $db;

  $query = "SELECT * FROM users WHERE username=:user_name AND
                                      password=:pw";

  $execStatement = $db->prepare($query);
  $execStatement->bindValue(':user_name', $user_name);
  $execStatement->bindValue(':pw', $pw);
  $execStatement->execute();
  $user = $execStatement->fetch();
  $execStatement->closeCursor();

  return $user;
}
function add_user($user_name, $pw, $first_name, $last_name){
  global $db;

  $query = "INSERT INTO users
                  (username, password, firstName, lastName)
                  VALUES
                  (:user_name, :pw, :first_name, :last_name)";

  $execStatement = $db->prepare($query);
  $execStatement->bindValue(':user_name', $user_name);
  $execStatement->bindValue(':pw', $pw);
  $execStatement->bindValue(':first_name', $first_name);
  $execStatement->bindValue(':last_name', $last_name);
  $execStatement->execute();
  $execStatement->closeCursor();
}


 ?>
