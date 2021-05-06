<?php

if(isset($_POST["export_excel"]))
{
	$sql="SELECT * FROM booking_details ORDER BY id DESC";
	$result= mysqli_query($connect,$sql);

header("content-type: application/xls");
header("Content-Deposition:attachment, filename:downlaod.xls");

}