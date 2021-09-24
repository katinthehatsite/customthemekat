<div id="<?php comment_ID(); ?>" <?php comment_class(); ?>>

  <?php echo get_avatar( get_comment_author_email() ); ?>

  <?php comment_text(); ?>

  <?php
$args = [
  'depth' => 1,
  'max-depth' => 3.
];
comment_reply_link( $args );
   ?>
