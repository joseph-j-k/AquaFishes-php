
<?php
include('SessionValidator.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AQUAFISHES</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../Assets/Template/User/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../Assets/Template/User/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../Assets/Template/User/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Assets/Template/User/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../Assets/Template/User/css/style.css" rel="stylesheet">
    <link href="../Assets/Template/Form.css" rel="stylesheet">
    <style>
        .btnLogout {
            display: inline-block;
            width: 90%;
            padding: 10px;
            background-color: #0074d9;
            /* Button background color */
            color: #fff;
            /* Text color */
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            border: 2px solid #0074d9;
            /* Button border color */
            border-radius: 5px;
            /* Rounded corners */
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
        }

        .btnLogout:hover {
            background-color: #0056b3;
            /* Button background color on hover */
            border-color: #0056b3;
            /* Button border color on hover */
            color: #fff;
            /* Text color on hover */
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a href="HomePage.php" class="navbar-brand">
                    <h2 class="text-white">AQUAFISHES</h2>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="HomePage.php" class="nav-item nav-link active">Home</a>
                        <a href="MyCart.php" class="nav-item nav-link">Cart</a>
                        <a href="MyBooking.php" class="nav-item nav-link">Orders</a>

                        <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg></a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="Myprofile.php" class="dropdown-item">MY Profile</a>
                                <a href="Editprofile.php" class="dropdown-item">Edit Profile</a>
                                <a href="Changepassword.php" class="dropdown-item">Change Password</a>
                                <a href="Complaint.php" class="dropdown-item"> Complaint</a>
                                <hr>
                                <div style="display: flex;justify-content: center;align-items: center;">
                                <a href="../Logout.php" class="btnLogout">logOut</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="SearchProduct.php" class="btn btn-dark py-2 px-4 d-none d-lg-inline-block">Shop Now</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary hero-header mb-3" style="padding-top: 0rem;">
        
    </div>
    <div style="min-height: 500px;">
    <!-- Hero End -->
