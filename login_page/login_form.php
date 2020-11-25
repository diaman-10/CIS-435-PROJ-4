<?php include "../view/header.php" ?>
<main>
  <span class = 'center'>
    <span id = "input_form">
      <form action="." method="post" id="login_form">
        <input type="hidden" name="action" value="login">
        <label>Username</label>
        <input type="text" name="user_name" value="" id = "userName">
        <br>
        <label>Password</label>
        <input type="password" name="pw" value="" id="passWord">
        <br>
        <input type="button" value="Login" id="loginbtn">
      </span>
    </form>
    <br>
    <span id = "theSpan"></span>
  </span>
</main>
<?php include "../view/footer.php" ?>
