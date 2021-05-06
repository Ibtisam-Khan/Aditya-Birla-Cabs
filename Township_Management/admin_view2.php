<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<?php 
	include("db.php");
				
			$result = mysqli_query($con,"SELECT * FROM quarters");
			$count=mysqli_num_rows($result);
 			//$count = mysql_query("SELECT COUNT(*)FROM videos");
			//$count = mysql_query("SELECT COUNT( * ) AS total FROM videos");
     
?>


<div class="block">
        <!-- Styles Title -->
        <div class="block-title">
            <h2>Quarters List</h2>
  			<?php echo"<h4> Total Quarters : ".$count."</h4>"; ?>
       <a href="add_quarter.php" class='btn btn-sm btn-primary'> Add New Quarter </a>
        </div>
        <!-- END Styles Title -->

        <!-- Styles Content -->
        <p></p>

        <div class="table-responsive">
            <table id="general-table" class="table" border="1">
                <thead>
                    <tr>
                        
                        
                        
                        <th>Quarter No</th>
                        <th>Quarter Name</th>
                        
                        
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
                        <td ><?php echo "".$test['q_id'];  ?></td>
                        <td ><?php echo "".$test['q_name'];  ?></td>
                        
                        
                       
                      	<td><?php echo "<a href ='del_qtr.php?bid=$bid' class='btn btn-sm btn-primary' >Delete</a>";?></td>
	
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
