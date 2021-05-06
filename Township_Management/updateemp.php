<?php
session_start();
 include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>


<?php
//echo"hello";
if (isset($_POST['submit']))
	{	   
	include 'db.php';
			 		$emp_id= $_POST['emp_id'] ;
			 		$q_id= $_POST['q_id'] ;
					$ename= $_POST['ename'] ;					
					$designation=$_POST['designation'] ;
					$permenant_ads=$_POST['permenant_ads'] ;
					$DOB=$_POST['DOB'] ;
					$DOJ=$_POST['DOJ'] ;
					

					$pic_name = $_FILES['pic']['name'];
					$temp = $_FILES['pic']['tmp_name'];
					

					$no_family_members=$_POST['no_family_members'];
					$salary=$_POST['salary'];
					$username=$_POST['username'] ;
					$emp_password=$_POST['emp_password'] ;
					$status=$_POST['status'] ;
					
						//$pic=$_POST['pic']	;
			
					
				move_uploaded_file($temp,"vd1/vd1/uploaded/".$pic_name);
				$pic_url = "vd1/vd1/uploaded/$pic_name";


						
	$sql_u = "SELECT * FROM employee WHERE username='$username'";
  	
  	$res_u = mysqli_query($con, $sql_u);
  	
  {	
					
				
											
		 $query=mysqli_query($con,"UPDATE `employee` SET 
		 	q_id='$q_id', ename='$ename', designation='$designation', permenant_ads='$permenant_ads', DOB='$DOB', DOJ='$DOJ', pic_name='$pic_name',pic_url='$pic_url', no_family_members='$no_family_members', salary='$salary', username='$username', emp_password='$emp_password', status='$status'WHERE emp_id='$emp_id'");
		 	
		 
				if($query!=0)
					{
					
					
					echo"<h2 class='text-primary'>Employee  updated successfully... \n <br></h2>";
					echo"<a href='add_employee.php' class='btn btn-primary'> Add More Employees</a>";
					
					}
					else
					{
						$_SESSION['data_inserted']=0;
						echo"<h1 class='text-primary'> ".mysqli_error($con)."</h1>";
					
					}
						}
						
				
				
 }
 else
 {
	 				echo"<h2 class='text-primary'>Something went wrong  <br><br></h2>";
					echo"<a href='add_employee.php' class='btn btn-primary'> Try Again </a>";
	
	 }
?>
<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>

