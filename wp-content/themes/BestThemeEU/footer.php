</div>
  <foooter class="site-footer">
    <div class="group-four">
      <div class="site-footer__col-one">
        <h1><a href="<?php echo site_url() ?>"><strong>WordPress</strong> - Site</a></h1>
      </div>

      <div class="site-footer__col-two">
        Menu
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footerMainMenu',
            'menu' => 'Footer Main Menu',
            'container' => 'nav',
          )
        );
        ?>
      </div>

      <div class="site-footer__col-three">
        <p><?php dynamic_sidebar('sidebar-1'); ?> </p>
      </div>
      <div class="site-footer__col-four">
        Copyright &copy Riki 2023. All rights reserved
      </div>
    </div>
  </foooter>


<?php wp_footer(); ?>
</body>
</html>