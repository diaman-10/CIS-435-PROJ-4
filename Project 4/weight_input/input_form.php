<?php include "../view/header.php" ?>
<main>
<h1>Weight Input</h1>
<p>Here you can input your weight</p>
  <form action="." method="post" id = 'input_form'>
    <input type="hidden" name="action" value="input_weight">
    <table>
      <tr>
        <td>Weight</td>
        <td><input type="text" name="weight" id="weight"></td>
      </tr>
      <tr>
        <td>Date</td>
        <td><input type="text" name="user_date" id = "date"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="button" name="weightbtn" value="Submit" id="weightbtn"></td>
      </tr>
    </table>
  </form>
</main>
<?php include "../view/footer.php" ?>
