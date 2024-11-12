<?php
ob_start();
include('Head.php');


include('../Assets/Connection/Connection.php');
$selQry = "select * from tbl_user where user_id='" . $_SESSION['uid'] . "'";
$result = $conn->query($selQry);
$data = $result->fetch_assoc();
?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>My Profile</title>
  <style>
    /* Personal Information Section */
    .personal-info {
      background-color: #ffffff;
      border-radius: 10px;
      padding: 10px;
      margin-top: 20px;
    }

    .personal-info h5 {
      font-size: 1.5rem;
      margin-bottom: 10px;
      width: 300px;
    }

    .personal-info .col-3 {
      font-weight: bold;
    }
  </style>
</head>

<body>
  <section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-7 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-5 gradient-custom text-center text-white"
                style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOH2aZnIHWjMQj2lQUOWIL2f4Hljgab0ecZQ&usqp=C" alt="Avatar"
                  class="img-fluid my-5" style="width: 120px;" />
                <h5>
                  <?php echo $data['user_name']; ?>
                </h5>
                <p></p>
                <i class="far fa-edit mb-5"></i>
              </div>
              <div class="col-md-7">
                <div class="card-body p-4">
                  <h6></h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-3 personal-info">
                    <div class="col-12">
                      <h5 class="mb-3">Personal Information</h5>
                    </div>
                    
                    <div class="col-4">Address</div>
                    <div class="col-8">
                      <?php echo $data['user_address']; ?>
                    </div>
                    <div class="col-4">Email</div>
                    <div class="col-8">
                      <?php echo $data['user_email']; ?>
                    </div>
                    <div class="col-4">Contact</div>
                    <div class="col-8">
                      <?php echo $data['user_contact']; ?>
                    </div>
                  </div>

                  
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                    
                    </div>
                  </div>
                  <div class="d-flex justify-content-start">
                    <a href="#!"><i class="fab fa-facebook-f fa-2x me-3"></i></a>
                    <a href="#!"><i class="fab fa-twitter fa-2x me-3"></i></a>
                    <a href="#!"><i class="fab fa-instagram fa-2x"></i></a> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <P align="center"><a href="EditProfile.php">Edit Profile</a></P>
</body>
<?php
ob_end_flush();
include('Foot.php');
?>

</html>