<!--
pinmisolutions
Auther:shweta J.
Date:02/10/2018
Description:insert of vehicle pricing.
-->

<?php

if(isset($_POST['add'])){
	$location_id = $_POST['location_id'];
	$vehicle_id = $_POST['vehicle_id'];
	$triptype = $_POST['triptype'];
	$costperkm =$_POST['costperkm'];
    $minkm =$_POST['minkm'];
    $basefare =$_POST['basefare'];
    $driverbata =$_POST['driverbata'];
    $totalday =$_POST['totalday'];
    $totalcost =$_POST['totalcost'];
    
	
	include ('include/db.php');
	
	$query = mysql_query("insert into vehicle_price ( `vehicle`, `location`, `trip_type`, `cost_per_km`,`min_km_day`,`base_fare`,`driver_cost`,`total_day`,`total_estimation`) values ('$vehicle_id','$location_id','$triptype','$costperkm','$minkm','$basefare','$driverbata','$totalday',
    '$totalcost')");
	
	if($query){
		echo "<script>alert('Data Inserted');
        window.open('vehiclepricing.php','_self')</script>";
	}else{
		echo "<script>alert('Data Not Inserted');</script>";
	}
}
?>