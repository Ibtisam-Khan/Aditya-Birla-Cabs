<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>
        
    <!-- Bordered Form Block -->
    <div class="block">
        
        <!-- Bordered Form Title -->
        <div class="block-title">
            <h2>Fill the Vehicle Details </h2>
        </div>
        <!-- END Bordered Form Title -->

        <!-- Bordered Form Content -->
        <form action="car_insert.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" >
            <?php 
    include("db1.php");
           

     ?>

           <!-- <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Vehicle ID</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="emp_id" class="form-control" pattern="[a-zA-Z0-9 ]+" value=<?php echo $count+1; ?> required>
                </div>
            </div>-->
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Vehicle Name</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="vehicle_name" pattern="[a-zA-Z ]+" class="form-control" required>
                </div>
            </div>

            

            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">No of Seats</label>
                <div class="col-sm-4">
                    <input type="number" id="bordered-username" name="no_of_seats"  class="form-control" required>
                </div>
            </div>

            
            
            
           
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Upload Photo</label>
                <div class="col-sm-4">
                   <input type="file" id="pic" name="car_img" class="form-control" capture="environment" required >
                </div>
            </div>

        



           &nbsp;&nbsp;&nbsp;
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Price per day</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="price" class="form-control" required>
                </div>
            </div>
           

            
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