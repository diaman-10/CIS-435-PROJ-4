
<?php include "../view/header.php" ?>
<main>
  <!--script files for the chart-->
  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    window.addEventListener('load', function(){
      google.charts.load('current', {'packages' :['line']});

      google.charts.setOnLoadCallback(drawChart);

      function drawChart(){
        //get the data table
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Date');
        data.addColumn('number', 'Weight');
        //get rows for chart

        <?php foreach ($userweights as $row ):?>
        //format date to string
        <?php $year = substr($row['inputDate'], 0, 4);
              $month = substr($row['inputDate'], 5, 2);
              $day = substr($row['inputDate'], 8, 2);?>

        <?php echo 'data.addRow([new Date('. $year . ', ' . $month . '-1, ' . $day.')' . ', ' . $row['weight'] .']);'; ?>
        <?php endforeach; ?>

        //set the chart options
        var options = {
          chart: {
            title: 'Weight Over Time',
            subtitle: '(lbs)'
          },
          width: 900,
          height: 500
        };

        var chart = new google.charts.Line(document.getElementById('chartcontainer'));
        chart.draw(data, google.charts.Line.convertOptions(options));
      }
    });
    </script>
  <h1>Chart</h1>
  <span id = 'chartcontainer'></span>
</main>
<?php include "../view/footer.php" ?>
