<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="royalttcabs - Responsive and Modern Car Rental Website">
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
    </head>
    <body class=" wheel-bg2 ">
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
<!--                       <div class="wheel-logo">-->-->
                            <a href="index-2.html"><img src="images/new_logo.png"  height="100px" width="200px" alt=""></a>
<!--                        </div>-->
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                               <div class="top-menu-item"><a href="#"><i class="fa fa-phone"></i><span></span>(+91) 9148505597</a></div>
                                <div class="top-menu-item"><a href="royalttcabs24@gmail.com"><i class="fa fa-envelope"></i><span></span>www.hindalco.adityabirla.com</a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Account
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="register.html">Logout</a></li>
                                            
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
                                           <!-- <li><a href="#">Brazil</a></li>
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
                    <div class="col-sm-9 ">
                       <?php
                       include("navbar.php");
                       ?>
                            
                        </div>
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
                            <h3>Listing - Car List</h3>
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Listing</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////// -->
        <div class="prosuct-wrap">
            <div class="container padd-lr0 xs-padd">
                <div class="row">
                    <div class="col-sm-8">
                        <header class="wheel-header marg-lg-t25 marg-lg-b65">
                            <h3>Search vehicles for your location -<span> India</span></h3>
                        </header>
                    </div>
                   
                </div>
                         </div>
<div class="container">
     <div class="row">
                         <?php 
                      include ('admin/include/db.php');
                     //$query = mysql_query("select l.from_location,p.trip_type,t.vehicle_name,t.car_img,t.no_of_seats,p.cost_per_km,
                      //p.min_km_day,p.base_fare,p.driver_cost,p.total_estimation,p.price_id ,p.vehicle,p.driver_cost from `vehicle_price` p ,tbl_vehicles t,from_location l where p.location=l.id and t.vehicle_id=p.vehicle ");
                      $query = mysql_query("select vehicle_id,vehicle_name,car_img,no_of_seats,price from tbl_vehicles");
                      while($row= mysql_fetch_array($query)){
                      
                          //$from_ocation=$row['from_location'];
                          $vehicle_id=$row['vehicle_id'];
                          $vehicle_name=$row['vehicle_name'];
                          $car_img='admin/'.$row['car_img'];
                          $no_of_seats=$row['no_of_seats'];
                          $price=$row['price']
                         // $cost_per_km=$row['cost_per_km'];
                          //$min_km_day=$row['min_km_day'];
                          //$base_fare=$row['base_fare'];
                          //$driver_cost=$row['driver_cost'];
                          //$total_estimation=$row['total_estimation'];
                            // $vehicle_id=$row['vehicle'];
                          //$driver_cost=$row['driver_cost'];
                      ?>
                        
    
    
 
    <div class="col-md-6">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="<?php echo $car_img; ?>" alt="Lights" style="height:200px; background: white ">
          
         </a>
            
         <div class="caption">    
         <center><h3 class="pa1"><?php echo $vehicle_name; ?></h3>

            <center><h5 class="pa1"> <?php echo  $no_of_seats; ?> seats</h5>
            <h6> Price: <?php echo  $price; ?> </h5>
          </div>  
    <a href="trip_book.php?eid=<?php echo $vehicle_id;?>">
                         <center><button class="show" style="background:black;color:white">Get This Cab</button>
                                         
                                            </a></center>
      </div>
    </div>
      
      
  <?php    
      	}
?>
    
      
      
    
  </div><!--end of row-->
   
  
  
</div><!--containerend -->
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                     <!--   <div class="col-lg-4  col-md-6">
                            <div class="product-elem-style2 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                    <div class="img-wrap img-wrap2 product-cell">
                                        <img src="images/innova_color4.png" alt="img" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
                                        <div class="title">Toyota Innova</div>
                                        <div class="price-wrap product-cell">
                                            <span></span><sup></sup>
                                        </div>
                                    </div><br><br><br>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="images/innova_color4.png" alt="img" class="img-responsive">
                                    </div><br><br>
                                    <div class="text-wrap  text-wrap3 product-cell">
                                        <ul class="metadata metadata2">
                                            <li>7 seats</li>
                                            <li>2 bags</li>
                                            <li>150 mpg</li>
                                            <li>airbags</li>
                                            <li>manual/auto</li>
                                            <li>ac</li>
                                        </ul>
                                        <div class="wheel-view-link">
                                            <a href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                      <!---  <div class="col-lg-4  col-md-6">
                            <div class="product-elem-style2 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                    <div class="img-wrap img-wrap2 product-cell">
                                        <img src="images/super-white.jpg" alt="img" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
                                        <div class="title">Toyota Innnova Crysta</div>
                                        <div class="price-wrap product-cell">
                                            <span></span><sup></sup>
                                        </div>
                                    </div><br><br>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="images/super-white.jpg" alt="img" class="img-responsive">
                                    </div>
                                    <div class="text-wrap  text-wrap3 product-cell">
                                        <ul class="metadata metadata2">
                                            <li>7 seats</li>
                                            <li>2 bags</li>
                                            <li>150 mpg</li>
                                            <li>airbags</li>
                                            <li>manual/auto</li>
                                            <li>ac</li>
                                        </ul>
                                        <div class="wheel-view-link">
                                            <a href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6">
                            <div class="product-elem-style2 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                    <div class="img-wrap img-wrap2 product-cell">
                                        <img src="images/11_Summit-white.jpg" alt="img" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
                                        <div class="title">Tavera</div>
                                        <div class="price-wrap product-cell">
                                            <span></span><sup></sup>
                                        </div>
                                    </div>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="images/11_Summit-white.jpg" alt="img" class="img-responsive">
                                    </div><br>
                                    <div class="text-wrap  text-wrap3 product-cell">
                                        <ul class="metadata metadata2">
                                            <li>9 seats</li>
                                            <li>2 bags</li>
                                            <li>150 mpg</li>
                                            <li>airbags</li>
                                            <li>manual/auto</li>
                                            <li>ac</li>
                                        </ul>
                                        <div class="wheel-view-link">
                                            <a href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                <!--        <div class="col-lg-4  col-md-6">
                            <div class="product-elem-style2 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                    <div class="img-wrap img-wrap2 product-cell">
                                        <img src="images/swift.jpg" alt="img" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
                                        <div class="title">Swift Dzire/Atios/Verito</div>
                                        <div class="price-wrap product-cell">
                                            <span></span><sup></sup>
                                        </div>
                                    </div><br><br><br>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="images/swift.jpg" alt="img" class="img-responsive">
                                    </div><br><br><br>
                                    <div class="text-wrap  text-wrap3 product-cell">
                                        <ul class="metadata metadata2">
                                            <li>4 seats</li>
                                            <li>2 bags</li>
                                            <li>150 mpg</li>
                                            <li>airbags</li>
                                            <li>manual/auto</li>
                                            <li>ac</li>
                                        </ul>
                                        <div class="wheel-view-link">
                                            <a href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                      <!--  <div class="col-lg-4  col-md-6">
                            <div class="product-elem-style2 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                    <div class="img-wrap img-wrap2 product-cell">
                                        <img src="images/14-seater-tempo-traveler.png" alt="img" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
                                        <div class="title">Force Traveller Non Ac</div>
                                        <div class="price-wrap product-cell">
                                            <span></span><sup></sup>
                                        </div>
                                    </div><br>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="images/14-seater-tempo-traveler.png" alt="img" class="img-responsive">
                                    </div>
                                    <div class="text-wrap  text-wrap3 product-cell">
                                        <ul class="metadata metadata2">
                                            <li>12 seats</li>
                                            <li>2 bags</li>
                                            <li>150 mpg</li>
                                            <li>airbags</li>
                                            <li>manual/auto</li>
                                            <li>ac</li>
                                        </ul>
                                        <div class="wheel-view-link">
                                            <a href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                     <!--   <div class="col-lg-4  col-md-6">
                            <div class="product-elem-style2 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                    <div class="img-wrap img-wrap2 product-cell">
                                        <img src="images/tempo20.png" alt="img" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
                                        <div class="title">Force Traveller Ac</div>
                                        <div class="price-wrap product-cell">
                                            <span></span><sup></sup>
                                        </div>
                                    </div><br><br><br>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="images/tempo20.png" alt="img" class="img-responsive">
                                    </div><br><br>
                                    <div class="text-wrap  text-wrap3 product-cell">
                                        <ul class="metadata metadata2">
                                            <li>12 seats</li>
                                            <li>2 bags</li>
                                            <li>150 mpg</li>
                                            <li>airbags</li>
                                            <li>manual/auto</li>
                                            <li>ac</li>
                                        </ul>
                                        <div class="wheel-view-link">
                                            <a href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                      <!--  <div class="col-lg-4  col-md-6">
                            <div class="product-elem-style2 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                    <div class="img-wrap img-wrap2 product-cell">
                                        <img src="images/minibus_content_85_content_85.jpg" alt="img" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
                                        <div class="title">Bus</div>
                                        <div class="price-wrap product-cell">
                                            <span></span><sup></sup>
                                        </div>
                                    </div><br>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="images/minibus_content_85_content_85.jpg" alt="img" class="img-responsive">
                                    </div>
                                    <div class="text-wrap  text-wrap3 product-cell">
                                        <ul class="metadata metadata2">
                                            <li>23 seats</li>
                                            <li>2 bags</li>
                                            <li>150 mpg</li>
                                            <li>airbags</li>
                                            <li>manual/auto</li>
                                            <li>ac</li>
                                        </ul>
                                        <div class="wheel-view-link">
                                            <a href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                      <!--  <div class="col-lg-4  col-md-6">
                            <div class="product-elem-style2 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                    <div class="img-wrap img-wrap2 product-cell">
                                        <img src="images/i30.jpg" alt="img" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
                                        <div class="title">201 Audi S4</div>
                                        <div class="price-wrap product-cell">
                                            <span>Rs.500000</span><sup>00</sup>/Day
                                        </div>
                                    </div>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="images/i34.jpg" alt="img" class="img-responsive">
                                    </div>
                                    <div class="text-wrap  text-wrap3 product-cell">
                                        <ul class="metadata metadata2">
                                            <li>2 seats</li>
                                            <li>2 bags</li>
                                            <li>150 mpg</li>
                                            <li>airbags</li>
                                            <li>manual/auto</li>
                                            <li>ac</li>
                                        </ul>
                                        <div class="wheel-view-link">
                                            <a href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                   
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 padd-lr0 text-center">
                        <div class="wheel-page-pagination marg-lg-t60 marg-lg-b25  ">
                            <a class="prev page-numbers fa fa-arrow-left" href="#"></a>
                            <a class="page-numbers" href="#">1</a>
                            <span class="page-numbers current">2</span>
                            <a class="page-numbers" href="#">3</a>
                            <a class="page-numbers" href="#">4</a>
                            <a class="next page-numbers fa fa-arrow-right" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////// -->
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
        </div>-->
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
                                <li><span><i class="fa fa-map-marker"></i>
                                    Nehru Nagar Opposite Village, <br>P.B Road NH4,<br> Yamanapur, Belgaum, Karnataka 590010</span>
                                </li>
                                <li><a href="#"><span><i class="fa fa-phone"></i> (+91) 8312472716<br>
                                    </span></a></li>
                                <li><a href="http://www.hindalco.com/"><span><i class="fa fa-globe"></i>www.hindalco.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                 <a href="https://twitter.com/hindalco_world" class="fa fa-twitter"></a>
                                <a href="https://www.facebook.com/HindalcoIndustries" class="fa fa-facebook"></a>
                                <a href="https://www.linkedin.com/company/hindal" class="fa fa-linkedin"></a>
                                <a href="https://www.instagram.com/adityabirlagrp" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item">
                            <h3>Useful Links</h3>
                            <ul>
                                <li><a href="index-2.php" class="">Home</a></li>
                                <li><a href="car-list-3col2.php" class="">Car Listing</a></li>
                                <li><a href="contact" class="">Contact Us</a></li>
                                <!-- <li><a href="#" class="">Safety Recall</a></li> -->
                         <!-- <li><a href="#" class="">Privacy policy</a></li> -->
                                <li><a href="reservation1.php" class=""> Packages</a></li>
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
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169;   &amp; Developed By 
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

</html>