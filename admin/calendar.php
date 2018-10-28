<?php
    session_start();
    if(!isset($_SESSION['adminLoggedIn'])){
        header('location: ../login.php');
        return;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Vitar Estate Development Inc.</title>

    <!-- Bootstrap core CSS -->
    <link href="/apartment/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/apartment/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="/apartment/assets/js/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="/apartment/assets/css/style.css" rel="stylesheet">
    <link href="/apartment/assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>VITAR ESTATE</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="/apartment/controllers/logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              <p class="centered"><a href="profile.html"><img src="/apartment/assets/images/LOGO.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Admin</h5>
              	  	
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                        <a class="active" href="accounts.php">
                            <i class="fa fa-desktop"></i>
                            <span>Accounts</span>
                        </a>
                    </li>
    
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-cogs"></i>
                            <span>Rental Space</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="residential.php">Calendar</a></li>
                            <li><a  href="commercial.php">Gallery</a></li>
                            <li><a  href="parking.php">Todo List</a></li>
                        </ul>
                    </li>
    
                    <li class="sub-menu">
                        <a class="active" href="#">
                            <i class="fa fa-cogs"></i>
                            <span>Calendar</span>
                        </a>
                    </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Calendar</h3>
              <!-- page start-->
              <div class="row mt">
                  <aside class="col-lg-4 mt">
                      <h4><i class="fa fa-angle-right"></i> Pending Tenant</h4>
                      <div>
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Renting</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                      </div>
                  </aside>
                  <aside class="col-lg-8 mt">
                      <section class="panel">
                          <div class="panel-body">
                              <div id="calendar" class="has-toolbar"></div>
                          </div>
                      </section>
                  </aside>
              </div>
              <!-- page end-->
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
          2018 - Vitar Estate Development Inc.
              <a href="calendar.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/apartment/assets/js/jquery.js"></script>
    <script src="/apartment/assets/js/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="/apartment/assets/js/fullcalendar/fullcalendar.min.js"></script>    
    <script src="/apartment/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="/apartment/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/apartment/assets/js/jquery.scrollTo.min.js"></script>
    <script src="/apartment/assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="/apartment/assets/js/common-scripts.js"></script>

    <!--script for this page-->   
  
  <script>
      //custom select box

      $(function(){
        //   $("select.styled").customSelect();
          $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                editable: false,
                droppable: false, // this allows things to be dropped onto the calendar !!!
                eventSources:[
                    {
                        url: "../controllers/schedule.php",
                        type: "GET",
                    }
                ]
            });
      });

  </script>

  </body>
</html>