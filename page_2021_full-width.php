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


