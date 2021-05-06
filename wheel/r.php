<html>
<head>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

function submitdata()
{
 var name=document.getElementById( "name_of_user" );
 var age=document.getElementById( "age_of_user" );
 var course=document.getElementById( "course_of_user" );

 $.ajax({
  type: 'post',
  url: 'insertdata.php',
  data: {
   user_name:name,
   user_age:age,
   user_course:course
  },
  success: function (response) {
   $('#success__para').html("You data will be saved");
  }
 });
	
 return false;
}

</script>

</head>
<body>
		
<form method="POST" onsubmit="return submitdata();">
 <input type="text" name="username" id="name_of_user">
 <input type="text" name="userage" id="age_of_user">
 <input type="text" name="usercourse" id="course_of_user">
 <input type="submit" name="submit_form" value="Submit">
</form>

<p id="success_para" ></p>

</body>
</html>