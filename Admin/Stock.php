<?php 
include('../Assets/Connection/Connection.php');
ob_start();
include("Head.php");

if(isset($_POST["btn_submit"]))
{
	$quantity=$_POST["txt_qty"];
	$pid=$_GET['pid'];
	
$insQry="INSERT INTO tbl_stock(stock_quantity,stock_date,product_id) values('".$quantity."',curdate(),'".$pid."')";

	if($conn->query($insQry))
		{
			?>
            <script>	
			alert("Stock Added");
			</script>
            <?php
            }
 }           
			
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>STOCK</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td width="104">Qunatity</td>
      <td width="80"><label for="txt_qty"></label>
      <input type="text" name="txt_qty" id="txt_qty" required="required"  autocomplete="off" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      </div></td>
    </tr>
  </table>
</form>
</body>
<?php
include("Foot.php");
ob_flush();
?>
</html>