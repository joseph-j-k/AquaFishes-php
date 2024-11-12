<?php
ob_start();
include('Head.php');
include('../Assets/Connection/Connection.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>&nbsp;</p>
    <table border="5" >
      <tr>
        <td>Sl. No</td>
        <td>ID</td>
        <td>Name</td>
        <td>Address</td>
        <td>Contact</td>
        <td>Email</td>
        <td>Password</td>
        <td>Date Of Join</td>
        <td>Delivery Address</td>
      </tr>
      <?php
      $i = 0;
      $selQry = "select * from tbl_user";
      $row = $conn->query($selQry);
      while ($data = $row->fetch_assoc()) {
        $i++;
        ?>
        <tr>
          <td "><?php echo $i ?></td>
          <td><?php echo $data["user_id"] ?></td>
          <td><?php echo $data["user_name"] ?></td>
          <td><?php echo $data["user_address"] ?></td>
          <td><?php echo $data["user_contact"] ?></td>
          <td><?php echo $data["user_email"] ?></td>
          <td><?php echo $data["user_password"] ?></td>
          <td><?php echo $data["user_doj"] ?></td>
          <td><?php echo $data["user_delivery_address"] ?></td>

          </td>
        </tr>
        <?php
      }
      ?>
    </table>
    <p>&nbsp;</p>
  </form>
</html>
</body>
<?php
ob_end_flush();
include('Foot.php');
?>
</html>