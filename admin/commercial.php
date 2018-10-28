<?php
    require_once('../model/maintenance.php');
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
        
    <!-- Custom styles for this template -->
    <link href="/apartment/assets/css/style.css" rel="stylesheet">
    <link href="/apartment/assets/css/style-responsive.css" rel="stylesheet">

    <link href="/apartment/assets/css/table-responsive.css" rel="stylesheet">

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
                <ul class="nav top-menu">
                </ul>
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
              
              	  <p class="centered"><a href="profile.html"><img src="/apartment/assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Marcel Newman</h5>
              	  	
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
                            <li><a  href="residential.php">Residential</a></li>
                            <li><a  href="#">Commercial</a></li>
                            <li><a  href="parking.php">Parking</a></li>
                        </ul>
                    </li>
    
                    <li class="sub-menu">
                        <a class="active" href="calendar.phph">
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
          	<h3><i class="fa fa-angle-right"></i> Rental Space</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Commercial Space</h4>
                      <button type="button" style = "float:right" class="btn btn-primary" data-toggle="modal" data-target="#myModalAdd">CREATE</button>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Description</th>
                                  <th>Rate</th>
                                  <th>Actions</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                                    $counter = 1;
                                    foreach(get_all_commercial_rental() as $elem){
                                        echo "<tr>";
                                        echo "<td>" . $counter . "</td>";
                                        echo "<td>" . (strlen($elem['detailDesc']) > 15 ? substr($elem['detailDesc'], 0, 15) . "..." : $elem['detailDesc']) . "</td>";
                                        echo "<td>" . $elem['montlyRate'] . "</td>";
                                        echo '<td><button type="button" class="btn btn-success editRentable" data-id=' . $elem['id'] . '>Edit</button><button type="button" class="btn btn-danger removeRentable" data-id=' . $elem['id'] . '>Delete</button></td>';
                                        echo "</tr>";
                                        $counter++;
                                    }
                              ?>
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
          
              

<!--ADD Modal -->
<div id="myModalAdd" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!--ADD Modal content-->
    <div class="modal-content">
      <div class="modal-header" style = "background-color: #18D0FF">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Residential Space</h4>
      </div>
      <form id='addRentable'data-type='3'>
        <div class="modal-body">
            <div class = "form-group">
                <label> Rate: </label>
                <input type="Number" placeholder="Price Rate" class="form-control" id="AddName" name ="rate" required>
            </div>
            <div class = "form-group">
                <label> Description: </label> <button type='button' class='btn btn-default addDescBtn'>+</button>
                <input type="text" placeholder="Description" class="form-control" id="AddDesc" name ="txtDescription" required>
                <div class='additionalDesc'></div>
            </div>
            <div class = "form-group">
                <label> Images: </label>
                <input type="file" class="form-control" id="rentalImage" name ="rentalImages[]" multiple required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class = "btn btn-success" id="SubmitAdd">ADD</button>
            <button type ="button" class = "btn btn-danger" data-dismiss = "modal"> CANCEL </button>
        </div>
      </form>
    </div>

  </div>
</div>
<!-- Modal End -->

<!--Edit Modal -->
<div id="myModalEdit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!--ADD Modal content-->
    <div class="modal-content">
      <div class="modal-header" style = "background-color: #18D0FF">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Residential Space</h4>
      </div>
      <form id='editRentable'data-type='1'>
        <div class="modal-body">
            <div class = "form-group">
                <label> Rate: </label>
                <input type="Number" placeholder="Price Rate" class="form-control" id="EditName" name ="rate" required>
            </div>
            <div class = "form-group">
                <label> Description: </label> <button type='button' class='btn btn-default addDescBtn'>+</button>
                <input type="text" placeholder="Description" class="form-control" id="EditDesc" name ="txtDescription" required>
                <div class='additionalDesc'></div>
            </div>
            <div class = "form-group">
                <label> Images: </label>
                <input type="file" class="form-control" name ="rentalImages[]" multiple>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class = "btn btn-success" id="SubmitAdd">UPDATE</button>
            <button type ="button" class = "btn btn-danger" data-dismiss = "modal"> CANCEL </button>
        </div>
      </form>
    </div>

  </div>
</div>
<!-- Modal End -->

<!--Delete Modal -->
<div id="myModalDelete" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!--Delete Modal content-->
    <div class="modal-content">
      <div class="modal-header" style = "background-color: #18D0FF">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Commercial Space</h4>
      </div>
      <div class="modal-body">
      <form>

            <div class = "form-group">
                <label> Description: </label>
                <input type="textarea" placeholder="Description" class="form-control" id="EditDesc" name ="txtDescription" required>
            </div>
            <div class = "form-group">
                <label> Rate: </label>
                <input type="Number" placeholder="Price Rate" class="form-control" id="EditName" name ="txtRate" required>
            </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class = "btn btn-danger" data-dismiss = "modal" id="SubmitEdit">DELETE</button>
        <button type ="button" class = "btn btn-primary" data-dismiss = "modal"> CLOSE </button>
      </div>
    </div>

  </div>
</div>
<!-- Modal End -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="responsive_table.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/apartment/assets/js/jquery.js"></script>
    <script src="/apartment/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="/apartment/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/apartment/assets/js/jquery.scrollTo.min.js"></script>
    <script src="/apartment/assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="/apartment/assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="/apartment/assets/js/maintenance.js"></script>

  </body>
</html>