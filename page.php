<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="twelve columns head-margin-top">
    </div>
  </div>

  <div class="row section-margins">
    <div class="twelve columns">
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

<div id="sidebar">
  <div class="flex-sidebar">
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
