<?php
/*
Template Name: Blog
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-sidebar-left" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>

<div class="page-image">
  <img src="<?php echo get_template_directory_uri(). '/../../uploads/2016/11/panel.enscale.TravelTechnology-SmallHero.full_.high_-1.jpg'; ?>" alt="Header image"  />
  <h2 class="page-image-title"><?php the_title(); ?></h2>
</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>">
        <header>
          <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h1>
        </header>
        <div class="entry-content">
          <?php the_excerpt(); ?>
        </div>
        <footer>
          <p><?php the_tags(); ?></p>
        </footer>
      </article>
<?php endwhile; else: ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php the_content(); ?>
<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_sidebar(); ?>

</div>

<?php get_footer();
