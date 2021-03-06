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
<title>Vitar Estate | HOME</title>
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
      <h1><a href="#">VITAR ESTATE</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
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
<div class="wrapper bgded overlay" style="background-image:url('assets/images/landingBG.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h2 class="heading">Vitar Estate development Inc.</h2>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h1 class="heading">RENTAL SPACES</h1>
    </div>
    <ul class="nospace group services">
      <li class="one_third first">
        <article class="infobox">
          <h6 class="heading"><i class="fa fa-joomla"></i> <a href="commercial.php">Commercial</a></h6>
          <p>We offer commercial spaces for your business. The price ranges from P12,000 to P 35,000 per month.</p>
        </article>
      </li>
      <li class="one_third">
        <article class="infobox">
          <h6 class="heading"><i class="fa fa-key"></i> <a href="residential.php">Residential</a></h6>
          <p>We offer residential spaces for you and your family. The price ranges from P7,000 to P 15,000 per month.</p>
        </article>
      </li>
      <li class="one_third">
        <article class="infobox">
          <h6 class="heading"><i class="fa fa-pied-piper-alt"></i> <a href="parking.php">Parking</a></h6>
          <p>We offer parking spaces for your cars. The price ranges from P2,000 to P 2,500 per month. </p>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="flexslider testimonials">
      <ul class="slides">
        <li>
          <article><img src='assets/images/commercial_1.jpg' alt="">
            <h6 class="heading">COMMERCIAL SPACES</h6>
          </article>
        </li>
        <li>
          <article><img src='assets/images/residential.jpg' alt="">
            <h6 class="heading">RESIDENTIAL SPACES</h6>
          </article>
        </li>
        <li>
          <article><img src='assets/images/parking.jpg' alt="">
            <h6 class="heading">PARKING SPACES</h6>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
<footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h6 class="heading">VITAR ESTATE DEVELOPMENT INC.</h6>
    <p>Share our website in social media!!!</p>
      <ul>
      <li><div class="fb-share-button" data-href="https://vitar-estate-inc.herokuapp.com/" data-layout="button_count"></div></li>
      <li><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>
      <li><div class="g-plus" data-action="share" ></div></li>
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
<script src="assets/js/jquery.flexslider-min.js"></script>
<script>
  $(function(){
    <?php
      if(isset($_GET['reg'])){
        echo "alert('Succefully Registered')";
      }else if(isset($_GET['detail'])){
        echo "alert('" . $_GET['detail'] . "')";
      }
    ?>
  });
</script>
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


