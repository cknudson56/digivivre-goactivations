<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="twelve columns head-margin-top">
      <!--Banner Img Widget-->
      <?php dynamic_sidebar('banner-blog'); ?>
    </div>
  </div>

  <div class="row section-margins">
    <div class="twelve columns blog-flex">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>
            <div class="six columns">
              <?php the_post_thumbnail('medium'); ?>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p><?php the_excerpt(); ?></p>
              <p><a href="<?php the_permalink(); ?>">Read More <i class="fas fa-angle-right"></i></a></p>
            </div>
          <?php }
        }
      ?>
    </div>
  </div>
</div>

<div class="row bottom-margin pagination-area">
  <div class="pagination-links">
    <?php
       global $wp_query;

       $big = 999999999; // need an unlikely integer

       echo paginate_links( array(
       'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
       'format' => '?paged=%#%',
       'current' => max( 1, get_query_var('paged') ),
       'total' => $wp_query->max_num_pages
        ) );

    ?>
  </div>
</div>

<div id="sidebar">
  <div class="flex-sidebar">
    <?php get_sidebar(); ?>
  </div>
</div>


<?php get_footer(); ?>
