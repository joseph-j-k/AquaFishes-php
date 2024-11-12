<?php
ob_start();
include("Head.php");

session_start();
include("../Assets/Connection/Connection.php");

?>
<!DOCTYPE html>
<html>

<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    #tab {
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      padding: 20px;
      margin: 20px;
      text-align: center;
    }

    #myChart {
      width: 100%;
      max-width: 600px;
    }
  </style>
</head>

<body>
  <div id="tab" align="center">
    <canvas id="myChart"></canvas>
    <script>
      var xValues = [
        <?php
        $sel = "select * from tbl_category c inner join  tbl_subcategory s on c.category_id = s.category_id where c.category_id = 7";
        $row = $conn->query($sel);
        while ($data = $row->fetch_assoc()) {
          echo "'" . $data["subcategory_name"] . "',";
        }
        ?>
      ];

      var yValues = [
        <?php
        $sel = "select * from tbl_category c inner join  tbl_subcategory s on c.category_id = s.category_id where c.category_id = 7";
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

      var barColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797",
        "#e8c3b9",
        "#1e7145"
      ];

      new Chart("myChart", {
        type: "line",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        },
        options: {
          title: {
            display: true,
            text: "All Product Sales"
          }
        }
      });
    </script>
  </div>
</body>

</html>