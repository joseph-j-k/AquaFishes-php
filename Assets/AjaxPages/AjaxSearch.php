<?php include('../Connection/Connection.php');
if($_GET['sid']==0)
{
?>

<table width="200" border="1">
   
    <tr>
     <?php
	 $selQuery = "SELECT * FROM tbl_product p inner join tbl_subcategory s on p.subcategory_id=s.subcategory_id  where category_id = ".$_GET['cid'];
	$row=$conn->query($selQuery);
	
	$i = 0;
	 
	while($data=$row->fetch_assoc())
	
	{
		$i++;
	?>
   
      <td>
    <p><img src="../Assets/Files/Product/<?php echo $data["product_photo"]?>" height="100" width="100" /></p>
    <p> Name: <?php echo $data["product_name"]?></p>
    <p> Description: <?php echo $data["product_description"]?></p></td>
     
  
    <?php
	if($i==4)
	{
		echo"</tr>";
		$i=0;
		echo"<tr>";
	}
	}
	?>
      </tr>
  </table>
  <?php
}
else
{
  ?>
  
<table width="200" border="1">
   
    <tr>
     <?php
	 	 $selQuery = "SELECT * FROM tbl_product p inner join tbl_subcategory s on p.subcategory_id=s.subcategory_id  where s.category_id = ".$_GET['cid']." and   p.subcategory_id=".$_GET['sid'];
	$row=$conn->query($selQuery);
	$i = 0;
	 
	while($data=$row->fetch_assoc())
	
	{
		$i++;
	?>
   
      <td>
    <p><img src="../Assets/Files/Product/<?php echo $data["product_photo"]?>" height="100" width="100" /></p>
    <p> Name: <?php echo $data["product_name"]?></p>
    <p> Description: <?php echo $data["product_description"]?></p></td>
     
  
    <?php
	if($i==4)
	{
		echo"</tr>";
		$i=0;
		echo"<tr>";
	}
	}
	?>
      </tr>
  </table>
  <?php
}
  ?>