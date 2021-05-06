<!--
pinmisolutions
Auther:siddharth k.
Date:0k/10/2018
Description:insert of trip.
-->


<?php session_start();
echo 'hi';
	$vid=$_GET['eid'];
  $firstname= $_SESSION['firstname'];
  $lastname=$_SESSION['lastname'];
  $email=$_SESSION['email'];
  $phone=$_SESSION['phone'];
	$triptype=$_SESSION["triptype"];
  $pickup=$_SESSION["pickup"];
  $pickdate=$_SESSION["pickdate"];
  $picktime=$_SESSION["picktime"];
  $drop=$_SESSION["drop"];
  $dropdate=$_SESSION["dropdate"];
  $droptime=$_SESSION["droptime"];
  //  $vehicle_id=$_POST['id'];
    //$first_name=$_POST['first_name'];
    //$last_name=$_POST['last_name'];
    //$email=$_POST['email'];
    //$mobile=$_POST['mobile'];
    //$vehicle=$_POST['vehicle'];
   

	include ('admin/include/db.php');
	//echo $trip_type;
	
	$query = mysql_query("insert into `trip_insert` (`trip_type`, `pickup_loc`, `pick_date`, `pick_time`, `drop_loc`, `drop_date`, `drop_time`, `vehicle_id`, `first_name`, `last_name`, `email`,`mobile`) VALUES ('$triptype','$pickup','$pickdate','$picktime','$drop','$dropdate','$droptime','$vid','$firstname', '$lastname','$email','$phone')");
	
    
    //$query= mysql_query($con,"INSERT INTO  `tbl_customer`  (first_name, last_name, email, mobile) VALUES ('$first_name', '$last_name','$email','$mobile')");
    
	if($query){
	echo "<script>alert('Data Inserted');
      window.open('secform.php?eid=$vid','_self')</script>";
	}else{
	echo "<script>alert('Data Not Inserted');</script>";
	}

?>