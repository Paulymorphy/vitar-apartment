<?php
  session_start();
?>
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
<title>Vitar Estate | Tenant</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../assets/css/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="../index.html">Vitar Estate</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
    <ul class="clear">
    <li><a href="../index.php">Home</a></li>

      <li><a href="../commercial.php">Commercial</a></li>
      <li><a href="../residential.php">Residential</a></li>
      <li><a href="../parking.php">Parking</a></li>
      <li class="active"><a class="drop" href="#">Tenant</a>
      <ul>
          <li><a href="tenant_history.php">History</a></li>
          <li><a href="tenant_bill.php">Bill</a></li>
          <li><a href="tenant_settings.php">Account Settings</a></li>
          <li><a href="../controllers/logout.php">Logout</a></li>
        </ul>
      </li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->

<div class="wrapper bgded overlay" style="background-image:url('../assets/images/tenantBG.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h2 class="heading">TENANT BILL</h2>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->
      <h6>TENANT</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="#">History</a></li>
          <li><a href="#">Bill</a></li>
          <li><a href="#">Settings</a></li>
        <ul>
      </nav>
      <div class="sdb_holder">
        <h6>UNIT INFO</h6>
        <address>
          
        </address>
      </div>
      <div class="sdb_holder">
        <h6>TENANT PROFILE</h6>
        <address>
        Full Name: <?php echo implode(' ',explode('_',$_SESSION['userInfo']['fullname']))?><br>
        Birthday: <?php $date = new DateTime($_SESSION['userInfo']['birthdate']); echo $date->format('m/d/Y'); ?><br>
        Occupation: <?php echo $_SESSION['userInfo']['occupation'] ?> <br>
        <!-- Gender:<br> -->
        <br>
        Contact No.: <?php echo $_SESSION['userInfo']['contact'] ?><br>
        Email: <?php echo $_SESSION['userInfo']['email'] ?>
        </address>
      </div>

      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->
      <h1>BILL</h1>
      <h1></h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Date</th>
              <th>Subject</th>
              <th>Info</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Value 2</td>
              <td>Value 3</td>
              <td>Value 4</td>
            </tr>
            <tr>
              <td>Value 5</td>
              <td>Value 6</td>
              <td>Value 7</td>
            </tr>
            <tr>
              <td>Value 9</td>
              <td>Value 10</td>
              <td>Value 11</td>
            </tr>
            <tr>
              <td>Value 13</td>
              <td>Value 15</td>
              <td>Value 16</td>
            </tr>
          </tbody>
        </table>
      </div>

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
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.backtotop.js"></script>
<script src="../assets/js/jquery.mobilemenu.js"></script>
</body>
</html>