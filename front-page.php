

<?php get_header(); ?>


<div class="heroBackground">
	<?php
	  if ( has_post_thumbnail() ) {
	  the_post_thumbnail();
		}
	?>

</div>
<section class="container-fluid">
  <div class="container">
    <div class="row cards--front">
      <div class="col-lg-4 cards--front_single">
        <img src="<?php the_field('card-1-image'); ?>" />
        <h4><?php the_field('card-1-heading'); ?></h4>
        <p><?php the_field('card-1-link-1'); ?></p>
        <p><?php the_field('card-1-link-2'); ?></p>
      </div >
      <div class="col-lg-4 cards--front_single">
        <img src="<?php the_field('card-2-image'); ?>" />
        <h4><?php the_field('card-2-heading'); ?></h4>
        <p><?php the_field('card-2-link-1'); ?></p>
      </div>
      <div class="col-lg-4 cards--front_single">
        <img src="<?php the_field('card-3-image'); ?>" />
        <h4><?php the_field('card-3-heading'); ?></h4>
        <p><?php the_field('card-3-link-1'); ?></p>
        <p><?php the_field('card-3-link-2'); ?></p>
      </div>
    </div>
  </div>
</section>
<section class="container-fluid about">
  <div class="container">
    <div class="row about--front">
        <div class="col-lg-2 about--title">
          <h1><?php the_field('about-title'); ?></h1>
        </div>
        <div class="col-lg-2 about--line">
          <span></span>
        </div>
        <div class="col-lg-8  about--text">
          <p><?php the_field('about-text'); ?></p>
        </div>
    </div>
  </div>
</section>
<section class="container-fluid contact">
  <div class="container">
    <div class="row contact--row">
        <div class="col-lg-8 contact--block">
          <h1><?php the_field('contact-title'); ?></h1>
          <p><?php the_field('contact-text'); ?></p>
          <p><?php the_field('contact-links'); ?></p>
        </div>
        <div class="col-lg-4 contact--image">
          <img src="<?php the_field('contact-image'); ?>" />
        </div>
    </div>
  </div>
</section>
<section class="container-fluid instagram">
  <div class="container">
    <div class="row instagram--row">
        <div class="col-lg-12">
          <h1><?php the_field('instagram-title'); ?></h1>
          <p><?php the_field('instagram-text'); ?></p>
        </div>
    </div>
  </div>
</section>
<section class="container-fluid history">
  <div class="container">
    <div class="row history--row">
        <div class="col-xs-12">
          <h1><?php the_field('history-title'); ?></h1>
        </div>
        <div class="history--body">
          <div class="col-md-5">
            <p class="history--body-intro"><?php the_field('history-text'); ?></p>
          </div>
          <div class="col-md-2">
          </div>
          <div class="col-md-5">
            <p class="history--body-moreInfo"><?php the_field('history-more-info'); ?></p>
            <div class="history--body-links"><?php the_field('history-links'); ?></div>
          </div>
        </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>


