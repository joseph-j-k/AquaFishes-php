<?php
session_start();
include("../Assets/Connection/Connection.php");
ob_start();
include("Head.php");
?>

<!DOCTYPE html>
<html>

<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <style>
    /* CSS for the page body */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    /* CSS for the chart container */
    #tab {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      text-align: center;
      padding: 20px;
      margin: 20px auto;
      width: 100%;
      /* Adjust the maximum width for the chart container */
    }

    /* CSS for the chart canvas */
    #myChart {
      width: 100%;
      max-width: 800px;
      /* Adjust the maximum width for the chart canvas */
      height: 600px;
      /* Adjust the height for the chart canvas */
      margin: 20px auto;
    }

    /* CSS for the chart title */
    #chartTitle {
      font-size: 24px;
      /* Increase the font size for the chart title */
      font-weight: bold;
      margin: 20px 0;
    }

    /* CSS for chart legend */
    .chart-legend {
      list-style: none;
      padding: 0;
      display: flex;
      justify-content: center;
    }

    .chart-legend-item {
      display: flex;
      align-items: center;
      margin-right: 10px;
    }

    .chart-legend-color {
      width: 20px;
      height: 20px;
      margin-right: 5px;
      border-radius: 50%;
    }
  </style>
</head>

<body>
  <div id="tab" align="center">
    <h2 id="chartTitle">All Product Sales</h2>
    <canvas id="myChart"></canvas>

    <script>
      var xValues = [
        <?php
        $sel = "select * from tbl_subcategory";
        $row = $conn->query($sel);
        while ($data = $row->fetch_assoc()) {
          echo "'" . $data["subcategory_name"] . "',";
        }
        ?>
      ];

      var yValues = [
        <?php
        $sel = "select * from tbl_subcategory";
        $row = $conn->query($sel);
        while ($data = $row->fetch_assoc()) {
          $sel1 = "select sum(cart_quantity) as id from tbl_cart ca inner join  tbl_booking b  on b.booking_id=ca.booking_id inner join tbl_user u on u.user_id=b.user_id inner join  tbl_product p on ca.product_id=p.product_id inner join tbl_subcategory y on p.subcategory_id=y.subcategory_id inner join tbl_category c on y.category_id= c.category_id WHERE y.subcategory_id='" . $data["subcategory_id"] . "'";
          $row1 = $conn->query($sel1);
          while ($data1 = $row1->fetch_assoc()) {
            echo $data1["id"] . ",";
          }
        }
        ?>
      ];

      // Calculate the total sum of values
      var totalSum = yValues.reduce(function (a, b) { return a + b; }, 0);

      // Calculate percentages
      var percentages = yValues.map(function (value) {
        return ((value / totalSum) * 100).toFixed(2) + '%';
      });

      // Generate dynamic colors based on the length of xValues
      function generateColorPalette(numColors) {
        const colors = [];
        const colorStep = 360 / numColors;
        for (let i = 0; i < numColors; i++) {
          const hue = Math.round(i * colorStep);
          const color = `hsl(${hue}, 70%, 50%)`;
          colors.push(color);
        }
        return colors;
      }

      var dynamicColors = generateColorPalette(xValues.length);

      console.log('xValues:', xValues);
      console.log('yValues:', yValues);
      console.log('percentages:', percentages);

      new Chart("myChart", {
        type: "pie",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: dynamicColors,
            data: yValues
          }]
        },
        options: {
          legend: {
            display: true,
            position: 'top'
          },
          tooltips: {
            callbacks: {
              label: function (tooltipItem, data) {
                var label = data.labels[tooltipItem.index] || '';
                var value = data.datasets[0].data[tooltipItem.index];
                var percentage = percentages[tooltipItem.index];
                return `${label}: ${value} (${percentage})`;
              }
            }
          }
        }
      });
    </script>

    <?php
    include("Foot.php");
    ob_flush();
    ?>
  </div>
</body>

</html>
