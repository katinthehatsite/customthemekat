<article id="post-<?php the_ID(); ?>" <?php post_class(); //each article will have its own ID?>>

<?php get_header(); ?>

<div id="primary" class="content-area">

  <main id="main" class="site-main" role="main">

    <h2>
      <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
    </h2>
  <p class="byline"><?php the_time( 'F j, Y' ); //date output?>

  </p>


    <div class="entry-header">

<?php

$attr = [
  'class' => 'img featured',
  'title' => get_the_title()
];

the_post_thumbnail( 'medium', $attr );

?>


    </div>


    <div class="entry-content">

      <?php if (have_posts() ) : while ( have_posts() ) : the_post(); //the loop that checks to see if there are any posts on the page?>

  <?php the_content( 'Read more...' ); ?>

<?php endwhile; endif; //closing the loop to check if there are posts?>

<?php the_author_posts_link(); ?> |

<?php the_category(', ', ' ' ); //will pass categories as a list in a row one after the other?>
<?php the_tags( 'Tags: ', ', ' ); ?>

<?php edit_post_link(); ?>
<?php comments_template(); ?>

</div>

<?php get_footer(); ?>

</article>
