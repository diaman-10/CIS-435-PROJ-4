<?php include "../view/header.php" ?>
<main>
  <span class = "heading_text">
    <h1>Welcome <?php echo $user['firstName'].' '.$user['lastName'] ?></h1>
    <p>You have successfully logged in and can now use the features of
        this application</p>
  </span>
</main>
<?php include "../view/footer.php" ?>
