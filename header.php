<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <!-- link CSS file -->
  <!--<link rel="stylesheet" type="text/css" href="<//?php bloginfo('stylesheet_url'); ?>" />-->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css"/>-->
  <?php wp_head(); ?>
</head>

<body>

<header>
  <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
</header>
