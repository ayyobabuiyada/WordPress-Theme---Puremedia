<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang= "<?php echo get_locale() ?>" dir="<?= is_rtl() ? 'rtl' : 'ltr' ?>">
<!--<![endif]-->

<head>

    <!--- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?php wp_head() ?>
    
    <!-- Favicons
=================================================== -->
    <link rel="shortcut icon" href="<?= get_theme_file_uri("assets/images/favicon.png") ?>">
    <style>
        header .logo a{
            background-image: url();
        }

        .row li{ 
            list-style: none !important; 
        }

        .widget_categories ul{
            margin: 0px !important;
        }

    </style>
</head>

<body class="homepage" <?php body_class() ?>>

    <div id="preloader">
        <div id="status">
            <img src="<?= get_theme_file_uri("assets/images/loader.gif") ?>" height="60" width="60" alt="">
            <div class="loader"><?php _e('Loading', 'puremedia') ?>...</div>
        </div>
    </div>


    <!-- Header
=================================================== -->
    <header id="main-header">

        <div class="row header-inner">

            <div class="logo">
                <?php the_custom_logo() ?>
            </div>

            <?php 
                wp_nav_menu([
                    'theme_location' => 'main-menu',
                    'menu_id' => 'nav',
                    'container' => 'nav',
                    'container_id' => 'nav-wrap',
                ]);
            ?>
            <nav id="nav-wrap">

                <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
                    <span class='menu-text'>Show Menu</span>
                    <span class="menu-icon"></span>
                </a>
                <a class="mobile-btn" href="#" title="Hide navigation">
                    <span class='menu-text'>Hide Menu</span>
                    <span class="menu-icon"></span>
                </a>
                
            </nav> <!-- /nav-wrap -->

        </div> <!-- /header-inner -->

    </header>