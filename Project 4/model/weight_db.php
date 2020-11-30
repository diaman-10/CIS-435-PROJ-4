<?php
function add_weight($user_id, $weight, $feet, $inches, $date){
  global $db;

  $query = "INSERT INTO weight
                  (userID, weight, feet, inches, inputDate)
                  VALUES
                  (:user_id, :weight, :user_feet, :user_inches, :user_date)";

  $execStatement=$db->prepare($query);
  $execStatement->bindValue(':user_id', $user_id);
  $execStatement->bindValue(':weight',$weight);
  $execStatement->bindValue(':user_feet', $feet);
  $execStatement->bindValue(':user_inches', $inches);
  $execStatement->bindValue(':user_date', $date);
  $execStatement->execute();
  $execStatement->closeCursor();

}
function is_there_data($user_id){
  global $db;

  $query = "SELECT * FROM weight WHERE userID=:user_id";

  $execStatement = $db->prepare($query);
  $execStatement->bindValue(':user_id', $user_id);
  $execStatement->execute();
  $rowCount = $execStatement->fetchAll();
  $execStatement->closeCursor();

  if($rowCount == 0){
    return false;
  }
  else{
    return true;
  }
}
function get_weight($user_id){
  global $db;

  $query = "SELECT * FROM weight WHERE userID=:user_id";

  $execStatement = $db->prepare($query);
  $execStatement->bindValue(':user_id', $user_id);
  $execStatement->execute();
  $weights = $execStatement->fetchAll();
  $execStatement->closeCursor();

  return $weights;
}
function get_last_weight($user_id){
  global $db;
  $recent_date = most_recent_date($user_id);

  $query = "SELECT * FROM weight WHERE userID=:user_id AND
                                       inputDate = :recent_date";

  $execStatement = $db->prepare($query);
  $execStatement->bindValue(':user_id', $user_id);
  $execStatement->bindValue(':recent_date', $recent_date[0]);
  $execStatement->execute();
  $last_input = $execStatement->fetch();
  $execStatement->closeCursor();

  return $last_input;
}
function most_recent_date($user_id){
  global $db;

  $query = "SELECT MAX(inputDate) FROM weight WHERE userID=:user_id";

  $execStatement = $db->prepare($query);
  $execStatement->bindValue(':user_id', $user_id);
  $execStatement->execute();
  $last_date = $execStatement->fetch();
  $execStatement->closeCursor();

  return $last_date;
}
 ?>
