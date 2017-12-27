<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<section>
			<h1><?php esc_html_e('Tag Archive: ', 'es-blank'); echo single_tag_title('', false); ?></h1>
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</section>
	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
