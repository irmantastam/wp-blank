<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="wrapper">
      <header class="header" role="banner">

        <div class="logo">
          <?php the_custom_logo(); ?>
        </div>

        <nav class="navigation" role="navigation">
          <?php wp_nav_menu() ?>
        </nav>

      </header>
