<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="twelve columns head-margin-top">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>
            <div class="post-feature">
              <?php the_post_thumbnail(); ?>
            </div><?
          }
        }
      ?>
    </div>
  </div>

  <div class="row section-margins">
    <div class="twelve columns single">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>
            <div class="bottom-margin">
              <div class="title-box"></div>
              <h2><?php the_title(); ?></h2>
            </div>
            <div class="single-post-img"><?php the_content();
          }
        }
      ?></div>
    </div>
  </div>

  <div class="row pagination-flex bottom-margin">
    <div class="pagination-single">
      <?php previous_post_link('%link', '< Previous Post'); ?>
    </div>

    <div class="pagination-single right-text">
      <?php next_post_link('%link', 'Next Post <i class="fas fa-angle-right"></i>'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
