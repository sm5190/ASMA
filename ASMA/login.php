<!Doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <title>ASMA</title>


   <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
   <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
   <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
   <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
   <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
   <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
   <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
   <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
   <link rel="stylesheet" type="text/css" href="css/login-util.css">
	<link rel="stylesheet" type="text/css" href="css/login-main.css">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">
 

</head>

<body>

  
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.html">Home</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.html">About</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="products.html">Services</a>
          </li>
		   <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="gallery.html">Gallery</a>
          </li>
          <li class="nav-item px-lg-4 dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PROFILE
        </a>
          <!-- Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set! -->
          <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="login Employee.html">Login as Employee</a>
            <a class="dropdown-item" href="login Admin.html">Login as Admin</a>
            <a class="dropdown-item" href="login Customer.html">Login as Customer</a>
            <a class="dropdown-item" href="register.html">Register</a>
           
          </div>
        </li>
        </ul>
      </div>
    </div>
  </nav>



<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<form class="login100-form validate-form"   >
					<span class="login100-form-title p-b-34"action="login.php" method="POST">
						Customer Login
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="username" placeholder="User Phone Number">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					
                    <div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="login Employee.html" class="txt2">
							password?
						</a>
					</div>

					


  
                    <div class="w-full text-center">
						<a href="register.html" class="txt3">
							Sign Up
						</a>
					</div>
                </form>

				<div class="login100-more" style="background-image: url('img/pexels-photo-1926620.jpeg');"></div>
			</div>
		</div>
	</div>


  

   <div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>



 
  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2019</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
