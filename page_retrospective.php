<?php
/*
  Template Name: 2020 History Day Retrospective

 */
?>
<?php get_header(); ?>
<div class="page-banner">
  <?php
    if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  }
  ?>
  <div class="capt">
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
        <div class="col-lg-9 page-container">
          <p>TEST CONTENT</p>
        </div>
        <div class="col-lg-3 sidebar">
		      <?php get_sidebar(); ?>
		    </div>
    </div>
</div>
<?php get_footer(); ?>