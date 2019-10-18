<?php /*Template Name: Home Page Template*/ ?>
<?php get_header(); ?>

<div>
  <div>
    <!--Banner Img Widget-->
    <?php dynamic_sidebar('banner-home'); ?>
  </div>
</div>

<div>
  <div>
    <!-- About Brief Text Widget-->
    <?php dynamic_sidebar('about-brief-home'); ?>
  </div>
  <div>
    <!--Img Widget-->
    <?php dynamic_sidebar('right-img-home'); ?>
  </div>
</div>

<div>
  <!--Small Banner Img Widget-->
  <?php dynamic_sidebar('small-banner-home'); ?>
</div>

<div>
  <!--Service Brief Widgets-->
  <?php dynamic_sidebar('service-brief-home'); ?>
</div>

<div>
  <!--Work Brands Slider Widget (Need to ask Dawne about brands and case studies)-->
  <?php dynamic_sidebar(''); ?>
</div>

<div>
  <!--Img Widget-->
  <?php dynamic_sidebar('left-img-home'); ?>
  <!-- Contact Brief Text Widget-->
  <?php dynamic_sidebar('contact-brief-home'); ?>
</div>

<div>
  <!--Feature Posts/Case Studies Widget (Need to ask Dawne about brands and case studies)-->
  <?php dynamic_sidebar(''); ?>
</div>

<?php get_footer(); ?>
