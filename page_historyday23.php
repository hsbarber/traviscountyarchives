<?php
/*
  Template Name: History Day 2023 Template

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

<!-- <div class="hd2023-header">
    <img src="<?php echo $backgroundImg[0]; ?>;" />
</div> -->
<div class=" container-fluid hd2023-header-bg" style="background:
  url('<?php echo the_field('hd2023-header-bg') ?>') 50% 30% no-repeat; background-size: cover;">
    <div class="container-xxl">
    </div>
</div>
<div class=" container-fluid hd2023-intro-bg">
    <div class="container-xxl">
        <div class="hd2023-intro row d-flex flex-column justify-content-center align-items-center">
            <div class="col-sm-4 hd2023-block-padding">
                <h1><?php the_field('hd2023-header-title'); ?></h1>
            </div>
            <div class="col-8">
                <p><?php the_field('hd2023-header-intro'); ?></p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container-xxl">
        <div class="row justify-content-center ">
             <div class="col-8 hd2023-block-padding">
                <?php the_field('clerks-video-text'); ?>
            </div>
            <?php
            // Get the Video Fields
            $video_mp4 =  get_field('clerks-video'); // MP4 Field Name



            // Build the  Shortcode
            $attr =  array(
            'mp4'      => $video_mp4,
            'preload'  => 'auto'
            );

            // Display the Shortcode
            echo wp_video_shortcode(  $attr );
            ?>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container-xxl">
        <div class="row justify-content-center ">
             <div class="col-8 hd2023-block-padding">
                <?php the_field('oral-histories'); ?>
            </div>
        </div>
    </div>
</div>
<!-- Office of the Travis County Clerk -->
<section id="countyclerk">
    <div class="container-fluid">
        <div class="container-xxl">
            <div class="row justify-content-center ">
                <div class="col-8 d-flex justify-content-center hd2023-block-padding">
                    <h1><?php the_field('block-1-title') ?></h1>
                </div>
            </div>
            <div class="row ">
                <div class="col-sm-12 col-md-8 px-5 mb-5">
                    <?php the_field('block-1-text-1') ?>
                </div>
                <div class="col-sm-12 col-md-4 px-5 mb-5">
                    <?php
                    $img1 = get_field('block-1-img-1');
                    ?>
                    <a class="image-link" href="<?php echo esc_url($img1['url']); ?>">
                        <img src="<?php echo esc_url($img1['sizes']['large']); ?>" class="img-fluid" title="<?php echo esc_html($img1['caption']); ?>" />
                        <p class=" hd2023-caption"><?php echo esc_html($img1['caption']); ?></p>
                    </a>
                </div>

                <div class="col-sm-12 col-md-4 px-5">
                    <?php
                    $img2 = get_field('block-1-img-2');
                    ?>
                    <a class="image-link" href="<?php echo esc_url($img2['url']); ?>">
                        <img src="<?php echo esc_url($img2['sizes']['large']); ?>" class="img-fluid" title="<?php echo esc_html($img2['caption']); ?>" />
                        <p class=" hd2023-caption"><?php echo esc_html($img2['caption']); ?></p>
                    </a>
                </div>
                <div class="col-sm-12 col-md-8 px-5">
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
                                    <p class="hd2023-caption"><?php echo esc_html($image['caption']); ?></p>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="countyclerklists">
    <div class="container-fluid">
        <div class="container-xxl">
            <div class="row justify-content-center ">
                <div class="col-8 d-flex justify-content-center hd2023-block-padding">
                    <h1><?php the_field('block-2-title') ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 py-5">
                    <div class="row">
                        <div class="col-6">
                            <div class="clerk-list"><?php the_field('block-2-text-1') ?></div>
                        </div>
                       <div class="col-6">
                            <div class="clerk-list"><?php the_field('block-2-text-2') ?></div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="block-gallery">
                        <div class="row justify-content-center py-5">
                            <?php
                            $block2gallery = get_field('block-2-gallery');
                            if ($block2gallery) : ?>

                                <?php foreach ($block2gallery as $image) : ?>
                                    <div class="col-lg-4 py-3">
                                        <a class="d-flex flex-column align-items-center" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <p class="hd2023-caption"><?php echo esc_html($image['caption']); ?></p>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Office of the Travis County District Clerk -->
<section id="districtclerk">
    <div class="container-fluid">
        <div class="container-xxl">
            <div class="row justify-content-center ">
                <div class="col-8 d-flex justify-content-center hd2023-block-padding">
                    <h1><?php the_field('block-3-title') ?></h1>
                </div>
            </div>
            <div class="row ">
                <div class="col-12  mb-5">
                    <?php the_field('block-3-text') ?>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="block-gallery">
                        <div class="row justify-content-center py-5">
                            <?php
                            $block3gallery = get_field('block-3-gallery');
                            if ($block3gallery) : ?>

                                <?php foreach ($block3gallery as $image) : ?>
                                    <div class="col-lg-4 py-3">
                                        <a class="d-flex flex-column align-items-center" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <p class="hd2023-caption"><?php echo esc_html($image['caption']); ?></p>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="districtclerklists">
    <div class="container-fluid">
        <div class="container-xxl">
            <div class="row justify-content-center ">
                <div class="col-8 d-flex justify-content-center hd2023-block-padding">
                    <h1><?php the_field('block-4-title') ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 py-5">
                    <div class="row">
                        <div class="col-6">
                            <div class="clerk-list"><?php the_field('block-4-text-1') ?></div>
                        </div>
                       <div class="col-6">
                            <div class="clerk-list"><?php the_field('block-4-text-2') ?></div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="block-gallery">
                        <div class="row justify-content-center py-5">
                            <?php
                            $block4gallery = get_field('block-4-gallery');
                            if ($block4gallery) : ?>

                                <?php foreach ($block4gallery as $image) : ?>
                                    <div class="col-lg-4 py-3">
                                        <a class="d-flex flex-column align-items-center" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <p class="hd2023-caption"><?php echo esc_html($image['caption']); ?></p>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="recordsofcountyclerk">
    <div class="container-fluid">
        <div class="container-xxl">
            <div class="row justify-content-center ">
                <div class="col-8 d-flex justify-content-center hd2023-block-padding">
                    <h1><?php the_field('block-5-title') ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12  mb-5">
                    <?php the_field('block-5-text-1') ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="block-gallery">
                        <div class="row justify-content-center py-5">
                            <?php
                            $block5gallery1 = get_field('block-5-gallery-1');
                            if ($block5gallery1) : ?>
                                <?php foreach ($block5gallery1 as $image) : ?>
                                    <div class="col-lg-4 py-3">
                                        <a class="d-flex flex-column align-items-center" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <p class="hd2023-caption"><?php echo esc_html($image['caption']); ?></p>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-5">
                  <?php the_field('block-5-text-2') ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="block-gallery">
                        <div class="row justify-content-center py-5">
                            <?php
                            $block5gallery2 = get_field('block-5-gallery-2');
                            if ($block5gallery2) : ?>
                                <?php foreach ($block5gallery2 as $image) : ?>
                                    <div class="col-lg-4 py-3">
                                        <a class="d-flex flex-column align-items-center" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <p class="hd2023-caption"><?php echo esc_html($image['caption']); ?></p>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="recordsofdistrictclerk">
    <div class="container-fluid">
        <div class="container-xxl">
            <div class="row justify-content-center">
                <div class="col-8 d-flex justify-content-center hd2023-block-padding">
                    <h1><?php the_field('block-6-title') ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12  mb-5">
                    <?php the_field('block-6-text-1') ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="block-gallery">
                        <div class="row justify-content-center py-5">
                            <?php
                            $block6gallery1 = get_field('block-6-gallery-1');
                            if ($block6gallery1) : ?>

                                <?php foreach ($block6gallery1 as $image) : ?>
                                    <div class="col-lg-4 py-3">
                                        <a class="d-flex flex-column align-items-center" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <p class="hd2023-caption"><?php echo esc_html($image['caption']); ?></p>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 py-5">
                    <?php the_field('block-6-text-2') ?>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="block-gallery">
                        <div class="row justify-content-center py-5">
                            <?php
                            $block6gallery2 = get_field('block-6-gallery-2');
                            if ($block6gallery2) : ?>

                                <?php foreach ($block6gallery2 as $image) : ?>
                                    <div class="col-lg-6 py-3">
                                        <a class="d-flex flex-column align-items-center" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <p class="hd2023-caption"><?php echo esc_html($image['caption']); ?></p>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="archivesanddigitization">
    <div class="container-fluid">
        <div class="container-xxl">
            <div class="row justify-content-center ">
                <div class="col-8 d-flex justify-content-center hd2023-block-padding">
                    <h1><?php the_field('block-7-title') ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12  mb-5">
                    <?php the_field('block-7-text-1') ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="block-gallery">
                        <div class="row justify-content-center py-5">
                            <?php
                            $block7gallery1 = get_field('block-7-gallery-1');
                            if ($block7gallery1) : ?>

                                <?php foreach ($block7gallery1 as $image) : ?>
                                    <div class="col-lg-6 py-3">
                                        <a class="d-flex flex-column align-items-center" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <p class="hd2023-caption"><?php echo esc_html($image['caption']); ?></p>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-12 pt-5">
                    <?php the_field('block-7-title-2') ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="block-gallery">
                        <div class="row justify-content-center py-5">
                            <?php
                            $block7gallery2 = get_field('block-7-gallery-2');
                            if ($block7gallery1) : ?>

                                <?php foreach ($block7gallery2 as $image) : ?>
                                    <div class="col-lg-6 py-3">
                                        <a class="d-flex flex-column align-items-center" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <p class="hd2023-caption"><?php echo esc_html($image['caption']); ?></p>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-12 pt-5">
                    <?php the_field('block-7-title-3') ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="block-gallery">
                        <div class="row justify-content-center py-5">
                            <?php
                            $block7gallery3 = get_field('block-7-gallery-3');
                            if ($block7gallery3) : ?>

                                <?php foreach ($block7gallery3 as $image) : ?>
                                    <div class="col-lg-6 py-3">
                                        <a class="d-flex flex-column align-items-center" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <p class="hd2023-caption"><?php echo esc_html($image['caption']); ?></p>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="historyofelections">
    <div class="container-fluid">
        <div class="container-xxl">
            <div class="row justify-content-center ">
                <div class="col-8 d-flex justify-content-center hd2023-block-padding">
                    <h1><?php the_field('block-8-title') ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 py-5">
                    <div><?php the_field('block-8-text-1') ?></div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="block-gallery">
                        <div class="row justify-content-center py-5">
                            <?php
                            $block8gallery1 = get_field('block-8-gallery-1');
                            if ($block8gallery1) : ?>

                                <?php foreach ($block8gallery1 as $image) : ?>
                                    <div class="col-lg-6 py-3">
                                        <a class="d-flex flex-column align-items-center" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <p class="hd2023-caption"><?php echo esc_html($image['caption']); ?></p>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="block-gallery">
                        <div class="row justify-content-center py-5">
                            <?php
                            $block8gallery2 = get_field('block-8-gallery-2');
                            if ($block8gallery2) : ?>

                                <?php foreach ($block8gallery2 as $image) : ?>
                                    <div class="col-lg-6 py-3">
                                        <a class="d-flex flex-column align-items-center" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <p class="hd2023-caption"><?php echo esc_html($image['caption']); ?></p>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 py-5">
                    <?php the_field('block-8-text-2') ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 py-5">
                    <?php the_field('block-8-text-3') ?>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="block-gallery">
                        <div class="row justify-content-center py-5">
                            <?php
                            $block8gallery3 = get_field('block-8-gallery-3');
                            if ($block8gallery3) : ?>

                                <?php foreach ($block8gallery3 as $image) : ?>
                                    <div class="col-lg-6 py-3">
                                        <a class="d-flex flex-column align-items-center" href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <p class="hd2023-caption"><?php echo esc_html($image['caption']); ?></p>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        s</div>
    </div>
</section>
<?php get_footer(); ?>