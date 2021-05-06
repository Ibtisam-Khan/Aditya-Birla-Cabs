   <?php
   		include("db1.php");
	
                                                $result1 = mysqli_query($con,"SELECT * FROM booking_details");
                                                $count=mysqli_num_rows($result1);
                                                echo "".$count; 

                    ?>

                    
                                                