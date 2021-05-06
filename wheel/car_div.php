<?php 
if(isset($_REQUEST['eid'])){
	$id = $_REQUEST['eid'];
echo $id;

}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
                <div class="product-list product-list2 wheel-bgt clearfix">
                    <div class="row" >
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
    
                        <div class="col-xs-12">
                            <div class="product-elem-style1 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                    <div class="img-wrap img-wrap2 product-cell">
                                        <img src="<?php echo $car_img; ?>" alt="img" class="img-responsive">
<!--                                        <iframe src="<?php echo $car_img; ?>"></iframe>-->
                                    </div>
                                </div>
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
                                        <div class="title"><?php echo $vehicle_name; ?></div>
                                        <div class="price-wrap product-cell">
                                          <span>Per Km Rs.<?php echo $cost_per_km;  ?> </span><sup></sup>/Per Km<br>
                                            <span>Per Day Rs.<?php echo $cost_per_km;  ?>Km </span><sup></sup>/Per Per
                                        </div>
                                    </div>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="images/i40.jpg" alt="img" class="img-responsive">
                                    </div>
                                    <div class="text-wrap  text-wrap3 product-cell">
                                        <ul class="metadata metadata2">
                                             <li><?php echo  $no_of_seats; ?> seats</li>
                                            <input type="text" value="<?php echo $vehicle_id; ?>" id="c">
                                            <li>Driver Bata Rs.<?php echo $driver_cost; ?></li>
                                            <li>Base Fare Rs.<?php echo   $base_fare; ?></li>
                                            <li>manual/auto</li>
                                            <li>ac</li>
                                        </ul>
                                        
                                        
                                        <?php
                      echo    $from_ocation;
                         echo $vehicle_name;
                        echo  $car_img;
                        echo  $no_of_seats;
                        echo  $cost_per_km;
                        echo  $min_km_day;
                        echo  $base_fare;
                        echo  $driver_cost;
                        ?><br><?php
                         echo    $vehicle_id;
                           ?><br><?php
                        echo  $driver_cost;
                          
                          
                          ?>
<!--                         <div class="wheel-view-link">-->
<!--                            <a href="cst_div.php?eid=<?php echo $vehicle_id; ?>">-->
<!--                         <button  style="background:#00C851;color:white">View Details</button></a>-->
                                       
                                            
<!--                                        </div>-->
<!--    <button class="show"><a href="index-2.php?eid=<?php echo $vehicle_id; ?>" class="show"> click</a></button>-->                               
                                  
                                <input type="checkbox" name="check[]" id="car" value="<?php echo $vehicle_id; ?>"><span class="label-text"></span>
                                                <button id="car1" >insert</button>
                                        <?php// echo $vehicle_id; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php } ?>
                    </div>
                    
                    
                    
                    
                                  
</div>



<script>

 $(document).ready(function() {
    
        $('#car1').click(function(){
      //var commonurl = $("#commonurl").val();

      var id = [];
      $(':checkbox:checked').each(function(i){
        id[i] = $(this).val();
      });
            console.log(id[i]);
      
      
    });
  });
</script>
                       <!-- <div class="col-xs-12">
                            <div class="product-elem-style1 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                    <div class="img-wrap img-wrap2 product-cell">
                                        <img src="images/innova_color4.png" alt="img" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
                                        <div class="title">Toyota Innova</div>
                                        <div class="price-wrap product-cell">
                                            <span>Rs.50000</span><sup>00</sup>/Day
                                        </div>
                                    </div>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="images/i32.jpg" alt="img" class="img-responsive">
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
                                            <button onclick="show('mydiv')">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-elem-style1 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                    <div class="img-wrap img-wrap2 product-cell">
                                        <img src="images/super-white.jpg" alt="img" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
                                        <div class="title">Toyata Innova Crysta</div>
                                        <div class="price-wrap product-cell">
                                            <span>Rs.50000</span><sup>00</sup>/Day
                                        </div>
                                    </div>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="images/i33.jpg" alt="img" class="img-responsive">
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
                                            <a href="#" onclick="show('mydiv')">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-elem-style1 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                    <div class="img-wrap img-wrap2 product-cell">
                                        <img src="images/11_Summit-white.jpg" alt="img" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
                                        <div class="title">Tavera</div>
                                        <div class="price-wrap product-cell">
                                            <span>Rs.50000</span><sup>00</sup>/Day
                                        </div>
                                    </div>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="images/3.jpg" alt="img" class="img-responsive">
                                    </div>
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
                        </div>
                        <div class="col-xs-12">
                            <div class="product-elem-style1 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                    <div class="img-wrap img-wrap2 product-cell">
                                        <img src="images/swift.jpg" alt="img" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
                                        <div class="title">Swift Dzire/Itios/Verito</div>
                                        <div class="price-wrap product-cell">
                                            <span>Rs50000</span><sup>00</sup>/Day
                                        </div>
                                    </div>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="images/tempo20.png" alt="img" class="img-responsive">
                                    </div>
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
                        </div>
                        <div class="col-xs-12">
                            <div class="product-elem-style1 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                    <div class="img-wrap img-wrap2 product-cell">
                                        <img src="images/14-seater-tempo-traveler.png" alt="img" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
                                        <div class="title">Force Traveller Non Ac</div>
                                        <div class="price-wrap product-cell">
                                            <span>Rs.50000</span><sup>00</sup>/Day
                                        </div>
                                    </div>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="images/i32.jpg" alt="img" class="img-responsive">
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
                        </div>
                        <div class="col-xs-12">
                            <div class="product-elem-style1 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                    
                                    <div class="img-wrap img-wrap2 product-cell">
                                        <img src="images/tempo20.png" alt="img" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
                                        <div class="title">Force Traveller Ac</div>
                                        <div class="price-wrap product-cell">
                                            <span>Rs.50000</span><sup>00</sup>/Day
                                        </div>
                                    </div>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="images/i33.jpg" alt="img" class="img-responsive">
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
                        </div>
                 
                        <div class="col-xs-12">
                            <div class="product-elem-style1 product-elem-style  wheel-bg1 clearfix">
                                <div class="product-table2">
                                    <div class="img-wrap img-wrap2 product-cell">
                                        <img src="images/minibus_content_85_content_85.jpg" alt="img" class="img-responsive">
                                    </div>
                                </div>
                                <div class="product-table3  ">
                                    <div class="text-wrap text-wrap2 product-cell">
                                        <div class="title">bus</div>
                                        <div class="price-wrap product-cell">
                                            <span>Rs.50000</span><sup>00</sup>/Day
                                        </div>
                                    </div>
                                    <div class="img-wrap img-wrap3 product-cell">
                                        <img src="images/i34.jpg" alt="img" class="img-responsive">
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
                        </div>
                    </div>
                </div>
            
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
     </div>-->