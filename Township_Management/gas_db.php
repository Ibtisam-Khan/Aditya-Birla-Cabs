<?php

 include 'inc/Econfig.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>


<?php
//echo"hello";
include "db.php";
if (isset($_POST['submit']))
	{	 


			 		$emp_id= $_POST['emp_id'] ;
					$username= $_POST['username'] ;
					$emname= $_POST['emname'] ;
										
					$q_id= $_POST['q_id'] ;
					$b_date=$_POST['date'];	
					$extra_booking=$_POST['extra_booking'];	
					$tmpdate=$_POST['tmpdate'];
					



			if($extra_booking=="NO")
			{
			$result1=mysqli_query($con,"SELECT * FROM gas_booking WHERE username='$username'  ");
              $test1=mysqli_fetch_array($result1);            
              $booking_id=$test1['booking_id'];
			  $booking_id=$booking_id+1;
				
				
											
		 $query=mysqli_query($con,"INSERT INTO `gas_booking` 
		 	( emp_id,ename,username,q_id,booking_id,b_date,extra_booking) 
		 	VALUES ('$emp_id','$emname','$username','$q_id','$booking_id','$b_date','$extra_booking')"); 
		 
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
					else
					{
						?>
						<h2 class='text-primary'> It is Your Extra Booking <br>
						You Will Be Charged Extra...<br>	
						Confirm Booking..?
						<br><br>
								<form action="extra_book.php" method="POST">

									<input type="hidden"  name="emp_id"  value="<?php echo($emp_id); ?>"  readonly>

										<input type="hidden" name="tmpdate"  value="<?php echo $tmpdate; ?>">

										<input type="hidden"  name="ename"  value="<?php echo($emname); ?>" readonly>

										<input type="hidden"  name="username"  value="<?php echo($username); ?>" readonly>
										
										<input type="hidden"  name="q_id"  value="<?php echo($q_id); ?>" readonly>

										<input type="hidden"  name="extra_booking"  value="<?php echo($extra_booking); ?>" readonly>


										<input type="hidden"  name="date" value="<?php echo (date("Y-m-d")); ?>"  readonly>
  

									<input class="btn-primary" value="Confirm Booking" type="submit"  name="ok_book">
										&nbsp;&nbsp;&nbsp;
										<a href="book_gas.php" class="btn-primary" > Cancel</a>
								</form>
						</h2>

						<?php
					}



	
						
	}

					


					
 
 
?>
<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>

