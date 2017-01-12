<?php
/*
Template Name: Blog
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-sidebar-left" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>

<div class="main-content">
<div class="page-image">
  <img src="<?php echo get_template_directory_uri(). '/../../uploads/2016/11/panel.enscale.TravelTechnology-SmallHero.full_.high_-1.jpg'; ?>" alt="Header image"  />
  <h2 class="page-image-title"><?php the_title(); ?></h2>
  <small style="position:absolute; top:300px; color:#fefefe; text-align:center;">This is where you can see all the blog posts. You can create one by selecting the "Create New Post" option in the sidebar.</small>
</div>
<small>Disclaimer: Content is strictly personal. It does not reflect the views of Carlson Wagonlit Travel and shall be fully compliant to company privacy.</small>
<?php $args = array('posts_per_page'=> 5, 'orderby'=> 'date');
  $postlist = get_posts($args);
  foreach ($postlist as $post):
    setup_postdata($post); ?>
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
<?php
  endforeach;
  wp_reset_postdata();
?>
<?php the_content(); ?>
<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_sidebar(); ?>

</div>

<?php get_footer();
