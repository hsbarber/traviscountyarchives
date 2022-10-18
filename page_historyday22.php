<?php
/*
  Template Name: History Day 2022 Template

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

<div class="hd2022-header">
    <img src="<?php echo $backgroundImg[0]; ?>;" />
</div>
<div class="fb-notice">
    <div class="container-fluid" style="background:
 rgb(20,30,36)">
        <?php the_field('fb-notice'); ?>
    </div>
</div>
<div class=" container-fluid" style="background:
 linear-gradient( rgba(27,43,51,0.7), rgba(27,43,51,1.0)),
  url('<?php echo the_field('hd2022-header-bg') ?>') 50% 50% no-repeat; background-size: cover;">
    <div class="container-xxl">
        <div class="hd2022-intro row d-flex flex-column justify-content-center align-items-center">
            <div class="col-sm-4 hd2022-block-padding">
                <h1><?php the_field('hd2022-header-title'); ?></h1>
            </div>
            <div class="col-8">
                <p><?php the_field('hd2022-header-intro'); ?></p>
            </div>
        </div>
    </div>
</div>
<!-- Oral History Video -->
<section id="oralhistory">
    <div class="container-fluid">
        <div class="container-xxl">
            <div class="row justify-content-center">
                <div class="col-8 d-flex justify-content-center hd2022-block-padding">
                    <h1><?php the_field('oralhistory-title') ?></h1>
                </div>
                <div class="col-8 d-flex flex-column align-items-center">
                    <div class="oralhistory-text"><?php the_field('oralhistory-text') ?></div>
                    <div class="oralhistory-video">
                        <?php the_field('oralhistory-iframe'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 1918 Pandemic -->
<section id="1918pandemic">
    <div class="container-fluid">
        <div class="container-xxl">
            <div class="row justify-content-center ">
                <div class="col-8 d-flex justify-content-center hd2022-block-padding">
                    <h1><?php the_field('block-1-title') ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 px-5">
                    <?php the_field('block-1-text-1') ?>
                </div>
                <div class="col-sm-12 col-md-6 px-5">
                    <?php the_field('block-1-text-2') ?>
                </div>
            </div>
            <div class="block-gallery">
                <div class="row justify-content-center py-5">
                    <?php
                    $block1gallery = get_field('block-1-gallery');
                    if ($block1gallery) : ?>

                        <?php foreach ($block1gallery as $image) : ?>
                            <div class="col-lg-4 py-3">
                                <a class="d-flex flex-column align-items-center" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <p class="hd2022-caption"><?php echo esc_html($image['caption']); ?></p>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Parallels in History -->
<section>
    <div class="container-fluid exhibit-block-padding" style="background:
        url('<?php echo the_field('block-2-image') ?>') 50% 50% no-repeat; background-size: cover;">

        <div class="row justify-content-center">
            <div class="col-6 d-flex justify-content-center">
                <h1 class="hd2022-title-bg text-light"><?php the_field('block-2-title') ?></h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="hd2022-caption">
            <p><?php echo the_field('block-2-image-caption') ?></p>
        </div>
    </div>
    <div class=" container-fluid py-5">
        <div class="container-xxl">
            <div class="row">
                <div class="col-sm-12 px-5">
                    <?php the_field('block-2-text-1') ?>
                </div>
            </div>
            <div class="block-gallery">
                <div class="row justify-content-center py-5">
                    <?php
                    $block2gallery1 = get_field('block-2-gallery-1');
                    if ($block2gallery1) : ?>

                        <?php foreach ($block2gallery1 as $image) : ?>
                            <div class="col-lg-3 py-3">
                                <a class="d-flex flex-column align-items-center" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <p class="hd2022-caption"><?php echo esc_html($image['caption']); ?></p>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 1918 - Keeping the community safe -->
<section>
    <div class="container-fluid exhibit-block-padding" style="background:
        url('<?php echo the_field('block-3-image') ?>') 50% 50% no-repeat; background-size: cover;">>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 d-flex justify-content-center">
                <h1 class="hd2022-title-bg text-light"><?php the_field('block-3-title') ?></h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="hd2022-caption">
            <p><?php echo the_field('block-3-image-caption') ?></p>
        </div>
    </div>
    <div class=" container-fluid py-5">
        <div class="container-xxl">
            <div class="row">
                <div class="col-sm-12 px-5">
                    <?php the_field('block-3-text') ?>
                </div>
            </div>
            <div class="row">
                <div class="block-gallery">
                    <div class="row justify-content-center py-5">
                        <?php
                        $block3gallery = get_field('block-3-gallery');
                        if ($block3gallery) : ?>

                            <?php foreach ($block3gallery as $image) : ?>
                                <div class="col-lg-4 py-5">
                                    <a class="d-flex flex-column align-items-center" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <p class="hd2022-caption"><?php echo esc_html($image['caption']); ?></p>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Covid 19 Pandemic: Slowing the Spread-->
<section>
    <div class="container-fluid hd2022-bg exhibit-block-padding" style="background:
        url('<?php echo the_field('block-4-image') ?>') 50% 50% no-repeat; background-size: cover;">>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 d-flex justify-content-center">
                <div>
                    <h1 class="hd2022-title-bg text-light"><?php the_field('block-4-title') ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="hd2022-caption">
            <p><?php echo the_field('block-4-image-caption') ?></p>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container-xxl">
            <div class="row">
                <div class="col-sm-12 px-5">
                    <?php the_field('block-4-text') ?>
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
                                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <p class="hd2022-caption"><?php echo esc_html($image['caption']); ?></p>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Covid 19 Pandemic: A Local Government and a Community Respond -->
<section>
    <div class="container-fluid exhibit-block-padding" style="background:
        url('<?php echo the_field('block-5-image') ?>') 50% 50% no-repeat; background-size: cover;">>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 d-flex justify-content-center">
                <h1 class="hd2022-title-bg text-light"><?php the_field('block-5-title') ?></h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="hd2022-caption">
            <p><?php echo the_field('block-5-image-caption') ?></p>
        </div>
    </div>
    <div class=" container-fluid py-5">
        <div class="container-xxl">
            <div class="row">
                <div class="col-sm-12 px-5">
                    <?php the_field('block-5-text') ?>
                </div>
            </div>
            <div class="row">
                <div class="block-gallery">
                    <div class="row justify-content-center py-5">
                        <?php
                        $block3gallery = get_field('block-5-gallery');
                        if ($block3gallery) : ?>

                            <?php foreach ($block3gallery as $image) : ?>
                                <div class="col-lg-4 py-5">
                                    <a class="d-flex flex-column align-items-center" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <p class="hd2022-caption"><?php echo esc_html($image['caption']); ?></p>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Covid 19 Pandemic: The Resilience of Community -->
<section>
    <div class="container-fluid exhibit-block-padding" style="background:
        url('<?php echo the_field('block-6-image') ?>') 50% 20% no-repeat; background-size: cover;">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 d-flex justify-content-center">
                <h1 class="hd2022-title-bg text-light"><?php the_field('block-6-title') ?></h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="hd2022-caption">
            <p><?php echo the_field('block-6-image-caption') ?></p>
        </div>
    </div>
    <div class=" container-fluid py-5">
        <div class="container-xxl">
            <div class="row">
                <div class="col-sm-12 px-5">
                    <?php the_field('block-6-text') ?>
                </div>
            </div>
            <div class="row">
                <div class="block-gallery">
                    <div class="row justify-content-center py-5">
                        <?php
                        $block3gallery = get_field('block-6-gallery');
                        if ($block3gallery) : ?>

                            <?php foreach ($block3gallery as $image) : ?>
                                <div class="col-lg-4 py-5">
                                    <a class="d-flex flex-column align-items-center" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <p class="hd2022-caption"><?php echo esc_html($image['caption']); ?></p>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>