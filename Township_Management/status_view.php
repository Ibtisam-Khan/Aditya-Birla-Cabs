<?php 
session_start();
include 'inc/Econfig.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header  

include "db.php";
 ?>

   <!-- User Profile Header -->
    <div class="block">
	<div class="block-header">
    	<h1><strong>Check Status</strong></h1>
    </div>
     <div class="row remove-margin">
            <!-- Photo and Name -->
            <div class="col-sm-12">
            	<h3 class="text-primary">
            Request Sent <input type="checkbox" checked="true">
             ------- <i class="fa fa-long-arrow-right"></i>Request Recieved <input type="checkbox" checked="true">
             ------- <i class="fa fa-long-arrow-right"></i>Under Process <input type="checkbox" >
             ------- <i class="fa fa-long-arrow-right"></i>Task Completed <input type="checkbox" >
            </h3>
            </div>
            <br><br><br><br>
     </div>
    </div>
    </div>

<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>