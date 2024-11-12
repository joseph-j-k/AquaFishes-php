<?php
ob_start();
include('Head.php');
include('../Assets/Connection/Connection.php');
if (isset($_POST['submit'])) {
  $District = $_POST['District'];
  $id = $_POST['txt_id'];
  $selQry = "select * from tbl_district where district_name ='$District'";
  $res3 = $conn->query($selQry);

  if ($row5= $res3->fetch_assoc()) {
   
    ?>
    <script>
      alert('Already Exist');
      window.location = "District.php";

    </script>
    <?php
} else {
  $insquery = "INSERT INTO tbl_district(district_name) VALUES ('" . $District . "')";
  if ($conn->query($insquery)) {
    ?>
    <script>
    alert('Successfully Inserted');
    window.location = "District.php";

  </script>
  <?php
  }
  
    if ($id != "") {
      $upQry = "update tbl_district set district_name='" . $District . "' where district_id='" . $id . "'";
      if ($conn->query($upQry)) {
        ?>
        <script>
          alert("Updated Successfully!!");
          window.location = "District.php";
        </script>
        <?php
      }
    
    }
  }


}

if (isset($_GET["did"])) {

  $del = "delete from tbl_district where district_id='" . $_GET["did"] . "'";
  $conn->query($del);
  ?>
        <script>
          alert("Deleted Successfully!!");
          window.location = "District.php";
        </script>
        <?php

}
$did = "";
$dname = "";
if (isset($_GET["eid"])) {
  $selst = "select * from tbl_district where district_id='" . $_GET["eid"] . "'";
  $rowst = $conn->query($selst);
  $datast = $rowst->fetch_assoc();
  $did = $datast["district_id"];
  $dname = $datast["district_name"];
}

?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>District</title>
</head>

<body>
  <form id="form1" name="form1" method="post" action="">
    <table border="1">
      <tr>
        <td>District</td>
        <td><label for="District"></label>
          <input type="text" name="District" id="District" value="<?php echo $dname ?> " required="required"
            autocomplete="off" />
          <input type="hidden" name="txt_id" value="<?php echo $did ?>" />
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit" /></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table border="1">
      <tr>
        <td>Sl. No</td>
        <td>District</td>
        <td>Action</td>
      </tr>
      <?php
      $i = 0;
      $selQry = "select * from tbl_district";
      $row = $conn->query($selQry);
      while ($data = $row->fetch_assoc()) {
        $i++;
        ?>
        <tr>
          <td "><?php echo $i ?></td>
          <td><?php echo $data["district_name"] ?></td>
          <td><p><a href=" District.php?did=<?php echo $data["district_id"] ?>">Delete</a></p>
            <p><a href="District.php?eid=<?php echo $data["district_id"] ?>">Edit</a></p>
          </td>
        </tr>
        <?php
      }
      ?>
    </table>
    <p>&nbsp;</p>
  </form>
</body>
<?php
ob_end_flush();
include('Foot.php');
?>

</html>