<footer class="site-footer">

<?php do_action( 'wphooks_before_footer' ); ?>

<?php wp_footer(); ?>

  <?php
  $args = [
    //Location pickable in the customizer
    'theme-location' => 'footer-menu',
    // Assigns a default menu to location
    'menu' => 'Footer Menu',
    // Main wraooer around the ul of have_posts
    'container' => 'div',
    'container_class' => 'container-class',
    'container_id' => 'container-id',
    'fallback_cb' => false,
  ];
  wp_nav_menu( $args );
  ?>


<p class="site-description">
  <?php echo date( 'Y' ); ?> <?php bloginfo( 'description' ); ?>
</p>

<?php

$footer_message = '&copy;' .date( 'Y' ) . ' '. get_bloginfo( 'name' ); ?>

<p><?php echo apply_filters( 'wphooks_footer_message', $footer_message ); ?></p>



</footer>

 </div><! -- #footer ->
</body>
</html>
