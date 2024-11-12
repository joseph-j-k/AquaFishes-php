<?php include('../Assets/Connection/Connection.php');
ob_start();
include("Head.php");
if (isset($_POST['submit'])) {
  $place = $_POST['txt_place'];
  $distid = $_POST['txt_dist'];
  $inq = "INSERT INTO tbl_place(place_name,district_id) VALUES('" . $place . "','" . $distid . "')";
  if ($conn->query($inq)) {
    ?>
    <script>
      alert("Inserted Successfully!!");
      window.location = "place.php";
    </script>
  <?php
  }
}

if (isset($_GET["delt"])) {
  $delQry = "DELETE FROM tbl_place WHERE place_id = '" . $_GET["delt"] . "'";
  if ($conn->query($delQry)) {
    ?>
    <script>
      alert("Deleted!!");
      window.location = "place.php";
    </script>
  <?php
  }
}
?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Place</title>
</head>

<body>
  <form id="form1" name="form1" method="post" action="">
    <table width="313" border="1">
      <tr>
        <td width="118">District</td>
        <td width="180"><label for="txt_dist"></label>
          <select name="txt_dist" id="txt_dist">
          <option value="">----Select------</option>

            <?php
            $show = "SELECT *from tbl_district";
            $row = $conn->query($show);
            while ($data = $row->fetch_assoc()) {
              ?>
              <option value="<?php echo $data["district_id"] ?>">
                <?php echo $data["district_name"] ?>
              </option>
              <?php
            }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Place Name</td>
        <td><label for="txt_place"></label>
          <input type="text" name="txt_place" id="txt_place" required="required" autocomplete="off" />
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center"> <input type="submit" name="submit" id="submit" value="Submit" />
      <input type="reset" name="cancel" id="cancel" value="Cancel" />
</td>
      </tr>
         </table>
  </form>
  <br><br>
    <table  border="1">
      <tr>
        <td >Sl No.</td>
        <td >District</td>
        <td >Place name</td>
        <td >Action</td>
      </tr>
      <?php
      $i = 0;
      $selQuery = "SELECT * FROM tbl_place p INNER JOIN tbl_district d ON p.district_id = d.district_id";
      $row = $conn->query($selQuery);
      while ($data = $row->fetch_assoc()) {
        $i++;
        ?>
        <tr>
          <td height="40">
            <?php echo $i ?>
          </td>
          <td>
            <?php echo $data["district_name"] ?>
          </td>
          <td>
            <?php echo $data["place_name"] ?>
          </td>
          <td><a href="place.php?delt=<?php echo $data["place_id"] ?>">Delete</a></td>
        </tr>
        <?php
      }
      ?>
    </table>
</body>
<?php
include("Foot.php");
ob_flush();
?>

</html>