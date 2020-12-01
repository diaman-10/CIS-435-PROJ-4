<?php include "../view/header.php" ?>
<main>
  <span class="heading_text">
    <h1>Weight Input</h1>
    <p>Here you can input your weight and height</p>
  </span>

  <form action="." method="post" id = 'weight_input' class = "input_format">
    <input type="hidden" name="action" value="input_weight">
    <table>
      <tr>
        <td>Weight</td>
        <td><input type="text" name="weight" id="weight"></td>
      </tr>
      <tr>
        <td>Feet</td>
        <td><input type="number" min="1" max="9" name="user_feet" id = "feet"></td>
      </tr>
      <tr>
        <td>Inches</td>
        <td><input type="number" min="0" max="12" name="user_inches" id = "inches"></td>
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
