<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<?php 
	include("db.php");
				
			$result = mysqli_query($con,"SELECT * FROM department");
			$count=mysqli_num_rows($result);
 			//$count = mysql_query("SELECT COUNT(*)FROM videos");
			//$count = mysql_query("SELECT COUNT( * ) AS total FROM videos");
     
?>


<div class="block">
        <!-- Styles Title -->
        <div class="block-title">
            <h2>Department List</h2>
  			<?php echo"<h4> Total Department : ".$count."</h4>"; ?>
       <a href="add_dep.php" class='btn btn-sm btn-primary'> Add New Department </a>
        </div>
        <!-- END Styles Title -->

        <!-- Styles Content -->
        <p></p>

        <div class="table-responsive">
            <table id="general-table" class="table" border="1">
                <thead>
                    <tr>
                        
                        
                        <th>Dept No.</th>
                        
                        <th>Department NAME</th>
                        
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
                        <td ><?php echo "".$test['dep_id'];  ?></td>
                        <td ><?php echo "".$test['dep_name'];  ?></td>
                        
                        
                        
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
