<?php include('../Assets/Connection/Connection.php');
ob_start();
include("Head.php");
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MY BOOKING</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<style>
		.list-group-item {
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 10px;
		}

		.list-group-item span {
			font-weight: bold;

		}
	</style>
</head>

<body>
	<form id="form1" name="form1" method="post" action="">
		<?php
		$i = 0;
		$selQuery = "select * from tbl_booking where user_id = '" . $_SESSION['uid'] . "'";

		$row1 = $conn->query($selQuery);

		?>

		<div class="row">
			<?php
			while ($data1 = $row1->fetch_assoc()) {

				$i++;
				?>
				<div class="col-md-12 w-90">
					<div class="card m-4 p-3"
						style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
						<h1>#
							<?php echo $i; ?>
						</h1>
						<div class="card-body">
							<?php
							$selQuery1 = "SELECT * FROM tbl_cart q INNER JOIN tbl_booking w ON q.booking_id = w.booking_id inner join tbl_product e on e.product_id = q.product_id where w.booking_id = '" . $data1['booking_id'] . "'";
							$row = $conn->query($selQuery1);
							while ($data = $row->fetch_assoc()) {
								?>
								<div style="display: flex; justify-content:center ">

									<div class="card p-3 m-3"
										style="width:90%;height: 700px; padding: 20px; border-radius: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset; ">
										<img src="../Assets/Files/Product/<?php echo $data["product_photo"] ?>"
											class="card-img-top" alt="Product Photo"
											style="width:350px;height:350px; padding: 10px;border-radius: 15px;  ">
										<div class="card-body">
											<h5 class="card-title">
												<?php echo $data["product_name"] ?>
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


												while ($row2 = $result1->fetch_assoc()) {


													if ($row2["rating_value"] == '5') {
														$five_star_review++;
													}

													if ($row2["rating_value"] == '4') {
														$four_star_review++;
													}

													if ($row2["rating_value"] == '3') {
														$three_star_review++;
													}

													if ($row2["rating_value"] == '2') {
														$two_star_review++;
													}

													if ($row2["rating_value"] == '1') {
														$one_star_review++;
													}

													$total_review++;

													$total_user_rating = $total_user_rating + $row2["rating_value"];

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




												?>
											</h5>
											<ul class="list-group list-group-flush">
												<li class="list-group-item">
													<span>Sl No</span>
													<span class="val">
														<?php echo $i; ?>
													</span>
												</li>
												<li class="list-group-item">
													<span>Quantity</span>
													<span class="val">
														<?php echo $data["cart_quantity"]; ?>
													</span>
												</li>
												<li class="list-group-item">
													<span>Amount</span>
													<span class="val">
														<?php echo $data['product_price'] * $data['cart_quantity'] ?>
													</span>
												</li>

											</ul>



											<?php
							if ($data1["booking_status"] == 2 && $data1["payment_status"] == 1) {
								?>
								<a href="ProductRating.php?prodid=<?php echo $data["product_id"] ?>" class="btn btn-primary"
									style="margin-top: 20px;">Rating</a>
									
								<?php

							}
							?>



										</div>
									</div>
								</div>
								<?php
							}
							?>

							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<span>Sl No</span>
									<span class="val">
										<?php echo $i; ?>
									</span>
								</li>

								<li class="list-group-item">
									<span>Amount</span>
									<span class="val">
										<?php
										$amount = floatval($data1["booking_amount"]) * 0.03567 + 40 + floatval($data1["booking_amount"]);
										$result = number_format($amount, 2);
										echo $result ?>
									</span>
								</li>
								<li class=" list-group-item">
									<span>Date</span>
									<span class="val">
										<?php echo $data1["booking_date"]; ?>
									</span>
									<li class="list-group-item">
    <span>Delivered Date</span>
    <span class="val">
        <?php
        // Get the current booking_date
        $booking_date = $data1["booking_date"];
        
        // Add 5 days to the booking_date
        $new_date = date('Y-m-d', strtotime($booking_date . ' +5 days'));
        
        // Output the new date
        echo $new_date;
        ?>
    </span>
</li>

								<li class="list-group-item">
									<span>Status</span>
									<span class="val">
										<?php
										if ($data1["booking_status"] == 1 && $data1["payment_status"] == 1) {
											echo "Booking and Payment Completed";
										} else if ($data1["booking_status"] == 1) {
											echo "Booking Completed, Payment Pending";
										} else if ($data1["booking_status"] == 2) {
											echo "Delivered";
											?>
											<?php
										}
										?>
									</span>
								</li>
							</ul>
							



							<a href="PdfBill.php?id=<?php echo $data1["booking_id"] ?>" class="btn btn-primary"
								style="margin-top: 20px;">View Bill</a>


						</div>
					</div>
				</div>
				<?php

			} ?>
		</div>

	</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<?php
include("Foot.php");
ob_flush();
?>

</html>