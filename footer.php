<footer>

    <div class="row">

        <div class="six columns tab-whole footer-about">

            <?php
            if (is_active_sidebar('puremedia-footer-1')) :
                dynamic_sidebar('puremedia-footer-1');
            else :
            ?>

                <h3>About Puremedia</h3>

                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                    Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                    nibh id elit.
                </p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>

            <?php endif; ?>

        </div> <!-- /footer-about -->

        <div class="six columns tab-whole right-cols">

            <div class="row">
                <div class="columns">

                    <?php
                    if (is_active_sidebar('puremedia-footer-2')) :
                        dynamic_sidebar('puremedia-footer-2');
                    else :
                    ?>

                        <h3 class="address">Contact Us</h3>
                        <p>
                            1600 Amphitheatre Parkway<br>
                            Mountain View, CA<br>
                            94043 US
                        </p>

                        <ul>
                            <li><a href="tel:6473438234">647.343.8234</a></li>
                            <li><a href="tel:1234567890">123.456.7890</a></li>
                            <li><a href="mailto:someone@puremedia.com">someone@puremedia.com</a></li>
                        </ul>

                    <?php endif; ?>

                </div> <!-- /columns -->


                <div class="columns last">

                    <?php
                    if (is_active_sidebar('puremedia-footer-3')) :
                        dynamic_sidebar('puremedia-footer-3');
                    else :
                    ?>

                        <h3 class="contact">Follow Us</h3>

                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">GooglePlus</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Flickr</a></li>
                            <li><a href="#">Skype</a></li>
                        </ul>

                    <?php endif; ?>

                </div> <!-- /columns -->

            </div> <!-- /Row(nested) -->

        </div>  
            
            <p class="copyright"><?php printf(__('&copy; Copyright %s %s', 'puremedia'), bloginfo('name'), date('Y') ) ?>. <?php _e('Design by', 'puremedia') ?> <a href="http://www.styleshout.com/">Styleshout.</a></p>

        <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#hero"><span><?php _e('Top', 'puremedia') ?></span><i class="fa fa-long-arrow-up"></i></a>
        </div>

    </div> <!-- /row -->

</footer> <!-- /footer -->

<?php wp_footer() ?>

<!-- Java Script
================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="<?= get_theme_file_uri("assets/js/jquery-1.10.2.min.js") ?>"><script>')
</script>
<script type="text/javascript" src="<?= get_theme_file_uri("assets/js/jquery-migrate-1.2.1.min.js") ?>"></script>
<script src="<?= get_theme_file_uri("assets/js/jquery.flexslider.js") ?>"></script>
<script src="<?= get_theme_file_uri("assets/js/jquery.fittext.js") ?>"></script>
<script src="<?= get_theme_file_uri("assets/js/backstretch.js") ?>"></script>
<script src="<?= get_theme_file_uri("assets/js/waypoints.js") ?>"></script>
<script src="<?= get_theme_file_uri("assets/js/main.js") ?>"></script>

</body>

</html>