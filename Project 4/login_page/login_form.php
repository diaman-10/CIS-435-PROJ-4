<?php include "../view/header.php" ?>
<main>
  <span class = "heading_text">
    <h1>Login</h1>
    <p>Please login to use the other pages</p>
  </span>
  <form action="." method="post" id="login_form" class = "input_format">
    <td><input type="hidden" name="action" value="login">
    <table>
      <tr>
        <td>Username</td>
        <td><input type="text" name="user_name" value="" id = "userName"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="pw" value="" id="passWord"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="button" value="Login" id="loginbtn"></td>
      </tr>
    </table>
  </form>
</main>
<?php include "../view/footer.php" ?>
