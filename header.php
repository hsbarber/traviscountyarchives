<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,300italic,600italic|Pathway+Gothic+One|Oswald|Fjalla+One|IM+Fell+English|Lovers+Quarrel" media="screen">
    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo( 'name' ); ?>
    </title> 

 </head>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container banner">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="row">
    <div class="navbar-header">
      <a class="navbar-brand img" href="<?php echo get_home_url(); ?>">
            <img src="<?php header_image(); ?>" height="50px" width="50px" alt="Travis County Seal" />
      </a>
      <a class="navbar-brand text" href="<?php echo get_home_url(); ?>">
            <h4>Travis County Archives</h4>
            <h5>Austin, TX</h5>
      </a>

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    
    </div>

    <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>

  
  </div><!-- / row-->
  </div><!-- /.container-->
</nav>

<?php wp_head(); ?>
  <body <?php body_class(); ?>>

	


