<!--
pinmisolutions
Auther:shweta J.
Date:03/10/2018
Description:Insert of add car form.
-->

<?php

if(isset($_POST['add'])){
    
   
	$first_name = $_POST['first_name'];
    
	$last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
 
    
	
	include ('include/db.php');
	
    
    $query= mysql_query("insert into `tbl_customer` (`first_name`, `last_name`, `email`, `mobile`, `password`) values ('$first_name','$last_name','$email','$mobile','$password')");

	
	if($query){
		echo "<script>alert('Data Inserted');
        window.open('addcustomer.php','_self')</script>";
	}else{
		echo "<script>alert('Data Not Inserted');</script>";
	}
}
?>