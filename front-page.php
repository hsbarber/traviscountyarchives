

<?php get_header(); ?>


<div class="heroBackground">
	<?php
	  if ( has_post_thumbnail() ) {
	  the_post_thumbnail();
		} 
	?>
	
</div>
<div class="col-xs-12 front-capt col-md-6">
		<?php if ( $caption = get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
		    <p class="front-caption-text"><?php echo $caption; ?></p>
		<?php endif; ?>
	</div> 
<div class="jumbotron block-1">
  <div class="container front">
	  <div class="col-md-10 col-md-offset-1">
        <?php if ( dynamic_sidebar( 'front0' ) ); ?>
	  </div>
	</div>
</div>
<div class="jumbotron block-2">
  <div class="container">
    <div class="col-md-5">
        <?php if ( dynamic_sidebar( 'front1a' ) ); ?>
    </div>
    <div class="col-md-5 col-md-offset-2 new-posts">
        <?php if ( dynamic_sidebar( 'front1b' ) ); ?>
    </div>
  </div>
</div>
<div class="jumbotron block-3">
<div class="container front">
        <?php if ( dynamic_sidebar( 'front2' ) ); ?>
</div>
</div>
<div class="jumbotron block-4">
<div class="container front">
        <?php if ( dynamic_sidebar( 'front3' ) ); ?>
</div>
</div>
<div class="jumbotron block-5">
<div class="container front">
        <?php if ( dynamic_sidebar( 'front4' ) ); ?>
</div>
</div>

<?php get_footer(); ?>


