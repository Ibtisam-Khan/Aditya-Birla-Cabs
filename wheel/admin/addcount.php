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
    <?php include('include/header.php');?>
    <!--header end-->
     
    <!--sidebar start-->
    <?php include ('include/sidebar.php'); ?>
    <!--sidebar end-->
     
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
       
<!--        <h3>Add Location</h3>-->
        <!-- BASIC FORM ELELEMNTS -->
           <form class="form-horizontal style-form" method="post" action="update_addcount.php" enctype="multipart/form-data">
        <div class="form-panel">
        <div class="row mt">
          <div class="col-lg-12">
           <!-- <h4 class="mb"> Add Driver Details</h4>-->
              
                <div class="row" > 
                  <div class="col-sm-1">
                  </div>
                    <div class="col-sm-3">
                        <label class="control-label" >Happy Customer</label>
                        <input type="text" name="happy_cust" value=""  placeholder="" class="form-control">
                    </div>
                     <div class="col-sm-3">
                        <label class="control-label" >Total No Of Cars</label>
                        <input type="text" name="tot_no_of_cars"  value="" placeholder="" class="form-control">
                    </div>
                     <div class="col-sm-3">
                        <label class="control-label" >Completed Trips</label>
                        <input type="text" name="comp_trips" value=""  placeholder="" class="form-control">
                    </div>

                   
                    <div class="col-sm-1">
                    <div class="form-group">
                      <label class="control-label col-sm-12">&nbsp;</label>
                      <input type="submit" name="update" value="Update" class="btn btn-info" />
                    </div>
                  </div>
                </div><!--row-->
            
          </div><!--col-->
        </div>
        </div>


          
        <!-- BASIC FORM ELELEMNTS -->
        <div class="form-panel">
        <div class="row mt">
          <div class="col-lg-12">
           <!-- <h4 class="mb"> Add Driver Details</h4>-->
              
                <div class="row" > 
                  <div class="col-sm-1">
                  </div>
                    <label class="col-sm-2 control-label">Banner Image</label>
                    <div class="col-sm-2">
                    <input type="file" class="form-control" name="banner_img">
                    </div>

                   
                    
                    <div class="form-group">
                      <label class="control-label col-sm-12">&nbsp;</label>
                      <input type="submit" name="add" value="Add" class="btn btn-info" />
                    </div>
                  
                </div><!--row-->
            
          </div><!--col-->
        </div>
         </div>
            </form>


            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>S.NO</th>
                    <th>Image</th>
                    <th>Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                 <?php 
                      include ('include/db.php');
                    $i=0;
                      $query = mysql_query("select * from `website_banner` ");
                      while($row= mysql_fetch_array($query)){
                      $i++;
                      ?>
                  <tr class="gradeC">
                    <td><?php echo $i; ?></td>
                    <td><img src="<?php echo $row['banner_img'];  ?>" height="80px" width="100px"></td>
                    <td class="hidden-phone"><input type="submit" class="btn btn-theme04" onClick="confirmDelete(<?php echo $row['banner_id']; ?>)" name="delete" value="Delete"></td>
                    
                  </tr>
                 <?php 
                      }
                    ?>
                  
                </tbody>
              </table>
            </div>
            
   
          <!-- col-lg-12-->
          
       <!-- /row -->
      </section>
        
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
     <?php include('include/footer.php');?>
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
    
    
 <!--delete script-->   
<script language="javascript">
function confirmDelete(delid){
	if( confirm ("are you sure want to delete?")){
		window.location.href='delete_addcount.php?del_id='+delid+'';
		return true;
	}
}
</script>
</body>

</html>
