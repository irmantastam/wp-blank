<?php get_header(); ?>

<main role="main" aria-label="Content">
  <section>
    <h1><?php echo sprintf(__('%s Search Results for ', 'wp-blank'), $wp_query->found_posts); echo get_search_query(); ?></h1>
    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>
  </section>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
