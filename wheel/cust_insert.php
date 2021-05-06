<!--
pinmisolutions
Auther:siddharth k.
Date:0k/10/2018
Description:insert of trip.
-->

<?php

if(isset($_POST['submit'])){
	
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $vehicle=$_POST['vehicle'];
    $trip_id=$_POST['id'];
	include ('admin/include/db.php');
	
	
	
    
    $query= mysql_query("insert into  `tbl_customer`  (`first_name`,`last_name`,`email`,`mobile`) values ('$first_name', '$last_name','$email','$mobile')");
    
    
    mysql_query("insert into  `tbl_customer`  (`first_name`,`last_name`,`email`,`mobile`,`package_id`) values ('$first_name', '$last_name','$email','$mobile','$trip_id')");
    
	if($query){
		echo "<script>alert('Data Inserted');
        window.open('index-2.php','_self')</script>";
	}else{
		echo "<script>alert('Data Not Inserted');</script>";
	}

}
?>