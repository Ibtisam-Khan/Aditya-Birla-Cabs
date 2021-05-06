<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<?php
  include("db1.php");  

	$id =$_GET['eid'];	
	
	
	echo" <h3 class='text-primary'>Are you really want to Delete ??</h3>";
	?>
    <form method="post" >
    
    <?php echo" <a class='btn btn-sm btn-primary' href='cabview.php?'> Cancel </a>" ?>
    <br><br>
    <input class="btn btn-sm btn-primary" type="submit" value="Delete" name="submit"/>
    
    </form>
	<?php
	#
	if(isset($_POST['submit']))
	{
	
	// sending query
	mysqli_query($con,"DELETE FROM tbl_vehicles WHERE  vehicle_id = '$id' ")
	or die(mysql_error());  	
	
	echo"<script>location.href='cabview.php'</script>";
	}
?> 

<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>

