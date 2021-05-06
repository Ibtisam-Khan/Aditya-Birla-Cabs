<!--
pinmisolutions
Auther:siddharth k.
Date:04/10/2018
Description:fetching of packages.
-->

<?php

if(isset($_POST['add'])){
    $package_id=$_POST['package_id'];
	$packages_title = $_POST['packages_title'];
	$packages = $_POST['mobile_no'];
	
	include ('include/db.php');
	
	$query = mysql_query("select * from `wesite_packages` ( `driver_name`, `contact_no`) values ('$driver_name','$mobile_no')");
	
	if($query){
		echo "<script>alert('Data Inserted');
        window.open('adddriver.php','_self')</script>";
	}else{
		echo "<script>alert('Data Not Inserted');</script>";
	}
}
?>