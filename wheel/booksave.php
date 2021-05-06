<!--
pinmisolutions
Auther:siddharth k.
Date:0k/10/2018
Description:insert of trip.
-->


<?php session_start();
	$firstname2=$_POST['firstname2'];
  $lastname2=$_POST['lastname2'];
  $emailid2=$_POST['emailid2'];
  $pdate=$_POST['pdate'];

  $vname=$_POST['vname'];
  echo $vname;
  $price=$_POST['tamount'];
  
  //  $vehicle_id=$_POST['id'];
    //$first_name=$_POST['first_name'];
    //$last_name=$_POST['last_name'];
    //$email=$_POST['email'];
    //$mobile=$_POST['mobile'];
    //$vehicle=$_POST['vehicle'];
   

	include ('admin/include/db.php');
	//echo $trip_type;
	
	$query = mysql_query("insert into `booking_details` (`firstname`, `lastname`, `email`, `pickupdate`, `vehiclename`, `pricediscount`) VALUES ('$firstname2','$lastname2','$emailid2','$pdate','$vname','$price')");
	
    
    //$query= mysql_query($con,"INSERT INTO  `tbl_customer`  (first_name, last_name, email, mobile) VALUES ('$first_name', '$last_name','$email','$mobile')");
   
	if($query)
  {
	echo "<script>alert('Data Inserted');
      window.open('card_save.php?email=$emailid2','_self')</script>";
}else{
	echo "<script>alert('Data Not Inserted');</script>";
	}

?>