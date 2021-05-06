<!--
pinmisolutions
Auther:shweta J.
Date:04/10/2018
Description:Display of edit add customer.
-->
<?php
if(isset($_REQUEST['eid'])){
	$id = $_REQUEST['eid'];
	include ('include/db.php');
	$query = mysql_query("select l.id,l.from_location,p.trip_type,t.vehicle_id,t.vehicle_name,t.car_img,t.no_of_seats,p.cost_per_km,
                      p.min_km_day,p.base_fare,p.driver_cost,p.total_estimation,p.price_id from `vehicle_price` p ,tbl_vehicles t,from_location l where p.location=l.id and t.vehicle_id=p.vehicle and price_id=$id");
    
	//$sql = mysql_query("select * from vehicle_price where price_id=$id");
	while($row=mysql_fetch_array($query)){
		$location_id=$row['id'];
        $vehicle_id=$row['vehicle_id'];
		$vehicle = $row['vehicle_name'];
		$location = $row['from_location'];
        $trip_type = $row['trip_type'];
         $cost_per_km = $row['cost_per_km'];
          $min_km_day = $row['min_km_day'];
          $base_fare = $row['base_fare'];
          $driver_cost = $row['driver_cost'];
        $total_estimation =$row['total_estimation'];

}

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
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
   <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <?php include('include/header.php'); ?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <?php include ('include/sidebar.php')?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3>Vehicle Details</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="form-panel">
            <form class="form-horizontal style-form" method="post" action="update_vehiclepricing.php">
        <div class="row mt">
          <div class="col-lg-12">
            <h4 class="mb"> add vehicle details</h4>
              
                <div class="row" > 
                  <div class="col-sm-1">
                  </div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="col-sm-2">
                      <label class="control-label" >Location</label>
                      <select  name="location_id"  required  class="form-control"  >
                        <option value="<?php echo $location_id ?>"><?php echo $location; ?></option>
                        <?php
                        include('include/db.php');
                        $query = mysql_query('select * from from_location');
                        while($row=mysql_fetch_assoc($query))
                          {?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['from_location'];?></option>
                        <?php
                          }

                        ?>
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <label class="control-label" >Vehicle</label>
                        <select  name="vehicle_id" required  class="form-control">
                        <option value="<?php echo $vehicle_id; ?>"><?php echo $vehicle; ?></option>
                        <?php
                        include('include/db.php');
                        $query = mysql_query('select * from tbl_vehicles');
                        while($row=mysql_fetch_assoc($query))
                          {?>
                            <option value="<?php echo $row['vehicle_id']?>"><?php echo $row['vehicle_name']?></option>
                        <?php
                          }

                        ?>
                      
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <label class="control-label" >Trip Type</label>
                      <select  name="triptype" required class="form-control" value="" >
                        <option value="<?php echo $trip_type; ?>"><?php echo $trip_type; ?></option>
                        <option value="onewaytrip">OneWay Trip</option>
                        <option value="roundtrip">Round Trip</option>
                      </select>
                    </div>
                    <div class="col-sm-2">
                        <label class="control-label" >Cost Per KM</label>
                        <input type="text" name="costperkm" id="costperkm" value="<?php echo $cost_per_km; ?>" required placeholder="Cost Per KM" class="form-control">
                    </div>
                    <div class="col-sm-2">  
                        <label class="control-label" >Min KM / Day </label>
                        <input type="text" name="minkm" id="minkm" value="<?php echo $min_km_day; ?>" required placeholder="Package KM" class="form-control">
                    </div>
                  </div><!--row-->
                
                </div><!--col-->
              </div>
            
            <div class="row mt">
              <div clas="col-sm-12">
                <div class="col-sm-1">
                </div>  
                  <div class="col-sm-2">
                   
                      <label class="control-label" >Base Fare</label>
                      <input type="text" name="basefare" id="basefare" value="<?php echo $base_fare; ?>" readonly placeholder="Base Fare" class="form-control">
                 
                  </div>

                  <div class="col-sm-2">
                    
                      <label class="control-label" >Driver Cost / Day</label>
                      <input type="text" name="driverbata" id="driverbata" value="<?php echo $driver_cost; ?>" required  class="form-control">
                  
                  </div>

                  <div class="col-sm-2">
                    
                      <label class="control-label" >Total Day</label>
                      <input type="text" name="totalday" readonly value="1" placeholder="Total Day" class="form-control">
                    
                  </div>

                  <div class="col-sm-2">
                    
                      <label class="control-label" >Total Estimation</label>
                      <input type="text" name="totalcost" id="totalcost" readonly value="<?php echo $total_estimation; ?>"  class="form-control">
                   
                  </div>


                  <div class="col-sm-1">
                    
                      <label class="control-label col-sm-12">&nbsp;</label>
                      <input type="submit" name="update" value="Update" class="btn btn-info" />
                   
                  </div>
                </div>
              </div>
                </form>
           

           
       </div>
                
              
          <!-- col-lg-12-->
       <!--</div>-->
       <!-- /row -->
      </section>
        
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <?php include('include/footer.php') ?>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <!--custom switch-->
  <script src="lib/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="lib/jquery.tagsinput.js"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="lib/form-component.js"></script>
<!--table script-->
<script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
<script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
    
 <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
    
    
    
    <script>
            var costperkm = document.getElementById('costperkm').value;
              var minkm = document.getElementById('minkm').value;
              var driverbata = document.getElementById('driverbata').value;

            var costperkmm = document.getElementById('costperkm');
            var minkmm = document.getElementById('minkm');
            var driverbatam = document.getElementById('driverbata');

            var basefare = parseInt(costperkm) * parseInt(minkm);
            var totalcost = parseInt(basefare) + parseInt(driverbata);


            document.getElementById("basefare").value = basefare.toFixed( 2 );
            document.getElementById("totalcost").value = totalcost.toFixed( 2 );

            costperkmm.onkeyup = calctotalbal;
            minkmm.onkeyup = calctotalbal;
            driverbatam.onkeyup = calctotalbal;

            function calctotalbal(){


                  var costperkm = document.getElementById('costperkm').value;
                  var minkm = document.getElementById('minkm').value;
                  var driverbata = document.getElementById('driverbata').value;


                  var basefare = parseInt(costperkm) * parseInt(minkm);
                  var totalcost = parseInt(basefare) + parseInt(driverbata);

                  //var afterdiscount = (parseInt(totalsub) / 100) * parseInt(discount);
                  //var fulltotal = parseInt(totalsub) - parseInt(afterdiscount);

                  document.getElementById("basefare").value = basefare.toFixed( 2 );
                  document.getElementById("totalcost").value = totalcost.toFixed( 2 );

            }

          </script>




    
</body>

</html>
