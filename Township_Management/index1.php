<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>
<?php 
    
                
            
?>

<!-- Page content -->
<div id="page-content" class="block">
    <!-- Dashboard Header -->
    <div class="block-header">
        <div class="row remove-margin">
            <!-- Title -->
            <div class="col-md-4">
                <!-- If you do not want a link in the header, instead of .header-title-link you can use a div with the class .header-section -->
                <a href="" class="header-title-link">
                    <h1><i class="fa fa-coffee animation-expandUp"></i>Dashboard<br><small>Welcome Admin!</small></h1>
                </a>
            </div>
            <!-- END Title -->

            <!-- Statistics -->
            <div class="col-md-8">
                <!-- Outer Grid -->
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Inner Grid 1 -->
                        <div class="row">
                            <div class="col-xs-6">
                            <a href="admin_view1.php" class="header-link">
                                    <h1 class="animation-pullDown">
                                        <strong>
                                            <?php
                                                $hostname="localhost";
                                                $username="root";
                                                $password="";
                                                $database1="hindalco";
                                                $database2="royalttcabs";

                                               $dbh1=mysqli_connect($hostname,$username,$password,$database1);
                                               $dbh2=mysqli_connect($hostname,$username,$password,$database1);
                                                $result = mysqli_query($dbh1,"SELECT * FROM employee");
                                                $count=mysqli_num_rows($result);
                                                echo "".$count;    
                                            ?>

                                        </strong>
                                        <br>
                                        <small>Total Employees</small>
                                    </h1>
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a href="admin_view2.php" class="header-link">
                                    <h1 class="animation-pullDown">
                                        <strong>
                                            <?php
                                                $result = mysqli_query($dbh1,"SELECT * FROM quarters");
                                                $count=mysqli_num_rows($result);
                                                echo "".$count;    
                                                 mysqli_close($dbh1);
                                            ?>

                                        </strong>
                                        <br><small>Total Quarters</small>
                                    </h1>
                                </a>
                            </div>
                        </div>
                        <!-- END Inner Grid 1 -->
                    </div>
                    <div class="col-sm-6">
                        <!-- Inner Grid 2 -->
                        <div class="row">
                            <div class="col-xs-6">
                                <a  href="cabview.php" class="header-link">
                                    <h1 class="animation-pullDown">
                                        <strong>
                                            <?php
                                               include("db1.php");
                                                $result1 = mysqli_query($con,"SELECT * FROM tbl_vehicles");
                                                $count=mysqli_num_rows($result1);
                                                echo "".$count; 
                                            ?>

                                        </strong>
                                        <br><small>Total Cabs</small>
                                    </h1>
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a href="book_view.php" class="header-link">
                                    <h1 class="animation-pullDown">
                                        <strong>
                                            <?php
                                                $result1 = mysqli_query($con,"SELECT * FROM booking_details");
                                                $count=mysqli_num_rows($result1);
                                                echo "".$count;    
                                            ?>

                                        </strong>
                                        <br><small>Total Bookings</small>
                                    </h1>
                                </a>
                            </div>
                        </div>
                        <!-- END Inner Grid 2 -->
                    </div>
                </div>
                <!-- END Outer Grid  -->
            </div>
            <!-- END Statistics -->
        </div>
    </div>
</div>



<div class="block">
    <div class="block-title">
        <hr>
    <center>     <a href="udp.php" class='btn btn-primary'>Send New Notice </a><hr>
     <h2><i class="fa fa-mail">&nbsp;&nbsp;</i><u> Administration Notice </u></h2>
        <?php
                                                
          $result = mysqli_query($con,"SELECT * FROM notices WHERE status='active' ");
      //while($test = mysqli_fetch_array($result))
      {
        echo"<br><li><h4>Maintainance of Every Car Should Be Done On Scheduled Time  ---- <a class='btn btn-primary'> Edit </a> </h4></li>";
      }    
        ?>

        </center>
    </div>
    </div>
    
<!-- END Page Content -->

<!-- Remember to include excanvas for IE8 chart support -->
<!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function(){
        // Set up timeline scrolling functionality
        $('.timeline-con').slimScroll({ height: 565, color: '#000000', size: '3px', touchScrollStep: 100, distance: '0' });
        $('.timeline').css('min-height', '565px');

        // Demo status updates and timeline functionality
        var statusUpdate    = $('#status-update');
        var statusUpdateVal = '';

        $('#accept-request').click(function(){ $(this).replaceWith('<span class="label label-success">Awesome, you became friends!'); });

        $('#status-update-btn').click(function(){
            statusUpdateVal = statusUpdate.val();

            if ( statusUpdateVal ) {
                $('.timeline-con').slimScroll({scrollTo: '0px'});

                $('.timeline').prepend('<li class="animation-pullDown">' +
                        '<div class="timeline-item">' +
                        '<h4 class="timeline-title"><small class="timeline-meta">just now</small><i class="fa fa-file"></i> Status</h4>' +
                        '<div class="timeline-content"><p>' + $('<div />').text(statusUpdateVal).html().substring(0, 200) + '</p><em>Demo functionality</em></div>' +
                        '</div>' +
                        '</li>');

                statusUpdate.val('').attr('placeholder', 'I hope you like it! :-)');
            }
        });

        /*
         * Flot 0.8.3 Jquery plugin is used for charts
         *
         * For more examples or getting extra plugins you can check http://www.flotcharts.org/
         * Plugins included in this template: pie, resize, stack
         */

        // Get the elements where we will attach the charts
        var chartClassic    = $('#chart-classic');

        // Random data for the charts
        var dataEarnings    = [[0, 60],[1, 100],[2, 80],[3, 84],[4, 124],[5, 90],[6, 150]];
        var dataSales       = [[0, 30],[1, 50],[2, 40],[3, 42],[4, 62],[5, 45],[6, 75]];

        /* Classic Chart */
        $.plot(chartClassic,
            [
                {
                    data: dataEarnings,
                    lines: { show: true, fill: true, fillColor: { colors: [{ opacity: 0.25 }, { opacity: 0.25 }] } },
                    points: { show: true, radius: 7 }
                },
                {
                    data: dataSales,
                    lines: { show: true, fill: true, fillColor: { colors: [{ opacity: 0.15 }, { opacity: 0.15 }] } },
                    points: { show: true, radius: 7 }
                }
            ],
            {
                colors: ['#f39c12', '#2e3030'],
                legend: { show: false },
                grid: { borderWidth: 0, hoverable: true, clickable: true },
                yaxis: { show: false },
                xaxis: { show: false }
            }
        );

        // Creating and attaching a tooltip to the classic chart
        var previousPoint = null, ttlabel = null;
        chartClassic.bind('plothover', function (event, pos, item) {

            if (item) {
                if (previousPoint !== item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $('#chart-tooltip').remove();
                    var x = item.datapoint[0], y = item.datapoint[1];

                    if ( item.seriesIndex === 1 ) {
                        ttlabel = '<strong>' + y +'</strong> sales';
                    } else {
                        ttlabel = '$ <strong>' + y +'</strong>';
                    }

                    $('<div id="chart-tooltip" class="chart-tooltip">' + ttlabel + '</div>')
                        .css( { top: item.pageY - 45, left: item.pageX + 5 }).appendTo("body").show();
                }
            }
            else {
                $('#chart-tooltip').remove();
                previousPoint = null;
            }
        });
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>