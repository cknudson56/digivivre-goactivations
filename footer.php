<footer>
  <div>
    <div>
      <!--Logo/text widget-->
      <?php dynamic_sidebar('left-footer'); ?>
    </div>

    <div>
      <!-- Navigation -->
      <?php wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container-class' => 'menu-footer'
        ));
      ?>
    </div>

    <div>
      <!--Contact Widget-->
      <?php dynamic_sidebar('right-footer'); ?>
      <!--Social Widget-->
      <?php dynamic_sidebar('social-footer'); ?>
    </div>
  </div>

  <div>
    <!--Copyright-->
    <p>&copy; Site created by DigiVivre 2019</p>
  </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
