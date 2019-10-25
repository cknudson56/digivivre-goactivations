<?php /*Template Name: Contact Page Template*/ ?>
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="twelve columns">
      <!--Banner Img Widget-->
      <?php dynamic_sidebar('banner-contact'); ?>
    </div>
  </div>

  <div class="row section-margins">
    <div class="twelve columns">
      <!--Text-->
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>
            <div class="title-box"></div>
            <h2><?php the_title(); ?></h2>
            <?php the_content();
          }
        }
      ?>
    </div>
  </div>
</div>

  <div class="row form-space">
    <div class="twelve columns form">
      <!--Contact Form Widget-->
      <?php dynamic_sidebar('contact-form'); ?>
    </div>
  </div>

<div class="container">
  <div class="row section-margins">
    <div class="six columns">
      <!--Address/phone/email Widget-->
      <?php dynamic_sidebar('left-contact'); ?>
    </div>
    <div class="six columns">
      <!--Google Maps Widget-->
      <?php dynamic_sidebar('right-contact'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
