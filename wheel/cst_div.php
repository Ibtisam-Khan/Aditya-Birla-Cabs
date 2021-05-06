<?php
if(isset($_REQUEST['eid'])){
	$id = $_REQUEST['eid'];
echo $id;

}
?>

<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="royalttcabs - Responsive and Modern Car Rental Website ">
        <meta name="keywords" content="">
        <title></title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script>
   $(document).ready(function() {
    //To hide the menu
     $("#show").click(function () {
     $("#mydiv").show("fast",function(){
      //alert("Menu is hidden!");
    });
   });
    //To show the menu
     $(".pa1").click(function () {
     $(".pa").show(function(){

     // alert("Menu is displayed!");
    });
    
   });    
});
</script>
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index-2.html"><img src="images/royal.jpg" style="width:200px;height: 100px;" alt=""></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href="#"><i class="fa fa-phone"></i><span>(+91) 9741154721</span></a></div>
                                <div class="top-menu-item"><a href="#"><i class="fa fa-envelope"></i><span>www.royalttcabs.com/</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Account
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="register.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-lang-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Eng
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                              <li><a href="#">India</a></li>
                                            <!--
                                            <li><a href="#">Brazil</a></li>
                                            <li><a href="#">France</a></li>
                                            <li><a href="#">Germany</a></li>
                                          
                                            <li><a href="#">Japan</a></li>
                                            <li><a href="#">Serbia</a></li>-->
                                        </ul>
                                    </div>
                                </div>
                                <!--<div class="top-menu-item">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        USD
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">USD</a></li>
                                            <li><a href="#">EUR</a></li>
                                            <li><a href="#">JPY</a></li>
                                            <li><a href="#">DKK</a></li>
                                            <li><a href="#">GBP</a></li>
                                            <li><a href="#">CHF</a></li>
                                            <li><a href="#">NZD</a></li>
                                        </ul>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                       
                       <?php
                       include("navbar.php");
                       ?>
                    </div><!--col end/-->
                </div>
            </div>
        </div>
        <!-- //////////////////////////////// -->
        <div class="wheel-start3">
            <img src="images/bg7.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 padd-lr0">
                        <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                            <h3>Reservation</h3>
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Reservation</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////// -->

                     <div id="mydiv"  >
           <div class="wheel-start" >
              <form action="cust_insert.php" method="post">
               
                         
    
               
               
           <img src="images/bg1.jpg" alt="" class="wheel-img">
            <div class="container padd-lr0">
                <div class="col-lg-6 col-lg-push-6 ">
                    <header class="wheel-header marg-lg-b100 marg-lg-t200  marg-md-b0 marg-md-t0">
                        <h1>We Are Wheel  </h1>
                        <h2>Search - Hire - Compare - Save</h2>
                        <span>We Help you Rent Car in 150+ Countries</span>
                    </header>
                </div>
                <div class="col-lg-6 col-lg-pull-6  padd-lr0">
                    <div class="wheel-start-form">
                      
                              <input type=""   id="" name="id" value="<?php echo $id; ?>" >
                         <div class="form-group">
                            <label>First Name</lable>
                            <input type="text" id='' name="first_name" placeholder="Enter The First Name" required>
                           </div>
                            <div class="form-group">
                            <label> Last Name</lable>
                            <input type="text" id='' name="last_name" placeholder="Enter The Last Name" required>
                           </div>
                               <div class="form-group">
                            <label>Email Id</lable>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id='' name="email" placeholder="Enter The Email Id" required>
                           </div>
                            <div class="form-group">
                            <label> Contact No.</lable>
                            <input type="text" id='' name="mobile" placeholder="Enter The Contact No." required>
                           </div>
                             
                                
                                
                                <div class="wheel-date">
                                    <span>Resident</span>
                                    <select class="selectpicker">
                                        <option>USA</option>
                                        <option>UA</option>
                                        <option>UK</option>
                                        <option>AU</option>
                                        <option>LT</option>
                                        <option>JP</option>
                                        <option>IT</option>
                                    </select>
                                </div>
                           
                            
                            <label for="input-val18" class="promo promo2">
                            <input type="submit" class="wheel-btn" name="submit" id="input-val18" value="submit">
                            </label>
                   
                    </div><!--//-->
                </div>
            </div>
           </form>   
        </div>
                </div>
         
                <!-- ////////////////////////////////////////// -->

        <div class="wheel-quote text-center">
            <img src="images/bg3.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="swiper-container" data-autoplay="7000" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1" data-add-slides="1" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="wheel-quote-item">
                                        <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                        <h6>Alia</h6>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wheel-quote-item">
                                        <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                        <h6>Rashmika</h6>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wheel-quote-item">
                                        <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                        <h6>Vandana</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination"></div>
                        </div>
                        <div class="swiper-outer-left fa fa-angle-left"></div>
                        <div class="swiper-outer-right fa fa-angle-right"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wheel-quote-partners">
                            <a href="#"><img src="images/p1.png" alt=""></a>
                            <a href="#"><img src="images/p2.png" alt=""></a>
                            <a href="#"><img src="images/p3.png" alt=""></a>
                            <a href="#"><img src="images/p4.png" alt=""></a>
                            <a href="#"><img src="images/p5.png" alt=""></a>
                            <a href="#"><img src="images/p6.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////// -->
        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            <h5>Newsletter Signup </h5>
                            <h3>Subscribe & get<span> 20% </span> Off</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Your Email Adddress">
                            <button class="wheel-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href="#"><img src="images/" alt=""></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>Belgaum Karnataka </span>
                                </li>
                                <li><a href="#"><span><i class="fa fa-phone"></i> +91 9741154721</span></a></li>
                                <li><a href="#"><span><i class="fa fa-envelope"></i>www.pinmisolutions.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-linkedin"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item">
                            <h3>Useful Links</h3>
                            <ul>
                                <li><a href="#" class="">About us</a></li>
                                <li><a href="#" class="">Customer Service</a></li>
                                <li><a href="#" class="">Contact Us</a></li>
                                <li><a href="#" class="">Safety Recall</a></li>
                                <li><a href="#" class="">Privacy policy</a></li>
                                <li><a href="#" class="">Site Map</a></li>
                                <li><a href="#" class="">Terms & condition</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                            <h3>Vehicles</h3>
                            <ul>
                                <li><a href="#" class="">Exotic Cars</a></li>
                                <li><a href="#" class="">SUVs</a></li>
                                <li><a href="#" class="">Trucks</a></li>
                                <li><a href="#" class="">Mini Vans</a></li>
                                <li><a href="#" class="">Moving Trucks</a></li>
                                <li><a href="#" class="">Vans</a></li>
                                <li><a href="#" class="">RVs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 padd-lr0">
                        <div class="wheel-footer-gallery">
                            <h3>Photo Gallery</h3>
                            <div class="  clearfix">
                                <div class="wheel-footer-galery-item"><a href="#"><img src="images/i11.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href="#"><img src="images/i12.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href="#"><img src="images/i13.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href="#"><img src="images/i14.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href="#"><img src="images/i15.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href="#"><img src="images/i16.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href="#"><img src="images/i17.jpg" alt=""></a></div>
                                <div class="wheel-footer-galery-item"><a href="#"><img src="images/i18.jpg" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169;</a> &amp; Developed By
                            <a href="https:www.pinmisolutions.com">Pinmi Software Solutions Pvt.Ltd.</a></span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="index-2">Home</a></li>

                            <li><a href="car-list-3col2.php"> Car Listings</a></li>
                            <li><a href="reservation1.php"> Reservation</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                           >
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
 <script>
function show(target) {
    document.getElementById('p').style.display = 'block';
}

function hide(target) {
    document.getElementById('p').style.display = 'none';
}

</script>

</html>