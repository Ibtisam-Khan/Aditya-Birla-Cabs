<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<?php 
	include("db.php");
				
			$result = mysqli_query($con,"SELECT * FROM employee WHERE status='1'");
			$count=mysqli_num_rows($result);
			$query = mysqli_query($con,"SELECT * FROM employee WHERE status='1'");
			

 			//$count = mysql_query("SELECT COUNT(*)FROM videos");
			//$count = mysql_query("SELECT COUNT( * ) AS total FROM videos");
     
?>


<div class="block">
        <!-- Styles Title -->
        <div class="block-title">
            <h2>Users List</h2>
  			<?php echo"<h4> Total Employee : ".($count+1)."</h4>"; ?>
       <a href="add_employee.php" class='btn btn-sm btn-primary'> Add New Employee </a>
        </div>
        <!-- END Styles Title -->

        <!-- Styles Content -->
        <p></p>

        <div class="table-responsive">
            <table id="general-table" class="table" border="1">
                <thead>
                    <tr>
                        
                        
                        <th>ID</th>
                        <th>Emp_No</th>
                        <th>Qrt_No</th>
                        
                        <th>NAME</th>
                        
                        <th >Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
								while($test = mysqli_fetch_array($result))
							{
								$count+=1;
								$bid = $test['id'];
										

                    ?>

                    <tr>
                        <td ><?php echo "".$test['id'];  ?></td>
                        <td ><?php echo "".$test['emp_id'];  ?></td>
                        <td ><?php echo "".$test['q_id'];  ?></td>
                        <td ><?php echo "".$test['ename'];  ?></td>
                        
                        
                        <td><?php echo "<a href ='detailed_view.php?bid=$bid' class='btn btn-sm btn-primary' >All Information</a>";?></td>
    
                      	<td><?php echo "<a href ='del_emp.php?bid=$bid' class='btn btn-sm btn-primary' >Delete</a>";?></td>
	
                    </tr>
				<?php } ?>                    
                </tbody>
 		</table>
        </div>
        <!-- END Styles Content -->
    </div>
    <!-- END Styles Block -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->

<?php include 'inc/bottom.php'; // Close body and html tags ?>
