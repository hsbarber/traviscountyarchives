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
                    <a href="#section3"><h5>II. <?php the_field('nav-box-3-title'); ?></h5></a>
                    <a href="#section4"><h5>III. <?php the_field('nav-box-4-title'); ?></h5><a>
                    <a href="#section5"><h5>IV. <?php the_field('nav-box-5-title'); ?></h5></a>
                    <a href="#section6"><h5>V. <?php the_field('nav-box-6-title'); ?></h5></a>
                    <a href="#section7"><h5>VI. <?php the_field('nav-box-7-title'); ?></h5></a>
                </div>
            </div>
        </div>
    </div>
    <nav id="slideoutnav">
        <button type="button" id="hamburger-menu" class="open-nav-btn" aria-label="open navigation" aria-controls="link-list" aria-expanded="false">&#9776;</button>
        <div id="slide-nav" class="slide-content">
            <button type="button" id="close" class="close-btn" aria-label="close navigation">&times;</button>
            <ul id="link-list">
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
                <li>
                    <a href="#section7" data-number="7">
                        <?php the_field('nav-box-7-title'); ?>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
<!-- Main Section -->
    <div class="row no-gutters">

        <main id="mainSections">
            <!-- Videos Section -->
            <section id="section1" class="cd-section">
                <header class="interstitial-video" >
                    <video src="<?php the_field('interstitial-video'); ?>" autoplay loop playsinline muted></video>
                    <header class="viewport-header">
                        <h1>
                            Parks Videos
                        </h1>
                    </header>
                </header>
                <div class="row">
                    <div class="container">
                        <ul class="video-block-container">
                            <li class="video-block"
                                data-toggle="modal"
                                data-target="#Modal1"
                                data-whatever="item 1"
                                style="background-image:
                                linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                                url('<?php the_field('video-1-thumbnail'); ?>')">
                                <a href="#">
                                    <div class="video-block-content">
                                        <h2><?php the_field('video-1-title'); ?></h2>
                                        <?php the_field('video-svg'); ?>
                                    </div>
                                </a>
                            </li>
                            <li class="video-block"
                            data-toggle="modal"
                            data-target="#Modal2"
                            data-whatever="item 2"
                            style="background-image:
                            linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                            url('<?php the_field('video-2-thumbnail'); ?>')">
                                <a href="#">
                                    <div class="video-block-content">
                                        <h2><?php the_field('video-2-title'); ?></h2>
                                        <?php the_field('video-svg'); ?>
                                    </div>
                                </a>
                            </li>
                            <li class="video-block"
                            data-toggle="modal"
                            data-target="#Modal3"
                            data-whatever="item 3"
                            style="background-image:
                            linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                            url('<?php the_field('video-3-thumbnail'); ?>')">
                                <a href="#">
                                    <div class="video-block-content">
                                        <h2><?php the_field('video-3-title'); ?></h2>
                                        <?php the_field('video-svg'); ?>
                                    </div>
                                </a>
                            </li>
                            <li class="video-block"
                            data-toggle="modal"
                            data-target="#Modal4"
                            data-whatever="item 4"
                            style="background-image:
                            linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                            url('<?php the_field('video-4-thumbnail'); ?>')">
                                <a href="#">
                                    <div class="video-block-content">
                                        <h2><?php the_field('video-4-title'); ?></h2>
                                        <?php the_field('video-svg'); ?>
                                    </div>
                                </a>
                            </li>
                            <li class="video-block"
                            data-toggle="modal"
                            data-target="#Modal5"
                            data-whatever="item 5"
                            style="background-image:
                            linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                            url('<?php the_field('video-5-thumbnail'); ?>')">
                                <a href="#">
                                    <div class="video-block-content">
                                        <h2><?php the_field('video-5-title'); ?></h2>
                                        <?php the_field('video-svg'); ?>
                                    </div>
                                </a>
                            </li>
                            <li class="video-block"
                            data-toggle="modal"
                            data-target="#Modal6"
                            data-whatever="item 6"
                            style="background-image:
                            linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                            url('<?php the_field('video-6-thumbnail'); ?>')">
                                <a href="#">
                                    <div class="video-block-content">
                                        <h2><?php the_field('video-6-title'); ?></h2>
                                        <?php the_field('video-svg'); ?>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- First Video Modal -->
                <div class="modal fade" id="Modal1"
                    tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"
                                    id="exampleModalLabel">
                                    <?php the_field('video-1-title'); ?>
                                </h5>
                                <button type="button" class="close"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body-wrapper">
                                <div class="modal-body">
                                    <div class="video-wrapper" >
                                        <?php the_field('video-1-iframe'); ?>
                                    </div>
                                    <?php the_field('video-1-description'); ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class=
                                    "btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second Video Modal -->
                <div class="modal fade" id="Modal2"
                    tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"
                                    id="exampleModalLabel">
                                    <?php the_field('video-2-title'); ?>
                                </h5>
                                <button type="button" class="close"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body-wrapper">
                                <div class="modal-body">
                                    <div class="video-wrapper" >
                                        <?php the_field('video-2-iframe'); ?>
                                    </div>
                                    <?php the_field('video-2-description'); ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class=
                                    "btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Third Video Modal -->
                <div class="modal fade" id="Modal3"
                    tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"
                                    id="exampleModalLabel">
                                    <?php the_field('video-3-title'); ?>
                                </h5>
                                <button type="button" class="close"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body-wrapper">
                                <div class="modal-body">
                                    <div class="video-wrapper" >
                                        <?php the_field('video-3-iframe'); ?>
                                    </div>
                                    <?php the_field('video-3-description'); ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class=
                                    "btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fourth Video Modal -->
                <div class="modal fade" id="Modal4"
                    tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"
                                    id="exampleModalLabel">
                                    <?php the_field('video-4-title'); ?>
                                </h5>
                                <button type="button" class="close"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body-wrapper">
                                <div class="modal-body">
                                    <div class="video-wrapper" >
                                        <?php the_field('video-4-iframe'); ?>
                                    </div>
                                    <?php the_field('video-4-description'); ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class=
                                    "btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fifth Video Modal -->
                <div class="modal fade" id="Modal5"
                    tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"
                                    id="exampleModalLabel">
                                    <?php the_field('video-5-title'); ?>
                                </h5>
                                <button type="button" class="close"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body-wrapper">
                                <div class="modal-body">
                                    <div class="video-wrapper" >
                                        <?php the_field('video-5-iframe'); ?>
                                    </div>
                                    <?php the_field('video-5-description'); ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class=
                                    "btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sixth Video Modal -->
                <div class="modal fade" id="Modal6"
                    tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"
                                    id="exampleModalLabel">
                                    <?php the_field('video-6-title'); ?>
                                </h5>
                                <button type="button" class="close"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body-wrapper">
                                <div class="modal-body">
                                    <div class="video-wrapper" >
                                        <?php the_field('video-6-iframe'); ?>
                                    </div>
                                    <?php the_field('video-6-description'); ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class=
                                    "btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Parks Department History Section -->
            <section id="section2" class="cd-section">
                <header class="HD2021-header">
                    <img src="<?php the_field('parkhistoryoverview-header-img'); ?>" />
                    <div class="HD2021-header-title">
                        <h1>
                            <?php the_field('parkhistoryoverview-title'); ?>
                        </h1>
                    </div>
                </header>
                <div class="HD2021-vertical-padding row">
                    <div class="container">
                        <div class="imagewrap-left">
                            <img src="<?php the_field('paragraphimage1'); ?>" />
                            <p>Tom B. Hughes</p>
                        </div>
                        <?php the_field('parkhistoryoverview-text'); ?>
                    </div>
                </div>
            </section>
            <!-- Parks Rangers History Section -->
            <section id="section3" class="cd-section">
                <header  class="HD2021-header">

                    <img src="<?php the_field('parkrangers-header-img'); ?>" />
                    <div class="HD2021-header-title">
                        <h1>
                        <?php the_field('parkrangers-title'); ?>
                        </h1>
                    </div>
                </header>
                <div class="HD2021-vertical-padding row">
                    <div class="container">
                        <?php the_field('parkrangers-text'); ?>
                    </div>
                </div>
            </section>
            <!-- Parks Timeline Section -->
            <section id="section4" class="cd-section">
                <header  class="HD2021-header">
                    <img src="<?php the_field('timeline-header-img'); ?>" />
                    <div class="HD2021-header-title">
                        <h1>
                        <?php the_field('timeline-title'); ?>
                        </h1>
                    </div>
                </header>
                <div class="timeline-flex">
                    <input type="checkbox" class="read-more-state" id="post-2" />
                    <div class=" timeline-container read-more-wrap">
                        <div class="timeline-item" date-is='<?php the_field('date-1'); ?>'>
                            <p>
                            <?php the_field('text-1'); ?>
                            </p>
                        </div>
                        <div class="timeline-item" date-is='<?php the_field('date-2'); ?>'>
                            <p>
                            <?php the_field('text-2'); ?>
                            </p>
                            <a href="<?php the_field('photo-1'); ?>">
                                <img class="timeline-photo" src="<?php the_field('photo-1'); ?>" />
                            </a>
                            <p class="timeline-caption"><?php the_field('photo-1-caption'); ?></p>
                        </div>
                        <div class="timeline-item" date-is='<?php the_field('date-3'); ?>'>
                            <p>
                            <?php the_field('text-3'); ?>
                            </p>
                            <a href="<?php the_field('photo-2'); ?>">
                                <img class="timeline-photo" src="<?php the_field('photo-2'); ?>" />
                            </a>
                            <p class="timeline-caption"><?php the_field('photo-2-caption'); ?></p>
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
                            <a href="<?php the_field('photo-3'); ?>">
                                <img class="timeline-photo" src="<?php the_field('photo-3'); ?>" />
                            </a>
                            <p class="timeline-caption"><?php the_field('photo-3-caption'); ?></p>
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
                            <a href="<?php the_field('photo-4'); ?>">
                                <img class="timeline-photo" src="<?php the_field('photo-4'); ?>" />
                            </a>
                            <p class="timeline-caption"><?php the_field('photo-4-caption'); ?></p>
                        </div>
                        <div class="timeline-item" date-is='<?php the_field('date-8'); ?>'>
                            <p>
                            <?php the_field('text-8'); ?>
                            </p>
                           <a href="<?php the_field('photo-5'); ?>">
                                <img class="timeline-photo" src="<?php the_field('photo-5'); ?>" />
                            </a>
                            <p class="timeline-caption"><?php the_field('photo-5-caption'); ?></p>
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
                            <a href="<?php the_field('photo-6'); ?>">
                                <img class="timeline-photo" src="<?php the_field('photo-6'); ?>" />
                            </a>
                            <p class="timeline-caption"><?php the_field('photo-6-caption'); ?></p>
                        </div>
                        <div class="timeline-item" date-is='<?php the_field('date-11'); ?>'>
                            <p>
                            <?php the_field('text-11'); ?>
                            </p>
                            <a href="<?php the_field('photo-7'); ?>">
                                <img class="timeline-photo" src="<?php the_field('photo-7'); ?>" />
                            </a>
                            <p class="timeline-caption"><?php the_field('photo-7-caption'); ?></p>
                        </div>
                        <div class="timeline-item" date-is='<?php the_field('date-12'); ?>'>
                            <p>
                            <?php the_field('text-12'); ?>
                            </p>
                            <a href="<?php the_field('photo-8'); ?>">
                                <img class="timeline-photo" src="<?php the_field('photo-8'); ?>" />
                            </a>
                            <p class="timeline-caption"><?php the_field('photo-8-caption'); ?></p>
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
                            <a href="<?php the_field('photo-9'); ?>">
                                <img class="timeline-photo" src="<?php the_field('photo-9'); ?>" />
                            </a>
                            <p class="timeline-caption"><?php the_field('photo-9-caption'); ?></p>
                        </div>
                        <div class="timeline-item" date-is='<?php the_field('date-15'); ?>'>
                            <p>
                                <?php the_field('text-15'); ?>
                            </p>
                            <a href="<?php the_field('photo-10'); ?>">
                                <img class="timeline-photo" src="<?php the_field('photo-10'); ?>" />
                            </a>
                            <p class="timeline-caption"><?php the_field('photo-10-caption'); ?></p>
                        </div>
                        <div class="timeline-item" date-is='<?php the_field('date-16'); ?>'>
                            <p>
                            <?php the_field('text-16'); ?>
                            </p>
                            <a href="<?php the_field('photo-11'); ?>">
                                <img class="timeline-photo" src="<?php the_field('photo-11'); ?>" />
                            </a>
                            <p class="timeline-caption"><?php the_field('photo-11-caption'); ?></p>
                        </div>
                        <div class="timeline-item" date-is='<?php the_field('date-17'); ?>'>
                            <p>
                            <?php the_field('text-17'); ?>
                            </p>
                        </div>
                        <div class="timeline-item read-more-target" date-is='<?php the_field('date-18'); ?>'>
                            <p>
                            <?php the_field('text-18'); ?>
                            </p>
                            <a href="<?php the_field('photo-12'); ?>">
                                <img class="timeline-photo" src="<?php the_field('photo-12'); ?>" />
                            </a>
                            <p class="timeline-caption"><?php the_field('photo-12-caption'); ?></p>
                        </div>
                        <div class="timeline-item read-more-target" date-is='<?php the_field('date-19'); ?>'>
                            <p>
                            <?php the_field('text-19'); ?>
                            </p>
                        </div>
                        <div class="timeline-item read-more-target" date-is='<?php the_field('date-20'); ?>'>
                            <p>
                            <?php the_field('text-20'); ?>
                            </p>
                        </div>
                        <div class="timeline-item read-more-target" date-is='<?php the_field('date-21'); ?>'>
                            <p>
                            <?php the_field('text-21'); ?>
                            </p>
                            <a href="<?php the_field('photo-13'); ?>">
                                <img class="timeline-photo" src="<?php the_field('photo-13'); ?>" />
                            </a>
                            <p class="timeline-caption"><?php the_field('photo-13-caption'); ?></p>
                        </div>
                        <div class="timeline-item read-more-target" date-is='<?php the_field('date-22'); ?>'>
                            <p>
                            <?php the_field('text-22'); ?>
                            </p>
                        </div>
                        <div class="timeline-item read-more-target" date-is='<?php the_field('date-23'); ?>'>
                            <p>
                            <?php the_field('text-23'); ?>
                            </p>
                            <a href="<?php the_field('photo-14'); ?>">
                                <img class="timeline-photo" src="<?php the_field('photo-14'); ?>" />
                            </a>
                            <p class="timeline-caption"><?php the_field('photo-14-caption'); ?></p>
                        </div>
                        <div class="timeline-item read-more-target" date-is='<?php the_field('date-24'); ?>'>
                            <p>
                            <?php the_field('text-24'); ?>
                            </p>
                            <a href="<?php the_field('photo-15'); ?>">
                                <img class="timeline-photo" src="<?php the_field('photo-15'); ?>" />
                            </a>
                            <p class="timeline-caption"><?php the_field('photo-15-caption'); ?></p>
                        </div>
                        <div class="timeline-item read-more-target" date-is='<?php the_field('date-25'); ?>'>
                            <p>
                            <?php the_field('text-25'); ?>
                            </p>
                        </div>
                        <div class="timeline-item read-more-target" date-is='<?php the_field('date-26'); ?>'>
                            <p>
                            <?php the_field('text-26'); ?>
                            </p>
                        </div>
                        <div class="timeline-item read-more-target" date-is='<?php the_field('date-27'); ?>'>
                            <p>
                            <?php the_field('text-27'); ?>
                            </p>
                        </div>
                        <div class="timeline-item read-more-target" date-is='<?php the_field('date-28'); ?>'>
                            <p>
                            <?php the_field('text-28'); ?>
                            </p>
                        </div>
                        <div class="timeline-item read-more-target" date-is='<?php the_field('date-29'); ?>'>
                            <p>
                            <?php the_field('text-29'); ?>
                            </p>
                            <a href="<?php the_field('photo-16'); ?>">
                                <img class="timeline-photo" src="<?php the_field('photo-16'); ?>" />
                            </a>
                            <p class="timeline-caption"><?php the_field('photo-16-caption'); ?></p>
                        </div>
                        <div class="timeline-item read-more-target" date-is='<?php the_field('date-30'); ?>'>
                            <p>
                            <?php the_field('text-30'); ?>
                            </p>
                        </div>
                        <div class="timeline-item read-more-target" date-is='<?php the_field('date-31'); ?>'>
                            <p>
                            <?php the_field('text-31'); ?>
                            </p>
                        </div>
                    </div>
                    <label for="post-2" class="read-more-trigger"></label>
                </div>
            </section>
            <!-- Interactive Map Section -->
            <section id="section5" class="cd-section">
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
            <!-- History of Each Park Section -->
            <section id="section6" class="cd-section">
                 <header  class="HD2021-header">
                    <img src="<?php the_field('historyofeachpark-header-img'); ?>" />
                    <div class="HD2021-header-title">
                        <h1>
                        <?php the_field('historyofeachpark-title'); ?>
                        </h1>
                    </div>
                </header>
                <div class="row HD2021-vertical-padding">
                    <div class="container">
                        <p><?php the_field('historyofeachpark-text'); ?></p>
                        <div class="parks-list">
                            <?php
                            $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
                                                                // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);

                            $menuID = $menuLocations['hd2021-menu']; // Get the parks menu ID

                            $parksNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.

                            foreach ( $parksNav as $navItem ) {
                            $id = $navItem->object_id;
                            echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'">';
                            echo get_the_post_thumbnail($id);
                            echo '<h4>'.$navItem->title.'</h4></a></li>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Parks Classifications -->
            <section id="section7" class="cd-section">
                <header  class="HD2021-header">
                    <img src="<?php the_field('parksclassifications-header-img'); ?>" />
                    <div class="HD2021-header-title">
                        <h1>
                        <?php the_field('parksclassifications-title'); ?>
                        </h1>
                    </div>
                </header>
                <div class="row HD2021-vertical-padding">
                    <div class="container">
                        <?php the_field('parksclassifications-text'); ?>
                    </div>
                </div>
            </section>
        </main>




    </div>
</div>
<?php get_footer(); ?>


