<!--
pinmisolutions
Auther: shweta jadhav
Date:02-10-2018
Description: database connection of royalttcabs

-->


<?php
$conn =  mysql_connect('localhost','root',''); 
mysql_select_db('royalttcabs',$conn);
if(!$conn){
	die('could not connect:'.mysql_error());
}
?>