<?php

session_start();
   
   $userid = $_POST['username'];
   $password =$_POST['password'];

   include('include/db.php');
   $query = mysql_query("select * from `tbl_users` where username='$userid' and password ='$password' ");
   
   if(mysql_num_rows($query)>0){  
   
   $_SESSION['userid']=$userid;
   $_SESSION['id'] = session_id();
   $_SESSION['login_type'] ="admin";
   
    echo'<script> alert("Login Success."); window.location.assign("addcar.php");</script>';
	   
   }
   else{
	   
	   echo'<script> alert("email id or password is wrong.");window.location.assign("index.html")</script>';
   }
   
   
   
   
   
   
?>