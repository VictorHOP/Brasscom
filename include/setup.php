<?php
function va_theme_styles()
{
    wp_enqueue_style('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/bootstrap/bootstrap.css');
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');

    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.js');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/scripts/jquery.js');
    wp_enqueue_script('swiper_js', get_template_directory_uri() . 'https://unpkg.com/swiper/swiper-bundle.min.js');
}

function va_after_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');

    register_nav_menu('primary', 'menu primário');
    register_nav_menu('quem somos', 'quem somos');
    register_nav_menu('tributacao e emprego', 'tributacao e emprego');
    register_nav_menu('educacao', 'educacao');
    register_nav_menu('era digital', 'era digital');
    register_nav_menu('inteligencia', 'inteligencia');
    register_nav_menu('comunicacao', 'comunicacao');
}

//registros dos sidebar/widgtes
register_sidebar(array(
    'name' => 'Accordion Footer1',
    'id' => 'accordionfooter1',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 class="widget-title d-flex align-items-center">',
    'after_title' => '</h3>'
));
register_sidebar(array(
    'name' => 'Accordion Footer2',
    'id' => 'accordionfooter2',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 class="widget-title d-flex align-items-center">',
    'after_title' => '</h3>'
));

register_sidebar(array(
    'name' => 'Accordion Footer3',
    'id' => 'accordionfooter3',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 class="widget-title d-flex align-items-center">',
    'after_title' => '</h3>'
));

register_sidebar(array(
    'name' => 'Accordion Footer4',
    'id' => 'accordionfooter4',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 class="widget-title d-flex align-items-center">',
    'after_title' => '</h3>'
));

register_sidebar(array(
    'name' => 'Accordion Footer5',
    'id' => 'accordionfooter5',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 class="widget-title d-flex align-items-center">',
    'after_title' => '</h3>'
));

register_sidebar(array(
    'name' => 'Accordion Footer6',
    'id' => 'accordionfooter6',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 class="widget-title d-flex align-items-center">',
    'after_title' => '</h3>'
));


//Habilitando o Widgets para utilizar no accordion do footer
function va_widgets()
{
    register_sidebar(array(
        'name' => __('Sidebar footer', 'Brasscom'),
        'id' => 'va_sidebar',
        'description' => __('Sidebar para o tema', 'Brasscom')
    ));
}
add_action('widgets_init', 'va_widgets');
