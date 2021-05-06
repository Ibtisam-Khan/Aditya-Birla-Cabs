<?php

include ('include/db.php');

$select = mysql_query("delete from tbl_vehicles where `vehicle_id`='".$_GET['del_id']."' ");
header("Location:addcar.php");

?>