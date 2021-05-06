<?php 
session_start();
include 'inc/Gconfig.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>
<div class="block">
        <!-- Grid Gallery Title -->
        <div class="block-title">
            
            
            <div align="right">

            <?php
            
            if(isset($_SESSION['user']))
            {
                ?>
                
                <a href="home.php">
            <button class="btn-primary" align="right"><h5> Home </h5></button>

            </a>
            
            <a href="logout.php">
            <button class="btn-primary" align="right"><h5> LogOut <?php
                echo "".$_SESSION['user'];
                ?> </h5></button>

            </a>
            <?php
                
            } 
            else   
            {
            ?>    
             <a href="login.php"><button class="btn-primary" align="right"><h5> Admin </h5>
             </button>
            </a>
             <a href="employeedummy1.php"><button class="btn-primary" align="right"><h5> Employee </h5>
             </button>
            </a>

                <?php
                       }
                ?>
           </div>
       </div>
       <CENTER><h1>Welcome To ADITYA BIRLA Hindalco Cab Booking </h1></CENTER>
        
    </div>
        <!-- END Grid Gallery Title -->

        <!-- Grid Gallery Content -->
        <div class="gallery">
            <div class="row">
                
                <div class="col-sm-6">
                    <img src="img/LogoHindalco.png" alt="image" style="width:2000px; height: 400px">
                </div>
                <div class="col-sm-6">
                    <img src="img/hin1.jpg" alt="image" style="width:2000px; height:400px">
                </div>
                <div class="col-sm-4">
                    <img src="img/hin2.jpg" alt="image">
                </div>
                <div class="col-sm-4">
                    <img src="img/hin3.jpg" alt="image">
                </div>
                <div class="col-sm-4">
                    <img src="img/hin4.jpg" alt="image">
                </div>
            </div>
        </div>
        <!-- END Grid Gallery Content -->
    </div>
    <!-- END Grid Gallery Block -->
</div>
<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>