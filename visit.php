<!DOCTYPE html>
<!--
Template Name: Lalapeden
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<head>
<title>Vitar Estate | Schedule Visit</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="assets/css/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php">Vitar Estate</a></h1>
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
        <li class="active"><a href="visit.php">Schedule Unit Visit!</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <?php
            session_start();
            if(isset($_SESSION['user'])){
                $user = $_SESSION['user'];
                if($user['userType'] == 2){
                  echo '<li><a class="drop" href="#">Tenant</a>';
                  echo '<ul>';
                  echo '<li><a href="tenant/tenant_history.php">History</a></li>';
                  echo '<li><a href="tenant/tenant_bill.php">Bill</a></li>';
                  echo '<li><a href="tenant/tenant_settings.php">Account Settings</a></li>';
                  echo '<li><a href="controllers/logout.php">Logout</a></li>';
                  echo '</ul></li>';
                }
            }else{
                echo '<li><a href="signup.php">Register!</a></li>';
                echo '<li><a href="login.php">Login</a></li>';
            }
        ?>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('assets/images/visit.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h2 class="heading">SCHEDULE YOUR VISIT!</h2>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class=""group btmspace-50 demo""> 
        <h2>Schedule your visit!</h2>
        <form action="#" method="post">
          <div class="one_half first">
            <label for="name">First Name <span>*</span></label>
            <input type="text" name="f_name" id="name" value="" size="50" required>
          </div>
          <div class="one_half first">
            <label for="name"> Middle Name <span>*</span></label>
            <input type="text" name="m_name" id="name" value="" size="50" required>
          </div>
          <div class="one_half first">
            <label for="name">Last Name <span>*</span></label>
            <input type="text" name="l_name" id="name" value="" size="50" required>
          </div>
          <div class="one_half first">
            <label for="email">E-mail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="50" required>
          </div>
          <div class="one_half first">
            <label for="bday">Birthday <span>*</span></label>
            <input type="date" name="bday" id="bday" value="" size="50" required>
          </div>
          <div class="one_half first">
            <label for="gender">Gender <span>*</span></label>
            <input type="name" name="gender" id="gender" value="" size="50" required>
          </div>
          <div class="one_half first">
            <label for="Occupation">Occupation <span>*</span></label>
            <input type="name" name="occupation" id="occupation" value="" size="50" required><br>
          </div>
          <div class="one_half first">
            <label for="unit">Unit you want to visit <span>*</span></label>
            <input type="select" name="unit" id="unit" value="Commercial" size="50" required>
            <select>
                <option value="Unit 1">Unit 1</option>
                <option value="Unit 2">Unit 2</option>
            </select><br>
            </div>
            <div class="one_half first">
            <input type="select" name="unit" id="unit" value="Residential" size="50" required>
            <select>
                <option value="Unit 1">Unit 1</option>
                <option value="Unit 2">Unit 2</option>
            </select><br>
            </div>
            <div class="one_half first">
            <input type="select" name="unit" id="unit" value="Parking" size="50" required>
            <select>
                <option value="Lot 1">Lot 1</option>
                <option value="Lot 2">Lot 2</option>
            </select><br>
          </div>
          <div class="one_half first">
            <label for="date">Date and Time <span>*</span></label>
            <input type="select" name="date_sched" id="date_sched" value="" size="50" required>
          <select>
                <option value="Date1">Aug 12, 2018, 3pm</option>
                <option value="Date2">Aug 29, 2018, 1pm</option>
            </select>
            </div>
          <div class="block clear">

          </div><br>
          <div>
            <input type="submit" name="submit" value="Submit">
            &nbsp;

          </div>
        </form>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
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
</body>
</html>