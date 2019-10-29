<footer>
  <div class="container">
    <div class="row">
      <div class="five columns">
        <!--Logo/text widget-->
        <?php dynamic_sidebar('left-footer'); ?>
      </div>

      <div class="two columns">
        <!--Middle Left Space-->
        <?php dynamic_sidebar('middle-left-footer'); ?>
      </div>

      <div class="two columns footer-pad-top ">
        <!--Menu Title Widget-->
        <?php dynamic_sidebar('menu-title-footer'); ?>
        <!-- Navigation -->
        <?php wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'container-class' => 'menu-footer'
          ));
        ?>
      </div>

      <div class="three columns footer-pad-top ">
        <!--Contact Widget-->
        <?php dynamic_sidebar('right-footer'); ?>
        <!--Social Widget-->
        <?php dynamic_sidebar('social-footer'); ?>
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <!--Copyright-->
        <p class="center-text footer-end">&copy; Site created by DigiVivre 2019</p>
      </div>
    </div>
  </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
