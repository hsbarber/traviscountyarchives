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
                <!-- page navigation -->
                <?php
                    $pagelist = get_pages("child_of=".$post->post_parent."&parent=".$post->post_parent."&sort_column=menu_order&sort_order=asc");
                    $pages = array();
                    foreach ($pagelist as $page) {
                    $pages[] += $page->ID;
                    }

                    $current = array_search(get_the_ID(), $pages);
                    $prevID = $pages[$current-1];
                    $nextID = $pages[$current+1];
                ?>

                <div class="parks-page-navigation">
                    <?php if (!empty($prevID)) { ?>
                    <div class="alignleft">
                    <a href="<?php echo get_permalink($prevID); ?>"
                    title="<?php echo get_the_title($prevID); ?>">
                    <h4>
                        << <?php echo get_the_title($prevID); ?>
                    </h4>
                    </a>
                    </div>
                    <?php }
                    if (!empty($nextID)) { ?>
                    <div class="alignright">
                    <a href="<?php echo get_permalink($nextID); ?>"
                    title="<?php echo get_the_title($nextID); ?>">
                    <h4>
                        <?php echo get_the_title($nextID); ?> >>
                    </h4>
                    </a>
                    </div>
                    <?php } ?>
                </div><!-- .navigation -->

                <!-- Main Content -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="parks-page-header">
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

        </div>
    </div>
</div>
<?php get_footer(); ?>


