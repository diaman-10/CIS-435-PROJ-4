<?php
function add_weight($weight, $date){
  global $db;

  $query = "INSERT INTO weight
                  (weight, inputDate)
                  VALUES
                  (:weight, :user_date)";

  $execStatement=$db->prepare($query);
  $execStatement->bindValue(':weight',$weight);
  $execStatement->bindValue(':user_date', $date);
  $execStatement->execute();
  $execStatement->closeCursor();

}
 ?>
