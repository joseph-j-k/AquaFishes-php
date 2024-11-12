<?php
include('../Assets/Connection/Connection.php');
ob_start();
include("Head.php");
$selQry="select * from tbl_user where user_id='".$_SESSION['uid']."'";
$result=$conn->query($selQry);
$data=$result->fetch_assoc();


if(isset($_POST["btn_submit"]))
{
	
		$Name=$_POST['txt_name'];
	    $Email= $_POST['txt_email'];
	    $Address= $_POST['txt_address'];
	    $Contact= $_POST['txt_contact'];
		$upQry = "update tbl_user set user_name='".$Name."',user_email='".$Email."',user_address='".$Address."',user_contact='".$Contact."' 
		where user_id='".$_SESSION['uid']."'";
		//echo $upQry;
		//$conn->query($upQry);
		if($conn->query($upQry))
		{
//$results=$conn->query($upQry);
//$data=$results->fetch_assoc();
	?>
    <script>
	alert("Updated");
	window.location="EditProfile.php";
	</script>
    <?php
		}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../Assets/Template/Form.css" rel="stylesheet">

</head>

<body>
  
  <div id="tab"  >
<form id="form2" name="form2" method="post" action="">
<table  border="1" align="center" >
  <tr>
    <td >Name</td>
    <td >
      <label for="txt_name"></label>
      <input type="text" name="txt_name" id="txt_name" required="required"  autocomplete="off" value="<?php echo $data['user_name'] ?>  " />
    </form></td>
  </tr>
  <tr>
    <td>Email</td>
    <td>
      <label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" required="required"  autocomplete="off" value="<?php echo $data['user_email'] ?>  "/>
    </td>
  </tr>
  <tr>
    <td>Address</td>
    <td>
      <label for="txt_address"></label>
    <input type="text" name="txt_address" id="txt_address"  required="required"  autocomplete="off" value= " <?php echo $data['user_address'] ?>  "/>
    </td>
  </tr>
  <tr>
    <td>Contact</td>
    <td>
      <label for="txt_contact"></label>
      <input type="text" name="txt_contact" id="txt_contact" required="required"  autocomplete="off" value= " <?php echo $data['user_contact'] ?>  "/>
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Update"   />
        <input type="reset" name="btn_reset" id="btn_reset" value="Cancel"  />
      </div>
    </td>
  </tr>
</table>
</form>
  </div>
</body>
<?php
include("Foot.php");
ob_flush();
?>
</html>