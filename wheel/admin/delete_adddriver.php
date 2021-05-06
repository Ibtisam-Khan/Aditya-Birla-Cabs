<?php

include ('include/db.php');

$select = mysql_query("delete from tbl_drivers where `driver_id`='".$_GET['del_id']."' ");
header("Location:adddriver.php");

?>