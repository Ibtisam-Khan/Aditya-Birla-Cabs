	 <div class="header-top">
		 <!--container-->
		  <div class="container">
			 <div class="top-nav">
						<div class="logo">
						<a href="#"><img src="images/logo.png" id="section-1" class="img-responsive" alt=""/></a>
						</div>
						<form method="post">
							<span>Log-In</span>
							<select name="user" required>
								<option>Only For Admin </option>
								<option value="admin1">Admin Ground-level</option>
								<option value="admin2">Admin Cab-Mgmnt   </option>
							 </select>
							 <input type="submit" name="submit" value="Go...">
							 <?php
							 if(isset($_POST['submit']))
							 {
							 	$user=$_POST['user'];
							 	if($user=="admin1")
							 	{
							 		echo "<script>location.href='Township_Management/login.php'</script>";
							 	}
							 	if($user=="admin2")
							 	{
							 		echo "<script>location.href='Admin/index.php'</script>";
							 	}
							 	else{
							 		echo "<script>location.href='#'</script>";
							 	}

							 }
							 ?>
						</form>
						<div class="menu">
						<ul id="nav">
							 <li><a href="index.php#section-1"  onclick="javascript:window.open('index.php#section-1','_self')">                            Home</a></li>
							 <li><a href="index.php#section-2"  onclick="javascript:window.open('index.php#section-2','_self')">                           About</a></li>
							 <li><a href="index.php#section-3"  onclick="javascript:window.open('index.php#section-3','_self')">                             Gallery</a></li>
                        <li><a href="category.php" onclick="javascript:window.open('category.php','_self')">Category</a></li>                             
							 <li><a href="index.php#section-4"   onclick="javascript:window.open('index.php#section-4','_self')">                            Advertisements</a></li>
							 <li>
							 	
							 </li>
							 <div class="clearfix"></div>
						 </ul><hr><hr><div style="padding: width=400px;height: 50px">.</div>
						 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 <a href="employeedummy.php" class="btn btn-primary">...Book Your Cab Now...</a>
						 
						 </div>
			 </div>
			  <div class="clearfix"> </div>
			

		 </div>
		 <!--/container-->
	 </div>