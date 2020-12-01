<?php include "../view/header.php" ?>
  <main>
    <span class = "heading_text">
      <h1>Body Mass Index</h1>
      <p>Here is your BMI from your last weight input</p>
    </span>
    <span id = 'center'>
    <img id = 'bmi_chart' src="../images/Bmi-chart.jpg" alt="BMI chart">
    <h2>Your BMI is:</h2>
    <?php if ($data == true): ?>
      <h3 id = 'bmi'><?php echo number_format($bmi_total, 2); ?></h3>
    <?php else: ?>
      <h3><?php echo $bmi_total ?></h3>
    <?php endif; ?>
    <?php if ($data == true): ?>
      <h2>Your BMI Category is: </h2>
      <h3><?php echo $category ?></h3>
    <?php endif; ?>
    </span>
  </main>
<?php include '../view/footer.php' ?>
