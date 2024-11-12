<?php include('../Assets/Connection/Connection.php');
ob_start();
include("Head.php");
if(isset($_POST['btn_submit']))

{
		
	$currentpass = $_POST['txt_pass'];
	$newpass = $_POST['txt_newpass'];
	$repass = $_POST['txt_repass'];
	$upPass= "select * from tbl_user where user_password ='".$currentpass."' and user_id='".$_SESSION["uid"]."'" ; 
	$result=$conn->query($upPass);
	if($data=$result->fetch_assoc()) 
	{
		if($newpass==$repass)
		{
			$upQry="update tbl_user set user_password='".$newpass."' where user_id='".$_SESSION["uid"]."'";
			if($conn->query($upQry))
			
			{
			?>
			<script>
			alert("updated successfully");
			</script>	
            <?php
			}
			
		}
		else
		{
			?>
			<script>
            alert("password doesnt match");	
			</script>
            <?php		
		}
	}
	else
	{
		?>
	<script>
	alert("wrong password");
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
	<div id="tab">
<form id="form1" name="form1" method="post" action="">
    <div align="center">
      <table  border="1">
        <tr>
          <td >Current Password</td>
          <td ><label for="txt_pass"></label>
          <input type="password" name="txt_pass" id="txt_pass" required="required"  autocomplete="off"  /></td>
        </tr>
        <tr>
          <td>New Password</td>
          <td><label for="txt_newpass"></label>
            <input type="password" name="txt_newpass" id="txt_newpass"  required="required"  autocomplete="off" /></td>
        </tr>
        <tr>
          <td>Repassword</td>
          <td><label for="txt_repass"></label>
          <input type="password" name="txt_repass" id="txt_repass" required="required"  autocomplete="off" /></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
            <input type="submit" name="btn_submit" id="btn_submit" value="Submit"   />
          </div></td>
        </tr>
      </table>
    </div>
</form>
	</div>
</body>
<?php
include("Foot.php");
ob_flush();
?>
</html>