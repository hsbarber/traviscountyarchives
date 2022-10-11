<?php
/*
  Template Name: Exhibit Lawlessness Full Width Template

 */
?>

<?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<?php get_header(); ?>
<div class="container-fluid bc-container">
    <div class="row">
        <div class="container">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                <?php if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </div>
        </div>
    </div>
</div>
<div class="exhibit-chapters">
    <!-- <div class="exhibit-chapters-title">
        <h5><?php the_field('exhibit-chapters-title'); ?></h5>
    </div> -->
    <?php if (have_rows('exhibit-chapter-titles')) : ?>
        <nav id="exhibit-navbar" class="exhibit-navbar navbar navbar-expand-md navbar-dark bg-dark exhibit-chapters-list">
            <?php while (have_rows('exhibit-chapter-titles')) : the_row();
            ?>
                <li class="<?php the_sub_field('exhibit-chapter-title'); ?>">
                    <a href="<?php the_sub_field('exhibit-chapter-url'); ?>">
                        <h5><?php the_sub_field('exhibit-chapter-name'); ?></h5>
                    </a>
                </li>
            <?php endwhile; ?>
        </nav>
    <?php endif; ?>
</div>
<div class="exhibit-header" style="background: linear-gradient(
	        rgba(0,0,0, 0.5),
	        rgba(0,0,0, 1.0)),
            url('<?php echo $backgroundImg[0]; ?>') 50% 50% no-repeat; background-size: cover;">
    <div class="exhibit-intro col-sm-12 col-md-10 col-lg-7">
        <h1><?php the_field('exhibit-title'); ?></h1>
        <p><?php the_field('exhibit-intro'); ?></p>
    </div>
</div>
</div>

<section id="vice">
    <div class="container-fluid exhibit-block-padding" style="background:
            url('<?php echo the_field('block-1-image') ?>') 50% 50% no-repeat; background-size: cover;">>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="exhibit-block-1 col-sm-12 col-lg-8 ">
                    <div>
                        <h1><?php the_field('block-1-title') ?></h1>
                        <p><?php the_field('block-1-text') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GUY TOWN SECTION -->
    <div class="container-fluid exhibit-block ">
        <div class="container">
            <div class="row">
                <div class="exhibit-block-2 col-sm-12 col-xl-12">
                    <div>
                        <h1><?php the_field('block-2-title') ?></h1>

                        <div class="imagewrap-left">
                            <a href="<?php the_field('block-2-image-1') ?>"><img src="<?php the_field('block-2-image-1') ?>" /></a>
                            <p><?php the_field('block-2-image-1-caption') ?></p>
                        </div>
                        <p class="descriptiveText"><?php the_field('block-2-text') ?></p>
                    </div>
                </div>
            </div>
            <!--end row -->
        </div>
    </div>
    <!-- PROSTITUTION SECTION -->
    <div class="container-fluid exhibit-block">
        <div class="container">
            <div class="row">
                <div class="exhibit-block-3 col-sm-12 col-xl-12">
                    <div>
                        <h1><?php the_field('block-3-title') ?></h1>
                        <p class="descriptiveText"><?php the_field('block-3-text') ?></p>
                    </div>
                </div>
            </div>
            <!--end row -->
            <div class="block-gallery">
                <div class="row">
                    <?php
                    $block3gallery = get_field('block-3-gallery');
                    if ($block3gallery) : ?>

                        <?php foreach ($block3gallery as $image) : ?>
                            <div class="col-lg-3">
                                <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['medium']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <p><?php echo esc_html($image['caption']); ?></p>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- GAMBLING SECTION -->
    <div class="container-fluid exhibit-block">
        <div class="container">
            <div class="row">
                <div class="exhibit-block-4 col-sm-12 col-xl-12">
                    <div>
                        <h1><?php the_field('block-4-title') ?></h1>
                        <p class="descriptiveText"><?php the_field('block-4-text') ?></p>
                    </div>
                </div>
            </div>
            <!--end row -->
            <div class="block-gallery">
                <div class="row">
                    <?php
                    $block4gallery = get_field('block-4-gallery');
                    if ($block3gallery) : ?>

                        <?php foreach ($block4gallery as $image) : ?>
                            <div class="col-lg-3">
                                <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['medium']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <p><?php echo esc_html($image['caption']); ?></p>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="exhibit-block-4 col-sm-12 col-xl-12">
                    <div>
                        <p class="descriptiveText"><?php the_field('block-4-text-2') ?></p>
                    </div>
                </div>
            </div>
            <!--end row -->
            <div class="block-gallery">
                <div class="row">
                    <?php
                    $block4gallery2 = get_field('block-4-gallery-2');
                    if ($block3gallery) : ?>

                        <?php foreach ($block4gallery2 as $image) : ?>
                            <div class="col-lg-3">
                                <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['medium']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <p><?php echo esc_html($image['caption']); ?></p>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
</section>
<!--end page__container#### -->
<section id="crime">
    <div class="container-fluid exhibit-block-padding" style="background:
            url('<?php echo the_field('block-1-image') ?>') 50% 50% no-repeat; background-size: cover;">>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="exhibit-block-1 col-sm-12 col-lg-8 ">
                    <h1><?php the_field('block-5-title') ?></h1>
                    <div class="imagewrap-left">
                        <a href="<?php the_field('block-5-image-1') ?>"><img src="<?php the_field('block-5-image-1') ?>" /></a>
                        <p><?php the_field('block-5-image-1-caption') ?></p>
                    </div>
                    <p class="descriptiveText"><?php the_field('block-5-text') ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- CRIMES SECTION -->
    <div class="container-fluid exhibit-block ">
        <div class="container">
            <div class="row">
                <div class="exhibit-block-3 col-sm-12 col-xl-12">
                    <div>
                        <h1><?php the_field('block-6-title') ?></h1>
                        <p class="descriptiveText"><?php the_field('block-6-text') ?></p>
                    </div>
                </div>
            </div>
            <!--end row -->
            <div class="block-gallery">
                <div class="row">
                    <?php
                    $block6gallery = get_field('block-6-gallery');
                    if ($block6gallery) : ?>

                        <?php foreach ($block6gallery as $image) : ?>
                            <div class="col-lg-3">
                                <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['medium']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <p><?php echo esc_html($image['caption']); ?></p>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- TRAVIS COUNTY JAIL SECTION -->
    <div class="container-fluid exhibit-block">
        <div class="container">
            <div class="row">
                <div class="exhibit-block-3 col-sm-12 col-xl-12">
                    <div>
                        <h1><?php the_field('block-7-title') ?></h1>
                        <p class="descriptiveText"><?php the_field('block-7-text') ?></p>
                    </div>
                </div>
            </div>
            <!--end row -->
            <div class="block-gallery">
                <div class="row">
                    <?php
                    $block7gallery = get_field('block-7-gallery');
                    if ($block7gallery) : ?>

                        <?php foreach ($block7gallery as $image) : ?>
                            <div class="col-lg-3">
                                <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['medium']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <p><?php echo esc_html($image['caption']); ?></p>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="exhibit-block-3 col-sm-12 col-xl-12">
                    <div>
                        <p class="descriptiveText"><?php the_field('block-7-text-2') ?></p>
                    </div>
                </div>
            </div>
            <!--end row -->
            <div class="block-gallery">
                <div class="row">
                    <?php
                    $block7gallery2 = get_field('block-7-gallery-2');
                    if ($block7gallery2) : ?>

                        <?php foreach ($block7gallery2 as $image) : ?>
                            <div class="col-lg-3">
                                <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['medium']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <p><?php echo esc_html($image['caption']); ?></p>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="exhibit-block-3 col-sm-12 col-xl-12">
                    <div>
                        <p class="descriptiveText"><?php the_field('block-7-text-3') ?></p>
                    </div>
                </div>
            </div>
            <!--end row -->
            <div class="block-gallery">
                <div class="row">
                    <?php
                    $block7gallery3 = get_field('block-7-gallery-3');
                    if ($block7gallery3) : ?>

                        <?php foreach ($block7gallery3 as $image) : ?>
                            <div class="col-lg-3">
                                <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['medium']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <p><?php echo esc_html($image['caption']); ?></p>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="prohibition">
    <!-- Prohibition Intro -->
    <div class="container-fluid exhibit-block-padding" style="background:
            url('<?php echo the_field('block-1-image') ?>') 50% 50% no-repeat; background-size: cover;">>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="exhibit-block-1 col-sm-12 col-lg-8 ">
                    <h1><?php the_field('block-8-title') ?></h1>
                    <div class="imagewrap-left">
                        <a href="<?php the_field('block-8-image-1') ?>"><img src="<?php the_field('block-8-image-1') ?>" /></a>
                        <p><?php the_field('block-8-image-1-caption') ?></p>
                    </div>
                    <p class="descriptiveText"><?php the_field('block-8-text') ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid exhibit-block">
        <div class="container">
            <!-- Prohibition First Paragraph -->
            <div class="row">
                <div class="exhibit-block-3 col-sm-12 col-xl-12">
                    <div>
                        <p class="descriptiveText"><?php the_field('block-9-text') ?></p>
                    </div>
                </div>
            </div>
            <!--end row -->
            <div class="block-gallery">
                <div class="row">
                    <?php
                    $block9gallery = get_field('block-9-gallery');
                    if ($block9gallery) : ?>

                        <?php foreach ($block9gallery as $image) : ?>
                            <div class="col-lg-3">
                                <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['medium']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <p><?php echo esc_html($image['caption']); ?></p>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="exhibit-block-3 col-sm-12 col-xl-12">
                    <div>
                        <p class="descriptiveText"><?php the_field('block-9-text-2') ?></p>
                    </div>
                </div>
            </div>
            <!--end row -->
            <div class="block-gallery last-section">
                <div class="row">
                    <?php
                    $block9gallery2 = get_field('block-9-gallery-2');
                    if ($block9gallery2) : ?>

                        <?php foreach ($block9gallery2 as $image) : ?>
                            <div class="col-lg-3">
                                <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['medium']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <p><?php echo esc_html($image['caption']); ?></p>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid exhibit-block-padding" style="background:
            url('<?php echo the_field('block-1-image') ?>') 50% 50% no-repeat; background-size: cover;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="exhibit-block-1 col-sm-12 col-lg-8 ">
                    <h1><?php the_field('block-10-title') ?></h1>
                    <p class="descriptiveText"><?php the_field('block-10-text') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>