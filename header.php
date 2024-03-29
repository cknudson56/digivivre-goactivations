<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<script src="https://kit.fontawesome.com/1ed49794a4.js" crossorigin="anonymous"></script>-->
  <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&display=swap" rel="stylesheet" />-->
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="header">
  <div class="header-flex">
      <div id="site-logo">
        <!--If/else for Logo and Site Title-->
        <?php if(get_header_image() == '') { ?>
          <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
          <?php
        }else{?>
          <a href="<?php echo home_url('/'); ?>"><img id="logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Logo" /></a>
          <?php
        }
        ?>
      </div>
      <div id="site-nav">
        <!--Navigation-->
        <?php wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'container-class' => 'menu-header'
          ));
        ?>
      </div>
    </div>
</header>
