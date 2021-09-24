<?php
// Add Theme support
add_theme_support( 'title_tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo'  );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

// Load in our CSS

function katerynacustomtheme_enqueue_styles() {

  wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );
}

add_action( 'wp_enqueue_scripts', 'katerynacustomtheme_enqueue_styles' );

// Register Menu locations

register_nav_menus( [
  'main-menu' => esc_html__( 'Main Menu', 'wptags' ),
  'footer-menu' => esc_html__( 'Footer Menu', 'wptags' )
]);

// Add sidebar on the backend

function katerynacustomtheme_widgets_init() {
  register_sidebar([
    'name' => esc_html__( 'Main Sidebar', 'katerynacustomtheme'),
    'id' => 'main-sidebar',
    'description' => esc_html__( 'Add widgets for main sidebar here', 'katerynacustomtheme' ),
    'before_widget' => '<section class="widget">',
    'after_widget' => '</section>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
 ]);
}

add_action( 'widgets_init', 'katerynacustomtheme_widgets_init');

// Comment Custom Callback

function wptags_comment() {
  get_template_part( 'comment' );
}

// Action hook function?

function before_header_message() {
  echo '<p>My custom header text</p>';
}

add_action( 'wphooks_before_footer', 'before_header_message', 10 );

// Template redirect fundtion for About and Sample Pages

function kateryna_template_pages() {

  if ( is_page( 'about' ) && ! is_user_logged_in()) {
    wp_redirect( home_url( '/sample-page/') );
    die;
    //if the user is not logged in and lands on the about page, send them on the sample page
  }

  if ( is_page( 'sample-page') && is_user_logged_in()) {
    wp_redirect( home_url( '/about/') );
    die;
  }

  //if the user is logged in and lands on the sample page, then send them to the about page;
}

add_action( 'template_redirect', 'kateryna_template_pages', 10 );

// Add text at the end of the loop

function kateryna_loop_text() {
   echo '<p>End of loop text</p>';
}

add_action ( 'loop_end', 'kateryna_loop_text', 10 );

//Filter hook for message

function wphooks_make_uppercase ( $message ) {
  $new_message = strtoupper( $message );
  return $new_message;

}

add_filter ( 'wphooks_footer_message', 'wphooks_make_uppercase', 15 );

// Rename the admin column of author to writer

function rename_kateryna_columns ( $columns ) {
  $columns ['author'] = 'Writer';
  $columns ['title'] = 'Article Title';
  return $columns;
}

add_filter ( 'manage_posts_columns', 'rename_kateryna_columns', 30 );

?>
