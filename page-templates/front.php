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
      <li class="is-active orbit-slide">
        <img class="orbit-image" src="<?php echo get_template_directory_uri().'/assets/images/carlson/orbit/01.jpg'?>" alt="Space">
        <figcaption class="orbit-caption my-caption"><span class="smaller">Welcome to</span><br>CWT Greece Intranet</figcaption>
      </li>
    </ul>
  </div>
  <div id="timeline">
    <h4>Recent Posts</h4>
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
<?php get_footer(); ?>
