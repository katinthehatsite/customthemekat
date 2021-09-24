<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <title>Kateryna Custom Theme</title>
  </head>
  <body <?php body_class(); ?>>

    <div id="page">

    </div>

      <header id="masthead" class="site-header" role="banner">
<p class="site-title">
  <a href="<?php echo esc_url( home_url() ); //displaying home URL link?>" rel="home">
<?php bloginfo( 'name' ); ?>
</a>
</p>


<p class="site-description">
  <?php bloginfo( 'description' ); ?>
</p>

<nav id='site-navigation' class="main-navigation" role="navigation">
  <?php
  $args = [
    //Location pickable in the customizer
    'theme-location' => 'main-menu',
    // Assigns a default menu to location
    'menu' => 'Main Menu',
    // Main wraooer around the ul of have_posts
    'container' => 'div',
    'container_class' => 'container-class',
    'container_id' => 'container-id',
    //Add text to link text (inside a tag)
    'link_before' => '',
    'link_after' => '',
    //Depth of child menu
    'depth' => 0,
    //Callback functiin if menu is not available
    'fallback_cb' => 'wp_page_menu',
  ];
  wp_nav_menu( $args );
  ?>
</nav>

<?php before_header_hook(); ?>

</header>
