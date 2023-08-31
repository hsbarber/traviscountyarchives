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

<div class="hd2023-header">
    <img src="<?php echo $backgroundImg[0]; ?>;" />
</div>
<div class=" container-fluid" style="background:
 linear-gradient( rgba(27,43,51,0.7), rgba(27,43,51,1.0)),
  url('<?php echo the_field('hd2023-header-bg') ?>') 50% 50% no-repeat; background-size: cover;">
    <div class="container-xxl">
        <div class="hd2023-intro row d-flex flex-column justify-content-center align-items-center">
            <div class="col-sm-4 hd2022-block-padding">
                <h1><?php the_field('hd2022-header-title'); ?></h1>
            </div>
            <div class="col-8">
                <p><?php the_field('hd2022-header-intro'); ?></p>
            </div>
        </div>
    </div>
</div>

<!-- Office of the Travis County Clerk -->
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
                <div class="col-sm-12 col-md-6 px-5">
                    <?php the_field('block-1-text-3') ?>
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
<?php get_footer(); ?>