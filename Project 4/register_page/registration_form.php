<?php include "../view/header.php" ?>
<main>
  <span class="heading_text">
    <h1>Register</h1>
    <p>Please input all of the necessary information to register for your account</p>
  </span>

  <form action="." method="post" id = 'register_form' class = "input_format">
    <input type="hidden" name="action" value="register_user">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="firstName" id='first_name'></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lastName" id='last_name'></td>
        </tr>
        <tr>
            <td>User Name</td>
            <td><input type="text" name="username" id='user_name'></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" id='password'></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="button" id="registerbtn" value="Register"></td>
        </tr>

    </table>
  </form>
</main>

<?php include "../view/footer.php" ?>
