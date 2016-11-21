<?php
/*
Template Name: Left Sidebar
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-sidebar-left" role="main">


<?php do_action( 'foundationpress_before_content' ); ?>
<div class="main-content">
<?php the_content(); ?>  
<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_sidebar(); ?>

</div>

<?php get_footer();
