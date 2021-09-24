<?php
if( ! is_active_sidebar( 'main-sidebar' ) ) {
return;
}

// if there is nothing in the sidebar, then don't show it at all;
// if you want to have the sidebar all the time, then remove this code?>

<aside id="secondary" class="widget-area" role="complementary">


<?php dynamic_sidebar( 'main-sidebar' ); ?>

<?php

$args =[
  'label_username' => 'Add your fancy username here',
  'label_password' => 'Your fancy password'
];

?>


<?php wp_login_form( $args ); ?>


<?php echo( 'calendar '); ?><?php get_calendar(); ?>

<?php

$args = [
  'type' => 'weekly',
  'limit' => 3
];

?>

<?php wp_get_archives( $args ); ?>


</aside>
