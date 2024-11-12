<?php include('../Assets/Connection/Connection.php');
ob_start();
include("Head.php");
if(isset($_POST['submit']))
{
	$subcategory = $_POST['txt_subcategory'];
	$category = $_POST['txt_category'];
  $selQry = "select * from tbl_subcategory where subcategory_name ='$Subcategory'";
  $res3 = $conn->query($selQry);

  if ($row5= $res3->fetch_assoc()) {
    echo  "hi";
    ?>
    <script>
      alert('Already Exist');
      window.location = "Subcategory.php";

    </script>
    <?php
     } else {
     
	$inq = "INSERT INTO tbl_subcategory(subcategory_name,category_id) VALUES('".$subcategory."','".$category."')";
	if($conn->query($inq))
		{
			?>
			<script>
            alert("Inserted!!");
            window.location = "subcategory.php";
            </script>
            <?php	
		}
}
}

if(isset($_GET["delt"]))
	{
		$delQry = "DELETE FROM tbl_subcategory WHERE subcategory_id = '".$_GET["delt"]."'";
		if($conn->query($delQry))
			{
				?>
			<script>
            alert("Deleted!!");
            window.location = "subcategory.php";
            </script>
            <?php	
			}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>subcategory</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="313" border="1">
    <tr>
      <td width="118">Category</td>
      <td width="180"><label for="txt_dist"></label>
        <select name="txt_dist" id="txt_dist">
      <?php 
	  			$show = "SELECT *from tbl_category";
	  			$row = $conn->query($show);
				while($data=$row->fetch_assoc())
				{
		?>
        <option value="<?php echo $data["category_id"] ?>"><?php echo $data["category_name"]?></option>
		<?php
				}
		?>
        </select>
      </td>
    </tr>
    <tr>
      <td>SubCategory </td>
      <td><label for="txt_subcategory"></label>
      <input type="text" name="txt_subcategory" id="txt_subcategory" required="required"  autocomplete="off" b/></td>
    </tr>
  </table>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit" />
    <input type="reset" name="cancel" id="cancel" value="Cancel" />
  </p>
  <table width="374" border="1">
    <tr>
	  <td width="55">Sl No.</td>	    
      <td width="80">Category</td>
      <td width="111">SubCategory </td>
      <td width="100">Action</td>
    </tr>
    <?php
	$i = 0;
	$selQuery = "SELECT * FROM tbl_subcategory p INNER JOIN tbl_category d ON p.category_id = d.category_id";
	$row=$conn->query($selQuery);
	while($data=$row->fetch_assoc())
	{
		$i++;
	?>
    <tr>
      <td height="40"><?php echo $i ?></td>
      <td><?php echo $data["category_name"]?></td>
      <td><?php echo $data["subcategory_name"]?></td>
      <td><a href="subcategory.php?delt=<?php echo $data["subcategory_id"] ?>">Delete</a></td>
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