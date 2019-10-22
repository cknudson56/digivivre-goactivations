<footer>
  <div class="container">
    <div class="row">
      <div class="three columns">
        <!--Logo/text widget-->
        <?php dynamic_sidebar('left-footer'); ?>
      </div>

      <div class="three columns">
        <!--Left Menu Title Widget-->
        <?php dynamic_sidebar('right-footer'); ?>
        <!-- Navigation -->
        <?php wp_nav_menu(array(
          'theme_location' => 'left-menu-footer',
          'container-class' => 'menu-footer'
          ));
        ?>
      </div>

      <div class="three columns">
        <!--Right Menu Title Widgett-->
        <?php dynamic_sidebar('right-menu-footer'); ?>
        <!-- Navigation -->
      </div>

      <div class="three columns">
        <!--Contact Widget-->
        <?php dynamic_sidebar('right-footer'); ?>
        <!--Social Widget-->
        <?php dynamic_sidebar('social-footer'); ?>
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <!--Copyright-->
        <p>&copy; Site created by DigiVivre 2019</p>
      </div>
    </div>
  </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
