<?php
/**
 * footer.php
 *
 * Author: pixelcave
 *
 * The footer of the page
 * Jquery library as well as all other scripts are included here
 *
 */
?>
        <!-- Footer -->
        <footer class="clearfix">
            <div class="pull-right">
                Crafted with <i class="fa fa-heart text-danger"></i> by <a href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
            </div>
            <div class="pull-left">
                <span id="year-copy"></span> &copy; <a href="https://1.envato.market/qbN" target="_blank"><?php echo $template['name'] . ' ' . $template['version']; ?></a>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END FX Container -->
</div>
<!-- END Page Container -->

<!-- Scroll to top link, check main.js - scrollToTop() -->
<a href="javascript:void(0)" id="to-top"><i class="fa fa-angle-up"></i></a>

<!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

<!-- Bootstrap.js, Jquery plugins and custom Javascript code -->
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>