<!DOCTYPE html>
<?php
include "databaseconnect.php"; 
$ItemId = $_REQUEST["ItemId"]; 
$stmt=$conn->prepare("select * from tblitems where ItemId = :ItemId ");
$stmt->bindParam(":ItemId",$ItemId);
$stmt->execute();
$row=$stmt->fetch();

$img = $row["image"]; 
$ItemName = $row["ItemName"]; 
$Price = $row["Price"];
$addedDateTime = $row["addedDateTime"];
?>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Online Food</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

   
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

   
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	
    <link rel="stylesheet" href="css/style.css">    
   
    <link rel="stylesheet" href="css/responsive.css">
    
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
	
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
						<h3 style="color:#d65106; font-weight: 900;">ONLINE FOOD PLUGIN</h3>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item active"><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="my-order.php">My Orders</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	
	<div class="all-page-title " style="padding: 250px 0 150px;
    background: url(admin/itemimage/<?php echo $row["image"];  ?>) no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-position: 0 0;
    position: relative;">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1><?php echo $ItemName; ?></h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Buy <?php echo $ItemName; ?></h2>
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-12">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
								
								<div class="col-lg-6 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img style="height:250px;width:100%;" src="admin/itemimage//<?php echo $img; ?>" class="img-fluid" alt="Image"><br>
										<h4 style="color:#d65106; font-weight: 900; text-align:center; font-size:20px;">&nbsp;&nbsp;ITEM NAME :&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ItemName; ?></h4>
											
											<h5 style="color:#d65106; font-weight: 900; text-align:center; font-size:20px;">&nbsp;&nbsp;ITEM PRICE :&nbsp;&nbsp;&nbsp;&nbsp; $<?php echo $Price; ?></h5>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										
											
										<div class="row">
											<div class="col-lg-12">
												<form action="single-item-process.php" method="post" >
													<div class="row">
														<div class="col-md-12">
															<div style="color:#d65106; font-weight: 900; text-align:center; font-size:20px;" >Enter Customer Details</div><br>
															<div class="form-group">
																<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name" required>
																<div class="help-block with-errors"></div>
															</div>                                 
														</div>
														<div class="col-md-12">
															<div class="form-group">
																<input type="email" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email" required>
																<div class="help-block with-errors"></div>
															</div> 
														</div>
														<div class="col-md-12">
															<div class="form-group">
																<input type="number" placeholder="Your Mobile" id="email" class="form-control" name="mobile" required data-error="Please enter your Mobile Number" required>
																<div class="help-block with-errors"></div>
															</div> 
														</div>
														<div class="col-md-12">
															<div class="form-group">
																<select class="custom-select d-block form-control" id="guest" name="Quantity" required data-error="Please Select Person" required>
																  <option disabled selected>Please Select Quantity*</option>
																  <option value="1">1</option>
																  <option value="2">2</option>
																  <option value="3">3</option>
																  <option value="4">4</option>
																  <option value="5">5</option>
																</select>
																<div class="help-block with-errors"></div>
															</div> 
														</div>
														<div class="col-md-12">
															<div class="form-group"> 
																<textarea class="form-control" id="message" placeholder="Your Address" name="address" rows="4" data-error="Write your message" required></textarea>
																<div class="help-block with-errors"></div>
															</div>
															<input type="hidden" name="ItemName" value="<?php echo $row["ItemName"];  ?>">
															<input type="hidden" name="Price" value="<?php echo $row["Price"];  ?>">
															<input type="hidden" name="ItemId" value="<?php echo  $row["ItemId"];  ?>">
															<input type="hidden" name="ItemImage" value="<?php echo  $img;  ?>">
															<input type="hidden" name="value" value="Pending">
															<input type="hidden" name="Notification" value="1">
															<div class="submit-button text-center">
																<button class="btn btn-common" id="submit" type="submit">Place Order</button>
																<div id="msgSubmit" class="h3 text-center hidden"></div> 
																<div class="clearfix"></div> 
															</div>
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
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead"></span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						
					</div>
				</div>
			</div>
		</div>
	</div>
	

	
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
	
				</div>
				<div class="col-lg-4 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
				</div>
				<div class="col-lg-4 col-md-6">
					
				</div>

			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2021 <a href="#">Online Food</a>
					</p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
