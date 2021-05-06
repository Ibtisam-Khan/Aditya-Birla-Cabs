<!--
pinmisolutions
Auther:shweta J.
Date:04/10/2018
Description:update of add location.
-->

<?php

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$from_location = $_POST['from_location'];
	
	include ('include/db.php');
	
	$query = mysql_query("update `from_location` set `from_location`='$from_location' where id='$id'");
	
	if($query){
		echo "<script>alert('Data Updated');
		window.open('addlocation.php','_self')</script>";
		
	}else{
		echo "<script>alert('Data Not Updated');</script>";
	}
}
?>