<?php
/*
  Template Name: 2021 Parks Page Template

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
<div class="parks-page-container" >

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


