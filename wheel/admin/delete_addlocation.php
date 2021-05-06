<?php

include ('include/db.php');

$select = mysql_query("delete from from_location where `id`='".$_GET['del_id']."' ");
header("Location:addlocation.php");

?>