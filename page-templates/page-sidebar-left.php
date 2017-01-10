<?php
/*
Template Name: Left Sidebar
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-sidebar-left" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>

<div class="main-content">
  <div class="page-image">
    <img src="<?php echo get_template_directory_uri(). '/../../uploads/2016/11/panel.enscale.TravelTechnology-SmallHero.full_.high_-1.jpg'; ?>" alt="Header image"  />
    <h2 class="page-image-title"><?php the_title(); ?></h2>
  </div>
<?php the_content(); ?>
<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_sidebar(); ?>

</div>

<?php get_footer();
