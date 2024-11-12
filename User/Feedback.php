<?php 
include('../Assets/Connection/Connection.php');
ob_start();
include("Head.php");
if(isset($_POST['submit']))
{
$feedback=$_POST["txt_feedback"];
	$inq = "INSERT INTO tbl_feedback(feedback_feedback) VALUES('".$feedback."')";
	if($conn->query($inq))
	{
		
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Feedback</td>
      <td><label for="txt_feedback"></label>
        <label for="txt_feedback"></label>
        <textarea name="txt_feedback" id="txt_feedback" cols="45" rows="5"></textarea></td>
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