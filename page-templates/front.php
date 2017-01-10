<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-sidebar-left" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<div class="main-content">

<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
    <ul class="orbit-container">
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
      <li class="is-active orbit-slide">
        <img class="orbit-image" src="<?php echo get_template_directory_uri().'/assets/images/carlson/orbit/01.jpg'?>" alt="Space">
        <figcaption class="orbit-caption my-caption">Space, the final frontier.</figcaption>
      </li>
      <li class="orbit-slide">
        <img class="orbit-image" src="<?php echo get_template_directory_uri().'/assets/images/carlson/orbit/02.jpg'?>" alt="Space">
        <figcaption class="orbit-caption my-caption">Lets Rocket!</figcaption>
      </li>
      <li class="orbit-slide">
        <img class="orbit-image" src="<?php echo get_template_directory_uri().'/assets/images/carlson/orbit/03.jpg'?>" alt="Space">
        <figcaption class="orbit-caption my-caption">Encapsulating</figcaption>
      </li>
      <li class="orbit-slide">
        <img class="orbit-image" src="<?php echo get_template_directory_uri().'/assets/images/carlson/orbit/04.jpg'?>" alt="Space">
        <figcaption class="orbit-caption my-caption">Outta This World</figcaption>
      </li>
    </ul>
    <nav class="orbit-bullets">
      <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
      <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
      <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
      <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
    </nav>
  </div>
  <!-- TODO: Show the last 5 posts by date in a fixed list. -->
  <div id="timeline">
    <ul>
    <?php
      $recent_posts = wp_get_recent_posts( array('post_status' => 'publish', 'numberposts' => 5) );
      foreach( $recent_posts as $recent ) {
        printf( '<li><a href="%1$s">%2$s</a></li>',
            esc_url( get_site_url().'/'.$recent['post_name'] ),
            apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
          );
      }
     ?>
   </ul>
  </div>
<?php the_content(); ?>
<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_sidebar(); ?>

</div>

<?php get_footer();
