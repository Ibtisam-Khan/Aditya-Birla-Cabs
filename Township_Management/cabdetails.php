<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header

include("db.php");
            
                $bid=$_GET['bid'];
            $result = mysqli_query($con,"SELECT * FROM employee WHERE id=$bid");
        
        $t1 = mysqli_fetch_array($result);
   ?>

 <div class="block">
        <!-- Styles Title -->
        <div class="block-title"> 
            <h1><?php echo "Detailes about ".$t1['ename'] ?></h1>
        </div> 
        <center>
            <h4>
                <div class="table-responsive">
            
             
<?php
            $result = mysqli_query($con,"SELECT * FROM employee WHERE id=$bid");

                         
								while($test = mysqli_fetch_array($result))
							{
								$bid = $test['id'];
						echo"<img width='250' height='150' src='".$test['pic_url']."'>"; 
                            ?>
                        <table id="general-table" class="table" border="2">
                            <center>
                                <thead>
                                <tr>
                       
                         <th>Parameters</th><th>Details</th>
                         </tr>
                         </thead>       
                            <?php

                         //echo "<tr><td> ID:</td><td> ".$test['id']."</td></tr>"; 
                         echo "<tr><td>vehicle Number:</td><td> ".$test['emp_id']."</td></tr>";
                         echo "<tr><td>vehicle name</td><td> ".$test['q_id']."</td></tr>";
                           
                         echo "<tr><td>Model </td><td>".$test['ename']."</td></tr>"; 
                         echo"<tr><td>Number Of Seats: </td><td>".$test['permenant_ads']."</td></tr>";
                         echo "<tr><td>Description</td><td> ".$test['DOB']."</td></tr>";  
                         echo "<tr><td>Price:</td><td> ".$test['DOJ']."</td></tr>";  
                         echo "<tr><td>Family Members:</td><td> ".$test['no_family_members']."</td></tr>";  
                        
                         echo "<tr><td>Salary:</td><td> ".$test['salary']."</td></tr>";  
                         echo "<tr><td>Designation: </td><td>".$test['designation']."</td></tr>";
                         echo "<tr><td>Username: </td><td>".$test['username']."</td></tr>"; 
                         echo "<tr><td>Password:</td><td> ".$test['emp_password']."</td></tr>"; 
                         //echo "<tr><td>Status </td><td>".$test['status']."</td></tr>"; 
                        
                       
                        
                      	
							}

?>
</center>
</table>
</h4>
</center>
</div>

<?php include 'inc/footer.php'; // Footer and scripts ?>

<?php include 'inc/bottom.php'; // Close body and html tags ?>