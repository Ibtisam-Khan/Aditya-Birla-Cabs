<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<?php 
	include("db.php");
				
			$result = mysqli_query($con,"SELECT * FROM complaint");
			$count=mysqli_num_rows($result);
 			//$count = mysql_query("SELECT COUNT(*)FROM videos");
			//$count = mysql_query("SELECT COUNT( * ) AS total FROM videos");
     
?>


<div class="block">
        <!-- Styles Title -->
        <div class="block-title">
            <h2>Users List</h2>
  			<?php echo"<h4> Total Complaints : ".$count."</h4>"; ?>
       
        </div>
        <!-- END Styles Title -->

        <!-- Styles Content -->
        <p></p>

        <div class="table-responsive">
            <table id="general-table" class="table" border="1">
                <thead>
                    <tr>
                        
                        
                        <th>C_ID</th>
                        <th>Emp_No</th>
                        <th>Emp_Name</th>
                        <th>Qrt_No</th>
                        <th>Type</th>
                        <th>Description</th>                        
                        <th>Date</th>
                        <th>Status</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
								while($test = mysqli_fetch_array($result))
							{
								$count+=1;
								$bid = $test['cid'];
										

                    ?>

                    <tr>
                        <td ><?php echo "".$test['cid'];  ?></td>
                        <td ><?php echo "".$test['emp_id'];  ?></td>
                        <td ><?php echo "".$test['ename'];  ?></td>
                        <td ><?php echo "".$test['q_id'];  ?></td>
                        <td ><?php echo "".$test['type'];  ?></td>
                        <td ><?php echo "".$test['description'];  ?></td>
                           <td ><?php echo "".$test['cdate'];  ?></td>
                      <td ><?php echo "".$test['status'];  ?></td>
                     
                        
                      <?php if($test['status']!="Cancelled" && $test['status']!="Completed") 
                     {
                     ?>
                     
                        <td><?php echo "<a href ='del_req.php?bid=$bid' class='btn btn-sm btn-primary' >Delete</a>";
                           }
                           else
                            echo "</td><td>";


                        ?>
                            
                        </td>
    
                     <?php 
                     if($test['status']!="Completed" && $test['status']!="Cancelled") 
                     {
                     ?>
                     
                        <td><?php echo "<a href ='complete_req.php?bid=$bid' class='btn btn-sm btn-primary' >Feedback</a>";
                           }
                            else
                            echo "</td><td>";


                        ?>
                            
                        </td>
        
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
