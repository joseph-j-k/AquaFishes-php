<?php
include('../Assets/Connection/Connection.php');


include('SessionValidator.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>AquaFish Admin</title>
    <!-- loader-->
    <link href="../Assets/Template/Admin/assets/css/pace.min.css" rel="stylesheet" />
    <script src="../Assets/Template/Admin/assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="../Assets/Template/Admin/assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="../Assets/Template/Admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="../Assets/Template/Admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="../Assets/Template/Admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="../Assets/Template/Admin/assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="../Assets/Template/Admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="../Assets/Template/Admin/assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="../Assets/Template/Admin/assets/css/app-style.css" rel="stylesheet" />





    <!-- Add DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.10/css/jquery.dataTables.min.css">

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.11.10/js/jquery.dataTables.min.js"></script>

</head>

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="index.html">
                    <img src="../Assets/Template/Admin/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                    <h5 class="logo-text">AquaFish Admin</h5>
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li>
                    <a href="HomePage.php">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="District.php">
                        <i class="zmdi zmdi-pin"></i> <span>District</span>
                    </a>
                </li>

                <li>
                    <a href="Place.php">
                        <i class="zmdi zmdi-pin-drop"></i> <span>Place</span>
                    </a>
                </li>

                <li>
                    <a href="Product.php">
                        <i class="zmdi zmdi-grid"></i> <span>Product</span>
                        <small class="badge float-right badge-light">New</small>
                    </a>
                </li>
                <li>
                    <a href="Booking.php">
                        <i class="zmdi zmdi-grid"></i> <span>Orders</span>
                    </a>
                </li>


                <li>
                    <a href="Category.php">
                        <i class="zmdi zmdi-calendar-check"></i> <span>Category</span>
                        
                    </a>
                </li>

                <li>
                    <a href="SubCategory.php">
                        <i class="zmdi zmdi-face"></i> <span>SubCategory</span>
                    </a>
                </li>

                <li>
                    <a href="ViewComplaint.php" target="_blank">
                        <i class="zmdi zmdi-lock"></i> <span>ViewComplaint</span>
                    </a>
                </li>

                <li>
                    <a href="Userdtl.php" target="_blank">
                        <i class="zmdi zmdi-face"></i> <span>User</span>
                    </a>
                </li>
                
                <li>
                    <a  href="../Logout.php" target="_blank">
                        <i class="zmdi zmdi-account-circle"></i> <span>Logout</span>
                    </a>
                </li>
                

                <li class="sidebar-header">REPORTS</li>
                <li><a href="BookingReport.php"><i class="zmdi zmdi-coffee text-danger"></i> <span>Total
                            Report</span></a>
                </li>
                <li><a href="UserBar.php"><i class="zmdi zmdi-chart-donut text-success"></i>
                        <span>Fishes</span></a></li>

                <li><a href=Pie.php><i class="zmdi zmdi-share text-info"></i> <span>Products</span></a>
                </li>

            </ul>

        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top ">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter keywords">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle"
                                    alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3"
                                                src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">AquaFishes</h6>
                                            <p class="user-subtitle">fishesaqua@gmail.com</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-wallet mr-2"><a href="Admin.php"></i> Account</li></a>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                            <li class="dropdown-divider"></li>
                            <a href="../Logout.php">
                                <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
                            </a>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->

                <div class="card mt-3">
                    <div class="card-content">
                        <div class="row row-group m-0">
                            <div class="col-12 col-lg-6 col-xl-3 border-light">
                                <div class="card-body">
                                    <?php
                                    $sel7 = "select sum(cart_quantity) as total from tbl_cart";
                                    $res19 = $conn->query($sel7);
                                    $data6 = $res19->fetch_assoc();
                                    $total5 = $data6['total'];
                                    ?>
                                    <h5 class="text-white mb-0">
                                        <?php echo $total5 ?><span class="float-right"><i
                                                class="fa fa-shopping-cart"></i></span>
                                    </h5>
                                    <div class="progress my-3" style="height:3px;">
                                        <div class="progress-bar" style="width:55%"></div>
                                    </div>

                                    <p class="mb-0 text-white small-font">Total Orders <span class="float-right">+4.2%
                                            <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-3 border-light">
                                <div class="card-body">
                                    <?php
                                    $sel8 = "select sum(booking_amount) as total from tbl_booking";
                                    $res20 = $conn->query($sel8);
                                    $data7 = $res20->fetch_assoc();
                                    $total8 = $data7['total'];
                                    ?>
                                    <h5 class="text-white mb-0">
                                        <?php echo $total8 ?><span class="float-right"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                                                <path
                                                    d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                                            </svg></i></span>
                                    </h5>
                                    <div class="progress my-3" style="height:3px;">
                                        <div class="progress-bar" style="width:55%"></div>
                                    </div>
                                    <p class="mb-0 text-white small-font">Total Revenue <span class="float-right">+1.2%
                                            <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-3 border-light">
                                <div class="card-body">
                                    <?php
                                    $sel9 = "select count(user_id) as total from tbl_user";
                                    $res21 = $conn->query($sel9);
                                    $data8 = $res21->fetch_assoc();
                                    $total9 = $data8['total'];
                                    ?>
                                    <h5 class="text-white mb-0">
                                        <?php echo $total9 ?><span class="float-right"><i class="fa fa-eye"></i></span>
                                    </h5>
                                    <div class="progress my-3" style="height:3px;">
                                        <div class="progress-bar" style="width:55%"></div>
                                    </div>
                                    <p class="mb-0 text-white small-font">Visitors <span class="float-right">+5.2% <i
                                                class="zmdi zmdi-long-arrow-up"></i></span></p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-3 border-light">
                                <div class="card-body">
                                    <h5 class="text-white mb-0">2<span class="float-right"><i
                                                class="fa fa-envira"></i></span></h5>
                                    <div class="progress my-3" style="height:3px;">
                                        <div class="progress-bar" style="width:55%"></div>
                                    </div>
                                    <p class="mb-0 text-white small-font">Complaint <span class="float-right">+2.2% <i
                                                class="zmdi zmdi-long-arrow-up"></i></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-8 col-xl-8">
                        <div class="card">
                            <div class="card-header">Site Traffic
                                <div class="card-action">
                                    <div class="dropdown">
                                        <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                            data-toggle="dropdown">
                                            <i class="icon-options"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void();">Action</a>
                                            <a class="dropdown-item" href="javascript:void();">Another action</a>
                                            <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-container-1" style="min-height: 400px;">
                                    <canvas id="chart1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header"> Sales
                                <div class="card-action">
                                    <div class="dropdown">
                                        <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                            data-toggle="dropdown">
                                            <i class="icon-options"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void();">Action</a>
                                            <a class="dropdown-item" href="javascript:void();">Another action</a>
                                            <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-container-2" style="min-height: 400px; ">
                                    <canvas id="chart2" style="width: 90%;height: 90%;"></canvas>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--End Row-->
                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">Top Sold Fishes
                                <div class="card-action">
                                    <div class="dropdown">
                                        <a href="BookingReport.php" class="dropdown-toggle dropdown-toggle-nocaret"
                                            data-toggle="dropdown">
                                            <i class="icon-options"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void();">Action</a>
                                            <a class="dropdown-item" href="javascript:void();">Another action</a>
                                            <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-container-1" style="min-height: 600px;">
                                    <canvas id="barChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                 
                </div><!--End Row-->

                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">Recent Order Tables
                                <div class="card-action">
                                    <div class="dropdown">
                                        <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                            data-toggle="dropdown">
                                            <i class="icon-options"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void();">Action</a>
                                            <a class="dropdown-item" href="javascript:void();">Another action</a>
                                            <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="productTable" class="table align-items-center table-flush table-borderless">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Photo</th>
                                            <th>Product ID</th>
                                            <th>Amount</th>
                                            <th>Rating</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $selQuery = "SELECT * FROM tbl_product p INNER JOIN tbl_subcategory s ON p.subcategory_id = s.subcategory_id INNER JOIN tbl_category c ON s.category_id = c.category_id";
                                        $row = $conn->query($selQuery);
                                        while ($data = $row->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $data["product_name"] ?>
                                                </td>
                                                <td><img src="../Assets/Files/Product/<?php echo $data["product_photo"] ?>"
                                                        class="product-img" alt="product img"></td>
                                                <td>#9405822</td>
                                                <td>$
                                                    <?php echo $data["product_price"] ?>
                                                </td>
                                                <td>
                                                    <p>
                                                        <?php
                                                        $average_rating = 0;
                                                        $total_review = 0;
                                                        $five_star_review = 0;
                                                        $four_star_review = 0;
                                                        $three_star_review = 0;
                                                        $two_star_review = 0;
                                                        $one_star_review = 0;
                                                        $total_user_rating = 0;
                                                        $review_content = array();

                                                        $query1 = "SELECT * FROM tbl_rating where product_id = '" . $data["product_id"] . "' ORDER BY rating_id DESC";

                                                        $result1 = $conn->query($query1);


                                                        while ($row1 = $result1->fetch_assoc()) {


                                                            if ($row1["rating_value"] == '5') {
                                                                $five_star_review++;
                                                            }

                                                            if ($row1["rating_value"] == '4') {
                                                                $four_star_review++;
                                                            }

                                                            if ($row1["rating_value"] == '3') {
                                                                $three_star_review++;
                                                            }

                                                            if ($row1["rating_value"] == '2') {
                                                                $two_star_review++;
                                                            }

                                                            if ($row1["rating_value"] == '1') {
                                                                $one_star_review++;
                                                            }

                                                            $total_review++;

                                                            $total_user_rating = $total_user_rating + $row1["rating_value"];

                                                        }


                                                        if ($total_review == 0 || $total_user_rating == 0) {
                                                            $average_rating = 0;
                                                        } else {
                                                            $average_rating = $total_user_rating / $total_review;
                                                        }

                                                        ?>
                                                    <p align="center" style="color:#F96;font-size:20px;padding: 20px;">
                                                        <?php
                                                        if ($average_rating == 5 || $average_rating == 4.5) {
                                                            ?>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#FC3"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#FC3"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#FC3"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#FC3"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#FC3"></i>
                                                            <?php
                                                        }
                                                        if ($average_rating == 4 || $average_rating == 3.5) {
                                                            ?>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#FC3"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#FC3"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#FC3"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#FC3"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#999"></i>
                                                            <?php
                                                        }
                                                        if ($average_rating == 3 || $average_rating == 2.5) {
                                                            ?>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#FC3"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#FC3"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#FC3"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#999"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#999"></i>
                                                            <?php
                                                        }
                                                        if ($average_rating == 2 || $average_rating == 1.5) {
                                                            ?>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#FC3"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#FC3"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#999"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#999"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#999"></i>
                                                            <?php
                                                        }
                                                        if ($average_rating == 1) {
                                                            ?>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#FC3"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#999"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#999"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#999"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#999"></i>
                                                            <?php
                                                        }
                                                        if ($average_rating == 0) {
                                                            ?>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#999"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#999"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#999"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#999"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"
                                                                style="color:#999"></i>
                                                            <?php
                                                        }
                                                        ?>

                                                    </p>
                                                    <?php




                                                    ?>
                                                    </p>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!--End Row-->

                <!--End Dashboard Content-->

                <!--start overlay-->
                <div class="overlay toggle-menu"></div>
                <!--end overlay-->

            </div>
            <!-- End container-fluid-->

        </div><!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 2018 Dashtreme Admin
                </div>
            </div>
        </footer>
        <!--End footer-->

        <!--start color switcher-->
        <div class="right-sidebar">
            <div class="switcher-icon">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </div>
            <div class="right-sidebar-content">

                <p class="mb-0">Gaussion Texture</p>
                <hr>

                <ul class="switcher">
                    <li id="theme1"></li>
                    <li id="theme2"></li>
                    <li id="theme3"></li>
                    <li id="theme4"></li>
                    <li id="theme5"></li>
                    <li id="theme6"></li>
                </ul>

                <p class="mb-0">Gradient Background</p>
                <hr>

                <ul class="switcher">
                    <li id="theme7"></li>
                    <li id="theme8"></li>
                    <li id="theme9"></li>
                    <li id="theme10"></li>
                    <li id="theme11"></li>
                    <li id="theme12"></li>
                    <li id="theme13"></li>
                    <li id="theme14"></li>
                    <li id="theme15"></li>
                </ul>

            </div>
        </div>
        <!--end color switcher-->

    </div><!--End wrapper-->



    <!-- Bootstrap core JavaScript-->
    <script src="../Assets/Template/Admin/assets/js/jquery.min.js"></script>
    <script src="../Assets/Template/Admin/assets/js/popper.min.js"></script>
    <script src="../Assets/Template/Admin/assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="../Assets/Template/Admin/assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="../Assets/Template/Admin/assets/js/sidebar-menu.js"></script>
    <!-- loader scripts -->
    <script src="../Assets/Template/Admin/assets/js/jquery.loading-indicator.js"></script>
    <!-- Custom scripts -->
    <script src="../Assets/Template/Admin/assets/js/app-script.js"></script>
    <!-- Chart js -->

    <script src="../Assets/Template/Admin/assets/plugins/Chart.js/Chart.min.js"></script>

    <!-- Index js -->
    <script src="../Assets/Template/Admin/assets/js/index.js"></script>


</body>

</html>