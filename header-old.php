<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <!-- <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/pesticide.css">-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<!--<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>-->
	<link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

   

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo( 'name' ); ?>
    </title>


</head>

<div class="titleblock">
<div class="container">
    <div class="row header">
          <div class="col-xs-2 col-md-1 header">  
            <div class="logoimage">
             <img alt="Travis County Seal" src="http://www.traviscountyhistory.org/website2016/wp-content/uploads/2016/04/tcseal.svg" width="60px" height="60px"/>
            </div>
          </div>
          <div class="col-xs-10 col-md-2 header"> 
            <div class="headertext">
             <a href="http://www.traviscountyhistory.org/website2016"><h4><?php bloginfo('name'); ?></h4></a>
             <h5>Austin, TX</h5>
            </div>
          </div>
      <div class="col-xs-12 col-md-9 nav">
        <nav class="navbar navbar-default" role="navigation">     
            <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
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
            <ul class="navbar nav">
              <li>
               <?php get_search_form(); ?>
             </li>
            </ul>
        </nav> 
      </div>
  </div>
</div>
</div>

<?php wp_head(); ?>
  <body <?php body_class(); ?>>


    <!--
    <div class="container" id="banner">
      <div class="row">
          <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><img class="logo" src="http://localhost:8888/wordpress/wp-content/uploads/2015/07/logo_tc_seal.png" alt="logo"></a>
          <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
           <ul class="nav pull-right navbar-nav">
          <li>
            <form class="navbar-form">
          <input class="form-control" placeholder="Search" type="text">
          <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
        </form>
          </li>
        </ul>
      </div>
    </div>
-->




    <!--<div class="navbar navbar-default navbar-static-top" role="navigation" id="topnavbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        </div>

        <div class="navbar-collapse collapse">

        

        </div><!--/.navbar-collapse -->

      </div>
    </div>
	<!--<script>
	var search_form = ''
	+ '<form method="GET" class="navbar-form navbar-right" action="<?php bloginfo('siteurl'); ?>" role="search">'
	+ '<div class="form-group">'
	+ '<div id="input"><input type="text" class="form-control search_form" name="s" id="search-input" placeholder="<?php echo esc_attr__("Search"); ?>" /></div>'
	+ '</div>'
	+ '</form>'; 
	
    jQuery('.navbar-collapse').append(search_form);

	</script>-->
