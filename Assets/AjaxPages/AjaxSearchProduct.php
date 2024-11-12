<?php
include("../connection/connection.php");

if (isset($_GET["action"])) {

    $sqlQry = "SELECT * from tbl_product p inner join tbl_subcategory sc on sc.subcategory_id=p.subcategory_id inner join tbl_category c on c.category_id=sc.category_id  where true ";

    if ($_GET["category"] != null) {

        $category = $_GET["category"];

        $sqlQry = $sqlQry . " AND c.category_id IN(" . $category . ")";
    }
    if ($_GET["subcategory"] != null) {

        $subcategory = $_GET["subcategory"];

        $sqlQry = $sqlQry . " AND sc.subcategory_id IN(" . $subcategory . ")";
    }

    if ($_GET["name"] != null) {

        $name = $_GET["name"];

        $sqlQry = $sqlQry . " AND product_name LIKE '" . $name . "%'";
    }
    $resultS = $conn->query($sqlQry);



    if ($resultS->num_rows > 0) {
        while ($rowS = $resultS->fetch_assoc()) {
            ?>

            <div class="col-md-3 mb-2">
                <div class="card-deck">
                    <div class="card border-secondary">
                        <img src="../Assets/Files/Product/<?php echo $rowS["product_photo"]; ?>" class="card-img-top" height="250">
                        <div class="card-img-secondary">
                            <h6 class="text-light bg-info text-center rounded p-1">
                                <?php echo $rowS["product_name"]; ?>
                            </h6>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-danger" align="center">
                                Price :
                                <?php echo $rowS["product_price"]; ?>/-
                            </h4>
                            <p align="center">
                                <!--<?php echo $rowS["category_name"]; ?><br>-->
                                <?php echo $rowS["subcategory_name"]; ?><br class="light-red-text">


                            </p>
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

                            $query = "SELECT * FROM tbl_rating where product_id = '" . $rowS["product_id"] . "' ORDER BY rating_id DESC";

                            $result = $conn->query($query);

                            while ($row = $result->fetch_assoc()) {


                                if ($row["rating_value"] == '5') {
                                    $five_star_review++;
                                }

                                if ($row["rating_value"] == '4') {
                                    $four_star_review++;
                                }

                                if ($row["rating_value"] == '3') {
                                    $three_star_review++;
                                }

                                if ($row["rating_value"] == '2') {
                                    $two_star_review++;
                                }

                                if ($row["rating_value"] == '1') {
                                    $one_star_review++;
                                }

                                $total_review++;

                                $total_user_rating = $total_user_rating + $row["rating_value"];

                            }


                            if ($total_review == 0 || $total_user_rating == 0) {
                                $average_rating = 0;
                            } else {
                                $average_rating = $total_user_rating / $total_review;
                            }

                            ?>
                            <p align="center" style="color:#F96;font-size:20px">
                                <?php
                                if ($average_rating == 5 || $average_rating == 4.5) {
                                    ?>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                                    <?php
                                }
                                if ($average_rating == 4 || $average_rating == 3.5) {
                                    ?>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                                    <?php
                                }
                                if ($average_rating == 3 || $average_rating == 2.5) {
                                    ?>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                                    <?php
                                }
                                if ($average_rating == 2 || $average_rating == 1.5) {
                                    ?>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                                    <?php
                                }
                                if ($average_rating == 1) {
                                    ?>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#FC3"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                                    <?php
                                }
                                if ($average_rating == 0) {
                                    ?>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                                    <i class="fas fa-star star-light mr-1 main_star" style="color:#999"></i>
                                    <?php
                                }
                                ?>

                            </p>
                            <?php

                            $output = array(
                                'average_rating' => number_format($average_rating, 1),
                                'total_review' => $total_review,
                                'five_star_review' => $five_star_review,
                                'four_star_review' => $four_star_review,
                                'three_star_review' => $three_star_review,
                                'two_star_review' => $two_star_review,
                                'one_star_review' => $one_star_review,
                                'review_data' => $review_content
                            );



                            $stock = "select sum(stock_quantity) as stock from tbl_stock where product_id = '" . $rowS["product_id"] . "'";
                            $result2 = $conn->query($stock);
                            $row2 = $result2->fetch_assoc();

                            $stocka = "select sum(cart_quantity) as stock from tbl_cart where product_id = '" . $rowS["product_id"] . "'";
                            $result2a = $conn->query($stocka);
                            $row2a = $result2a->fetch_assoc();

                            $stock = $row2["stock"] - $row2a["stock"];
                            ?>
                            <p align="center" style="color:#F96;font-size:20px">Qty
                                <?php echo $stock; ?>-Left
                            </p>
                            <div style="display: flex; justify-content: center;" >
                                <?php

                                if ($stock > 0) {
                                    ?>
                                    <a href="javascript:void(0)" onclick="addCart(<?php echo $rowS['product_id']; ?>)"
                                        class="btn btn-success btn-block w-100">Add to Cart</a>
                                    <?php
                                } else if ($stock == 0) {
                                    ?>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-block w-100">Out of Stock</a>
                                    <?php
                                } else {
                                    ?>
                                        <a href="javascript:void(0)" class="btn btn-warning btn-block w-100">Stock Not Found</a>
                                    <?php
                                }
                                ?>
                                

                            </div>
                            <form action="View.php" method="get">
    <input type="hidden" name="pid" value="<?php echo $rowS["product_id"]; ?>">
    <button type="submit" class="btn view-more-button btn-block w-100" style="color: blue; background-color: #FFD700;">View More</button>
</form>



                        </div>
                    </div>
                    
                </div>
                
            </div>

            <?php
        }
    } else {
        echo "<h4 align='center'>Products Not Found!!!!</h4>";
    }
}

?>