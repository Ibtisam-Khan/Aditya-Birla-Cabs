<?php

include ('include/db.php');

$select = mysql_query("delete from tbl_customer where `cust_id`='".$_GET['del_id']."' ");
header("Location:viewcustomer.php");

?>