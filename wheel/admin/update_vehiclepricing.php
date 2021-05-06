<!--
pinmisolutions
Auther:shweta J.
Date:04/10/2018
Description:update of vehicle pricing.
-->

<?php

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$location_id = $_POST['location_id'];
    $vehicle_id = $_POST['vehicle_id'];
    $triptype=$_POST['triptype'];
    $costperkm=$_POST['costperkm'];
    $minkm=$_POST['minkm'];
    $basefare=$_POST['basefare'];
    $driverbata=$_POST['driverbata'];
    $totalday=$_POST['totalday'];
    $totalcost=$_POST['totalcost'];
   
    
	include ('include/db.php');
	
	$query = mysql_query("update `vehicle_price` set `vehicle`='$vehicle_id',`location`='$location_id',
    `trip_type`='$triptype',`cost_per_km`='$costperkm',`min_km_day`='$minkm',`base_fare`='$basefare',
    `driver_cost`='$driverbata',`total_day`='$totalday',`total_estimation`='$totalcost' where price_id='$id'");
	
	if($query){
		echo "<script>alert('Data Updated');
		window.open('vehiclepricing.php','_self')</script>";
		
	}else{
		echo "<script>alert('Data Not Updated');</script>";
	}
}
?>