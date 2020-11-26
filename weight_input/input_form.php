<?php include "../view/header.php" ?>
<main>
  <span class = 'info'>
    <h1>Weight Input</h1>
    <p>Here you can input your weight</p>
  </span>
  <span class = 'center'>
    <span id = 'input_form'>
      <label>Weight</label>
      <input type="text" name="user_weight">
      <br>
      <label>Date</label>
      <input type="text" name="user_date" id = "date">
      <br>
      <input type="button"  value="Submit" id="weightbtn">
    </span>
  </span>
</main>
<?php include "../view/footer.php" ?>
