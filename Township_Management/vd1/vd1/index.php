<?php

mysql_connect("127.0.0.1","root","");
mysql_select_db("vd1");

if(isset($_POST['submit']))
{
	$name = $_FILES['file']['name'];
	$temp = $_FILES['file']['tmp_name'];
	
	move_uploaded_file($temp,"uploaded/".$name);
	$url = "http://localhost/vd1/vd1/uploaded/$name";
	mysql_query("INSERT INTO `videos` VALUE ('','$name','$url')");
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Video Upload And Playback Tutorial</title>
</head>

<body>

<a href="videos.php">Videos</a>
<form action="index.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file" />
    <input type="submit" name="submit" value="Upload!" />
</form>

<?php

if(isset($_POST['submit']))
{
	echo "<br />".$name." has been uploaded";
}

?>

</body>
</html>