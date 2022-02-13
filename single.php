<?php get_header(); ?>


<!-- Page Title
================================================== -->
<section id="page-title">

    <div class="row">

        <div class="twelve columns">

            <h1>Our Blog<span>.</span></h1>
            <p>Aenean condimentum lacus sit amet luctus lobortis.</p>

        </div>

    </div> <!-- /row -->

</section> <!-- /page-title -->


<!-- Content
================================================== -->
<section id="content">

    <div class="row">

        <div id="main" class="tab-whole eight columns">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
            ?>

                    <article class="entry">

                        <header class="entry-header">

                            <h1 class="entry-title">
                                <?php the_title() ?>
                            </h1>

                            <div class="entry-meta">
                                <ul>
                                    <li><?php the_date() ?></li>
                                    <span class="meta-sep">•</span>
                                    <li><a rel="category tag" title="" href="<?php the_permalink() ?>"><?php the_category(' ') ?></a></li>
                                    <span class="meta-sep">•</span>
                                    <li><?php the_author_link() ?></li>
                                </ul>
                            </div>

                        </header>

                        <div class="entry-content-media">
                            <div class="post-thumb">
                                <?php the_post_thumbnail() ?>
                            </div>
                        </div>

                        <div class="entry-content">
                            <?php the_content() ?>
                        </div>

                        <p class="tags">
                            <span>Tagged in </span>:
                            <a href="<?php the_permalink() ?>"><?php the_tags('', null) ?> </a>
                        </p>

                        <div class="pagenav group">
                            <span class="prev"><?php previous_post_link('%link', '<span>Previous</span> %tilte'); ?></span>
                            <span class="next"><?php next_post_link('%link', '<span>Next</span> %tilte'); ?></span>
                        </div>

                    </article> <!-- /entry -->
            <?php
                endwhile;
            endif;
            ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) {
                comments_template();
            }
            ?>
            <!-- /comments -->

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


<!-- Footer
================================================== -->
<?php get_footer(); ?>