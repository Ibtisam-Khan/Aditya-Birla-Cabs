<?php

include ('include/db.php');

$select = mysql_query("delete from wesite_packages where `package_id`='".$_GET['del_id']."' ");
header("Location:addpackage.php");

?>