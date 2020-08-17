<footer>
    <h2><?php bloginfo( 'title' ); ?> Footer</h2>
    <p>
      &copy; Copyright
      <?php echo date( 'Y' ); ?>
      <a href="<?php echo site_url(); ?>"><?php bloginfo( 'title' ); ?></a>;
      All Rights Reserved.
    </p>
  </footer>
  <?php
    // Very similar to wp_head(), but for footer scripts or outputs.
    wp_footer();
  ?>
  <nav>
    <h3><?php bloginfo( 'title'); ?> Navigation </h3>
    <?php
    // Output the another navigation ( list of anchors / links.)
        wp_nav_menu(
            array( // Ensure theme_location is defined so we can link this to a registered nav.
                'theme_location' => 'footer_menu'
            )
        );
    ?>
</nav>
</body>
</html> 

