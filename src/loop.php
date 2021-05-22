<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (has_post_thumbnail()): ?>0
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(array(120, 120)); ?>
      </a>
    <?php endif; ?>
    <h2>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    </h2>    
    <?php the_excerpt(); ?>
    <span class="date">
      <time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
        <?php the_date(); ?> <?php the_time(); ?>
      </time>
    </span>
    <span class="author"><?php _e('by', 'WP-blank'); ?> <?php the_author_posts_link(); ?></span>
    <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __('Add comment', 'WP-blank'), __('1 Comment', 'WP-blank'), __('% Comments', 'WP-blank')); ?></span>
  </article>
<?php endwhile; ?>
<?php else: ?>
  <article>
    <h2><?php _e('Sorry, nothing to display.', 'WP-blank'); ?></h2>
  </article>
<?php endif; ?>
