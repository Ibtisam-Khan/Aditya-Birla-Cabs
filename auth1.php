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
   $username = $_POST['emp-username'];
   $emp_password = $_POST['emp-password']; 
      
      
      $result = mysqli_query($con,"SELECT id FROM employee WHERE username = '$username' AND emp_password = '$emp_password'");
      $row = mysqli_fetch_array($result);
      
      $count = mysqli_num_rows($result);
      session_start();
    	
      if(($count == 1)) {
		  $_SESSION['user']=$username;
		  
         
         echo"<script> location.href='wheel/index-2.php'</script>" ;
		 
		 $count=0;
		 
      }else {
		  session_destroy();
		  echo "<script>alert('Invalid User Name or Password');</script>";
		  echo "<script> location.href='employeedummy.php'</script>";
         //echo "<h1 class='text'> Name or Password is invalid</h1>";
		  echo "<br><br><a  href='employeedummy.php' class='btn '> Try Again </a>";
		 
      }
	  
	  
  
?>
</body>
</html>