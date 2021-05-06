<!--
pinmisolutions
Auther:shweta J.
Date:02/10/2018
Description:insert of vehicle pricing.
-->

<?php

if(isset($_POST['update'])){
	$happy_cust =$_POST['happy_cust'];
	$tot_no_of_cars =$_POST['tot_no_of_cars'];
	$comp_trips =$_POST['comp_trips'];
	
    
	
	include ('include/db.php');
	
	$query = mysql_query("UPDATE `tbl_car_count` SET `happy_customer`='$happy_cust', `total_no-cars`='$tot_no_of_cars', `completed_trips`='$comp_trips' WHERE id=1 ");
	
	if($query){
		echo "<script>alert('Data updated');</script>";
	}else{
		echo "<script>alert('Data Not Inserted');</script>";
	}
}



if(isset($_POST['add'])){
    
    $vehicletemp=$_FILES['banner_img']['tmp_name'];
	$filename = $_FILES['banner_img']['name'];
	$filetype = $_FILES['banner_img']['type'];
	$filepath = "cars/".$filename;
	
	move_uploaded_file($vehicletemp,$filepath);
	
	include ('include/db.php');
 
    $query = mysql_query("insert into `website_banner` ( `banner_img`) values ('$filepath')");
	
	if($query){
		echo "<script>alert('Data Inserted');</script>";
	}else{
		echo "<script>alert('Data Not Inserted');</script>";
}
}
?>