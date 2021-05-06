<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<?php 
	$hostname="localhost";
    $username="root";
    $password="";
   
    $database2="royalttcabs";
    $dbh2=mysqli_connect($hostname,$username,$password,$database2);
				
			$result = mysqli_query($dbh2,"SELECT * FROM tbl_vehicles");
	       	$count=mysqli_num_rows($result);
 			//$count = mysql_query("SELECT COUNT(*)FROM videos");
			//$count = mysql_query("SELECT COUNT( * ) AS total FROM videos");
     
?>


<div class="block">
        <!-- Styles Title -->
        <div class="block-title">
            <h2>Cabs List</h2>
  			<?php echo"<h4> Total cabs : ".($count)."</h4>"; ?>
       <a href="cab.php" class='btn btn-sm btn-primary'> Add New vehicle </a>
        </div>
        <!-- END Styles Title -->

        <!-- Styles Content -->
        <p></p>

        <div class="table-responsive">
            <table id="general-table" class="table" border="1">
                <thead>
                  <thead>
                  <tr>
                    <th>S.NO</th>
                    <th>Vehicle Name</th>
                    <th>Vehicle Image</th>
                    <th>NO.Of seats</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    
                    <?php 
                      
                   
                      $query = mysqli_query($dbh2,"select * from `tbl_vehicles` ");
                        $i=0;
                      while($row= mysqli_fetch_array($query)){
                     $i++;
                      ?>
                  <tr class="gradeC">
                    <td><?php echo   $i;; ?></td>
                    <td><?php echo $row['vehicle_name']; ?></td>
                    <td class="hidden-phone"><img src="<?php echo $row['car_img'] ?>" height="60px" width="100px" ></td>
                    <td><?php echo $row['no_of_seats']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td ><a href="del_car.php?eid=<?php echo $row['vehicle_id'];?>"><button class="btn btn-info">Delete</button></a>
                    <!--<input type="submit" class="btn btn-theme04" onClick="confirmDelete(<?php //echo $row['vehicle_id']; ?>)" name="delete" value="Delete"></td>-->
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
