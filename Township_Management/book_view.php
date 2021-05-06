








<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>
 <?php include("db1.php");
        $result = mysqli_query($con,"SELECT * FROM booking_details");
            $count=mysqli_num_rows($result);
        ?>




        <!-- Styles Title -->
        <div class="block-title">
           <h2>  Booking Details</h2>
  			<?php echo"<h4> Total Bookings : ".($count)."</h4>"; ?>

  			<button class="btn btn-success" onclick="exportTableToCSV('booking_info.csv')">Export to Excel</button>
       <!--<a href="add_employee.php" class='btn btn-sm btn-primary'> Add New Employee </a>-->
        </div>
        <!-- END Styles Title -->
       

        <!-- Styles Content -->
        <p></p>

        <div class="table-responsive">
            <table style="background-color:white;color:black" id="general-table" class="table" border="1">
                <thead>
                    <tr>
                        
                        
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email-id</th>
                        <th>Pickup Date</th>
                        <th >Vehicle Name</th>
                        <th >Price</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
								while($test = mysqli_fetch_array($result))
							{
								
										

                    ?>

                    <tr>
                        <td ><?php echo "".$test['firstname'];  ?></td>
                        <td ><?php echo "".$test['lastname'];  ?></td>
                        <td ><?php echo "".$test['email'];  ?></td>
                        <td ><?php echo "".$test['pickupdate'];  ?></td>
                        <td ><?php echo "".$test['vehiclename'];  ?></td>
                        <td ><?php echo "".$test['pricediscount'];  ?></td>
                        
                       
                    </tr>
                    
					
				




                <?php } ?> 


				

				

				                   
                </tbody>
 		</table>
        </div>
        
        <!-- END Styles Content -->
    </div>
    <!-- END Styles Block -->

    

<?php include 'inc/footer.php'; // Footer and scripts ?>
 <script>

function exportTableToCSV(filename) {
    var csv = [];
    var rows = document.querySelectorAll("table tr");
    
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
        csv.push(row.join(","));        
    }

    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
}
function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;

    // CSV file
    csvFile = new Blob([csv], {type: "text/csv"});

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // Create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Hide download link
    downloadLink.style.display = "none";

    // Add the link to DOM
    document.body.appendChild(downloadLink);

    // Click download link
    downloadLink.click();
}


</script>
  
<!-- Javascript code only for this page -->

<?php include 'inc/bottom.php'; // Close body and html tags ?>
