<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require '../Assets/phpMail/src/Exception.php';
require '../Assets/phpMail/src/PHPMailer.php';
require '../Assets/phpMail/src/SMTP.php';
include('../Assets/Connection/Connection.php');
if (isset($_POST["btn_submit"])) {
  $name = $_POST["txt_name"];
  $address = $_POST["txt_address"];
  $place = $_POST["sel_place"];
  $contact = $_POST["txt_contact"];
  $email = $_POST["txt_email"];
  $password = $_POST["txt_password"];
  $cnfpass = $_POST["txt_cnfpass"];
  $selQry = "select * from tbl_user where user_email ='$email'";

  $res5 =$conn->query($selQry);
  if ($data6= $res5->fetch_assoc()) {
    ?>
    <script>
      alert('Account Already Exist');
    </script>
    <?php

  } else {


    if ($password == $cnfpass) {
      $insQry = "INSERT INTO tbl_user(user_name,user_address,place_id,user_contact,user_email,user_password,user_doj) VALUES ('" . $name . "','" . $address . "','" . $place . "',' " . $contact . "','" . $email . "','" . $password . "',curdate())";
      $conn->query($insQry);

      $mail = new PHPMailer(true);

      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'fishesaqua1@gmail.com'; // Your gmail
      $mail->Password = 'enfbzdqfhdrsudrs'; // Your gmail app password
      $mail->SMTPSecure = 'ssl';
      $mail->Port = 465;

      $mail->setFrom('fishesaqua1@gmail.com'); // Your gmail

      $mail->addAddress($email);

      $mail->isHTML(true);

      $mail->Subject = "Your Account Creation is Completed";
      $mail->Body = "Hello" . " " . $name . " " . "Your Account Creation is Completed ` ";
      if ($mail->send()) {

      header('location:Login.php');
      } else {

      }

    } else {

      echo "Enter same password";
    }
  }

}

?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>User</title>
  <style>
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
      font-size: 1rem;
      line-height: 2.15;
      padding-left: .75em;
      padding-right: .75em;
    }

    .card-registration .select-arrow {
      top: 13px;
    }

    .select2 {
      height: calc(1.5em + 1rem + 2px);
      padding: 0.5rem 1rem;
      font-size: 1.25rem;
      line-height: 1.5;
      border-radius: 0.3rem;

      display: block;
      width: 100%;
      font-weight: 400;
      color: #495057;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
      transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;

    }
  </style>
</head>

<body>

  <section class="h-100 bg-dark">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img
                  src="https://images.unsplash.com/photo-1611833767698-7a8a336761db?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8b2NlYW4lMjBmaXNofGVufDB8fDB8fHww&w=1000&q=80"
                  alt="Sample photo" class="img-fluid"
                  style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
              </div>
              <div class="col-xl-6">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 text-uppercase">USER REGISTRATION <align-items-center></h3>
                  <form method="post">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" required="required" autocomplete="off" id="form3Example1m" name="txt_name"
                            class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1m">Name</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" required="required" autocomplete="off" id="form3Example1n"
                            name="txt_contact" class="form-control form-control-lg" pattern=".{10,10}"
                            title="Must ten digits" />
                          <label class="form-label" for="form3Example1n">Contact</label>
                        </div>
                      </div>
                    </div>



                    <div class="form-outline mb-4">
                      <input type="text" required="required" autocomplete="off" id="form3Example8" name="txt_address"
                        class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example8">Address</label>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4">

                        <select class="select2" name="sel_district" id="sel_district" onchange="getPlace(this.value)">
                          <option value="">Select district</option>
                          <?php
                          $selQry = "SELECT * FROM tbl_district";
                          $result = $conn->query($selQry);
                          if ($result->num_rows > 0) {
                            while ($data = $result->fetch_assoc()) {
                              echo '<option value="' . $data["district_id"] . '">' . $data["district_name"] . '</option>';
                            }
                          }
                          ?>
                        </select>

                      </div>
                      <div class="col-md-6 mb-4">

                        <select class="select2" name="sel_place" id="sel_place">
                          <option value="">Select place</option>

                        </select>

                      </div>
                    </div>



                    <div class="form-outline mb-4">
                      <input type="email" required="required" autocomplete="off" id="form3Example8" name="txt_email"
                        class="form-control form-control-lg" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" />
                      <label class="form-label" for="form3Example8">Email</label>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="password" required="required" autocomplete="off" id="form3Example1m1"
                            name="txt_password" class="form-control form-control-lg"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" />
                          <label class="form-label" for="form3Example1m1">Password</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" required="required" autocomplete="off" id="form3Example1n1"
                            name="txt_cnfpass" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1n1">Re Password</label>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-end pt-3 p-3">
                      <div class="form-outline p-3">
                        <button type="reset" class="btn btn-light btn-lg ms-2">Reset all</button>
                      </div>
                      <div class="form-outline p-3">
                        <button type="submit" class="btn btn-warning btn-lg ms-2" name="btn_submit">Submit form</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="Login.php" class="link-danger">Login</a></p>
                      </div>
                    </div>
                    
                  </form>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="../Assets/JQ/jQuery.js"></script>
  <script>
    function getPlace(did) {

      $.ajax({
        url: "../Assets/AjaxPages/AjaxPlace.php?did=" + did,
        success: function (html) {
          $("#sel_place").html(html);
        }
      });
    }
  </script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>