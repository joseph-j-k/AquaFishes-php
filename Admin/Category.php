<?php 
include('../Assets/Connection/Connection.php');
ob_start();
include("Head.php");
if(isset($_POST['submit']))

{
	$category = $_POST['category'];
	$idg = $_POST['g_id'];
	$selQry = "select * from tbl_category where category_name ='$category'";
	$res3 = $conn->query($selQry);
  
	if ($row5 = $res3->fetch_assoc()) {
	  
	  ?>
	  <script>
		alert('Already Exist');
		window.location = "Category.php";
  
	  </script>
	  <?php
	} else {	{
		$insquery="INSERT INTO tbl_category(category_name) VALUES ('".$category."')";
		if($conn->query($insquery))
		{
		
		?>	<script>
            alert("Successfully Inserted");
            window.location="category.php";
            </script>
			<?php
		}
	}
	if($idg!="")
	{
		$upQury = "UPDATE tbl_category set category_name='".$category."' where category_id='".$idg."'";
		if($conn->query($upQury))
		{
			?>
			<script>
            alert("Updated!!");
            window.location="category.php";
            </script>
            <?php	
		}	
	}
	

	}
		
}
if(isset($_GET["if"]))
{
	$delete = "delete from tbl_category where category_id='".$_GET["if"]."'";
	if($conn->query($delete))
	{
		?>
        <script>
		alert("Deleted");
		window.location = "category.php";
		</script>
        <?php
	}
}
$gname="";
$gid="";
if(isset($_GET["edid"]))
{
	$selg = "select * from tbl_category where category_id='".$_GET["edid"]."'";
	$rowg = $conn->query($selg);
	$datag = $rowg->fetch_assoc();
	$gid = $datag["category_id"];
	$gname = $datag["category_name"];
	
}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>categorys</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="251" border="1">
    <tr>
      <td width="67">category</td>
      <td width="168"><label for="category"></label>
      <input type="text" name="category" id="category" value="<?php echo $gname ?>" required="required"  autocomplete="off" "/>
      <input type="hidden" name="g_id" value="<?php echo $gid ?>"  ></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit"  /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="364" border="1">
    <tr>
      <td width="62">Sl. No</td>
      <td width="195">category</td>
      <td width="85">Action</td>
    </tr>
    <?php
	$i = 0;
    $SelQuery = "select * from tbl_category";
	$row = $conn->query($SelQuery);
	while($data=$row->fetch_assoc())
	{
		$i++;
	?>
    <tr>
      <td height="67"><?php echo $i ?></td>
      <td><?php echo $data["category_name"] ?></td>
      <td><p><a href="category.php?if=<?php echo $data["category_id"] ?>">Delete</a></p>
      <p><a href="category.php?edid=<?php echo $data["category_id"] ?>">Edit</a></p></td>
    </tr>
    <?php
	}
	?>
  </table>
</form>
</body>
<?php
include("Foot.php");
ob_flush();
?>
</html>