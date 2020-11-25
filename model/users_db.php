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
 ?>
