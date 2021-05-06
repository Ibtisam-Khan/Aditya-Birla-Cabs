<?php include 'inc/Econfig.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<?php

		if(isset($_POST['ok_book']))
		{
		
			
				include "db.php";
			 		$emp_id= $_POST['emp_id'] ;
					$ename= $_POST['ename'] ;					
					$q_id= $_POST['q_id'] ;
					$b_date=$_POST['date'];	
					$extra_booking=$_POST['extra_booking'];	
					$tmpdate=$_POST['tmpdate'];
					$username=$_POST['username'];


			$result1=mysqli_query($con,"SELECT * FROM gas_booking WHERE username='$username'  ");
              $test1=mysqli_fetch_array($result1);            
              $booking_id=$test1['booking_id'];
			  $booking_id=$booking_id+1;
					
				
											
		 $query=mysqli_query($con,"INSERT INTO `gas_booking` 
		 	( emp_id,ename,username,q_id,booking_id,b_date,extra_booking) 
		 	VALUES ('$emp_id','$ename','$username','$q_id','$booking_id','$b_date','$extra_booking')"); 
		 
				if($query)
					{
					
					
					echo"<h2 class='text-primary'>Request Sent successfully... \n <br><br>Further Updates Check On Request Status  </h2>";
					echo"<a href='home.php' class='btn btn-primary'> Home </a>";
					
					}
					else
					{	
					echo"<h2 class='text-primary'>Request Not Sent  \n";
					
						echo"<h1 class='text-primary'> ".mysqli_error($con)."</h1>";
					
					
						
					}	
				
				
					}
				
?>














<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>
