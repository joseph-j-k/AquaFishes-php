<?php
include('SessionValidator.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AQUAFISHES - Single Product Website Template</title>
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
                                <a href="../Logout.php" class=" btnLogout">logOut</a>

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
    <div class="container-fluid bg-primary hero-header mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h3 class="fw-light text-white animated slideInRight">Aquatic</h3>
                    <h1 class="display-4 text-white animated slideInRight">AQUAFISHES<span
                            class="fw-light text-dark">&
                        </span>ACCESSORIES</h1>
                    <p class="text-white mb-4 animated slideInRight">AQUAFISHES is your premier destination for all things aquatic. Dive into a world of wonder as we provide you with the finest selection of aquarium fishes, mesmerizing aquariums, and expert insights into the art of underwater life.
                       
                        </p>
                    <a href="SearchProduct.php" class="btn btn-dark py-2 px-4 me-3 animated slideInRight">Shop Now</a>
                    <!--<a href="" class="btn btn-outline-dark py-2 px-4 animated slideInRight">Contact Us</a>-->
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid animated pulse infinite" src="../Assets/Template/User/img/fish.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Feature Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <i class="fa fa-leaf fa-3x text-dark mb-4"></i>
                            <h5 class="text-white mb-0">Different species</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <i class="fa fa-tint-slash fa-3x text-dark mb-4"></i>
                            <h5 class="text-white mb-0">Different colour</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <i class="fa fa-times fa-3x text-dark mb-4"></i>
                            <h5 class="text-white mb-0">Good Quality</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid animated pulse infinite" src="../Assets/Template/User/img/pngwing.com (1).png">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="text-primary mb-4">DIFFERENT SPECIES FISHES<span class="fw-light text-dark">
                            </span></h1>
                    <p class="mb-4">AQUAFISHES is your premier destination for all things aquatic. Dive into a world of wonder as we provide you with the finest selection of aquarium fishes, mesmerizing aquariums, and expert insights into the art of underwater life.</p>
                    <a class="btn btn-primary py-2 px-4" href="SearchProduct.php">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Deal Start -->
    <!--<div class="container-fluid deal bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid animated pulse infinite" src="../Assets/Template/User/img/shampoo-2.png">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white text-center p-4">
                        <div class="border p-4">
                            <p class="mb-2">Natural & Organic Shampoo</p>
                            <h2 class="fw-bold text-uppercase mb-4">Deals of the Day</h2>
                            <h1 class="display-4 text-primary mb-4">$99.99</h1>
                            <h5>Fresh Organic Shampoo</h5>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Etiam feugiat rutrum lectus sed auctor.</p>
                            <div class="row g-0 cdt mb-4">
                                <div class="col-3">
                                    <h1 class="display-6" id="cdt-days"></h1>
                                </div>
                                <div class="col-3">
                                    <h1 class="display-6" id="cdt-hours"></h1>
                                </div>
                                <div class="col-3">
                                    <h1 class="display-6" id="cdt-minutes"></h1>
                                </div>
                                <div class="col-3">
                                    <h1 class="display-6" id="cdt-seconds"></h1>
                                </div>
                            </div>
                            <a class="btn btn-primary py-2 px-4" href="">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal End -->


    <!-- Feature Start -->
    <!--<div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary mb-3"><span class="fw-light text-dark"></span> GOOD QUALITY FISHES
                    </h1>
                <p class="mb-5"></p>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="row g-5">
                        <div class="col-12 d-flex">
                            <div class="btn-square rounded-circle border flex-shrink-0"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h5>GOOD QUALITY</h5>
                                <hr class="w-25 bg-primary my-2">
                                <span></span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="btn-square rounded-circle border flex-shrink-0"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h5>DIFFERENT COLOURS</h5>
                                <hr class="w-25 bg-primary my-2">
                                <span></span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="btn-square rounded-circle border flex-shrink-0"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h5>LOW COST</h5>
                                <hr class="w-25 bg-primary my-2">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>-->
               <!-- <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid animated pulse infinite" src="../Assets/Template/User/img/pngwing.com.png">
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="row g-5">
                        <div class="col-12 d-flex">
                            <div class="btn-square rounded-circle border flex-shrink-0"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h5>No Internal Side Effect</h5>
                                <hr class="w-25 bg-primary my-2">
                                <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="btn-square rounded-circle border flex-shrink-0"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h5>No Skin Irritation</h5>
                                <hr class="w-25 bg-primary my-2">
                                <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="btn-square rounded-circle border flex-shrink-0"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h5>No Artificial Smell</h5>
                                <hr class="w-25 bg-primary my-2">
                                <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>-->
                          <!--  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Feature End -->


    <!-- How To Use Start -->
   <!-- <div class="container-fluid how-to-use bg-primary my-5 py-5">
        <div class="container text-white py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-white mb-3"><span class="fw-light text-dark">How To Use Our</span> Natural & Organic
                    <span class="fw-light text-dark">Hair Shampoo</span>
                </h1>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non
                    malesuada consequat, nibh erat tempus risus.</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 text-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                        <i class="fa fa-home fa-3x text-dark"></i>
                    </div>
                    <h5 class="text-white">Wash Hair With Water</h5>
                    <hr class="w-25 bg-light my-2 mx-auto">
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada
                        consequat.</span>
                </div>
                <div class="col-lg-4 text-center wow fadeIn" data-wow-delay="0.3s">
                    <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                        <i class="fa fa-home fa-3x text-dark"></i>
                    </div>
                    <h5 class="text-white">Apply Shampoo On Hair</h5>
                    <hr class="w-25 bg-light my-2 mx-auto">
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada
                        consequat.</span>
                </div>
                <div class="col-lg-4 text-center wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                        <i class="fa fa-home fa-3x text-dark"></i>
                    </div>
                    <h5 class="text-white">Wait 5 Mins And Wash</h5>
                    <hr class="w-25 bg-light my-2 mx-auto">
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada
                        consequat.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- How To Use End -->


    <!-- Product Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary mb-3"><span class="fw-light text-dark">Our Natural</span> Hair Products</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non
                    malesuada consequat, nibh erat tempus risus.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="product-item text-center border h-100 p-4">
                        <img class="img-fluid mb-4" src="../Assets/Template/User/img/product-1.png" alt="">
                        <div class="mb-2">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(99)</small>
                        </div>
                        <a href="" class="h6 d-inline-block mb-2">Hair Shining Shampoo</a>
                        <h5 class="text-primary mb-3">$99.99</h5>
                        <a href="" class="btn btn-outline-primary px-3">Add To Cart</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="product-item text-center border h-100 p-4">
                        <img class="img-fluid mb-4" src="../Assets/Template/User/img/product-2.png" alt="">
                        <div class="mb-2">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(99)</small>
                        </div>
                        <a href="" class="h6 d-inline-block mb-2">Anti-dandruff Shampoo</a>
                        <h5 class="text-primary mb-3">$99.99</h5>
                        <a href="" class="btn btn-outline-primary px-3">Add To Cart</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="product-item text-center border h-100 p-4">
                        <img class="img-fluid mb-4" src="../Assets/Template/User/img/product-1.png" alt="">
                        <div class="mb-2">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(99)</small>
                        </div>
                        <a href="" class="h6 d-inline-block mb-2">Anti Hair Fall Shampoo</a>
                        <h5 class="text-primary mb-3">$99.99</h5>
                        <a href="" class="btn btn-outline-primary px-3">Add To Cart</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="product-item text-center border h-100 p-4">
                        <img class="img-fluid mb-4" src="../Assets/Template/User/img/product-2.png" alt="">
                        <div class="mb-2">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(99)</small>
                        </div>
                        <a href="" class="h6 d-inline-block mb-2">Hair Growing Shampoo</a>
                        <h5 class="text-primary mb-3">$99.99</h5>
                        <a href="" class="btn btn-outline-primary px-3">Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Product End -->


    <!-- Testimonial Start -->
   <!-- <div class="container-fluid testimonial bg-primary my-5 py-5">
        <div class="container text-white py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-white mb-3">Our Customer Said <span class="fw-light text-dark">About Our Natural
                        Shampoo</span></h1>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non
                    malesuada consequat, nibh erat tempus risus.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                        <div class="testimonial-item text-center" data-dot="1">
                            <img class="img-fluid border p-2" src="../Assets/Template/User/img/testimonial-1.jpg"
                                alt="">
                            <h5 class="fw-light lh-base text-white">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus, vitae
                                porttitor purus nisl vitae purus. Praesent tristique odio ut rutrum pellentesque. Fusce
                                eget molestie est, at rutrum est. Nullam scelerisque libero nunc, vitae ullamcorper elit
                                volutpat ut.</h5>
                            <h5 class="mb-1">Client Name</h5>
                            <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                        </div>
                        <div class="testimonial-item text-center" data-dot="2">
                            <img class="img-fluid border p-2" src="../Assets/Template/User/img/testimonial-2.jpg"
                                alt="">
                            <h5 class="fw-light lh-base text-white">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus, vitae
                                porttitor purus nisl vitae purus. Praesent tristique odio ut rutrum pellentesque. Fusce
                                eget molestie est, at rutrum est. Nullam scelerisque libero nunc, vitae ullamcorper elit
                                volutpat ut.</h5>
                            <h5 class="mb-1">Client Name</h5>
                            <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                        </div>
                        <div class="testimonial-item text-center" data-dot="3">
                            <img class="img-fluid border p-2" src="../Assets/Template/User/img/testimonial-3.jpg"
                                alt="">
                            <h5 class="fw-light lh-base text-white">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus, vitae
                                porttitor purus nisl vitae purus. Praesent tristique odio ut rutrum pellentesque. Fusce
                                eget molestie est, at rutrum est. Nullam scelerisque libero nunc, vitae ullamcorper elit
                                volutpat ut.</h5>
                            <h5 class="mb-1">Client Name</h5>
                            <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary mb-3"><span class="fw-light text-dark"></span> OUR PRODUCTS </h1>
               <!-- <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non
                    malesuada consequat, nibh erat tempus risus.</p>-->
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="blog-item border h-100 p-4">
                        <img class="img-fluid mb-4" src="../Assets/Template/User/img/shutterstock_96677104.jpg" alt="">
                        <a href="" class="h5 lh-base d-inline-block">AQUARIUM FISHES</a>
                        <div class="d-flex text-black-50 mb-2">
                            <div class="pe-3">
                               <!-- <small class="fa fa-eye me-1"></small>
                                <small>9999 Views</small>-->
                            </div>
                            <div class="pe-3">
                                <!--<small class="fa fa-comments me-1"></small>
                                <small>9999 Comments</small>-->
                            </div>
                        </div>
                        <p class="mb-4">Aquarium fishes come in a dazzling array of colors, shapes, and sizes. They can be small or large, with a range of body shapes, fins, and patterns. Their colors can vary from vivid and iridescent to more muted or camouflaged, depending on the species.</p>
                        <!--<a href="" class="btn btn-outline-primary px-3">Read More</a>-->
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="blog-item border h-100 p-4">
                        <img class="img-fluid mb-4" style="height: 200px;" src="../Assets/Template/User/img/maxresdefault.jpg" alt="">
                        <a href="" class="h5 lh-base d-inline-block">FISH FOODS</a>
                        <div class="d-flex text-black-50 mb-2">
                            <div class="pe-3">
                               <!-- <small class="fa fa-eye me-1"></small>
                                <small>9999 Views</small>-->
                            </div>
                            <div class="pe-3">
                               <!-- <small class="fa fa-comments me-1"></small>
                                <small>9999 Comments</small>-->
                            </div>
                        </div>
                        <p class="mb-4">Fish food in an aquarium shop is designed to provide essential nutrition for the fish kept in aquariums. These foods come in various forms to cater to the dietary needs of different fish species. Here is a description of the types of fish food you might find in an aquarium shop:</p>
                        <!--<a href="" class="btn btn-outline-primary px-3">Read More</a>-->
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="blog-item border h-100 p-4">
                        <img class="img-fluid mb-4" src="../Assets/Template/User/img/bg2.jpg" alt="">
                        <a href="" class="h5 lh-base d-inline-block">ACCESSORIES </a>
                        <div class="d-flex text-black-50 mb-2">
                            <div class="pe-3">
                               <!-- <small class="fa fa-eye me-1"></small>
                                <small>9999 Views</small>-->
                            </div>
                            <div class="pe-3">
                               <!-- <small class="fa fa-comments me-1"></small>
                                <small>9999 Comments</small>-->
                            </div>
                        </div>
                        <p class="mb-4">
Accessories for aquarium shops encompass a wide range of products that help aquarium enthusiasts set up, maintain, and enhance their aquatic environments. Here are some common aquarium accessories with short descriptions:</p>
                        <!--<a href="" class="btn btn-outline-primary px-3">Read More</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Newsletter Start -->
    <div class="container-fluid newsletter bg-primary py-5 my-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-white mb-3"><span class="fw-light text-dark">Let's Subscribe</span> The Newsletter</h1>
                <p class="text-white mb-4">Subscribe now to get 30% discount on any of our products</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="position-relative w-100 mt-3 mb-2">
                        <input class="form-control w-100 py-4 ps-4 pe-5" type="text" placeholder="Enter Your Email"
                            style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                class="fa fa-paper-plane text-white fs-4"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-white footer">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="index.html" class="d-inline-block mb-3">
                        <h1 class="text-primary">AQUAFISHES</h1>
                    </a>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non
                        malesuada consequat, nibh erat tempus risus, vitae porttitor purus nisl vitae purus.</p>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>KORATTY ,CHALAKUDY</p>
                    <p><i class="fa fa-phone-alt me-3"></i>8921119411</p>
                    <p><i class="fa fa-envelope me-3"></i>Aquafishes1@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="mb-4">Our Products</h5>
                    <a class="btn btn-link" href="">Aquarium Fishes</a>
                    <a class="btn btn-link" href="">Fish Foods</a>
                    <a class="btn btn-link" href="">Accessories </a>
                    
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="mb-4">Popular Link</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Career</a>
                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed by
                        <a href="https://themewagon.com">ThemeWagon</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Assets/Template/User/lib/wow/wow.min.js"></script>
    <script src="../Assets/Template/User/lib/easing/easing.min.js"></script>
    <script src="../Assets/Template/User/lib/waypoints/waypoints.min.js"></script>
    <script src="../Assets/Template/User/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../Assets/Template/User/js/main.js"></script>
</body>

</html>