<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

<div class="container">
  <div class="row">

        <div class="col-md-9 page">

             <?php if ( have_posts() ) : ?>
             <h2>Search results for: <?php the_search_query(); ?></h2>
             <?php while ( have_posts() ) : the_post(); ?>

          <div class="page-header">
            <h1><?php the_title(); ?></h1>
          </div>

		      
        
        </div>
        <div class="col-md-3 sidebar">
         <?php get_sidebar(); ?>
        </div>
   
   
  </div>

</div>
<?php get_footer(); ?>
