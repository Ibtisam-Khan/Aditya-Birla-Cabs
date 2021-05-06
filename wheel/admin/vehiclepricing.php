
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
            <form class="form-horizontal style-form" method="post" action="insert_vehiclepricing.php">
        <div class="row mt">
          <div class="col-lg-12">
            <h4 class="mb"> add vehicle details</h4>
              
                <div class="row" > 
                  <div class="col-sm-1">
                  </div>
                    <div class="col-sm-2">
                      <label class="control-label" >Location</label>
                      <select  name="location_id"  required  class="form-control">
                        <option value="">Select</option>
                        <option value="1">Bangalore</option>
                        <option value="2">Hyderabad</option>
                        <option value="3">Mysore</option>
                        <option value="4">Chennai</option>
                        <option value="5">Pune</option>
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <label class="control-label" >Vehicle</label>
                        <select  name="vehicle_id" required  class="form-control">
                        <option value="">Select</option>
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
                      <select  name="triptype" required class="form-control">
                        <option value="">Select</option>
                        <option value="onewaytrip">OneWay Trip</option>
                        <option value="roundtrip">Round Trip</option>
                      </select>
                    </div>
                    <div class="col-sm-2">
                        <label class="control-label" >Cost Per KM</label>
                        <input type="text" name="costperkm" id="costperkm" value="" required placeholder="Cost Per KM" class="form-control">
                    </div>
                    <div class="col-sm-2">  
                        <label class="control-label" >Min KM / Day </label>
                        <input type="text" name="minkm" id="minkm" value="" required placeholder="Package KM" class="form-control">
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
                      <input type="text" name="basefare" id="basefare" value="" readonly placeholder="Base Fare" class="form-control">
                 
                  </div>

                  <div class="col-sm-2">
                    
                      <label class="control-label" >Driver Cost / Day</label>
                      <input type="text" name="driverbata" id="driverbata" value="" required placeholder="Driver Cost" class="form-control">
                  
                  </div>

                  <div class="col-sm-2">
                    
                      <label class="control-label" >Total Day</label>
                      <input type="text" name="totalday" readonly value="1" placeholder="Total Day" class="form-control">
                    
                  </div>

                  <div class="col-sm-2">
                    
                      <label class="control-label" >Total Estimation</label>
                      <input type="text" name="totalcost" id="totalcost" readonly value="" placeholder="Total Estimation" class="form-control">
                   
                  </div>


                  <div class="col-sm-1">
                    
                      <label class="control-label col-sm-12">&nbsp;</label>
                      <input type="submit" name="add" value="Add" class="btn btn-info" />
                   
                  </div>
                </div>
              </div>
                </form>
           

           
            <div class="adv-table">
                <br><br>
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Location</th>
                    <th>Trip Type</th>
                    <th class="hidden-phone">Vehicle Name</th>
                    <th class="hidden-phone">Vehicle Image</th>
                    <th class="hidden-phone">Fare Details</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <tr class="gradeC">
                      <?php 
                      include ('include/db.php');
                      $query = mysql_query("select l.from_location,p.trip_type,t.vehicle_name,t.car_img,t.no_of_seats,p.cost_per_km,
                      p.min_km_day,p.base_fare,p.driver_cost,p.total_estimation,p.price_id from `vehicle_price` p ,tbl_vehicles t,from_location l where p.location=l.id and t.vehicle_id=p.vehicle ");
                      while($row= mysql_fetch_array($query)){
                      
                      ?>
                    <td><?php echo $row['from_location']; ?></td>
                    <td><?php echo $row['trip_type']; ?></td>
                    <td><?php echo $row['vehicle_name']; ?></td>
                    <td><img src="<?php echo $row['car_img']; ?>" height="60px" width="100px"></td>
                    <td><?php echo 'No.of seats:'.$row['no_of_seats'];  ?><br>
                      <?php echo 'Cost Per KM:'.$row['cost_per_km'];  ?><br>
                      <?php echo 'Min KM Per Day:'.$row['min_km_day'];  ?><br>
                      <?php echo 'Base Fare:'.$row['base_fare'];  ?><br>
                      <?php echo 'Driver Bata:'.$row['driver_cost']; ?><br>
                      <?php echo 'Total Estimation:'.$row['total_estimation']; ?>
                    </td>
                      <td><a href="edit_vehiclepricing.php?eid=<?php echo $row['price_id'];?>"><button class="btn btn-info">Edit</button></a>
                    <input type="submit" class="btn btn-theme04" onClick="confirmDelete(<?php echo $row['price_id']; ?>)" name="delete" value="Delete"></td>
                
                  </tr>
                  
                  <?php }?>
                  
                </tbody>
              </table>
            </div>
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

    
    <!-- delete script-->
<script language="javascript">
function confirmDelete(delid){
  if( confirm ("are you sure want to delete?")){
    window.location.href='delete_vehiclepricing.php?del_id='+delid+'';
    return true;
  }
}
</script>
    
</body>

</html>
