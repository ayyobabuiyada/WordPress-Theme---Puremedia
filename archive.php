<?php get_header() ?>

<section id="page-title">

    <div class="row">

        <div class="twelve columns">

            <h1><?php the_archive_title() ?><span>.</span></h1>

        </div>

    </div> <!-- /row -->

</section> <!-- /page-title -->

<!-- Content
================================================== -->

<section id="content">

    <div class="row">

        <div id="main" class="tab-whole eight columns entries">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
            ?>
                    <?php get_template_part('template-parts/category-content') ?>

            <?php endwhile;
            endif ?>

            <div>
                <span><?php echo get_posts_nav_link(); ?></span>
            </div>

        </div> <!-- /main -->

        <div class="tab-whole four columns end" id="secondary">

            <aside id="sidebar">

                <!-- /widget_text-->

                <?php
                if (is_active_sidebar('puremedia-sidebar-1')) :
                    dynamic_sidebar('puremedia-sidebar-1');
                ?>

                <?php else : ?>
                    <div class="widget widget_text">

                        <h5 class="widget-title">Text Widget</h5>
                        <div class="textwidget">Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                            nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
                            a sit amet mauris. Morbi accumsan ipsum velit.
                        </div>

                    </div> <!-- /widget_text -->
                <?php endif ?>

                <div class="widget widget_categories">

                    <h5 class="widget-title">Categories</h5>
                    <ul class="link-list group">
                        <?php the_category('', null) ?>
                    </ul>

                </div> <!-- /widget_categories -->

                <div class="widget widget_tag_cloud group">

                    <h5 class="widget-title">Tags</h5>
                    <div class="tagcloud group">
                        <?php the_tags('', null) ?>
                    </div>

                </div> <!-- /widget_tag_cloud -->

                <div class="widget widget_photostream">

                    <h5>Photostream</h5>
                    <ul class="photostream group">
                        <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
                        <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
                        <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
                        <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
                        <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
                        <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
                        <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
                        <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
                    </ul>

                </div> <!-- /widget_photostream -->

            </aside> <!-- /sidebar -->

        </div> <!-- /secondary -->

    </div> <!-- /row -->

</section> <!-- /content -->

<?php get_footer() ?>