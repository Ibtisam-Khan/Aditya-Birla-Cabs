<?php
 session_start();
 include 'inc/Econfig.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header
include "db.php";
$service ="Gas_booking";
$ename= $_SESSION['user'];

        $result=mysqli_query($con,"SELECT * FROM employee WHERE username='$ename' ");
        while($test=mysqli_fetch_array($result))
        {
        $emname=$test['ename'];
        $q_id=$test['q_id'];
        $emp_id=$test['emp_id'];
       
        }
        ?>


    
    <!-- Bordered Form Block -->
    
        
        <!-- Bordered Form Title -->
<div class="col-sm-12">
    <div class="col-sm-6">
    <div class="block">
        <div class="block-title">
            <h2>Details of your Last Gas booking </h2>
        </div>
        <div class="table-responsive">
            <table id="general-table" class="table" border="1">
                <thead>
                    <th>
                        Booking Id
                    </th>
                        
                    <th>
                        Booking date
                    </th>
                       
                    <th>
                         Extra Booking
                    </th>
                    
              </thead>
            <?php
            $result1=mysqli_query($con,"SELECT * FROM gas_booking WHERE username='$ename'  ORDER BY id DESC LIMIT 10 ");
            $i=1;
            
            $tmpdate=null;
            $tmps=null;
              while($test1=mysqli_fetch_array($result1))
            {

                echo"<tr>";
                echo"<td>".$test1['booking_id']."</td>";
                echo"<td>".$test1['b_date']."</td>";
                echo"<td>".$test1['extra_booking']."</td>";
                echo"</tr>";
                $i=$i+1;
            }

            $result2=mysqli_query($con,"SELECT * FROM gas_booking WHERE username='$ename'  ORDER BY id DESC LIMIT 10 ");

             $test2=mysqli_fetch_array($result2);
                $tmpdate=$test2['b_date'];
                $tmpid=$test2['booking_id'];
                $tmps=$test2['extra_booking'];
             

            $cdate=date("Y-m-d");
            $datetime1 = date_create($tmpdate );
            $datetime2 = date_create($cdate);
            $interval = date_diff($datetime1, $datetime2);
            $days=$interval->format('%a');
            
            if($days>30 ||$i==1 )
            {
                $ex_booking="NO";
                
            }

            else
           
            {
                $ex_booking="YES";

            }
            
            ?>
                <tr><td colspan="3"></td></tr>
                <tr></tr>            
             <tr style="background-color:#ffcccb;">   
            <td ><strong>Previous Booking : <?php  echo $tmpid;?></td>
            <td ><strong><?php  echo $tmpdate ; ?></td>
            <td><strong><?php  echo $tmps ; ?></strong></td>

            </tr>
            
          </table>
          .
      </div>

    </div>
    </div>
          <div class="col-sm-6">
        <div class="block">
        <div class="block-title">
            <h2>Fill and Confirm the Details </h2>
        </div>
        <!-- END Bordered Form Title -->

        <!-- Bordered Form Content -->
        
        <form action="gas_db.php" method="post" onsubmit="mycheck()" enctype="multipart/form-data" class="form-horizontal form-bordered" >
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Employee ID</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="emp_id" class="form-control" value="<?php echo($emp_id); ?>"  readonly>
                </div>
            </div>
            <input type="hidden" name="tmpdate" id="tdate" value="<?php echo $tmpdate; ?>">
            <input type="hidden" name="username"  value="<?php echo $ename; ?>">
            
             <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Employee Name</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="emname" class="form-control" value="<?php echo($emname); ?>" readonly>
                </div>
            </div>
            

            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Quarter ID</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="q_id" class="form-control" value="<?php echo($q_id); ?>" readonly>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Service Type</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="type" class="form-control" value="<?php echo($service); ?>" readonly>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Date</label>
                <div class="col-sm-4">
                    <input type="date" id="cdate" name="date" class="form-control" value="<?php echo (date("Y-m-d")); ?>"  readonly>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Extra Booking</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="extra_booking" class="form-control" value="<?php echo $ex_booking; ?>" readonly>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <a href="home.php"  class="btn btn-sm btn-default">
                        <i class="fa fa-times"></i> Go Back</a>

                   &nbsp;&nbsp;&nbsp;
                   &nbsp;&nbsp;&nbsp;

                    <input type="submit" name="submit"  value="Confirm Booking" class="btn btn-sm btn-primary"/> 
                </div>
                <br><h6>.</h6>
            </div>
        </form>
    </div>
        <!-- END Bordered Form Content -->
    </div>

</div>
    
    <!-- END Bordered Form Block -->
    <script type="text/javascript">
        function mycheck()
        {

            
            var cdate = document.getElementById("cdate").value;
      
      
            var tdate = document.getElementById("tdate").value;

            
            if(cdate===tdate)
            {
                confirm("It is Your Extra Booking \n Since it is not completed 30 Days ");
            }
            
        }


    </script>
<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>