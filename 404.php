
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
          
		    <div class="page-header">
				<h2>NOOOOOO!</h2>
            </div>
            
			<div class="error_page">
				<img src="http://www.traviscountyhistory.org/wp-content/uploads/2016/06/404cat.png" />
				</br>
				<p>We're very sorry, but the page you requested has not been found! It may have been moved or deleted.</p>
				<p>I'm not blaming you, but have you checked your address bar? There might be a typo in the URL.</p>
				<p>You may try going back to the <a href="<?php echo get_option('home'); ?>"/>home page</a> 
					or using the search button in the navigation to search our site.</p>
			</div>
          
        
        </div>
		<div class="col-md-3 sidebar">
		
		<?php get_sidebar(); ?>
		
		</div>
		
         
        
  </div>
  
</div>
<?php get_footer(); ?>
