<?php

include ('include/db.php');

$select = mysql_query("delete from vehicle_price where `price_id`='".$_GET['del_id']."' ");
header("Location:vehiclepricing.php");

?>