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
</body>
</html> 

