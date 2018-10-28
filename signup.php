<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vitar | Register </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="assets/css/layout.css" rel="stylesheet" type="text/css" media="all">

<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="assets/css/layout.css" rel="stylesheet" type="text/css" media="all">

</head>
<body>
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php">VITAR ESTATE</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
        <ul class="clear">
            <li><a href="index.php">Home</a></li>
            <!-- <li><a class="drop" href="#">Pages</a>
              <ul>
                <li><a href="pages/gallery.html">Gallery</a></li>
                <li><a href="pages/full-width.html">Full Width</a></li>
                <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
                <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
                <li><a href="pages/basic-grid.html">Basic Grid</a></li>
              </ul>
            </li> -->
            <li><a href="commercial.php">Commercial</a></li>
            <li><a href="residential.php">Residential</a></li>
            <li><a href="parking.php">Parking</a></li>
			<li><a href="visit.php">Schedule Unit Visit!</a></li>
            <li><a href="aboutus.php">About Us</a></li>
						
            <?php
            session_start();
            if(isset($_SESSION['user'])){
                header('location: index.php');
            }else{
				echo '<li class="active"><a href="signup.php">Register!</a></li>';
				echo '<li><a href="login.php">Login</a></li>';
            }
        ?>
          </ul>						

          </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/images/LOGO.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method='POST' action='controllers/register.php'>
					<span class="login100-form-title">
						Register
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid keycode is required">
						<input class="input100" type="text" name="keycode" placeholder="Unit Keycode" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-key" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "First Name is required">
						<input class="input100" type="text" name="firstname" placeholder="First Name" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="text" name="middlename" placeholder="Middle Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Last Name is required">
						<input class="input100" type="text" name="lastname" placeholder="Last Name" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Birthday is required" required>
						<input class="input100" type="date" name="bday" placeholder="Birthday">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-birthday-cake" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Contact Number is required" required>
						<input class="input100" type="text" name="Contact Number" placeholder="Contact Number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="text" name="Occupation" placeholder="Occupation" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-male" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password should match">
						<input class="input100" type="password" name="pass2" placeholder="Retype Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button name='signup' class="login100-form-btn">
							Sign up
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
						<a class="txt2" href="login.php">
							Back to Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
	<div class="wrapper row4">
	<footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h6 class="heading">VITAR ESTATE DEVELOPMENT INC.</h6>
    <ul class="faico clear">
      <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
      <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
    </ul>

    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="index.php">Vitar Estate</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.backtotop.js"></script>
<script src="assets/js/jquery.mobilemenu.js"></script>	

	
<!--===============================================================================================-->	
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >

		$('.js-tilt').tilt({
			scale: 1.1
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>