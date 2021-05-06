<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <?php include('include/header.php'); ?>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <?php include ('include/sidebar.php');?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
       
        <div class="row mt">
          <div class="col-lg-12">
           
              <?php  
              include('include/db.php');
              $query = mysql_query("select v.vehicle_name,p.cost_per_km,p.min_km_day,p.base_fare,p.driver_cost,p.total_estimation,t.current_date,t.status,t.first_name,t.email,t.mobile,t.trip_type,t.pickup_loc,t.pick_date,t.pick_time,t.drop_date,t.drop_time from trip_insert t ,vehicle_price p, tbl_vehicles v where t.vehicle_id=p.vehicle and p.vehicle=v.vehicle_id");
              
              while($row=mysql_fetch_array($query)){
              ?>
              
              
            <!-- /row - FIRST ROW OF PANELS -->
            
            <div class="row">
              
              <div class="col-lg-6 col-md-6 col-sm-6 mb">
                <!-- WHITE PANEL - TOP USER -->
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5>Order</h5>
                  </div>
                  
                  <div class="row">
                    <label></label>
                  </div>
                </div>
              </div>
              <!-- /col-md-6 -->
               <div class="col-lg-6 col-md-6 col-sm-6 mb">
                <!-- WHITE PANEL - TOP USER -->
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5>Acount Information</h5>
                  </div>
                  
                  <div class="row">
                    
           
            
              
            
            <!-- /content-panel -->
          
                      
                      
                      
                  </div>
                </div>
              </div>
                
                
                
              <!-- /col-md-6 -->
            </div>
            <!-- /row FOURTH ROW OF PANELS -->
            <!--  FIFTH ROW OF PANELS -->
            <div class="row">
             
                 <div class="col-lg-6 col-md-6 col-sm-6 mb">
                <!-- WHITE PANEL - TOP USER -->
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5>Booking Details</h5>
                  </div>
                  
                  <div class="row">
                    
                  </div>
                </div>
              </div>
              <!-- /col-md-6 -->
             
                 <div class="col-lg-6 col-md-6 col-sm-6 mb">
                <!-- WHITE PANEL - TOP USER -->
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5>Vehicle Details</h5>
                  </div>
                  
                  <div class="row">
                    
                  </div>
                </div>
              </div>
                
                
              <!-- /col-md-6 -->
             
                <!-- /panel -->
              </div>
              <!--/ col-md-4 -->
            <div class="row">
             
                 <div class="col-lg-6 col-md-6 col-sm-6 mb">
                <!-- WHITE PANEL - TOP USER -->
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5>Booking status</h5>
                  </div>
                  
                  <div class="row">
                    
                  </div>
                </div>
              </div>
              <!-- /col-md-6 -->
             
                 <div class="col-lg-6 col-md-6 col-sm-6 mb">
                <!-- WHITE PANEL - TOP USER -->
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5>Assign Driver</h5>
                  </div>
                  
                  <div class="row">
                    
                  </div>
                </div>
              </div>
                
                
              <!-- /col-md-6 -->
             
               
              </div>
            <?php } ?>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <?php include('include/footer.php'); ?>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>

</body>

</html>
