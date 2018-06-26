<?php
/*
Template Name: Search Page
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

    <div class="col-md-9 page">
      <div class="page-header">
        <h2>
            <?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"
        </h2>
      </div>
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php get_template_part('content', 'search'); ?>
        <?php endwhile;

      endif;

      ?>
    </div>
    <div class="col-md-3 sidebar">
      <?php get_sidebar(); ?>
    </div>
   
   
  </div>

</div>
<?php get_footer(); ?>