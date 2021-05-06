<!--
pinmisolutions
Auther:shweta J.
Date:04/10/2018
Description:update of add customer.
-->

<?php

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
	
	include ('include/db.php');
	
	$query = mysql_query("update `tbl_customer` set `first_name`='$first_name',`last_name`='$last_name',
    `email`='$email', `mobile`='$mobile',`password`='$password' where cust_id='$id'");
	
	if($query){
		echo "<script>alert('Data Updated');
		window.open('viewcustomer.php','_self')</script>";
		
	}else{
		echo "<script>alert('Data Not Updated');</script>";
	}
}
?>