<?php /*Template Name: 404 Page*/?>
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="twelve columns head-margin-top">
    </div>
  </div>

  <div class="row section-margins">
    <div class="twelve columns">
      <div>
        <div class="title-box"></div>
        <h2>Page Not Found</h2>
        <p>We apologize for any inconvenience.</p>
        <p>Since it seems like since nothing was found here, would you like to go back <a href="<?php echo home_url('/');?>">home <i class="fas fa-arrow-circle-right"></i></a>?</p>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
