<?php

function example_theme_scripts(){
  //Skeleton
  wp_enqueue_style('skeleton', get_template_directory_uri() . '/css/skeleton.css');
  wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
  //CSS
  wp_enqueue_style('main-styles', get_stylesheet_uri());
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
    'before_widget' => '<div class="widget-home widget-right top-right-shadow">',
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
  //Home: Brands Slider Widget
  register_sidebar(array(
    'name'          => ('Brands Slider Home'),
    'id'            => 'brands-home',
    'description'   => 'Brands Slider widget area in home page',
    'before_widget' => '<div class="widget-home widget-brands">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Home: Left Img Widget
  register_sidebar(array(
    'name'          => ('Left Img Home'),
    'id'            => 'left-img-home',
    'description'   => 'Left img widget area in Home Page',
    'before_widget' => '<div class="widget-home widget-left bottom-left-shadow">',
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
  //About: Banner Widget
  register_sidebar(array(
    'name'          => ('Banner About'),
    'id'            => 'banner-about',
    'description'   => 'Top banner widget area in about page',
    'before_widget' => '<div class="widget-about widget-top">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //About: Big Text Widget
  register_sidebar(array(
    'name'          => ('Big-Text About'),
    'id'            => 'bigtext-about',
    'description'   => 'Big-Text widget area in about page',
    'before_widget' => '<div class="widget-about widget-bigtext">',
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
  //Services: Banner Widget
  register_sidebar(array(
    'name'          => ('Banner Services'),
    'id'            => 'banner-services',
    'description'   => 'Top banner widget area in Services page',
    'before_widget' => '<div class="widget-services widget-top">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Work: Banner Widget
  register_sidebar(array(
    'name'          => ('Banner Work'),
    'id'            => 'banner-work',
    'description'   => 'Top banner widget area in Work page',
    'before_widget' => '<div class="widget-work widget-top">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Blog: Banner Widget
  register_sidebar(array(
    'name'          => ('Banner Blog'),
    'id'            => 'banner-blog',
    'description'   => 'Top banner widget area in Blog page',
    'before_widget' => '<div class="widget-Blog widget-top">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Contact: Banner Widget
  register_sidebar(array(
    'name'          => ('Banner Contact'),
    'id'            => 'banner-contact',
    'description'   => 'Top banner widget area in contact page',
    'before_widget' => '<div class="widget-contact widget-top">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Contact: Contact Form Widget
  register_sidebar(array(
    'name'          => ('Contact Form'),
    'id'            => 'contact-form',
    'description'   => 'Contact form widget area in contact page',
    'before_widget' => '<div class="widget-contact widget-form">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Contact: Left Contact Widget
  register_sidebar(array(
    'name'          => ('Left Contact'),
    'id'            => 'left-contact',
    'description'   => 'Left widget area in contact Page',
    'before_widget' => '<div class="widget-contact widget-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Contact: Right Contact Widget
  register_sidebar(array(
    'name'          => ('Right Contact'),
    'id'            => 'right-contact',
    'description'   => 'Right widget area in contact Page',
    'before_widget' => '<div class="widget-contact widget-right">',
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
  //Footer: Middle Left Space Widget
  register_sidebar(array(
    'name'          => ('Middle Left Footer'),
    'id'            => 'middle-left-footer',
    'description'   => 'Middle Left Space widget area in the footer',
    'before_widget' => '<div class="widget-footer widget-middle-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));
  //Footer: Menu Title Widget
  register_sidebar(array(
    'name'          => ('Menu Title Footer'),
    'id'            => 'menu-title-footer',
    'description'   => 'Menu Title widget area in the footer',
    'before_widget' => '<div class="widget-footer widget-menu-title">',
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
  'flex-width' => true,
  'width' => 200,
  //'width' => 150,
  'flex-height' => true,
  'height' => 90,
  //'height' => 90,
  //'uploads' => true,
  'header-selector' => '.site-title a',
  'header-text' => false
);
add_theme_support('custom-header', $custom_image_header);

//Adds featured imgs to posts
  add_theme_support('post-thumbnails');

//Removes Dashicons
function wpdocs_dequeue_dashicon() {
  if (current_user_can( 'update_core' )) {
    return;
    }
  wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );

?>
