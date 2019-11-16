<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="twelve columns head-margin-top">
      <!--Banner Img Widget-->
      <?php dynamic_sidebar('banner-blog'); ?>
    </div>
  </div>

  <div class="row section-margins">
    <div class="twelve columns">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p>Category: <?php the_category(); ?></p>
            <?php the_post_thumbnail('medium'); ?>
            <p><?php the_excerpt(); ?></p>
          <?php }
        }
      ?>
    </div>
  </div>
</div>

<div id="sidebar">
  <div class="flex-sidebar">
    <?php get_sidebar(); ?>
  </div>
</div>


<?php get_footer(); ?>
