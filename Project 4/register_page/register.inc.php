<?php
    require('../model/database.php');
    require("../model/users_db.php");
    require_once("../util/main.php");

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password, firstName, lastName) VALUES ('$username', '$password', '$firstName', '$lastName')";
    mysqli_query($db, $sql);

    header("Location: index.php?add=succes");
?>