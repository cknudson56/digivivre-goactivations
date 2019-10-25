<?php /*Template Name: About Page Template*/ ?>
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="twelve columns">
      <!--Banner Img Widget-->
      <?php dynamic_sidebar('banner-about'); ?>
    </div>
  </div>

  <div class="section-margins">
    <div class="row">
      <div class="four columns">
        <div class="title-box"></div>
        <h2><?php the_title(); ?></h2>
      </div>

      <div class="eight columns">
        <!--Big Text Widget-->
        <?php dynamic_sidebar('bigtext-about'); ?>
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <!--Text-->
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();?>
              <?php the_content();
            }
          }
        ?>
      </div>
    </div>
  </div>
</div>

<div id="sidebar">
  <div class="flex-sidebar">
    <?php get_sidebar(); ?>
  </div>
</div>


<?php get_footer(); ?>
