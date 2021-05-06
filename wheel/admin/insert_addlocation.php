<!--
pinmisolutions
Auther:shweta J.
Date:02/10/2018
Description:insert of add location.
-->

<?php

if(isset($_POST['add'])){
	$from_location = $_POST['from_location'];
	
    
	
	include ('include/db.php');
	
	$query = mysql_query("insert into  `from_location` (`from_location`) values ('$from_location')");
	
	if($query){
		echo "<script>alert('Data Inserted');
        window.open('addlocation.php','_self')</script>";
	}else{
		echo "<script>alert('Data Not Inserted');</script>";
	}
}
?>