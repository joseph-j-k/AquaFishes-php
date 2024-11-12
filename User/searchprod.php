<?php include('../Assets/Connection/Connection.php');
ob_start();
include("Head.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Product</title>
</head>

<body>
<table>

</table>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td><label for="sel_category"></label>
        <select name="sel_category" id="sel_category" onchange="getSubCategory(this.value),Search(this.value,0)">
        <option>----Select----</option>
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
      </select></td>
      <td><label for="sel_subcategory"></label>
         <select name="sel_subCat" id="sel_subCat" onchange="Search(document.getElementById('sel_category').value,this.value)">
        <option>----Select-----</option>
      </select></td>
    </tr>
  </table>
  <div id="mydiv">
  <table width="200" border="1">
   
    <tr>
     <?php
	 $selQuery = "SELECT * FROM tbl_product p inner join tbl_subcategory s on p.subcategory_id=s.subcategory_id ";
	$row=$conn->query($selQuery);
	$i = 0;
	 
	while($data=$row->fetch_assoc())
	
	{
		$i++;
	?>
   
      <td>
    <p><img src="../Assets/Files/Product/<?php echo $data["product_photo"]?>" height="100" width="100" /></p>
    <p> Name: <?php echo $data["product_name"]?></p>
    <p> Description: <?php echo $data["product_description"]?></p>
     <p><a href="searchview.php?pid=<?php echo $data1['product_id']?>">View More</a></p></td>
     
  
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
  
   </div>
</form>
</body>
<script src="../Assets/JQ/jQuery.js"></script>
<script>
function getSubCategory(did)
{

	$.ajax({
	  url:"../Assets/AjaxPages/AjaxSubCategory.php?did="+did,
	  success: function(html){
		$("#sel_subCat").html(html);
	  }
	});
}

function Search(cid,sid)
{

	$.ajax({
	  url:"../Assets/AjaxPages/AjaxSearch.php?cid="+cid+"&sid="+sid,
	  success: function(html){
		$("#mydiv").html(html);
	  }
	});
}
</script>
<?php
include("Foot.php");
ob_flush();
?>
</html>