<footer>
  <div class="container">
    <div class="row">
      <div class="three columns">
        <!--Logo/text widget-->
        <?php dynamic_sidebar('left-footer'); ?>
      </div>

      <div class="three columns">
        <!-- Navigation -->
        <?php wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container-class' => 'menu-footer'
          ));
        ?>
      </div>

      <div class="three columns">
        <!-- Navigation -->
        
      </div>

      <div class="three columns">
        <!--Contact Widget-->
        <?php dynamic_sidebar('right-footer'); ?>
        <!--Social Widget-->
        <?php dynamic_sidebar('social-footer'); ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="twelve columns">
      <!--Copyright-->
      <p>&copy; Site created by DigiVivre 2019</p>
    <div>
  </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
