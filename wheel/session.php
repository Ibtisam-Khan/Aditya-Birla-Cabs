<?php session_start();

    $first_name=$_POST['firstname'];
    $last_name=$_POST['lastname'];
    $email=$_POST['email_id'];
    $phone=$_POST['Phone'];
	$trip_type = $_POST['trip_type'];
	$pickup_loc=$_POST['pickup_loc'];
    $pick_date=$_POST['date'];
	$pick_time=$_POST['pick_time'];
    $drop_loc=$_POST['drop_loc'];
    $drop_date=$_POST['drop_date'];
    $drop_time=$_POST['drop_time'];
  //  $vehicle_id=$_POST['id'];
    //$first_name=$_POST['first_name'];
    //$last_name=$_POST['last_name'];
    //$email=$_POST['email'];
    //$mobile=$_POST['mobile'];
    //$vehicle=$_POST['vehicle'];
    $_SESSION['firstname']=$first_name;
   $_SESSION['lastname']=$last_name;
   $_SESSION['email']=$email;
   $_SESSION['phone']=$phone;
   echo$_SESSION["triptype"]=$trip_type;
   echo$_SESSION["pickup"]=$pickup_loc;
   echo$_SESSION["pickdate"]=$pick_date;
   echo$_SESSION["picktime"]=$pick_time;
   echo$_SESSION["drop"]=$drop_loc;
   echo$_SESSION["dropdate"]=$drop_date;
   echo$_SESSION["droptime"]=$drop_time;
  echo $_SESSION["triptype"];
   echo 
"<script>alert('Data Inserted');
 window.open('car-list-3col2.php','_self')</script>";
 