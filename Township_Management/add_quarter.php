<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>
        
    <!-- Bordered Form Block -->
    <div class="block">
        
        <!-- Bordered Form Title -->
        <div class="block-title">
            <h2>Fill the Quarter Details </h2>
        </div>
        <!-- END Bordered Form Title -->

        <!-- Bordered Form Content -->
        <form action="qtr_db.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" >
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Quarter ID</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="q_id" class="form-control" required>
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Quarter Name</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="q_name" class="form-control" required>
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