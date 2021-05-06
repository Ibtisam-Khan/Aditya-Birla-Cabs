                    <div class="row">
                        <?php 
                      include ('admin/include/db.php');
                      $query = mysql_query("select l.from_location,p.trip_type,t.vehicle_name,t.car_img,t.no_of_seats,p.cost_per_km,
                      p.min_km_day,p.base_fare,p.driver_cost,p.total_estimation,p.price_id ,p.vehicle,p.driver_cost from `vehicle_price` p ,tbl_vehicles t,from_location l where p.location=l.id and t.vehicle_id=p.vehicle ");
                      while($row= mysql_fetch_array($query)){
                      
                          $from_ocation=$row['from_location'];
                          $vehicle_name=$row['vehicle_name'];
                          $car_img='admin/'.$row['car_img'];
                          $no_of_seats=$row['no_of_seats'];
                          $cost_per_km=$row['cost_per_km'];
                          $min_km_day=$row['min_km_day'];
                          $base_fare=$row['base_fare'];
                          $driver_cost=$row['driver_cost'];
                          $total_estimation=$row['total_estimation'];
                             $vehicle_id=$row['vehicle'];
                          $driver_cost=$row['driver_cost'];
                      ?>
                        
                        
                        <div class="col-lg-4  col-md-6">
                            <div class="product-elem-style2 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                    <div class="img-wrap img-wrap2 product-cell">
                                        <!--<img src="images/3.jpg" alt="img" class="img-responsive">-->
                                    </div>
                                </div>
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
                                        <div class="title">TATA Indica</div>
                                        <div class="price-wrap product-cell">
                                            <span></span><sup></sup>
                                        </div><br><br>
                                    </div>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="<?php echo $car_img; ?>" alt="img" class="img-responsive">
                                    </div><br>                                    <div class="text-wrap  text-wrap3 product-cell">
                                        <ul class="metadata metadata2">
                                             <li><?php echo  $no_of_seats; ?> seats</li>
                                            <li><?php echo $vehicle_id; ?></li>
                                            <li>Driver Bata Rs.<?php echo $driver_cost; ?></li>
                                            <li>Base Fare Rs.<?php echo   $base_fare; ?></li>
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
                          
                        <?php } ?>
                        
                         </div>