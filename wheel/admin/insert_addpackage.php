<!--
pinmisolutions
Auther:shweta J.
Date:02/10/2018
Description:Insert of add car form.
-->

<?php

if(isset($_POST['add'])){
    
   
	$package_title = $_POST['package_title'];
    
	$packages_details = $_POST['packages_details'];
    $package_duration = $_POST['package_duration'];
    $package_description = $_POST['package_description'];
    
	$vehicletemp=$_FILES['package_img']['tmp_name'];
	$filename = $_FILES['package_img']['name'];
	$filetype = $_FILES['package_img']['type'];
	$filepath = "cars/".$filename;
	
	move_uploaded_file($vehicletemp,$filepath);
	
	include ('include/db.php');
	
    
    $query= mysql_query("insert into `wesite_packages` (`package_title`, `packages_details`, `package_duration`, `package_img`, `package_description`) values ('$package_title','$packages_details','$package_duration','$filepath','$package_description')");

	
	if($query){
		echo "<script>alert('Data Inserted');
        window.open('addpackage.php','_self')</script>";
	}else{
		echo "<script>alert('Data Not Inserted');</script>";
	}
}
?>