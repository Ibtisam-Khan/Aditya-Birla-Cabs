<!--
pinmisolutions
Auther:shweta J.
Date:02/10/2018
Description:insert of vehicle pricing.
-->

<?php

if(isset($_POST['add'])){
	$driver_name = $_POST['driver_name'];
	$mobile_no = $_POST['mobile_no'];
	
	include ('include/db.php');
	
	$query = mysql_query("insert into `tbl_drivers` ( `driver_name`, `contact_no`) values ('$driver_name','$mobile_no')");
	
	if($query){
		echo "<script>alert('Data Inserted');
        window.open('adddriver.php','_self')</script>";
	}else{
		echo "<script>alert('Data Not Inserted');</script>";
	}
}
?>