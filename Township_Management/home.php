<?php 
session_start();
include 'inc/Econfig.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header  

include "db.php";
 ?>

   <!-- User Profile Header -->
    <div class="block-header">
        <div class="row remove-margin">
            <!-- Photo and Name -->
            <div class="col-sm-6">
                <!-- If you do not want a link in the header, instead of .header-title-link you can use a div with the class .header-section -->
                <a href="" class="header-title-link">
                    <img src="img/avatar2.jpg" alt="Avatar" class="profile-photo animation-expandUp img-circle">
                    <h1 class="profile-name">
                      <?php echo"".$_SESSION['user'];
                         $ename=$_SESSION['user']; 
                         $user=$_SESSION['user'];  
                         $result = mysqli_query($con,"SELECT * FROM employee WHERE username='$ename'");
                            $test = mysqli_fetch_array($result);
                            $ename=$test['ename'];
                            $_SESSION['ename']=$ename;
                      ?> <br><small><?php echo"".$ename ?></small>
                    </h1>
                </a>
            </div>
            <!-- END Photo and Name -->

            <!-- Extra Info -->
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-xs-4">
                        <a href="javascript:void(0)" class="header-link">
                             <h1 class="animation-pullDown">

                                <strong> <?php
                                                   
                                                $result = mysqli_query($con,"SELECT * FROM complaint WHERE username='$user'");
                                                $count=mysqli_num_rows($result);
                                                echo "".$count;    
                                            ?>
                                                
                               </strong>
                               <br><small>Total Services Demanded</small>
                            </h1>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="javascript:void(0)" class="header-link">
                            <h1 class="animation-pullDown">
                                <strong><?php
                                                
                                                $result = mysqli_query($con,"SELECT * FROM complaint WHERE username='$user' AND status='completed' ");
                                                $count=mysqli_num_rows($result);
                                                echo "".$count;    
                                            ?></strong><br><small>Completed</small>
                            </h1>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="pendinglist.php" class="header-link">
                            <h1 class="animation-pullDown">
                                <strong><?php
                                                $result = mysqli_query($con,"SELECT * FROM complaint WHERE username='$user' AND status='pending' ");
                                                $count=mysqli_num_rows($result);
                                                echo "".$count;    
                                            ?></strong><br><small>Pending</small>
                            </h1>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END Extra Info -->
        </div>
    </div>
<br>
<div class="block">
    <div class="block-title">
    <center>  <h2><i class="fa fa-mail">&nbsp;&nbsp;</i><u> Administration Notice </u></h2>
        <?php
                                                
          $result = mysqli_query($con,"SELECT * FROM notices WHERE status='active' ");
      while($test = mysqli_fetch_array($result))
      {
        echo"<br><li><h4>".$test['Note']."</h4></li>";
      }    
        ?>

        </center>
    </div>
    </div>
 <div class="block">
        <!-- Grid Gallery Title -->
        <div class="block-title">
          <center>  <h2><i class="fa fa-th-large">&nbsp;&nbsp;</i> Register For Service </h2>
        </center>
        </div>
        <!-- END Grid Gallery Title -->

        <!-- Grid Gallery Content -->
        <div class="gallery">
            <div class="row">
                <a href="book_gas.php">
                <div class="col-sm-4">
                    <img src="img/gas1.png" alt="image">
                    <h3><center><strong>Book Your Gas</strong></center></h3>
                </div>
            </a>
            <a href="add_complaint.php?service=Electricity">
                <div class="col-sm-4">
                    <img src="img/electrical.png" alt="image">
                <h3><center><strong>Electrical Service</strong></center></h3>
                </div>
            </a>
            <a href="add_complaint.php?service=Black-Smith">
                <div class="col-sm-4">
                    <img src="img/blacksmith.jpg" alt="image">
                <h3><center><strong>BlackSmith Service</strong></center></h3>
                </div>
            </a>
               
            </div>
            <hr><hr>
            <div class="row">
                 <a href="add_complaint.php?service=Civil">
                <div class="col-sm-4">
                    <img src="img/civil.jpg" alt="image">
                <h3><center><strong>Civil / Other Services</strong></center></h3>
                </div>
                </a>
                 <a href="add_complaint.php?service=Water_supply">
                <div class="col-sm-4">
                    <img src="img/water.jpg" alt="image">
                <h3><center><strong>Water Service</strong></center></h3>
                </div>
                </a>
                 <a href="add_complaint.php?service=Plumber">
                <div class="col-sm-4">
                    <img src="img/plumber1.jpg" alt="image">
                <h3><center><strong>Plumber Service</strong></center></h3>
                </div>
            </a>
            </div>
        </div>
        <!-- END Grid Gallery Content -->
    </div>

<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>