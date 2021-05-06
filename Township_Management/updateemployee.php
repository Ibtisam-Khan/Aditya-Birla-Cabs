<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>
        
    <!-- Bordered Form Block -->
    <div class="block">
        
        <!-- Bordered Form Title -->
        <div class="block-title">
            <h2>Fill the Employee Details </h2>
        </div>
        <!-- END Bordered Form Title -->

        <!-- Bordered Form Content -->
        <form action="updateemp.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" >
            <?php 
    include("db.php");
            $result = mysqli_query($con,"SELECT * FROM employee where id='$_GET[bid]'");

            while($row=mysqli_fetch_array($result)){
                $id=$_GET['bid'];
                $empid=$_GET['bid'];
                $qid=$row['q_id'];
                $e_name=$row['ename'];
                $padd=$row['permenant_ads'];
                $dob=$row['DOB'];
                $doj=$row['DOJ'];
                $picurl=$row['pic_url'];
                $nofam=$row['no_family_members'];
                $sal=$row['salary'];
                $des=$row['designation'];
                $user=$row['username'];
                $emppas=$row['emp_password'];

            

     ?>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Employee ID</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="emp_id" class="form-control" pattern="[a-zA-Z0-9 ]+" value='<?php echo $empid; ?> ' disabled required>
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Quarter ID</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="q_id"  class="form-control" value=<?php echo $qid; ?> required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Employee Name</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="ename" pattern="[a-zA-Z ]+" class="form-control" value=<?php echo $e_name;?> required>
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Employee Designation</label>
                <div class="col-sm-4">
                    <select name="designation" id="bordered-username">
                        <option value="Associate">Associate</option>
                        <option value="Senior Associate">Senior Associate</option>
                        <option value="Executive">Executive</option>
                        <option value="Senior Executive">Senior Executive</option>
                        <option value="Assistant Manager">Assistant manager</option>
                        <option value="Dy Manager">Dy Manager</option>
                        <option value="Manager">Manager</option>
                        <option value="Senior Manager">Senior Manager</option>
                        <option value="Associate VP">Associate VP</option>
                        <option value="Dy VP">Dy VP</option>
                        <option value="VP">VP</option>
                        <option value="COO">COO</option>


                    </select>
                </div>
            </div>

           <!-- <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Employee Designation</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="designation" pattern="[a-zA-Z ]+"  class="form-control" value=<?php echo $des;?> required>
                </div>
            </div>-->


           <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-bio">Permenant Address</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-bio" name="permenant_ads" rows="4" class="form-control" value=<?php echo $padd;?> required>
                </div>
            </div>
           
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Date of Birth</label>
                <div class="col-sm-4">
                    <input type="date" id="bordered-username" name="DOB" class="form-control" value=<?php echo $dob;?> required>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Date of Joining</label>
                <div class="col-sm-4">
                    <input type="date" id="bordered-username" name="DOJ" class="form-control" value=<?php echo $doj;?> required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Upload Photo</label>
                <div class="col-sm-4">
                   <input type="file" id="pic" name="pic" class="form-control" accept="image/*" capture="environment" value=<?php echo $picurl;?> required >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Number of Family Members</label>
                <div class="col-sm-4">
                    <input type="Number" id="bordered-username" name="no_family_members" class="form-control" value=<?php echo $nofam;?> required>
                </div>
            </div><div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Salary</label>
                <div class="col-sm-4">
                    <input type="Number" id="bordered-username" name="salary" class="form-control" value=<?php echo $sal;?> required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-username">Allocate Username</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-username" name="username" class="form-control" value=<?php echo $user;?> required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="bordered-password-input">Allocate Password</label>
                <div class="col-sm-4">
                    <input type="text" id="bordered-password-input" name="emp_password" class="form-control" value=<?php echo $emppas;?> required>
                    <span class="help-block">Please enter a complex password</span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    <input type="hidden" id="bordered-username" name="status" value="1"  class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="reset" class="btn btn-sm btn-default"><i class="fa fa-times"></i> Reset</button>
                   &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i> <input type="submit" name="submit" value="Update" class="btn btn-sm btn-primary"/> 
                </div>
            </div>
        <?php }?>
        </form>
        <!-- END Bordered Form Content -->
    </div>
    <!-- END Bordered Form Block -->
<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>