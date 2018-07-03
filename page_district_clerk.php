<?php
/*
  Template Name: District Clerk Template

 */


?>
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
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <?php the_field('legal_records_title'); ?>
                  </button>
                </h5>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <?php the_field('legal_records'); ?>
                </div>
              </div>
            </div><!--end card-->
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <?php the_field('naturalization_records_title'); ?>
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  <?php the_field('naturalization_records'); ?>
                </div>
              </div>
            </div><!--end card-->
          </div><!--end accordian-->
          <p><?php the_field('historical_records_project'); ?></p>
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
