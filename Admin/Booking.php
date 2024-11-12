<?php include('../Assets/Connection/Connection.php');
ob_start();
include("Head.php");

if(isset($_GET["bid"]))
{
	
$del="update tbl_booking set booking_status = 2 where booking_id='".$_GET["bid"]."'";	
$conn->query($del);
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BOOKING</title>
</head>

<body>
<div class="container">
        <form id="form1" name="form1" method="post" action="">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sl.No</th>
                        <!--<th>Product Name</th>
                        <th>Product Photo</th>
                        <th>User Name</th>
                        <th>Product Quantity</th>-->
                        <th>Booking Date</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    $selQuery = "SELECT * FROM tbl_booking";
                    $row = $conn->query($selQuery);
                    while ($data = $row->fetch_assoc()) {
                        $i++;
                    ?>
                        <tr>
                            <td><?php echo $i ?></td>
                           
                            
                           
                            <td><?php echo $data["booking_date"] ?></td>
                            <td><?php echo $data["booking_amount"] ?></td>
                            <td>
                            <?php
                            if($data['booking_status']==1)
                            {
                              ?>
                               <a class="btn btn-primary" href="Booking.php?bid=<?php echo $data["booking_id"] ?>">Delivered</a>
                              <?php
                            }
                            else{
                             echo "Order Completed";
                            }
                            ?>
                           <a class="btn btn-primary" href="Viewmore.php?bid=<?php echo $data["booking_id"] ?>">View</a>

                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </form>
    </div>

</body>
<?php
include("Foot.php");
ob_flush();
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>