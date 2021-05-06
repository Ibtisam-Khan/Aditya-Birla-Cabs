<?php

 include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>


<?php
//echo"hello";
if (isset($_POST['submit']))
	{	   
	include 'db.php';
					
			 		$q_id= $_POST['q_id'] ;
					$q_name= $_POST['q_name'] ;					
					

						
	$sql_u = "SELECT * FROM quarters WHERE q_name='$q_name'";
  	
  	$res_u = mysqli_query($con, $sql_u);
  	
  	if (mysqli_num_rows($res_u) > 0) {
  	  echo "<h2 class='text-primary'> Sorry... Quarter name already Exist </h2>"; 
  	  echo"<a href='add_quarter.php' class='btn'> Try Again </a>";	
  	}
  	else{	
					
				
											
		 $query=mysqli_query($con,"INSERT INTO `quarters` 
		 	( q_id, q_name) 
		 	VALUES ('$q_id','$q_name')"); 
		 
				if($query!=0)
					{
					
					
					echo"<h2 class='text-primary'>Quarter  added successfully... \n <br></h2>";
					echo"<a href='add_quarter.php' class='btn btn-primary'> Add More Quarters</a>";
					
					}
					else
					{
					
						echo"<h1 class='text-primary'> ".mysqli_error($con)."</h1>";
					
					}
						}
						
				
				
 }
 else
 {
	 				echo"<h2 class='text-primary'>Something went wrong  <br><br></h2>";
					echo"<a href='add_quarter.php' class='btn btn-primary'> Try Again </a>";
	
	 }
?>
<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>

