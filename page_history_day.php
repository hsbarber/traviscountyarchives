<?php
/*
  Template Name: History Day Template

 */
?>
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
            <div class="row hday">
                <div class="col-sm-4">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"><?php the_field('2018_title'); ?></a>
                        <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="true"><?php the_field('2008_title'); ?></a>
                        <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false"><?php the_field('2009_title'); ?></a>
                        <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false"><?php the_field('2010_title'); ?></a>
                        <a class="nav-link" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false"><?php the_field('2011_title'); ?></a>
                        <a class="nav-link" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false"><?php the_field('2012_title'); ?></a>
                        <a class="nav-link" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="false"><?php the_field('2013_title'); ?></a>
                        <a class="nav-link" id="v-pills-8-tab" data-toggle="pill" href="#v-pills-8" role="tab" aria-controls="v-pills-8" aria-selected="false"><?php the_field('2014_title'); ?></a>
                        <a class="nav-link" id="v-pills-9-tab" data-toggle="pill" href="#v-pills-9" role="tab" aria-controls="v-pills-9" aria-selected="false"><?php the_field('2015_title'); ?></a>
                        <a class="nav-link" id="v-pills-10-tab" data-toggle="pill" href="#v-pills-10" role="tab" aria-controls="v-pills-10" aria-selected="false"><?php the_field('2016_title'); ?></a>
                        <a class="nav-link" id="v-pills-11-tab" data-toggle="pill" href="#v-pills-11" role="tab" aria-controls="v-pills-11" aria-selected="false"><?php the_field('2017_title'); ?></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab"><?php the_field('2018'); ?></div>
                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab"><?php the_field('2008'); ?></div>
                        <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab"><?php the_field('2009'); ?></div>
                        <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab"><?php the_field('2010'); ?></div>
                        <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab"><?php the_field('2011'); ?></div>
                        <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab"><?php the_field('2012'); ?></div>
                        <div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab"><?php the_field('2013'); ?></div>
                        <div class="tab-pane fade" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8-tab"><?php the_field('2014'); ?></div>
                        <div class="tab-pane fade" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-9-tab"><?php the_field('2015'); ?></div>
                        <div class="tab-pane fade" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab"><?php the_field('2016'); ?></div>
                        <div class="tab-pane fade" id="v-pills-11" role="tabpanel" aria-labelledby="v-pills-11-tab"><?php the_field('2017'); ?></div>
                    </div>
                </div>
            </div>
            <?php endwhile; else: ?>

            <div class="page-header">
                <h1>Oh no!</h1>
            </div>
            <p>No content is appearing for this page!</p>
            <?php endif; ?>

        </div><!--end col-md-9-->
		<div class="col-lg-3 sidebar">
		    <?php get_sidebar(); ?>
		</div>
    </div>
</div>
<?php get_footer(); ?>