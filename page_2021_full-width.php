<?php
/*
  Template Name: History Day 2021 Full Width Template

 */
?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<?php get_header(); ?>
<div class="container-fluid bc-container">
  <div class="row">
    <div class="container">
     <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
     </div>
    </div>
  </div>
</div>
<!-- <div class="hd-page-bg" style="background: url('<?php echo $backgroundImg[0]; ?>') 50% 50% no-repeat; background-size: cover; background-attachment: fixed;"> -->
<?php
      $arg = array(
         'post_type'         => 'slider',
         'post_status' => 'publish',
         'posts_per_page'    => 5,
         'order'             => 'ASC'
      );
      $slider = new WP_Query($arg);
?>
<div id="historyday2021">
    <div class=" hd2021header" >
        <div class="hd2021title" style="background:
            linear-gradient(
	        rgba(	0, 64, 0, 0.5),
	        rgba(	0, 64, 0, 0.5)),
            url('<?php echo $backgroundImg[0]; ?>') 50% 50% no-repeat; background-size: cover;">
            <div>
                <h3><?php the_field('subtitle'); ?></h3>
                <h1><?php the_field('title'); ?></h1>
                <a href="#intro"><h4>Start here</h4>
                 </a>

            </div>
        </div>
        <div class="img-container" data-slideshow>
        <?php if ($slider->have_posts()) {
                while($slider->have_posts()){
                $slider->the_post();
                // Post's featured image
                the_post_thumbnail('large');
                the_excerpt();
                }
        }
        wp_reset_postdata();
        ?>
        </div>
    </div>
<!-- Intro Section -->
    <div class="container" id="intro">
        <div class="row">
            <div class="the_content col-12 col-md-6">
                <h1><?php the_field('intro_title'); ?></h1>
                <p><?php the_field('intro_text'); ?></p>
            </div>
            <div class="nav-sections col-12 col-md-6">
                <div class="nav-flex">
                    <h3>Sections</h3>
                    <a href="#section1"><h5>I. <?php the_field('nav-box-1-title'); ?></h5></a>
                    <a href="#section2"><h5>II. <?php the_field('nav-box-2-title'); ?></h5></a>
                    <a href="#section3"><h5>III. <?php the_field('nav-box-3-title'); ?></h5><a>
                    <a href="#section4"><h5>IV. <?php the_field('nav-box-4-title'); ?></h5></a>
                    <a href="#section5"><h5>V. <?php the_field('nav-box-5-title'); ?></h5></a>
                    <a href="#section6"><h5>VI. <?php the_field('nav-box-6-title'); ?></h5></a>
                </div>
            </div>
        </div>
    </div>

<!-- Main Section -->
    <div class="row no-gutters">

        <main id="mainSections" class="col-12 col-md-9 order-12 order-md-1">
            <section id="section1" class="cd-section">
                <header class="interstitial-video" >
                    <video src="<?php the_field('interstitial-video'); ?>" autoplay loop playsinline muted></video>
                    <header class="viewport-header">
                        <h1>
                            <?php the_field('parkhistoryoverview-title'); ?>
                        </h1>
                    </header>
                </header>
                <div class="parksdepartmenthistory">
                    <div class="imagewrap-left">
                        <img src="<?php the_field('paragraphimage1'); ?>" />
                        <p>Tom B. Hughes</p>
                    </div>
                    <?php the_field('parkhistoryoverview-text'); ?>
                </div>
            </section>
            <section id="section2" class="cd-section">
                <header  class="HD2021-header">

                    <img src="<?php the_field('parkrangers-header-img'); ?>" />
                    <div class="HD2021-header-title">
                        <h1>
                        <?php the_field('parkrangers-title'); ?>
                        </h1>
                    </div>
                </header>
                <div class="parkrangers-container">
                    <div class="parksrangers">
                        <?php the_field('parkrangers-text'); ?>
                    </div>
                </div>
            </section>
            <section id="section3" class="cd-section">
                <header  class="HD2021-header">
                    <img src="<?php the_field('timeline-header-img'); ?>" />
                    <div class="HD2021-header-title">
                        <h1>
                        <?php the_field('timeline-title'); ?>
                        </h1>
                    </div>
                </header>
                <div class=" timeline-container">

                    <div class="timeline-item" date-is='<?php the_field('date-1'); ?>'>
                        <p>
                        <?php the_field('text-1'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-2'); ?>'>
                        <p>
                        <?php the_field('text-2'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-3'); ?>'>
                        <p>
                        <?php the_field('text-3'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-4'); ?>'>
                        <p>
                        <?php the_field('text-4'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-5'); ?>'>
                        <p>
                        <?php the_field('text-5'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-6'); ?>'>
                        <p>
                        <?php the_field('text-6'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-7'); ?>'>
                        <p>
                        <?php the_field('text-7'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-8'); ?>'>
                        <p>
                        <?php the_field('text-8'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-9'); ?>'>
                        <p>
                        <?php the_field('text-9'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-10'); ?>'>
                        <p>
                        <?php the_field('text-10'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-11'); ?>'>
                        <p>
                        <?php the_field('text-11'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-12'); ?>'>
                        <p>
                        <?php the_field('text-12'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-13'); ?>'>
                        <p>
                        <?php the_field('text-13'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-14'); ?>'>
                        <p>
                        <?php the_field('text-14'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-15'); ?>'>
                        <p>
                        <?php the_field('text-15'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-16'); ?>'>
                        <p>
                        <?php the_field('text-16'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-17'); ?>'>
                        <p>
                        <?php the_field('text-17'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-18'); ?>'>
                        <p>
                        <?php the_field('text-18'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-19'); ?>'>
                        <p>
                        <?php the_field('text-19'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-20'); ?>'>
                        <p>
                        <?php the_field('text-20'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-21'); ?>'>
                        <p>
                        <?php the_field('text-21'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-22'); ?>'>
                        <p>
                        <?php the_field('text-22'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-23'); ?>'>
                        <p>
                        <?php the_field('text-23'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-24'); ?>'>
                        <p>
                        <?php the_field('text-24'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-25'); ?>'>
                        <p>
                        <?php the_field('text-25'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-26'); ?>'>
                        <p>
                        <?php the_field('text-26'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-27'); ?>'>
                        <p>
                        <?php the_field('text-27'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-28'); ?>'>
                        <p>
                        <?php the_field('text-28'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-29'); ?>'>
                        <p>
                        <?php the_field('text-29'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-30'); ?>'>
                        <p>
                        <?php the_field('text-30'); ?>
                        </p>
                    </div>
                    <div class="timeline-item" date-is='<?php the_field('date-31'); ?>'>
                        <p>
                        <?php the_field('text-31'); ?>
                        </p>
                    </div>
                </div>
            </section>
            <section id="section4" class="cd-section">
                <div class="storymap-container">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="the_content" id="historystorymap">
                            <?php the_content(); ?>
                        </div>
                        <?php endwhile; else: ?>
                        <div class="page-header">
                            <h1>Oh no!</h1>
                        </div>
                        <p>No content is appearing for this page!</p>
                        <?php endif; ?>
                </div>
            </section>
            <section id="section5" class="cd-section">
                <div class="historyeachpark">
                    <h4><?php the_field('historyofeachpark-title'); ?></h4>
                    <p><?php the_field('historyofeachpark-text'); ?></p>
                    <div class="parks-list">
                        <?php
                        $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
                                                            // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);

                        $menuID = $menuLocations['hd2021-menu']; // Get the parks menu ID

                        $parksNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.

                        foreach ( $parksNav as $navItem ) {

                        echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';

                        }
                        ?>
                    </div>
                </div>
            </section>
        </main>

            <!-- Mobile Nav -->
            <nav id="mobileNavID" class="mobileNav navbar">

                <!-- Navbar brand -->
                <a class="navbar-brand" href="#">Sections Navigation</a>

                <!-- Collapse button -->
                <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                    aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                        class="fas fa-bars fa-1x"></i></span></button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">

                    <!-- Links -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#section1">
                                <?php the_field('nav-box-1-title'); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section2">
                                <?php the_field('nav-box-2-title'); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section3">
                                <?php the_field('nav-box-3-title'); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section4">
                                <?php the_field('nav-box-4-title'); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section5">
                                <?php the_field('nav-box-5-title'); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section6">
                                <?php the_field('nav-box-6-title'); ?>
                            </a>
                        </li>
                    </ul>
                    <!-- Links -->

                </div>
            <!-- Collapsible content -->
            </nav>
            <!--/.Navbar-->
        <nav id="fixednav" class="verticalnav col-12 col-md-3 order-1 order-md-12">
            <ul>
                <li>
                    <a href="#section1" data-number="1">
                        <?php the_field('nav-box-1-title'); ?>
                    </a>
                </li>
                <li>
                    <a href="#section2" data-number="2">
                        <?php the_field('nav-box-2-title'); ?>
                    </a>
                </li>
                <li>
                    <a href="#section3" data-number="3">
                        <?php the_field('nav-box-3-title'); ?>
                    </a>
                </li>
                <li>
                    <a href="#section4" data-number="4">
                        <?php the_field('nav-box-4-title'); ?>
                    </a>
                </li>
                <li>
                    <a href="#section5" data-number="5">
                        <?php the_field('nav-box-5-title'); ?>
                    </a>
                </li>
                <li>
                    <a href="#section6" data-number="6">
                        <?php the_field('nav-box-6-title'); ?>
                    </a>
                </li>
            </ul>
        </nav>

    </div>
</div>
<?php get_footer(); ?>


