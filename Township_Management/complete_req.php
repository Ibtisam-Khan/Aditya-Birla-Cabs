<?php include 'inc/Econfig.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>
<center>
<?php
  include("db.php");  

	$id =$_REQUEST['bid'];	
	
	
	echo" <h3 class='text-primary'>Complete the Feedback - <br > Service Given...? </h3>";
	?>
    <form method="post" >
    
    <?php echo" <a class='btn btn-sm btn-primary' href='pendinglist.php?'> Not Yet </a>" ?>
    <br><br>
    <input class="btn btn-sm btn-primary" type="submit" value="Yes Completed" name="submit"/>
    
    </form>
	<?php
	if(isset($_POST['submit']))
	{
	
	// sending query
	mysqli_query($con,"UPDATE complaint  SET status = 'Completed' WHERE cid = '$id' ")
	or die(mysql_error());  	
	
	echo"<script>location.href='pendinglist.php'</script>";
	}
?>
<br><br><br><br></center> 

<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>

