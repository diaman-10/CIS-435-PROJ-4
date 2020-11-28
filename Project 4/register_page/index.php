<?php
require("../model/database.php");
require("../model/users_db.php");
require_once("../util/main.php");

$action = filter_input(INPUT_POST, 'action');
}
?>

<!DOCTYPE html>

<html>
<h1>Register</h1>
<form action="register.inc.php" method= "POST">
<table>
    <tr>
        <td>First Name</td>
        <td><input type="text" name="firstName" required></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><input type="text" name="lastName" required></td>
    </tr>
    <tr>
        <td>User Name</td>
        <td><input type="text" name="username" required></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="text" name="password" required></td>
    </tr>
    <tr>
        <td></td>
        <td><button type="submit" name="submit">Register</button></td>
    </tr>
    
</table>
</form>

<a href="/tech_support/product_manager/add_products.php">Add Product</a>


</html>
<?php include '../view/footer.php'; ?>