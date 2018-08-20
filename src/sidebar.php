<aside class="sidebar" role="complementary">
  <?php get_template_part('searchform'); ?>
  <?php if (function_exists('dynamic_sidebar') && is_active_sidebar('sidebar-1')) : ?>
    <div class="sidebar__widget-area">
      <?php dynamic_sidebar('sidebar-1'); ?>
    </div>
  <?php endif; ?>
</aside>
