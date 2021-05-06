<!--
pinmisolutions
Auther:shweta J.
Date:04/10/2018
Description:update of add car.
-->

<?php

if(isset($_POST['update'])){
	$id = $_POST['id'];
    $photo=$_POST['photo'];
	$vehicle_name = $_POST['vehicle_name'];
    $no_of_seats = $_POST['no_of_seats'];
    $vehicletemp=$_FILES['car_img']['tmp_name'];
    $filename = $_FILES['car_img']['name'];
	$filetype = $_FILES['car_img']['type'];
	
    if($filename){
        $filepath = "cars/".$filename;
        move_uploaded_file($vehicletemp,$filepath);
        
    }
    else{
      $filepath=$photo;
    }
	
	
    
	include ('include/db.php');
	
	$query = mysql_query("update `tbl_vehicles` set `vehicle_name`='$vehicle_name',`no_of_seats`='$no_of_seats',
    `car_img`='$filepath' where vehicle_id='$id'");
	
	if($query){
		echo "<script>alert('Data Updated');
		window.open('addcar.php','_self')</script>";
		
	}else{
		echo "<script>alert('Data Not Updated');</script>";
	}
}
?>