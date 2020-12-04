<?php
/*
  Template Name: History Day Full Width Template

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
<div class="hd-page-bg" style="background: url('<?php echo $backgroundImg[0]; ?>') 50% 50% no-repeat; background-size: cover; background-attachment: fixed;">

    <div class="container hd-page-container">
        <div class="row">

            <div class="col-md-12 page-container-full-width">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="hd-header">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="the_content">
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
</div>
<?php get_footer(); ?>


