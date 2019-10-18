<?php /*Template Name: Contact Page Template*/ ?>
<?php get_header(); ?>

<div>
  <!--Banner Img Widget (Have to play with the widget to know if I need a different named one for the contact page)-->
  <?php dynamic_sidebar(''); ?>
</div>

<div>
  <!--Text-->
  <?php
    if(have_posts()){
      while(have_posts()){
        the_post();?>
        <h2><?php the_title(); ?></h2>
        <?php the_content();
      }
    }
  ?>
</div>

<div>
  <!--Contact Form Widget-->
  <?php dynamic_sidebar(''); ?>
</div>

<div>
  <!--Address/phone/email Widget-->
  <?php dynamic_sidebar(''); ?>
  <!--Google Maps Widget-->
  <?php dynamic_sidebar(''); ?>
</div>

<?php get_footer(); ?>
