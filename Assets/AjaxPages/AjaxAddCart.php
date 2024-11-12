
<?php 
session_start();
include("../connection/connection.php");
?>
<?php
    $id = $_GET["id"];
	//echo $id;
    $selQry = "select count(*) as count from tbl_booking where user_id='" .$_SESSION['uid']. "' and booking_status='0'";
   $rsC = $conn->query($selQry);
    $rscc=$rsC->fetch_assoc();
    if ($rscc["count"] > 0) {
       $sel = "select booking_id as id from tbl_booking where user_id='" .$_SESSION['uid']. "' and booking_status='0'";
        $rs = $conn->query($sel);
        if ($dat=$rs->fetch_assoc()) {
           $sqlQry = "select count(*) as count from tbl_cart where booking_id='" .$dat["id"] . "' and product_id='" .  $id . "'";
           $rsc = $conn->query($sqlQry);
            $rsct=$rsc->fetch_assoc();
            if ($rsct["count"] > 0) {
                echo "Already Added to Cart";
            } else {
               $insQry = "insert into tbl_cart(booking_id,product_id)values('" . $dat["id"] . "','" . $id . "')";
                if ($conn->query($insQry)) {
                   echo "Added to Cart";
                } else {
                      echo "Failed to Add Cart";
                }
            }
        }
    } else {
        $ins = "insert into tbl_booking(user_id)values('" .$_SESSION['uid']. "')";
        if ($conn->query($ins)) {
            $sel = "select Max(booking_id) as id from tbl_booking";
            $rs = $conn->query($sel);
            if ($rsse=$rs->fetch_assoc()) {
              $insQry = "insert into tbl_cart(booking_id,product_id)values('" . $rsse["id"] . "','" . $id . "')";
                if ($conn->query($insQry)) {
                    echo "Added to Cart";
                } else {
                    echo "Failed to Add Cart";
                }
            }
        }
    }


?>