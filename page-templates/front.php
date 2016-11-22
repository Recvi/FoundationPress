<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-sidebar-left" role="main">

<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
    <ul class="orbit-container">
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
      <li class="is-active orbit-slide">
        <img class="orbit-image" src="<?php echo get_template_directory_uri().'/assets/images/carlson/orbit/01.jpg'?>" alt="Space">
        <figcaption class="orbit-caption">Space, the final frontier.</figcaption>
      </li>
      <li class="orbit-slide">
        <img class="orbit-image" src="<?php echo get_template_directory_uri().'/assets/images/carlson/orbit/02.jpg'?>" alt="Space">
        <figcaption class="orbit-caption">Lets Rocket!</figcaption>
      </li>
      <li class="orbit-slide">
        <img class="orbit-image" src="<?php echo get_template_directory_uri().'/assets/images/carlson/orbit/03.jpg'?>" alt="Space">
        <figcaption class="orbit-caption">Encapsulating</figcaption>
      </li>
      <li class="orbit-slide">
        <img class="orbit-image" src="<?php echo get_template_directory_uri().'/assets/images/carlson/orbit/04.jpg'?>" alt="Space">
        <figcaption class="orbit-caption">Outta This World</figcaption>
      </li>
    </ul>
    <nav class="orbit-bullets">
      <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
      <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
      <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
      <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
    </nav>
  </div>
	<?php $args = array('posts_per_page'=> 5, 'orderby'=> 'date');
  $postlist = get_posts($args);
  foreach ($postlist as $post):
    setup_postdata($post); ?>
      <article id="post-<?php the_ID(); ?>">
        <header>
          <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h1>
        </header>-
        <div class="entry-content">
          <?php the_excerpt(); ?>
        </div>
        <footer>
          <p><?php the_tags(); ?></p>
        </footer>
      </article>
<?php-]
    endforeach;
    wp_reset_postdata();
?>

<?php do_action( 'foundationpress_before_content' ); ?>
<div class="main-content">
<?php the_content(); ?>
<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_sidebar(); ?>

</div>

<?php get_footer();
