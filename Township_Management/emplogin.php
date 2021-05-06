<?php include 'inc/config.php'; // Configuration php file ?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Survey App TV6</title>

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
           
                <img src="img/lg1.jpg" alt="FreshUI">
                <span></span>
            </a>
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
                        <h1 class="text-center">Welcome to TV6 Pro<br><small>Employee login</small></h1>
                    </div>
                </div>
                <!-- END Login Title -->

                <!-- Login Form -->
                <form action="index.php" method="post" id="form-login" class="form-horizontal">
                    <div class="form-group">
                        <!-- Social Login -->
                        
                       
                        <!-- END Social Login -->
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text" id="login-email" name="email" class="form-control input-lg" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" id="login-password" name="password" class="form-control input-lg" placeholder="Password">

                            <!--
                            Hidden checkbox. Its checked property will be toggled every time the remember me (#btn-remember) button is clicked (js code at the bottom)
                            You can add the checked property by default (the button will be enabled automatically)
                            -->
                            <input type="checkbox" id="login-remember" name="login-remember" hidden>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-8">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-default disabled">Remember me?</button>
                                <button type="button" class="btn btn-sm btn-default" data-toggle="button" id="btn-remember"><i class="fa fa-check"></i></button>
                            </div>
                        </div>
                        <div class="col-xs-4 text-right">
                            <button type="submit"  name="sub1" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Login</button>
                        </div>
                    </div>
                    <div class="form-group">
                       
                    </div>
                </form>
                <!-- END Login Form -->

                <!-- Register Form -->
               
                   

                       
                <!-- END Register Form -->

                <!-- Modal Terms -->
               
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
                var formLogin       = $('#form-login'),
                    formRegister    = $('#form-register');

                $('#link-login').click(function(){ formLogin.slideUp(250); formRegister.slideDown(250); });
                $('#link-register').click(function(){ formRegister.slideUp(250); formLogin.slideDown(250); });
            });
        </script>
    </body>
</html>