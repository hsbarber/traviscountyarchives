<?php
/*
  Template name: FAQ
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
          	<!-- FAQ SECTION -->
          	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          	  <div class="panel panel-default">
          	    <div class="panel-heading" role="tab" id="headingOne">
          	      <h4 class="panel-title">
          	        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          	           <?php the_field('question1'); ?>
          	        </a>
          	      </h4>
          	    </div>
          	    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          	      <div class="panel-body">
          	        <?php the_field('answer1'); ?>
          	      </div>
          	    </div>
          	  </div>
          	  <div class="panel panel-default">
          	    <div class="panel-heading" role="tab" id="headingTwo">
          	      <h4 class="panel-title">
          	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          	          <?php the_field('question2'); ?>
          	        </a>
          	      </h4>
          	    </div>
          	    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          	      <div class="panel-body">
          	        <?php the_field('answer2'); ?>
          	      </div>
          	    </div>
          	  </div>
          	  <div class="panel panel-default">
          	    <div class="panel-heading" role="tab" id="headingThree">
          	      <h4 class="panel-title">
          	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          	          <?php the_field('question3'); ?>
          	        </a>
          	      </h4>
          	    </div>
          	    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          	      <div class="panel-body">
          	        <?php the_field('answer3'); ?>
          	      </div>
          	    </div>
          	  </div>
	      	   <div class="panel panel-default">
	      	    <div class="panel-heading" role="tab" id="headingFour">
	      	      <h4 class="panel-title">
	      	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
	      	          <?php the_field('question4'); ?>
	      	        </a>
	      	      </h4>
	      	    </div>
	      	    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
	      	      <div class="panel-body">
	      	        <?php the_field('answer4'); ?>
	      	      </div>
	      	    </div>
	      	  </div>
	      	  <div class="panel panel-default">
	      	    <div class="panel-heading" role="tab" id="headingFive">
	      	      <h4 class="panel-title">
	      	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
	      	          <?php the_field('question5'); ?>
	      	        </a>
	      	      </h4>
	      	    </div>
	      	    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
	      	      <div class="panel-body">
	      	        <?php the_field('answer5'); ?>
	      	      </div>
	      	    </div>
	      	  </div>
          	</div>
          </div>
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
