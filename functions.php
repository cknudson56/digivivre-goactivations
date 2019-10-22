<?php

function example_theme_scripts(){
  //Skeleton
  wp_enqueue_style('skeleton', get_template_directory_uri() . '/css/skeleton.css');
  wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
  //CSS
  wp_enqueue_style('main-styles', get_stylesheet_uri());
  //Javascript
  wp_enqueue_style('script-name', get_template_directory_uri() . '/js/script.js');
}
add_action('wp_enqueue_scripts' , 'example_theme_scripts');


//Widget Areas
function blank_widgets_init() {
  //Home: Banner Widget
  register_sidebar(array(
    'name'          => ('Banner Home'),
    'id'            => 'banner-home',
    'description'   => 'Top banner widget area in home page',
    'before_widget' => '<div class="widget-home widget-top">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Home: About-Brief Widget
  register_sidebar(array(
    'name'          => ('About-Brief Home'),
    'id'            => 'about-brief-home',
    'description'   => 'About-Brief widget area in home page',
    'before_widget' => '<div class="widget-home widget-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Home: Right Img Widget
  register_sidebar(array(
    'name'          => ('Right Img Home'),
    'id'            => 'right-img-home',
    'description'   => 'Right img widget area in Home Page',
    'before_widget' => '<div class="widget-home widget-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Home: Small Banner Widget
  register_sidebar(array(
    'name'          => ('Small Banner Home'),
    'id'            => 'small-banner-home',
    'description'   => 'Small banner widget area in home page',
    'before_widget' => '<div class="widget-home widget-small-banner">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Home: Service-Brief Widget
  register_sidebar(array(
    'name'          => ('Service-Brief Home'),
    'id'            => 'service-brief-home',
    'description'   => 'Service-Brief widget area in home page',
    'before_widget' => '<div class="widget-home widget-service-brief">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Home: Left Img Widget
  register_sidebar(array(
    'name'          => ('Left Img Home'),
    'id'            => 'left-img-home',
    'description'   => 'Left img widget area in Home Page',
    'before_widget' => '<div class="widget-home widget-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Home: About-Brief Widget
  register_sidebar(array(
    'name'          => ('Contact-Brief Home'),
    'id'            => 'contact-brief-home',
    'description'   => 'Contact-Brief widget area in home page',
    'before_widget' => '<div class="widget-home widget-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Sidebar Widget
  register_sidebar(array(
    'name'          => ('Sidebar'),
    'id'            => 'sidebar',
    'description'   => 'Sidebar widget area',
    'before_widget' => '<div class="widget-sidebar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Footer: Left Widget
  register_sidebar(array(
    'name'          => ('Left Footer'),
    'id'            => 'left-footer',
    'description'   => 'Left widget area in the footer',
    'before_widget' => '<div class="widget-footer widget-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Footer: Left Nav Widget
  register_sidebar(array(
    'name'          => ('Menu Title Footer'),
    'id'            => 'menu-title-footer',
    'description'   => 'Menu Title widget area in the footer',
    'before_widget' => '<div class="widget-footer widget-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Footer: Right Menu Widget
  register_sidebar(array(
    'name'          => ('Right Menu Footer'),
    'id'            => 'right-menu-footer',
    'description'   => 'Right Menu widget area in the footer',
    'before_widget' => '<div class="widget-footer widget-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Footer: Right Widget
  register_sidebar(array(
    'name'          => ('Right Footer'),
    'id'            => 'right-footer',
    'description'   => 'Right widget area in the footer',
    'before_widget' => '<div class="widget-footer widget-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Footer: Social Widget
  register_sidebar(array(
    'name'          => ('Social Footer'),
    'id'            => 'social-footer',
    'description'   => 'Social widget area in the footer',
    'before_widget' => '<div class="widget-footer widget-social">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
}
add_action('widgets_init', 'blank_widgets_init');

//Custom Menus
function custom_menus(){
  register_nav_menus(array(
    'header-menu' => __('Header Menu'),
    'footer-menu' => __('Footer Menu'),
  ));
}
add_action('init', 'custom_menus');

//Logo in the header
$custom_image_header = array(
  'width' => 150,
  'height' => 90,
  'uploads' => true,
);
add_theme_support('custom-header', $custom_image_header)


?>
