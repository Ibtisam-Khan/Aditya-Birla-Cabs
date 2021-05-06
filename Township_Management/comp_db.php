<?php
session_start();

 include 'inc/Econfig.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>


<?php
//echo"hello";

if (isset($_POST['submit']))
	{	   
	include 'db.php';
					
			 		$emp_id= $_POST['emp_id'] ;
					$ename= $_POST['ename'] ;					
					$q_id= $_POST['q_id'] ;
					$type=$_POST['type'];
					$description=$_POST['description'];
					$cdate=$_POST['date'];	
					$status="pending";	
					$user=$_SESSION['user'];
				
											
		 $query=mysqli_query($con,"INSERT INTO `complaint` 
		 	( emp_id,ename,username,q_id, type,description,cdate,status) 
		 	VALUES ('$emp_id','$ename','$user','$q_id','$type','$description','$cdate','$status')"); 
		 
				if($query)
					{
					
					
					echo"<h2 class='text-primary'>Request Sent successfully... \n <br><br>Further Updates Check On Request Status  </h2>";
					echo"<a href='status.php' class='btn btn-primary'> Home </a>";
					
					}
					else
					{
					
						echo"<h1 class='text-primary'> ".mysqli_error($con)."</h1>";
					
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

