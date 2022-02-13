<?php 

function puremedia_theme_Setup() {

    load_theme_textdomain('puremedia', get_template_directory() . '/languages');

    //Rss Feed
    add_theme_support('automatic-feed-links');

    //Site title
    add_theme_support('title-tag');

    add_theme_support('html5');

    //cutom logo
    add_theme_support('custom-logo', [
        'height' => 50,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
    ]);

    //cutom header
    add_theme_support('custom-header', [
        'default-image' => get_theme_file_uri('/assets/images/hero-bg.jpg'),
        'width' => 2000,
        'height' => 800,
        'flex-height' => true,
        'flex-width' => true,
        'uploads' => true,
    ]);

    //post format
    add_theme_support('post-formats', [
        'aside',
        'gallery',
        'link',
        'image',
        'quote',
        'status',
        'video',
        'audio',
        'chat',
    ]);

    //post thumbnails
    add_theme_support('post-thumbnails');
    add_image_size('puremedia-thumb', '350', '250', false);

    register_nav_menu('main-menu', 'Top Primary Menu');
}

function puremedia_theme_scripts() {
    
    //css files
    wp_register_style(
        'puremedia-base',
        get_theme_file_uri('/assets/css/base.css'),
        [],
        '1.0.0',
        'all',
    );

    wp_register_style(
        'puremedia-media',
        get_theme_file_uri('/assets/css/media-queries.css'),
        [],
        '1.0.0',
        'all',
    );

    wp_register_style(
        'puremedia-base-rtl',
        get_theme_file_uri('/assets/css/base-rtl.css'),
        [],
        '1.0.0',
        'all',
    );

    wp_register_style(
        'puremedia-media-rtl',
        get_theme_file_uri('/assets/css/media-queries-rtl.css'),
        [],
        '1.0.0',
        'all',
    );
    
    if(is_rtl()) {
        wp_enqueue_style('
        puremedia-main-rtl',
        get_theme_file_uri('/assets/css/main-rtl.css'),
        [
            'puremedia-base-rtl',
            'puremedia-media-rtl',
        ],
        false,
        'all',
    );

    }else {
        wp_enqueue_style('
        puremedia-main',
        get_theme_file_uri('/assets/css/main.css'),
        [
            'puremedia-base',
            'puremedia-media',
        ],
        false,
        'all',
    );
    }


    //js files

    wp_register_script(
        'puremedia-modernizr',
        get_theme_file_uri('/assets/js/modernizr.js'),
        [],
        '1.0.0',
        'all',
        false,
    );

    wp_enqueue_script(
        'puremedia-modernizr'
    ); 
}

function puremedia_theme_widgets() {

    register_sidebar([
        'id' => 'puremedia-sidebar-1',
        'name' => 'sidebar 1',
        'description' => 'Sidebar 1',
        'before_widget' => '<div class="widget widget_text">',
        'after_widget' => '</div>', 
        'before_title' => '<h5>',
        'after_title' => '</h5>',   
    ]);

    register_sidebar([
        'id' => 'puremedia-footer-1',
        'name' => 'footer 1',
        'description' => 'Footer col 1',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ]);

    register_sidebar([
        'id' => 'puremedia-footer-2',
        'name' => 'footer 2',
        'description' => 'Footer col 2',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ]);

    register_sidebar([
        'id' => 'puremedia-footer-3',
        'name' => 'footer 3',
        'description' => 'Footer col 3',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ]);

    register_sidebar([
        'id' => 'puremedia-footer-4',
        'name' => 'footer 4',
        'description' => 'Footer col 4',
    ]);
}

function puremedia_widgets_register() {

    include __DIR__ . '/inc/widgets/new-widget.php';
    register_widget('New_Widget');

}


add_action('widgets_init', 'puremedia_widgets_register');
add_action('widgets_init', 'puremedia_theme_widgets');
add_action('wp_enqueue_scripts', 'puremedia_theme_scripts');
add_action('after_setup_theme', 'puremedia_theme_Setup');
