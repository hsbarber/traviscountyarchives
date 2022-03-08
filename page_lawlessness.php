<?php
/*
  Template Name: Exhibit Lawlessness Full Width Template

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
<div class="exhibit-header" style="background: linear-gradient(
	        rgba(0,0,0, 0.5),
	        rgba(0,0,0, 0.95)),
            url('<?php echo $backgroundImg[0]; ?>') 50% 50% no-repeat; background-size: cover;">
        <div class="exhibit-intro col-sm-12 col-md-10 col-lg-7">
            <h1><?php the_field('exhibit-title'); ?></h1>
            <p><?php the_field('exhibit-intro'); ?></p>
        </div>
    </div>
</div>
    <div class="container hd-page-container">
        <div class="row">

            <div class="page-container-full-width">
                <div class="row">
                        <div class="col-sm-12 col-xl-6">
                            <a href="<?php the_field('block-1-image') ?>"><img src="<?php the_field('block-1-image') ?>" /></a>
                        </div>
                        <div class="exhibit-block-1-text col-sm-12 col-xl-6">
                            <h1><?php the_field('block-1-title') ?></h1>
                            <p><?php the_field('block-1-text') ?></p>
                        </div>
                </div>
            </div>
            <!--end page__container#### -->

        </div>
    </div>
<?php get_footer(); ?>


