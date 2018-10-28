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
<title>Vitar Estate | About Us</title>
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
            <li class="active"><a href="aboutus.php">About Us</a></li>
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
<div class="wrapper bgded overlay" style="background-image:url('assets/images/about.jpeg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h2 class="heading">ABOUT US</h2>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="wrapper row3">
  <main class="hoc container clear"> 
  <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->
      <img class="imgl borderedbox inspace-5" src="assets/images/LOGO.png" alt="">
</div>

<div class="content three_quarter"> 
      <!-- ################################################################################################ -->
      <h1>ABOUT US</h1>
         <!-- <img class="imgr borderedbox inspace-5" src="assets/images/LOGO.png" alt=""> -->
      <p>Vitar Estate Development Inc. is a family owned business. It offers residential, commercial and parking spaces for everyone.</p>
      <p>The family started the business in year 1965.</p>
      <p>Despite the growing demands of people for residential, commercial and parking spaces. The price rate of Vitar's rental spaces is better than others.</p>
      <p>Share our website in social media!!!</p>
      <ul>
      <li><div class="fb-share-button" data-href="https://vitar-estate-inc.herokuapp.com/" data-layout="button_count"></div></li>
      <li><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>
      <li><div class="g-plus" data-action="share" ></div></li>
      </ul>
</div>
      <!-- ################################################################################################ -->

      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->

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
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>