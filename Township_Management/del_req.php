<?php include 'inc/Econfig.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<?php
  include("db.php");  

	$id =$_REQUEST['bid'];	
	
	
	echo" <h3 class='text-primary'>Are you really want to Delete ??</h3>";
	?>
    <form method="post" >
    
    <?php echo" <a class='btn btn-sm btn-primary' href='pendinglist.php?'> Cancel </a>" ?>
    <br><br>
    <input class="btn btn-sm btn-primary" type="submit" value="Delete" name="submit"/>
    
    </form>
	<?php
	if(isset($_POST['submit']))
	{
	
	// sending query
	mysqli_query($con,"UPDATE complaint  SET status = 'Cancelled' WHERE cid = '$id' ")
	or die(mysql_error());  	
	
	echo"<script>location.href='pendinglist.php'</script>";
	}
?> 

<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>

