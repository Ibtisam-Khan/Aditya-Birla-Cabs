<!--
pinmisolutions
Auther:shweta J.
Date:02/10/2018
Description:Insert of add car form.
-->

<?php

if(isset($_POST['add'])){
	$vehicle_name = $_POST['vehicle_name'];
	$no_of_seats = $_POST['no_of_seats'];
	$vehicletemp=$_FILES['car_img']['tmp_name'];
    $filename = $_FILES['car_img']['name'];
	$filetype = $_FILES['car_img']['type'];
	$filepath = "cars/".$filename;
	
	move_uploaded_file($vehicletemp,$filepath);
	
	include ('include/db.php');
	
	$query = mysql_query("insert into `tbl_vehicles` (`vehicle_name`, `no_of_seats`, `car_img`) values ('$vehicle_name','$no_of_seats','$filepath')");
	
	if($query){
		echo "<script>alert('Data Inserted');
        window.open('addcar.php','_self')</script>";
	}else{
		echo "<script>alert('Data Not Inserted');</script>";
	}
}
?>