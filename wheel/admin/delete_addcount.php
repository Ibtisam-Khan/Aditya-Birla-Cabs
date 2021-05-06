<?php

include ('include/db.php');

$select = mysql_query("delete from website_banner where `banner_id`='".$_GET['del_id']."' ");
header("Location:addcount.php");

?>