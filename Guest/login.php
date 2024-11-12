<?php
include('../Assets/Connection/Connection.php');

session_start();
if (isset($_POST["btn_log"])) {
  $email = $_POST["txt_email"];
  $password = $_POST["txt_pass"];


  $selUser = "select * from tbl_user where user_email = '" . $email . "' and user_password = '" . $password . "'";
  $result1 = $conn->query($selUser);

  $seladmin = "select * from tbl_admin where admin_email = '" . $email . "' and admin_password ='" . $password . "'";
  $result2 = $conn->query($seladmin);

  if ($data = $result1->fetch_assoc()) {
    $_SESSION['uid'] = $data['user_id'];
    header("location:../User/HomePage.php");
  } elseif ($data = $result2->fetch_assoc()) {
    $_SESSION['aid'] = $data['admin_id'];
    header("location:../admin/HomePage.php");
  } else {
    ?>
    <script>
      alert('Invalid');
    </script>
    <?php
  }
}
?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
 .img-fluid {
  height: 600px; /* Set the height to 600px */
  width: auto; /* Automatically adjust the width to maintain aspect ratio */
  border-radius: 15px; /* Add rounded corners */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a subtle box shadow */
  margin: 10px; /* Add some margin to create spacing around the image */
  background-color: #f0f0f0; /* Set a background color */
  text-align: center; /* Center-align the content inside the container */
  transition: transform 0.3s ease-in-out; /* Add a smooth transformation effect */
}

.img-fluid:hover {
  transform: scale(1.1); /* Scale the image up a bit on hover */
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Increase the box shadow on hover */
}

  </style>
</head>

<body>
<section class="vh-50 p-5">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://images.unsplash.com/photo-1611833767698-7a8a336761db?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8b2NlYW4lMjBmaXNofGVufDB8fDB8fHww&w=1000&q=80"  class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="POST" action="">
          <!--<div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" name="txt_email" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" name="txt_pass" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <!--<a href="#!" class="text-body">Forgot password?</a>-->
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;"
              name="btn_log">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="User.php" class="link-danger">Register</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
 
</section>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>