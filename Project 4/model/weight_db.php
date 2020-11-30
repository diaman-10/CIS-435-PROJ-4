<?php
function add_weight($user_id, $weight, $date){
  global $db;

  $query = "INSERT INTO weight
                  (userID, weight, inputDate)
                  VALUES
                  (:user_id, :weight, :user_date)";

  $execStatement=$db->prepare($query);
  $execStatement->bindValue(':user_id', $user_id);
  $execStatement->bindValue(':weight',$weight);
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
 ?>
