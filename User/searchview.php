<?php
include("../Assets/Connection/Connection.php");
ob_start();
include("Head.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AQUAFISHES</title>
</head>

<body>
<table  align="center" border="1">
     <tr>
   
   <?php
  $i=0;
  
 $selQuery = "SELECT * FROM tbl_product p inner join tbl_subcategory s on p.subcategory_id=s.subcategory_id ";
	$row=$conn->query($selQuery);
  
if($result1->num_rows>0)
{
  
    while($data1=$result1->fetch_assoc())
    {
      $i++;
    
  ?>
  
 
      <td>
          <p><img src="../Assets/Files/Product/<?php echo $data["product_photo"]?>" height="100" width="100" /></p>
    <p> Name: <?php echo $data["product_name"]?></p>
    <p> Description: <?php echo $data["product_description"]?></p>
     <p><a href="viewproduct.php?pid=<?php echo $data1['product_id']?>">View More</a></p></td>
      <tr>
      <td>
       <h4>Product Details</h4>
      <p>Category:<?php echo $data1["category_name"]?></p>
      <p>Subcategory:<?php echo $data1["subcategory_name"]?></p>
      <br>
      <h4>Fish Details</h4>
      <p>Fish Name:<?php echo $data1["fish_name"]?></p>
      <p>Price:<?php echo $data1["product_price"]?><br>
      </p>
            <tr><td><h3 align="center"><a href="booking.php?pid=<?php echo $data1['product_id']?>">BUY</a></h3></td>
      </tr>
      
      
      
      
   
  <?php
  
    }
    }
  ?>
   </tr>
</table>
</body>
<?php
include("Foot.php");
ob_flush();
?>
</html>