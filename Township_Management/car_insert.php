<!--
pinmisolutions
Auther:shweta J.
Date:02/10/2018
Description:Insert of add car form.
-->

<?php

	$vehicle_name = $_POST['vehicle_name'];
	$no_of_seats = $_POST['no_of_seats'];
	$vehicletemp=$_FILES['car_img']['tmp_name'];
    $filename = $_FILES['car_img']['name'];
	$filetype = $_FILES['car_img']['type'];
	$filepath = "cars/".$filename;
	move_uploaded_file($vehicletemp,$filepath);
	$price=$_POST['price'];
	
	$hostname="localhost";
    $username="root";
    $password="";
   
    $database2="royalttcabs";
    $dbh2=mysqli_connect($hostname,$username,$password,$database2);
                  
	$query = mysqli_query($dbh2,"insert into `tbl_vehicles` (`vehicle_name`, `no_of_seats`, `car_img`,`price`) values ('$vehicle_name','$no_of_seats','$filepath','$price')");
	
	if($query){
		echo "<script>alert('Data Inserted');
        window.open('cabview.php','_self')</script>";
	}else{
		echo "<script>alert('Data Not Inserted');</script>";
	}

?>