</div>
        <!-- end wrap -->
        <div id="hotline">
            <img class="icon" src="<?php echo get_template_directory_uri() ?>/images/icons/hotline.jpg" alt="icon" />
            <strong class="phone"><a href="tel:<?php echo ot_get_option('iz_phone'); ?>"><?php echo ot_get_option('iz_phone'); ?></a></strong>
        </div>
        <footer id="footer" class="clearfix">
            <div class="containing-wrapper">
                <p class="alignleft">© 2015, D+Studio. All Rights Reserved. Design by <span class="padding">&middot;</span> <a href="http://vifonic.com" title=""><strong>Vifonic</strong></a></p>
                <p class="alignright"><?php echo ot_get_option('iz_addr'); ?> <span class="padding">&middot;</span> <?php echo ot_get_option('iz_phone'); ?> <span class="padding">&middot;</span> <a href="mailto:<?php echo ot_get_option('iz_email'); ?>" title="Write Email"><?php echo ot_get_option('iz_email'); ?></a> </p>
            </div>
        </footer>
        <script src="<?php echo get_template_directory_uri() ?>/js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/jquery-easing-1.3.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/retina.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/jquery.touchSwipe.min.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/jquery.isotope2.min.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/jquery.ba-bbq.min.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/jquery.isotope.load.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/SmoothScroll.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/main.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/jquery.form.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/input.fields.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/preloader.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/jquery.gomap-1.3.2.min.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/my.js" type="text/javascript"></script>
        
        <?php wp_footer(); ?>
    </body>
</html>
