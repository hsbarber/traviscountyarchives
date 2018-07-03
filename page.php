<?php get_header(); ?>

<div class="page-banner">
<?php
  if ( has_post_thumbnail() ) {
  the_post_thumbnail();
}
?>
</div>
<div class="container">
<div class="col-md-9 capt col-xs-9">
</div>
<div class="col-md-3 capt col-xs-3">
<?php if ( $caption = get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
    <p class="caption"><?php echo $caption; ?></p>
<?php endif; ?>
</div>
</div>
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
<div class="container">
  <div class="row">
		<div class="col-lg-9 page">

             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">
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
		<div class="col-lg-3 sidebar">

		  <?php get_sidebar(); ?>

		</div>
  </div>

</div>
<?php get_footer(); ?>

