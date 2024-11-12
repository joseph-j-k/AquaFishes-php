<?php 

include('../Assets/Connection/Connection.php');
ob_start();
include("Head.php");
if(isset($_POST["btn_submit"]))
{
	$photo = $_FILES['file_photo']['name'];
	$path = $_FILES['file_photo']['tmp_name'];
	move_uploaded_file($path,"../Assets/Files/Product/".$photo);
	
	
$name=$_POST["txt_name"];
$price=$_POST["txt_price"];
$description=$_POST["txt_description"];
$subcategory=$_POST["sel_subCat"];
$selQry = "select * from tbl_product where product_name ='$name'";
  $res3 = $conn->query($selQry);

  if ($row5 = $res3->fetch_assoc()) {
    
    ?>
    <script>
      alert('Already Existed');
      window.location = "Product.php";

    </script>
    <?php
  } else {
    $insQry="INSERT INTO tbl_product(product_name,product_price,product_description,product_photo,subcategory_id)VALUES ('".$name."','".$price."','".$description."','".$photo."','".$subcategory."')";
		if($conn->query($insQry))
		{
      ?>
      <script>
      alert('Successfully Inserted');
      window.location = "Product.php";

    </script>
    <?php
		}

  }


}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product</title>
<style>
.main-div {
  
  color: black;
  width: 700px;
  border: 1px solid #ccc;
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add box shadow */
}
  </style>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <div class="container main-div" >
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="txt_name">Name</label>
          <input type="text" name="txt_name" id="txt_name" class="form-control" required="required" autocomplete="off">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="txt_price">Price</label>
          <input type="text" name="txt_price" id="txt_price" class="form-control" required="required" autocomplete="off">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="file_photo">Photo</label>
          <input type="file" name="file_photo" id="file_photo" class="form-control-file" required="required" autocomplete="off">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="sel_category">Category</label>
          <select name="sel_category" id="sel_category" class="form-control" onchange="getSubCategory(this.value)">
            <option>----Select-----</option>
            <?php
            $show = "SELECT * FROM tbl_category";
            $row = $conn->query($show);
            while ($data = $row->fetch_assoc()) {
            ?>
              <option value="<?php echo $data["category_id"] ?>"><?php echo $data["category_name"] ?></option>
            <?php
            }
            ?>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="sel_subCat">SubCategory</label>
          <select name="sel_subCat" id="sel_subCat" class="form-control">
            <option>----Select-----</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="txt_description">Description</label>
          <textarea name="txt_description" id="txt_description" class="form-control" rows="5" required="required"></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" class="btn btn-primary">
        <input type="submit" name="btn_reset" id="btn_reset" value="Cancel" class="btn btn-secondary">
      </div>
    </div>
  </div>
</form>


<div class="container">
  <div class="row">
    <?php
    $selQuery = "SELECT * FROM tbl_product p INNER JOIN tbl_subcategory s ON p.subcategory_id = s.subcategory_id INNER JOIN tbl_category c ON s.category_id = c.category_id";
    $row = $conn->query($selQuery);
    while ($data = $row->fetch_assoc()) {
    ?>
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="../Assets/Files/Product/<?php echo $data["product_photo"] ?>" class="card-img-top" alt="<?php echo $data["product_name"] ?>" height="200">
          <div class="card-body">
            <h5 class="card-title"><?php echo $data["product_name"] ?></h5>
            <p class="card-text">Price: <?php echo $data["product_price"] ?></p>
            <p class="card-text">Category: <?php echo $data["category_name"] ?></p>
            <p class="card-text">Subcategory: <?php echo $data["subcategory_name"] ?></p>
            <p class="card-text"><?php echo $data["product_description"] ?></p>
            <a href="Stock.php?pid=<?php echo $data["product_id"] ?>" class="btn btn-primary">Stock</a>
            <a href="View.php?pid=<?php echo $data["product_id"] ?>" class="btn btn-primary">View <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg></a>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>

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
</script>
<?php
include("Foot.php");
ob_flush();
?>
</html>