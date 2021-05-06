<?php
 session_start();
 include 'inc/Econfig.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header
include "db.php";
$service = $_GET['service'];
$ename= $_SESSION['user'];
$result=mysqli_query($con,"SELECT * FROM employee WHERE username='$ename' ");
while($test=mysqli_fetch_array($result))
{
    $ename=$test['ename'];
    $q_id=$test['q_id'];
    $emp_id=$test['emp_id'];
       
}

   ?>
        
    <!-- Bordered Form Block -->
    <div class="block">
        
        <!-- Bordered Form Title -->
        <div class="block-title">
            <h2>Fill and Confirm the Details </h2>
        </div>
        <!-- END Bordered Form Title -->

        <!-- Bordered Form Content -->
        <form action="comp_db.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" >
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Employee ID</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="emp_id" class="form-control" value="<?php echo($emp_id); ?>"  readonly>
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Employee Name</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="ename" class="form-control" value="<?php echo($ename); ?>" readonly>
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
                <label class="col-sm-2 control-label" for="bordered-bio"> Required Service Description</label>
                <div class="col-sm-4">
                    <textarea id="bordered-bio" name="description" rows="4" class="form-control" required></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Date</label>
                <div class="col-sm-4">
                    <input type="date" id="bordered-username" name="date" class="form-control" value="<?php echo (date("Y-m-d")); ?>" readonly>
                </div>
            </div>
            <input type="hidden" name="status" value="pending">

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="reset" class="btn btn-sm btn-default"><i class="fa fa-times"></i> Reset</button>
                   &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i> <input type="submit" name="submit" value="submit" class="btn btn-sm btn-primary"/> 
                </div>
            </div>
        </form>
        <!-- END Bordered Form Content -->
    </div>
    <!-- END Bordered Form Block -->
<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>