<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Weight Tracker</title>
    <link rel="stylesheet" href="/Project 4/styles/normalize.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/Trontastic/jquery-ui.css">
    <link rel="stylesheet" href="/Project 4/styles/main.css">
    <script src = "https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src = "https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src = "/Project 4/scripts/jquery.js"></script>
  </head>
  <body>
    <header>
      <h1>Weight Tracker</h1>
      <?php global $app_path; ?>
      <ul id ="navBar">
        <li><a id = "home" href=<?php echo $app_path; ?>>Home</a></li>
        <li><a  id = "chart" href="">Chart</a></li>
        <li><a id = 'bmi' href="">BMI</a></li>
        <li><a id = 'inputWeight' href=<?php echo $app_path. 'weight_input'; ?>>Input Weight</a></li>
        <li id = 'loginlnk'style="float: right"><a href=<?php echo $app_path. 'login_page'; ?>>Login</a></li>
        <li id = 'registerlnk' style="float: right"><a href=<?php echo $app_path. 'register_page'; ?>>Register</a></li>
      </ul>
    </header>
