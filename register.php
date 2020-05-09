  <?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<!-- icons -->
	<link rel="stylesheet" href="css/flaticon.css">
	<!-- footer social css -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
<style>
* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("images/harvester.jpg");

  min-height: 650px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container1 {
  position: absolute;
  margin-top:10px;
 
  margin-left:100px;
  max-width: 500px;
  height: 500px;
  padding: 16px;

  border-radius: 5px; 

}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  height:40px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  border-radius: 5px; 
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  border-radius: 5px; 
}

.btn:hover {
  opacity: 1;
}

.error {
    width: 100%; 

     
    border: 1px solid #a94442; 
    color: #a94442; 
    background: #f2dede; 
    border-radius: 5px; 
    text-align: center;
  }
  .container2 {
  position: relative;
  text-align: center;
  color: white;
}


.centered1 {
  position: absolute;
  margin-top:13%;

  left: 70%;
  font-size: 200px;

  transform: translate(-50%, -50%);
}
.centered2 {
  position: absolute;
  margin-top:20%;

  left: 70%;
  font-size: 30px;

  transform: translate(-50%, -50%);
}

/* The container radio */
.containerrad {
  
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  margin-left:15px;
  display: inline-block;
  cursor: pointer;
  font-size: 15px;
  color:white;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.containerrad input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.containerrad:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.containerrad input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.containerrad input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.containerrad .checkmark:after {
 	top: 6px;
	left: 6px;
	width: 9px;
	height: 9px;
	border-radius: 50%;
	background: white;
}
</style>
</head>
<body class="goto-here">

<div class="bg-img">
	<div class="container2">
		<div class="centered1">Harvester</div>
		<div class="centered2">A Crop selling and buying platform </div>
	</div>

<form method="post" action="register.php" class="container1">
	<h1 style="color:white;">SignUp</h1>
  <?php #include('errors.php'); ?>
	  
	<div class="input-group">
  	  <label style="color:white;">Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" required>
	</div>
  
  <div class="input-group">
  <label style="color:white;">I am </label>

  <label class="containerrad"> Farmer
    <input type="radio" name="usrtype" <?php if (isset($usrtype) && $usrtype=="farmer") echo "checked";?> value="farmer" required>
    <span class="checkmark"></span>
  </label>
  <label class="containerrad"> Customer
    <input type="radio" name="usrtype" <?php if (isset($usrtype) && $usrtype=="customer") echo "checked";?> value="customer" required>
    <span class="checkmark"></span>
  </label>
</div>

  	<div class="input-group">
  	  <label style="color:white;">Email</label>
  	  <input type="text" name="email" value="<?php echo $email; ?>" required>
	</div>
	  
  	<div class="input-group">
  	  <label style="color:white;">Password</label>
  	  <input type="password" name="password_1" required>
  	</div>
  	<div class="input-group">
  	  <label style="color:white;">Confirm password</label>
  	  <input type="password" name="password_2" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
	<center><p style="color:white;">
  		Already a member? <a href="login.php" style="color:white;">Log in</a>
	</center>
</form>
</div>	

<section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>On order over ₹100</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Always Fresh</h3>
                <span>Product well package</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <span>Quality Products</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>



		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(images/category.jpg);">
									<div class="text text-center">
										<h2>Vegetables</h2>
										<p>Protect the health of every home</p>
										<p><a href="#" class="btn btn-primary">Shop now</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-1.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Vegetables</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-2.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Fruits</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/category-3.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Juices</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/category-4.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Dried</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



		<footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Harvester</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Business Bay, Tilak Road, Akola, Maharashtra 444001, India.</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">(+91) 860 1001 068</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@Harvester.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        
      </div>
    </footer>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/main.js"></script>
    

</body>
</html>