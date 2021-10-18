<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo( 'name' ); ?>
    </title>
</head>
<div id="mainNav">
  <nav class="navbar navbar-expand-xl" role="navigation">
      <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
          <img src="<?php echo esc_url( get_header_image() ); ?>" />
          <div class="site-title">
            <h4><?php bloginfo('name'); ?></h4>
            <h5>Austin, TX</h5>
          </div>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'archives-menu' ); ?>">
        <i class="fas fa-bars"></i>
      </button>

  <div class="collapse navbar-collapse" id="navbar-content">
    <?php
    wp_nav_menu( array(
      'theme_location' => 'nav-menu',
      'menu_id'        => 'primary',
      'container'      => 'div',
      'depth'          => 2,
      'menu_class'     => 'navbar-nav',
      'walker'         => new Bootstrap_NavWalker(),
      'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
    ) );
    ?>
    <a href="#" id="searchtoggle"><i class="fas fa-search"></i></a>
  </div>

  </nav>
</div>
<div id="searchbar">
  <?php get_search_form(); ?>
</div>

<?php wp_head(); ?>
<body <?php body_class(); ?>>




