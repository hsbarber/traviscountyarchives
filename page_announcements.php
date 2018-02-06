<?php
/*
  Template name: Announcements Template
*/

?>
<?php get_header(); ?>
<div class="container-fluid">
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

        <?php the_content(); ?>

        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>
        

		 <?php
			$args = array( 
			  'post_type' => 'announcements'
			);
			$the_query = new WP_Query( $args );

		?>

		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


          <article class="post">

            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><em>
              On <?php echo the_time('l, F jS, Y'); ?>
              in <?php the_category( ',' ); ?>.
            </em></p>

            <?php the_excerpt(); ?>

            <hr>

          </article>


		<?php endwhile; endif; ?>
	 

		</div><!--end page-->
    
		<div class="col-md-3 sidebar">
		
		<?php get_sidebar( 'page-tp' ); ?>
		
		</div>
    
	</div><!--end row-->
</div><!--end container-->

<?php get_footer(); ?>
