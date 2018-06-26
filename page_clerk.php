<?php
/*
  Template Name: Clerk Template

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



		<div class="col-md-9 page">

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
                    <?php the_field('civil_minutes_title'); ?>
                  </button>
                </h5>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <?php the_field('civil_minutes'); ?>
                </div>
              </div>
            </div><!--end card-->
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <?php the_field('general_records_title'); ?>
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  <?php the_field('general_records'); ?>
                </div>
              </div>
            </div><!--end card-->
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <?php the_field('commissioners_court_minutes_title'); ?>
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  <?php the_field('commissioners_court_minutes'); ?>
                </div>
              </div>
            </div><!--end card-->
            <div class="card">
              <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <?php the_field('commissioners_court_records_title'); ?>
                  </button>
                </h5>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
                  <?php the_field('commissioners_court_records'); ?>
                </div>
              </div>
            </div><!--end card-->
            <div class="card">
              <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <?php the_field('criminal_minutes_title'); ?>
                  </button>
                </h5>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body">
                  <?php the_field('criminal_minutes'); ?>
                </div>
              </div>
            </div><!--end card-->
            <div class="card">
              <div class="card-header" id="headingSix">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <?php the_field('deed_records_title'); ?>
                  </button>
                </h5>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body">
                  <?php the_field('deed_records'); ?>
                </div>
              </div>
            </div><!--end card-->
            <div class="card">
              <div class="card-header" id="headingSeven">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <?php the_field('election_records_title'); ?>
                  </button>
                </h5>
              </div>
              <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                <div class="card-body">
                  <?php the_field('election_records'); ?>
                </div>
              </div>
            </div><!--end card-->
            <div class="card">
              <div class="card-header" id="headingEight">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    <?php the_field('naturalization_records_title'); ?>
                  </button>
                </h5>
              </div>
              <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                <div class="card-body">
                  <?php the_field('naturalization_records'); ?>
                </div>
              </div>
            </div><!--end card-->
            <div class="card">
              <div class="card-header" id="headingNine">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    <?php the_field('probate_records_title'); ?>
                  </button>
                </h5>
              </div>
              <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                <div class="card-body">
                  <?php the_field('probate_records'); ?>
                </div>
              </div>
            </div><!--end card-->
            <div class="card">
              <div class="card-header" id="headingTen">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                    <?php the_field('survey_records_title'); ?>
                  </button>
                </h5>
              </div>
              <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                <div class="card-body">
                  <?php the_field('survey_records'); ?>
                </div>
              </div>
            </div><!--end card-->
          </div><!--end accordian-->
          <?php endwhile; else: ?>



          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>

        </div>
		<div class="col-md-3 sidebar">

		<?php get_sidebar(); ?>

		</div>



  </div>

</div>
<?php get_footer(); ?>
