<html>
<head>
<title>Something wrong</title>
</head>
<body >
<style>
.btn{
	padding:20px;
	color:#F70408;
	background-color:#FCF9F9;
	}
.text{
	color:#FF0004;
	}
</style>
<p class="text">
<?php
   include("db.php");
   
if(isset($_POST['admin']))
{

$uname=$_POST['emp-username'];
$pwd=$_POST['emp-password'];



if(($uname=="admin" && $pwd=="admin") )
{
    session_start();

	$_SESSION['admin']=1;
	echo"<script> location.href='index1.php'</script>";
}
else
{
	?> 
    
    <h1 class="text-primary"> User Not Found </h1>  
     <br><br> <a href="login.php" class='btn btn-sm btn-primary' > Try Again </a>  
	
    
   <?php
    
	}
}

      
      $username = $_POST['emp-username'];
      
	  
	  $emp_password = $_POST['emp-password']; 
      
      
      $result = mysqli_query($con,"SELECT id FROM employee WHERE username = '$username' AND emp_password = '$emp_password' AND status = '1' ");
      $row = mysqli_fetch_array($result);
      
      $count = mysqli_num_rows($result);
      session_start();
    	
      if(($count == 1)) {
		  $_SESSION['user']=$username;
		  
         
         echo"<script> location.href='home.php'</script>" ;
		 
		 $count=0;
		 
      }else {
		  session_destroy();
		  echo "<script>alert('Invalid User Name or Password');</script>";
		  echo "<script> location.href='login.php'</script>";
		  echo "<br><br><a  href='login.php' class='btn '> Try Again </a>";
		  //echo "<br><br><a  href='login.php' class='btn '> Try Again </a>";
         		//echo "<h1 class='text'> Name or Password is invalid</h1>";
		  //echo "<br><br><a  href='login.php' class='btn '> Try Again </a>";
		
            }

	  
	  
  
?>
</body>
</html>