<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title></title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/datepicker.css">
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
      $(".show").click(function () {
     $("#mydiv").show("fast",function(){
      //alert("Menu is hidden!");
   });
     $("#close").hide("fast",function () {
         // body...
  });
   });
    //To show the menu
     $("#input-val18").click(function () {
     $("#royal").show(function(){

     // alert("Menu is displayed!");
    });
     $("#mydiv").hide("fast",function () {
         // body...
    });
         
   });   
       
       
       
});



  $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#txtDate').attr('min', minDate);
});

</script>
    <script type="text/javascript">

//function submitdata()
//{
 //var pick_loc=document.getElementById( "pick_loce" );
 //var pick_date=document.getElementById( "pick_date" );
 //var pick_time=document.getElementById( "pick_time" );
//var drop_loc=document.getElementById( "drop_loce" );
 //var drop_date=document.getElementById( "drop_date" );
 //var drop_time=document.getElementById( "drop_time" );

 //$.ajax({
  //type: 'post',
  //url: 'trip_book.php',
  //data: {
   //pick_lc:pick_loc,
   //pdate:pick_date,
   //ptime:pick_time,
     //drop_lc:drop_loc,
   //ddate:drop_date_date,
   //dtime:drop_time  
  //},
  //success: function (response) {
   //$('#success__para').html("You data will be saved");
  //}
 //});
	
 //return false;
//}</script>
    </head>
    <body >
        <form action="session.php" method="post">
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
                         <!--<div class="wheel-logo">-->
                            <a href="index-2.html"><img src="images/new_logo.png"  height="100px" width="200px" alt=""></a>
<!--                        </div>-->
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href="http://www.hindalco.com/contact-us"><i class="fa fa-phone"></i><span>Contact us</span></a></div>
                                <div class="top-menu-item"><a href="http://www.hindalco.com/"><i class="fa fa-envelope"></i><span></span>www.hindalco.com</a></div>
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
                             <!--   <div class="top-menu-item">
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
                    <div class="col-sm-9 " style="color: white">
                        <?php
                        include("navbar.php");
                        ?>
                    </div><!--col end/-->
                </div>
            </div>
        </div>
            <div id="close">
        <div class="wheel-start">
            <!--<img src="images/bg1.jpg" alt="" class="wheel-img">-->
            <div class="container padd-lr0">
                <div class="col-lg-6 col-lg-push-6 " style="color:black">
                <!--<img src="images/bg1.jpg" width="500" height="500">-->
                </div>
                <div class="col-lg-6 col-lg-pull-6  padd-lr0">
                   <div id="one_way">
                    <div class="wheel-start-form" style="background: black">

                         <h4 style="color:white">Trip Details</h4><br>
                        
                         <div class="form-group">
                            <label>Firstname</lable>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id='' name="firstname"  placeholder="Enter Your First name" required>
                        </div>

                        
                        <div class="form-group">
                            <label>Lastname</lable>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id='' name="lastname"  placeholder="Enter Your Lastname" required>
                        </div>

                        
                        <div class="form-group">
                            <label>Email Id</lable>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="Email" id='' name="email_id"  placeholder="Enter The Email Id" required>
                        </div>

                        <div class="form-group">
                            <label>Mobile number</lable>
                            <input type="tel" id='' name="Phone" pattern="[0-9]+" minlength="10" maxlength="10"  placeholder="Enter The Mobile Number" required>
                        </div>


                            <select name="trip_type" title="Trip Type" class="form-control" required>
                                   <option value="one way">One Way </option>
                                <option value="two way">Two Way..
                                </option>
                               </select>
                          <br>
                            <label for="input-val12"><span>Picking Up</span>
                            <input type="text" id='input-val12'name="pickup_loc" placeholder="ZIP, City, Airport or Address" required>
                            </label>

                            <div class="form-group">
                            <label>Pickup date</lable>
                            <input type="date" id='txtDate' name="date" pattern="[0-9]+" placeholder="--/--/----" required>
                        </div>







                            <div class="clearfix">

                               
                                <!--<div class="wheel-date">
                                    <span>Pickup Date</span>
                                    <label class="fa fa-calendar">
                                    <input  class="datetimepicker" name="pick_date" id='' type="text" value="" required>
                                  
                                </div>-->

                            <!--<div class="form-group">
                                <label class="col-sm-2 control-label" for="bordered-username">Date of Birth</label>
                                <div class="col-sm-4">
                                <input type="date" id="bordered-username" name="DOB" class="form-control" required>
                                </div>
                            </div>-->
            





                                <div class="wheel-date ">
                                    <span>Pickup time</span>
                                    <label for="input-val14" class="fa fa-clock-o">
                                    <input class="timepicker" name="pick_time" id='input-val14' type="text" value="18:00" required>
                                    </label>
                                </div>
                            </div>
                             <label for="input-val11"><span>Dropping Off</span>
                            <input type="text" id='input-val11' name="drop_loc" placeholder="ZIP, City, Airport or Address" required>
                            </label>
                            <div class="clearfix">
                                <div class="wheel-date">
                                    <span>Return Date</span>
                                    <label for="input-val15" class="fa fa-calendar">
                                    <input  class="datetimepicker" name="drop_date" id='input-val15' type="text" value="">
                                    </label>
                                </div>
                                <div class="wheel-date">
                                    <span>Return Time</span>
                                    <label for="input-val16" class="fa fa-clock-o">
                                    <input class="timepicker" name="drop_time" id='input-val16' type="text" value="18:00">
                                    </label>
                                </div>
                            </div>
                          

                               

                        
                    <button value='submit' class="wheel-btn" style="color:white">
                                   Book Your Favorite Car
                            </button>
                       </div>
                    </div><!--//////////////////////////-->
                    
            </div>
        </div>
    </form>
        <!-- ////////////////////////////////////////////////////////////// -->
        <!--<div class="wheel-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wheel-header text-center marg-lg-t140 marg-lg-b340 marg-md-t140 marg-md-b140 marg-sm-t70 ">
                            <h5>the Biggest Online </h5>
                            <h3>car <span>Rental</span>  Service</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wheel-clients">
            <div class="container padd-lr0">
                <div class="row">
                    <div class="col-md-4 padd-r0 padd-md-lr15">
                        <div class="wheel-service-item text-center wheel-bg3">
                            <div class="wheel-service-logo">
                                <img src="images/ico1.png" alt="">
                            </div>
                            <h5>Most Affordable</h5>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
                        </div>
                    </div>
                    <div class="col-md-4 padd-lr0 padd-md-lr15">
                        <div class="wheel-service-item text-center wheel-service-active wheel-bg4">
                            <div class="wheel-service-logo">
                                <img src="images/ico2.png" alt="">
                            </div>
                            <h5>Best Rated</h5>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
                        </div>
                    </div>
                    <div class="col-md-4 padd-l0 padd-md-lr15">
                        <div class="wheel-service-item  text-center wheel-bg5">
                            <div class="wheel-service-logo">
                                <img src="images/ico3.png" alt="">
                            </div>
                            <h5>Excellent Service</h5>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 ">
                    <div class="wheel-service-img">
                        <img src="images/mycar1.png" style="width: 600px;" alt="" class="wheel-img">
                    </div>
                </div>
            </div>
        </div>-->
        <!-- /////////////////////////////////////////////////// -->
        <!--<div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-header wheel-testi-header text-center marg-lg-t155 marg-lg-b65 marg-md-t50  marg-md-b50">
                        <!--<h3>Our Mission is <span>Client’s</span> Satisfaction</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-testimonial text-center">
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                        <div class="wheel-testimonial-info">
                            <span>Anthony Marshal</span>
                            <img src="images/logo.jpeg" alt="">
                            <p> C.E.O. & Co-Founder</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 padd-lr0 ">
                    <?php 
                    
                    include('admin/include/db.php');
                    $sql = mysql_query('select * from tbl_car_count');
                    while($row=mysql_fetch_array($sql))
                    {
                    ?>
                    
<!--                    <div class="wheel-testimonial-item">
                        <i class="fa fa-users"></i>
                        <span data-to="753" data-speed="10000"></span><b>+</b>
                        <p>Dedicated Employees</p>
                 </div>-->
                    <!--<div class="wheel-testimonial-item">
                        <i class="fa fa-thumbs-o-up"></i>
                        <span data-to="<?php echo $row['happy_customer']; ?>" data-speed="5000"></span><b>+</b>
                        <p>Satisfied Customers</p>
                    </div>
                    <div class="wheel-testimonial-item">
                        <i class="fa  fa-car"></i>
                        <span data-to="<?php echo $row['total_no-cars']; ?>" data-speed="6000"></span><b>+</b>
                        <p>100% Fit Veihicles</p>
                    </div>-->
<!--                    <div class="wheel-testimonial-item">
                        <i class="fa fa-trophy"></i>
                        <span data-to="111" data-speed="1000"></span><b>+</b>
                        <p>Int. Awards Achieved</p>
                </div>
                    
                    <?php } ?>
                </div>
            </div>
        </div>-->
        <!-- /////////////////////////////////////////////////////////// 
        <div class="wheel-collection wheel-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wheel-header text-center marg-lg-t140 marg-lg-b65  marg-md-t50 ">
                            <h5>We have a Great </h5>
                            <h3>collection of <span>vehicles</span></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="tabs">
                            <div class="tabs-header">
                                <ul>
                                    <li class="active"><a href="#">Most Popular</a></li>
                                    <li><a href="#">Newly Added</a></li>
                                    <li><a href="#">On Sale</a></li>
                                </ul>
                            </div>
                            <div class="tabs-content  marg-lg-b30">
                                <div class="tabs-item active ">
                                    <div class="swiper-container" data-autoplay="0" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="2" data-md-slides="4" data-lg-slides="6" data-add-slides="6" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2016 Nissan Juke' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/z-car-1.png'>
                                                    <img src="images/car123/a-r-enterprises-plastic-innova-car-for-kids-original-imaezhyfenbrgtvn.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2016 Chevrolet Malibu' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i32.jpg'>
                                                    <img src="images/car123/chevrolet-tavera-ls-10-diesel.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='Bugatti Veyron' data-carClass='Luxury Sports Car' data-price='2' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i33.jpg'><img src="images/car123/chevrolet-tavera-neo-3---10-diesel.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2016 Audi S4' data-carClass='Luxury Sports Car' data-price='$10' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i34.jpg'><img src="images/car123/indica_wb_350x263.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2017 Hyundai Santa Fe' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i36.jpg'><img src="images/car123/maruti-suzuki-swift-500x500.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='Porsche Boxter Spyder' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i37.jpg'><img src="images/car123/maruti-suzuki-swift-vxi-640.png" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="swiper-arrow-left fa fa-angle-left"></div>
                                        <div class="swiper-arrow-right fa fa-angle-right"></div>
                                        <div class="pagination"></div>
                                    </div>
                                </div>
                                <div class="tabs-item  ">
                                    <div class="swiper-container" data-autoplay="0" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="2" data-md-slides="4" data-lg-slides="6" data-add-slides="6" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2016 Nissan Juke' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/z-car-1.png'><img src="images/i3.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2016 Chevrolet Malibu' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i32.jpg'><img src="images/i5.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='Bugatti Veyron' data-carClass='Luxury Sports Car' data-price='2' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i33.jpg'><img src="images/i3.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2016 Audi S4' data-carClass='Luxury Sports Car' data-price='$10' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i34.jpg'><img src="images/i4.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2017 Hyundai Santa Fe' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i36.jpg'><img src="images/i3.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='Porsche Boxter Spyder' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i37.jpg'><img src="images/i2.png" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="swiper-arrow-left fa fa-angle-left"></div>
                                        <div class="swiper-arrow-right fa fa-angle-right"></div>
                                        <div class="pagination"></div>
                                    </div>
                                </div>
                                <div class="tabs-item  ">
                                    <div class="swiper-container" data-autoplay="0" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="2" data-md-slides="4" data-lg-slides="6" data-add-slides="6" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2016 Nissan Juke' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/z-car-1.png'><img src="images/i3.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2016 Chevrolet Malibu' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i32.jpg'><img src="images/i5.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='Bugatti Veyron' data-carClass='Luxury Sports Car' data-price='2' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i33.jpg'><img src="images/i3.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2016 Audi S4' data-carClass='Luxury Sports Car' data-price='$10' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i34.jpg'><img src="images/i4.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2017 Hyundai Santa Fe' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i36.jpg'><img src="images/i3.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='Porsche Boxter Spyder' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i37.jpg'><img src="images/i2.png" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="swiper-arrow-left fa fa-angle-left"></div>
                                        <div class="swiper-arrow-right fa fa-angle-right"></div>
                                        <div class="pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
              <!--  <div class="row">
                    <div class="col-md-5 padd-lr0">
                        <div class="wheel-collection-info">
                            <div class="wheel-collection-text">
                                <h4 class="car-name">2018 Nissan Juke</h4>
                                <span class="car-class">Luxury Sports Car</span>
                                <h5><b> Rs.5000 <sup>00</sup></b>/Day</h5>
                                <p class="car-text">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit. </p>
                                <ul>
                                    <li><i class="fa fa-suitcase"></i><span class="car-bags">2 Bags</span></li>
                                    <li><i class="fa fa-user"></i><span class="car-passengers">2 Passengers</span></li>
                                    <li><i class="fa fa-tachometer"></i><span class="car-speed">5.6/100 MPG</span></li>
                                </ul>
                                <a href="#" class="wheel-btn">View All rental Car</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 padd-lr0">
                        <div class="wheel-collection-img"><img src="images/i6.png" alt="" class="car-img"></div>
                    </div>
                </div>-->
            </div>
        </div>
        <!-- ////////////////////////////////////////////// -->
        <!--<div class="container padd-lr0">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="wheel-info-img  marg-lg-t150 marg-lg-b150 marg-md-t100 marg-md-b100">
                        <img src="images/i7.png" alt="" class="wheel-img">
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="wheel-info-text  marg-lg-t150 marg-lg-b150 marg-md-t100 marg-md-b100 marg-sm-t50 marg-sm-b50">
                        <div class="wheel-header">
                            <h5>Who we are  </h5>
                            <h3>We Love Our <span>Customers</span></h3>
                        </div>
                        <span>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </span>
                        <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam </p>
                        <a href="#" class="wheel-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- ////////////////////////////////////////////////////// -->
        <!--<div class="wheel-deals text-center">
            <img src="images/bg2.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wheel-header">
                            <h5>Be with us </h5>
                            <h3>We offers great <span>deals</span></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wheel-deals-text">
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                            <a href="#" class="wheel-btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>-->
        <!-- /////////////////////////////////////////////////////// 
      <div class="prosuct-wrap" display="none" >
            <div class="container padd-lr0 xs-padd">
                <div class="row">
                    <div class="col-sm-8">
                        <header class="wheel-header marg-lg-t25 marg-lg-b65">
                            <h3>Search vehicles for your location -<span> India</span></h3>
                        </header>
                    </div>
                    <div class="col-sm-4">
                        <div class="select select-4 wheel-select-w100 marg-lg-t10 marg-lg-b65 marg-sm-b30">
                            <span class="">India</span>
                            <ul class="list">
                                <li>Karnataka</li>
                                <li>maharastra</li>
                                <li>Goa</li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="select select-1">
                            <span class="">All category</span>
                            <ul class="list">
                                <li>All category</li>
                                <li>Item1</li>
                                <li>Item2</li>
                                <li>Item3</li>
                                <li>Item4</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="select select-2">
                            <span class="">All brands</span>
                            <ul class="list">
                                <li>All brands</li>
                                <li>Item1</li>
                                <li>Item2</li>
                                <li>Item3</li>
                                <li>Item4</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="select select-3">
                            <span class="">Any price</span>
                            <ul class="list">
                                <li>Any price</li>
                                <li>Item1</li>
                                <li>Item2</li>
                                <li>Item3</li>
                                <li>Item4</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="wheel-car-list-btn">
                            <a href="#" class="fa fa-th-list active" data-list='product-elem-style1'></a>
                            <a href="#" class="fa fa-th" data-list='product-elem-style2'></a>
                        </div>
                    </div>
                </div>
            </div>-->
  
        <!-- ////////////////////////////////////////// -->
   
          <!--<div class="container padd-lr0 xs-padd"  style=" overflow: hidden;">
     <div id="royal"  style="display:none;" >    
         <?php
            //include("car_div.php");
            ?>
        </div>
          </div>-->

          <!--<?php
          // $var=$id;
           //$s="none";
              // echo $var;
                //if($var){
                //   $s="visible";
               // }
               //?>-->
          
          
          
          
          
        <!-- ///container padd-lr0 xs-padd// -->
<!-- <div id="mydiv"  style="display:<?php// echo $s; ?>   " >
           <div class="wheel-start">
              
               
                         
    
               
               
           <img src="images/bg1.jpg" alt="" class="wheel-img">
            <div class="container padd-lr0">
                <div class="col-lg-6 col-lg-push-6 ">
                    <header class="wheel-header marg-lg-b100 marg-lg-t200  marg-md-b0 marg-md-t0">
                        <h1>We Are Hindalco Travels  </h1>
                        <h2>Search - Hire - Compare - Save</h2>
                        <span>We Help ABH employees to rent car</span>
                    </header>
                </div>-->
                <!--<div class="col-lg-6 col-lg-pull-6  padd-lr0">
                    <div class="wheel-start-form">
                      
                                  <input type="text" name="id" value="<?php //echo $id; ?>">
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
                            <input type="submit" class="wheel-btn" name="add" id="input-val18" value="submit">
                            </label>
                   
                    </div>
                </div>
            </div>
        </div>
                </div>
            </div>-->
        <!-- //////////////////////////////////////////// -->
        <!--<div class="wheel-quote text-center">
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
                                        <h6>aisha</h6>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wheel-quote-item">
                                        <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                        <h6>ashmika</h6>
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
        <!-- /////////////////////////////// 
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
                                <li><span><i class="fa fa-map-marker"></i>#261/54,1<sup>st</sup>Floor,<br>
                                    above Bangarpet chats,<br>
                                    Near Metro Station,<br>
                                    Mahalaxmi Layout,Bangalore-86</span>
                                </li>
                                <li><a href="#"><span><i class="fa fa-phone"></i> +91 9148505597<br>
                                    080-23199733</span></a></li>
                                <li><a href="#"><span><i class="fa fa-envelope"></i>royalttcabs@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="https://www.facebook.com/HindalcoIndustries/" class="fa fa-facebook"></a>
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
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169;  &amp; Developed By
                    <a href="https:www.pinmisolutions.com">Hamdan InfoCom</a></span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                           <li><a href="index-2">Home</a></li>

                            <li><a href="car-list-3col2.php"> Car Listings</a></li>
                            <li><a href="reservation1.php"> Reservation</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>-->
            </form>
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


</html>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
       <script>
$(document).ready(function() {
$("#submit").click(function() {
var name = $("#name").val();
var email = $("#email").val();
var contact = $("#contact").val();
var gender = $("input[type=radio]:checked").val();
var msg = $("#msg").val();
if (name == '' || email == '' || contact == '' || gender == '' || msg == '') {
alert("Insertion Failed Some Fields are Blank....!!");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("refreshform.php", {
name1: name,
email1: email,
contact1: contact,
gender1: gender,
msg1: msg
}, function(data) {
alert(data);
$('#form')[0].reset(); // To reset form fields
});
}
});
});

</script> 