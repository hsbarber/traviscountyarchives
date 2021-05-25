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
<main id="historyday2021">
    <div class=" hd2021header">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="hd2021title " style="background:
        linear-gradient(
            rgba(0, 64, 0, 0.6),
            rgba(0, 64, 0, 0.85)),
        url('<?php echo $backgroundImg[0]; ?>') 50% 50% no-repeat; background-size: cover; background-position: center;">
            <div>
                <h2><?php the_title(); ?></h2>
                <h4><?php the_field('subtitle'); ?></h4>
            </div>
        </div>
        <?php endwhile; else: ?>
        <div class="page-header">
            <h1>Oh no!</h1>
        </div>
        <p>No content is appearing for this page!</p>
        <?php endif; ?>
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
    <div class="container hd-page-container">
        <div class="row">
            <div class="col-md-12 page-container-full-width">
                <div class="the_content">
                    <h4><?php the_field('intro_title'); ?></h4>
                    <p><?php the_field('intro_text'); ?></p>
                </div>
            </div>
            <!--end page__container#### -->

        </div>
    </div>
    <nav id="cd-vertical-nav">
		<ul>
			<li>
				<a href="#section1" data-number="1">
					<span class="cd-dot"></span>
					<span class="cd-label"><?php the_field('nav-box-1-title'); ?></span>
				</a>
			</li>
			<li>
				<a href="#section2" data-number="2">
					<span class="cd-dot"></span>
					<span class="cd-label"><?php the_field('nav-box-2-title'); ?></span>
				</a>
			</li>
			<li>
				<a href="#section3" data-number="3">
					<span class="cd-dot"></span>
					<span class="cd-label"><?php the_field('nav-box-3-title'); ?></span>
				</a>
			</li>
			<li>
				<a href="#section4" data-number="4">
					<span class="cd-dot"></span>
					<span class="cd-label"><?php the_field('nav-box-4-title'); ?></span>
				</a>
			</li>
			<li>
				<a href="#section5" data-number="5">
					<span class="cd-dot"></span>
					<span class="cd-label"><?php the_field('nav-box-5-title'); ?></span>
				</a>
			</li>
			<li>
				<a href="#section6" data-number="6">
					<span class="cd-dot"></span>
					<span class="cd-label"><?php the_field('nav-box-6-title'); ?></span>
				</a>
			</li>
		</ul>
	</nav>
    <div class="navigation-container"  style="background:
    linear-gradient(
        rgba(0, 64, 0, 1),
        rgba(0, 64, 0, 0.2)),
    url('<?php the_field('navigation-bg-image') ?>') 50% 50% no-repeat; background-size: cover; background-position: center;">
            <h4 class="navigation-title"><?php the_field('navigation-title'); ?></h4>
            <div class="navigation-flex">
                <div class="navigation">
                    <a class="nav-box" href="#section1">
                        <img src="<?php the_field('nav-box-1-image'); ?>" />
                        <h4><?php the_field('nav-box-1-title'); ?></h4>
                        <p><?php the_field('nav-box-1-text'); ?></p>
                    </a>
                    <a class="nav-box" href="#section2">
                        <img src="<?php the_field('nav-box-2-image'); ?>" />
                        <h4><?php the_field('nav-box-2-title'); ?></h4>
                        <p><?php the_field('nav-box-2-text'); ?></p>
                    </a>
                    <a class="nav-box" href="#hd-2021-timeline">
                        <img src="<?php the_field('nav-box-3-image'); ?>" />
                        <h4><?php the_field('nav-box-3-title'); ?></h4>
                        <p><?php the_field('nav-box-3-text'); ?></p>
                    </a>
                    <a class="nav-box" href="#historystorymap">
                        <img src="<?php the_field('nav-box-4-image'); ?>" />
                        <h4><?php the_field('nav-box-4-title'); ?></h4>
                        <p><?php the_field('nav-box-4-text'); ?></p>
                    </a>
                    <a class="nav-box" href="#historystorymap">
                        <img src="<?php the_field('nav-box-5-image'); ?>" />
                        <h4><?php the_field('nav-box-5-title'); ?></h4>
                        <p><?php the_field('nav-box-5-text'); ?></p>
                    </a>
                    <a class="nav-box" href="#historystorymap">
                        <img src="<?php the_field('nav-box-6-image'); ?>" />
                        <h4><?php the_field('nav-box-6-title'); ?></h4>
                        <p><?php the_field('nav-box-6-text'); ?></p>
                    </a>
                </div>
            </div>
    </div>
    <section class="interstitial-video">
        <video src="<?php the_field('interstitial-video'); ?>" autoplay loop playsinline muted></video>
        <header class="viewport-header">
            <h1>
                Parks Department History
            </h1>
        </header>
    </section>
    <section class="container hd-2021-container cd-section" id="section1">
        <div class="row">
            <div class="col-md-12 parksdepartmenthistory">
                <?php the_field('parkhistoryoverview-text'); ?>
            </div>
        </div>
        <a href="#section2" class="cd-scroll-down cd-img-replace">scroll down</a>
    </section>
    <section class="parkrangers-container cd-section" id="section2">
        <div class="container hd-2021-container" >
            <div class="row">
                <div class="col-md-12 parksrangers">
                    <h4><?php the_field('parkrangers-title'); ?></h4>
                    <?php the_field('parkrangers-text'); ?>
                </div>
            </div>
        </div>
    </section>
    <section class=" timeline-container cd-section" id="section3">
        <div class="container hd-2021-container">
            <div class="row">
                <div class="col-md-12">
                    <h4><?php the_field('timeline-title'); ?></h4>
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
            </div>
        </div>
    </section>
    <section class="storymap-container cd-section" id="section4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-container-full-width">
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
                <!--end page__container#### -->

            </div>
        </div>
    </section>
    <section class="container hd-page-container cd-section" id="section5">
        <div class="row">
            <div class="col-md-12 page-container-full-width">
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
        </div>
    </section>

    </div>
</main>
<?php get_footer(); ?>


