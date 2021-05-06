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
		  <link rel="stylesheet" href="css/bootstrap.css">
  
		  <!-- Related styles of various icon packs and javascript plugins -->
		  <link rel="stylesheet" href="css/plugins.css">
  
		  <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
		  <link rel="stylesheet" href="css/main.css">
  
		  <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->
		  <?php if ($template['theme']) { ?>
		  <link id="theme-link" rel="stylesheet" href="css/themes/<?php echo $template['theme']; ?>.css">
		  <?php } ?>
  
		  <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
		  <link rel="stylesheet" href="css/themes.css">
		  <!-- END Stylesheets -->
  
		  <!-- Modernizr (Browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
		  <script src="js/vendor/modernizr-respond.min.js"></script>
	  </head>
	  <body>
		  <!-- Header -->
		  <header class="navbar navbar-default navbar-fixed-top">
			  <!-- Header Brand -->
			  <div >
				  <img src="img/template/lg1.jpg" " alt="FreshUI">
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
						  <h1 class="text-center">Welcome to Admin Panel</h1>
					  </div>
					  
				  </div>
				  
						  <div class="col-xs-6">
							  <button class="btn btn-lg btn-info btn-block" id="admin-login-btn"> As Admin</button>
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
  
				  <!-- Register Form -->
  <form action="auth.php" method="post" id="form-admin" class="form-horizontal">
					  <div class="form-group">
					  <br><br><br>
					  <h3>Dear Admin Please fill the Details</h3>
					  <br>
						  <div class="col-xs-12">
							  <div class="input-group">
								  <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
								  <input type="text" id="emp-username" required name="emp-username" class="form-control input-lg" placeholder="Username">
							  </div>
						  </div>
					  </div>
					  <div class="form-group">
						  <div class="col-xs-12">
							  <div class="input-group">
								  <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
								  <input type="password" id="Epassword" required name="emp-password" class="form-control input-lg" placeholder="Password">
							  </div>
						  </div>
					  </div>
					  <div class="form-group">
						  
						  <div class="col-xs-4 text-right">
							  <button type="submit" name="admin" class="btn btn-sm btn-success"><i class="fa fa-angle-right"></i> Log In </button>
						  </div>
					  </div>
				  </form>                <!-- END Register Form -->
  
				  <!-- Modal Terms -->
				  <div id="modal-terms" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
					  <div class="modal-dialog">
						  <div class="modal-content">
							  <div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title">Terms &amp; Conditions</h4>
							  </div>
							  <div class="modal-body">
								  <h4>Title</h4>
								  <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								  <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								  <h4>Title</h4>
								  <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								  <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								  <h4>Title</h4>
								  <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								  <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								  <h4>Title</h4>
								  <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								  <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							  </div>
						  </div>
					  </div>
				  </div>
				  <!-- END Modal Terms -->
			  </div>
			  <!-- END Page Content -->
		  </div>
		  <!-- END Login Container -->
  
		  <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>
  
		  <!-- Bootstrap.js, Jquery plugins and custom Javascript code -->
		  <script src="js/vendor/bootstrap.min.js"></script>
		  <script src="js/plugins.js"></script>
		  <script src="js/main.js"></script>
  
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