

<?php get_header(); ?>


<div class="heroBackground">
	<?php
	  if ( has_post_thumbnail() ) {
	  the_post_thumbnail();
		}
	?>

</div>
<section class="container cards">
  <div class="col-md-12 cards--front">
    <div class="col-xs-12 col-sm-4 cards__single">
      <img src="<?php the_field('card-1-image'); ?>" />
      <h4><?php the_field('card-1-heading'); ?></h4>
      <p><?php the_field('card-1-link-1'); ?></p>
      <p><?php the_field('card-1-link-2'); ?></p>
    </div >
    <div class="col-xs-12 col-sm-4 cards__single">
      <img src="<?php the_field('card-2-image'); ?>" />
      <h4><?php the_field('card-2-heading'); ?></h4>
      <p><?php the_field('card-2-link-1'); ?></p>
    </div>
    <div class="col-xs-12 col-sm-4 cards__single">
      <img src="<?php the_field('card-3-image'); ?>" />
      <h4><?php the_field('card-3-heading'); ?></h4>
      <p><?php the_field('card-3-link-1'); ?></p>
      <p><?php the_field('card-3-link-2'); ?></p>
    </div>
  </div>
</section>

<?php get_footer(); ?>


