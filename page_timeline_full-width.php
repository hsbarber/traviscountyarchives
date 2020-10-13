<?php
/*
  Template Name: Timeline Full Width Template

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
<div class="intro-page-bg" style="background: url('<?php echo $backgroundImg[0]; ?>') 50% 50% no-repeat; background-size: cover;">
    <h1><?php the_title(); ?></h1>
</div>
    <div class="container hd-page-container">
        <div class="row">

            <div class="col-md-12 page-container-full-width">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


                    <div class="the_content hd-content">
                        <?php the_content(); ?>
                    </div>

                <!-- TIMELINE SECTION -->
                <section class="hd-timeline">
                <?php

                    $fields = get_fields();

                if( $fields ): ?>
                <div class="hd-timeline__container">
                    <?php foreach( $fields as $name => $value ): ?>
                        <div class="hd-timeline__block js-block">
                            <div class="hd-timeline__content js-content">
                                    <div class="hd-timeline__img js-img">
                                    </div> <!-- cd-timeline__img -->
                                        <?php echo $value; ?>

                            </div> <!-- end timeline__content -->
                        </div> <!-- end timeline__block -->
                    <?php endforeach; ?>
                </div> <!--end timeline__container -->
                <?php endif; ?>
            </section>
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

<?php get_footer(); ?>

