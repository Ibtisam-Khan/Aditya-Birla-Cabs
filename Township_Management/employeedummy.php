  <?php include 'inc/Gconfig.php'; // Configuration php file ?>
  <!DOCTYPE html>
  <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
  <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	  <head>
		  <meta charset="utf-8">
  
		  <title><?php echo $template['title'] ?></title>
  
		  <meta name="description" content="<?php echo $template['description'] ?>">
		  <meta name="author" content="<?php echo $template['author'] ?>">
		  <meta name="robots" content="noindex, nofollow">
  
		  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
  
		  <!-- Icons -->
		  <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
		  <link rel="shortcut icon" href="img/favicon.ico">
		  <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
		  <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
		  <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
		  <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
		  <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
		  <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
		  <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
		  <!-- END Icons -->
  
		  <!-- Stylesheets -->
		  <!-- Bootstrap is included in its original form, unaltered -->
		  <link rel="stylesheet" href="css1/bootstrap.css">
  
		  <!-- Related styles of various icon packs and javascript plugins -->
		  <link rel="stylesheet" href="css1/plugins.css">
  
		  <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
		  <link rel="stylesheet" href="css1/main.css">
  
		  <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->
		  <?php if ($template['theme']) { ?>
		  <link id="theme-link" rel="stylesheet" href="css1/themes/<?php echo $template['theme']; ?>.css">
		  <?php } ?>
  
		  <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
		  <link rel="stylesheet" href="css1/themes.css">
		  <!-- END Stylesheets -->
  
		  <!-- Modernizr (Browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
		  <script src="js1/vendor/modernizr-respond.min.js"></script>
	  </head>
	  <body>1
		  <!-- Header -->
		  <header class="navbar navbar-default navbar-fixed-top">
			  <!-- Header Brand -->
			  <div >
				  <!--<img src="img/template/lg1.jpg" alt="FreshUI"-->
				  <span><?php //echo $template['name']; ?></span>
			  </div>
			  <!-- END Header Brand -->
		  </header>
		  <!-- END Header -->
  
		  <!-- Login Container -->
		  <div id="login-container">
			  <!-- Page Content -->
			  <div id="page-content" class="block remove-margin">
				  <!-- Login Title -->
				  <div class="block-header">
					  <div class="header-section">
						  <h1 class="text-center">Welcome to Hindalco Travels</h1>
					  </div>
					  
				  </div>
				  
						  <div class="col-xs-6">
							  <button class="btn btn-lg btn-info btn-block" id="admin-login-btn"> As Employee</button>
						  </div>

				  <!-- END Login Title -->
	  <!-- Social Login -->
						  <!-- END Social Login -->
					  
				  <!-- Login Form -->
				  <form action="auth.php" method="post" id="form-emp" class="form-horizontal">
					  <div class="form-group">
					  <br><br><br>
					  <h3>Dear Employee Please fill the Details</h3>
					  <br>
						  <div class="col-xs-12">
							  <div class="input-group">
								  <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
								  <input type="text" id="emp-username" name="emp_name" class="form-control input-lg" placeholder="Username" required>
							  </div>
						  </div>
					  </div>
					  <div class="form-group">
						  <div class="col-xs-12">
							  <div class="input-group">
								  <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
								  <input type="password" id="Epassword" name="emp_password" class="form-control input-lg" placeholder="Password" required>
							  </div>
						  </div>
					  </div>
					  <div class="form-group">
						  
						  <div class="col-xs-4 text-right">

							  <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-angle-right"></i> Log In </button>
						  </div>
					  </div>
				  </form>
				  <!-- END Login Form -->
  
				  <!-- Modal Terms -->
				 
  
		  <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js1/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>
  
		  <!-- Bootstrap.js, Jquery plugins and custom Javascript code -->
		  <script src="js1/vendor/bootstrap.min.js"></script>
		  <script src="js1/plugins.js"></script>
		  <script src="js1/main.js"></script>
  
		  <!-- Javascript code only for this page -->
		  <script>
			  $(function(){
				  document.getElementById("form-emp").style.display="none";
				  document.getElementById("form-admin").style.display="none";
				  /* Save buttons (remember me and terms) and hidden checkboxes in variables */
				  var checkR  = $('#login-remember'),
					  checkT  = $('#register-terms'),
					  btnR    = $('#btn-remember'),
					  btnT    = $('#btn-terms');
  
				  // Add the 'active' class to button if their checkbox has the property 'checked'
				  if (checkR.prop('checked')) btnR.addClass('active');
				  if (checkT.prop('checked')) btnT.addClass('active');
  
				  // Toggle 'checked' property of hidden checkboxes when buttons are clicked
				  btnR.on('click', function(){ checkR.prop('checked', !checkR.prop('checked')); });
				  btnT.on('click', function(){ checkT.prop('checked', !checkT.prop('checked')); });
  
				  /* Login & Register show-hide */
				  var formAdmin      = $('#form-admin'),
					  formEmp    = $('#form-emp');
  
				  $('#emp-login-btn').click(function(){ formAdmin.slideUp(500); formEmp.slideDown(500); });
				  $('#admin-login-btn').click(function(){ formAdmin.slideDown(500); formEmp.slideUp(500);  });
			  });
		  </script>
	  </body>
  </html>