<?php
/*
  Template Name: Exhibit Mysteries Full Width Template

 */
?>

<?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
<?php get_header(); ?>
<div class="container-fluid bc-container">
    <div class="row">
        <div class="container">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                <?php if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </div>
        </div>
    </div>
</div>
<div class="mysteries-header" style="background: linear-gradient(
	        rgba(0,0,0, 0.5),
	        rgba(0,0,0, 1.0)),
            url('<?php echo $backgroundImg[0]; ?>') 50% 50% no-repeat; background-size: cover;">
    <div class="mysteries-intro col-sm-12 col-md-10 col-lg-7">
        <h1><?php the_field('exhibit-title'); ?></h1>
        <p><?php the_field('exhibit-intro'); ?></p>
    </div>
    <div class="">
    <?php if (have_rows('exhibit-chapter-titles')) : ?>
        <nav class="exhibit-navbar navbar navbar-expand-md mysteries-chapters-list">
            <?php while (have_rows('exhibit-chapter-titles')) : the_row();
            ?>
                <li class="<?php the_sub_field('exhibit-chapter-title'); ?>">
                    <a href="<?php the_sub_field('exhibit-chapter-url'); ?>">
                        <h5><?php the_sub_field('exhibit-chapter-name'); ?></h5>
                    </a>
                </li>
            <?php endwhile; ?>
        </nav>
    <?php endif; ?>
</div>
</div>
</div>

<!-- BLOCK 1: The Haunting of the Old County Jail -->
<section id="jail">
    <div class="container d-flex justify-content-center exhibit-block">
        <div class="row">
              <h1 class="text-center"><?php the_field('block-1-title') ?></h1>
        </div>
    </div>
    <div class="container-fluid exhibit-block">
      <div class="container">
        <div class="row">
                <div class="col-sm-6">
                    <p><?php the_field('block-1-text-1') ?></p>
                </div>
                <div class="col-sm-6">
                  <div class="block-gallery">
                    <div class="row">
                        <?php
                        $block1gallery1 = get_field('block-1-gallery-1');
                        if ($block1gallery1) : ?>

                            <?php foreach ($block1gallery1 as $image) : ?>
                                <div class="col-lg-4">
                                    <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <p><?php echo esc_html($image['caption']); ?></p>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                  </div>
                </div>
        </div>
      </div>
    </div>
    <div class="container-fluid exhibit-block">
      <div class="container">
        <div class="row">
                <div class="col-sm-6">
                  <div class="block-gallery">
                    <div class="row">
                        <?php
                        $block1gallery2 = get_field('block-1-gallery-2');
                        if ($block1gallery2) : ?>

                            <?php foreach ($block1gallery2 as $image) : ?>
                                <div class="col-lg-6">
                                    <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <p><?php echo esc_html($image['caption']); ?></p>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                    <p><?php the_field('block-1-text-2') ?></p>
                </div>
        </div>
      </div>
    </div>
    <div class="container-fluid exhibit-block">
      <div class="container">
        <div class="row">
                <div class="col-sm-6">
                    <p><?php the_field('block-1-text-3') ?></p>
                </div>
                <div class="col-sm-6">
                  <div class="block-gallery">
                    <div class="row">
                        <?php
                        $block1gallery3 = get_field('block-1-gallery-3');
                        if ($block1gallery3) : ?>

                            <?php foreach ($block1gallery3 as $image) : ?>
                                <div class="col-lg-6">
                                    <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <p><?php echo esc_html($image['caption']); ?></p>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                  </div>
                </div>
        </div>
      </div>
    </div>
    <div class="container-fluid exhibit-block">
      <div class="container">
        <div class="row">
                <div class="col-sm-12">
                    <p><?php the_field('block-1-text-4') ?></p>
                </div>
        </div>
      </div>
    </div>
</section>

<!-- BLOCK 2: Buried Treasure of Hill Country -->
<section id="treasure">
  <div class="container-fluid py-5 mt-5 bg-dark text-white">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div>
                      <h1 class="text-center"><?php the_field('block-2-title') ?></h1>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container-fluid exhibit-block">
    <div class="container">
      <div class="row">
              <div class="col-sm-12">
                  <p><?php the_field('block-2-text-1') ?></p>
              </div>
      </div>
    </div>
  </div>
  <div class="container-fluid exhibit-block">
    <div class="container">
      <div class="block-gallery">
        <div class="row">
            <?php
            $block2gallery1 = get_field('block-2-gallery-1');
            if ($block2gallery1) : ?>
                <?php foreach ($block2gallery1 as $image) : ?>
                    <div class="col-sm-4">
                        <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <p><?php echo esc_html($image['caption']); ?></p>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid exhibit-block">
    <div class="container">
      <div class="row">
              <div class="col-sm-12">
                  <p><?php the_field('block-2-text-2') ?></p>
              </div>
      </div>
    </div>
  </div>
  <div class="container-fluid exhibit-block">
    <div class="container">
      <div class="block-gallery">
        <div class="row">
            <?php
            $block2gallery2 = get_field('block-2-gallery-2');
            if ($block2gallery2) : ?>

                <?php foreach ($block2gallery2 as $image) : ?>
                    <div class="col-sm-4">
                        <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <p><?php echo esc_html($image['caption']); ?></p>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid exhibit-block">
    <div class="container">
      <div class="row">
              <div class="col-sm-12">
                  <p><?php the_field('block-2-text-3') ?></p>
              </div>
      </div>
    </div>
  </div>
  <div class="container-fluid exhibit-block">
    <div class="container">
      <div class="block-gallery">
        <div class="row">
            <?php
            $block2gallery3 = get_field('block-2-gallery-3');
            if ($block2gallery3) : ?>

                <?php foreach ($block2gallery3 as $image) : ?>
                    <div class="col-sm-6">
                        <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                            <img src="<?php echo esc_url($image['sizes']['medium']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <p><?php echo esc_html($image['caption']); ?></p>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid exhibit-block">
    <div class="container">
      <div class="row">
              <div class="col-sm-12">
                  <p><?php the_field('block-2-text-4') ?></p>
              </div>
      </div>
    </div>
  </div>
  <div class="container-fluid exhibit-block">
    <div class="container">
      <div class="block-gallery">
        <div class="row">
            <?php
            $block2gallery4 = get_field('block-2-gallery-4');
            if ($block2gallery4) : ?>

                <?php foreach ($block2gallery4 as $image) : ?>
                    <div class="col-sm-6">
                        <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <p><?php echo esc_html($image['caption']); ?></p>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid exhibit-block">
    <div class="container">
      <div class="row">
              <div class="col-sm-12">
                  <p><?php the_field('block-2-text-5') ?></p>
              </div>
      </div>
    </div>
  </div>
</section>

<!-- BLOCK 3: The Scalping of Josiah Wilbarger -->
<section id="Wilbarger">
  <div class="container-fluid py-5 mt-5 bg-dark text-white">
        <div class="container">
            <div class="row">
              <div class="col-12">
                  <div>
                      <h1 class="text-center"><?php the_field('block-3-title') ?></h1>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <?php
    // check if the repeater field has rows of data
    if( have_rows('block-3-repeater') ):

        // loop through the rows of data
        while ( have_rows('block-3-repeater') ) : the_row(); ?>'
        <div class="container-fluid exhibit-block alt-block">
          <div class="container">
            <div class="row ">
               <div class="col-md-6 col-sm-12">
                  <?php the_sub_field('block-3-text'); ?>
               </div>
              <div class="col-lg-6 col-sm-12">
                <div class="row block-gallery">
                    <?php
                    $blockgallery = get_sub_field('block-3-gallery');
                    if ($blockgallery) : ?>
                        <?php foreach ($blockgallery as $image) : ?>
                              <div class="col-6">
                                  <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                      <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                      <p><?php echo esc_html($image['caption']); ?></p>
                                  </a>
                              </div>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>

    <?php else : ?>

   <?php endif; ?>

</section>
<!-- BLOCK 4: Shades of the Past -->
<section id="Shades">
  <div class="container-fluid py-5 mt-5 bg-dark text-white">
        <div class="container">
            <div class="row">
              <div class="col-12">
                  <div>
                      <h1 class="text-center"><?php the_field('block-4-title') ?></h1>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <?php
    // check if the repeater field has rows of data
    if( have_rows('block-4-repeater') ):

        // loop through the rows of data
        while ( have_rows('block-4-repeater') ) : the_row(); ?>'
        <div class="container-fluid exhibit-block alt-block">
          <div class="container">
            <div class="row ">
               <div class="col-md-6 col-sm-12">
                  <?php the_sub_field('block-4-text'); ?>
               </div>
              <div class="col-lg-6 col-sm-12">
                <div class="row block-gallery">
                    <?php
                    $block4gallery = get_sub_field('block-4-gallery');
                    if ($block4gallery) : ?>
                        <?php foreach ($block4gallery as $image) : ?>
                              <div class="col-6">
                                  <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                      <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                      <p><?php echo esc_html($image['caption']); ?></p>
                                  </a>
                              </div>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>

    <?php else : ?>

   <?php endif; ?>
</section>
</section>
<!-- BLOCK 5: Moonlight Towers -->
<section id="Moonlight">
  <div class="container-fluid py-5 mt-5 bg-dark text-white">
        <div class="container">
            <div class="row">
              <div class="col-12">
                  <div>
                      <h1 class="text-center"><?php the_field('block-5-title') ?></h1>
                  </div>
              </div>
          </div>
      </div>
  </div>
<div class="container-fluid exhibit-block">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="block-gallery">
              <div class="row">
                  <?php
                  $block5gallerytop = get_field('block-5-gallery-top');
                  if ($block5gallerytop) : ?>

                      <?php foreach ($block5gallerytop as $image) : ?>
                          <div class="col-sm-12 col-lg-4">
                              <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                  <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                  <p><?php echo esc_html($image['caption']); ?></p>
                              </a>
                          </div>
                      <?php endforeach; ?>
                  <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
    // check if the repeater field has rows of data
    if( have_rows('block-5-repeater') ):

        // loop through the rows of data
        while ( have_rows('block-5-repeater') ) : the_row(); ?>'
        <div class="container-fluid exhibit-block alt-block">
          <div class="container">
            <div class="row ">
               <div class="col-md-6 col-sm-12">
                  <?php the_sub_field('block-5-text'); ?>
               </div>
              <div class="col-lg-6 col-sm-12">
                <div class="row block-gallery">
                    <?php
                    $block5gallery = get_sub_field('block-5-gallery');
                    if ($block5gallery) : ?>
                        <?php foreach ($block5gallery as $image) : ?>
                              <div class="col-6">
                                  <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                      <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                      <p><?php echo esc_html($image['caption']); ?></p>
                                  </a>
                              </div>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>

    <?php else : ?>

   <?php endif; ?>
</section>
<!-- BLOCK 6: Servant Girl Murders -->
<section id="ServantGirl">
  <div class="container-fluid py-5 mt-5 bg-dark text-white">
        <div class="container">
            <div class="row">
              <div class="col-12">
                  <div>
                      <h1 class="text-center"><?php the_field('block-6-title') ?></h1>
                  </div>
              </div>
          </div>
      </div>
  </div>

<?php
  // check if the repeater field has rows of data
  if( have_rows('block-6-repeater') ):

      // loop through the rows of data
      while ( have_rows('block-6-repeater') ) : the_row(); ?>'
      <div class="container-fluid exhibit-block alt-block">
        <div class="container">
          <div class="row ">
              <div class="col-md-6 col-sm-12">
                <?php the_sub_field('block-6-text'); ?>
              </div>
            <div class="col-lg-6 col-sm-12">
              <div class="row block-gallery">
                  <?php
                  $block6gallery = get_sub_field('block-6-gallery');
                  if ($block6gallery) : ?>
                      <?php foreach ($block6gallery as $image) : ?>
                            <div class="col-12">
                                <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <p><?php echo esc_html($image['caption']); ?></p>
                                </a>
                            </div>

                      <?php endforeach; ?>
                  <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>

  <?php else : ?>

  <?php endif; ?>
   <div class="container-fluid py-5 mt-5">
        <div class="container">
            <div class="row">
              <div class="col-12">
                  <div>
                      <h1 class="text-center"><?php the_field('block-6-title-2') ?></h1>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container-fluid exhibit-block">
      <div class="container">
        <div class="row">

                <div class="col-12">
                  <div class="block-gallery d-flex justify-content-center">

                        <?php
                        $block6gallery1 = get_field('block-6-gallery-1');
                        if ($block6gallery1) : ?>

                            <?php foreach ($block6gallery1 as $image) : ?>

                              <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                  <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                  <p><?php echo esc_html($image['caption']); ?></p>
                              </a>

                            <?php endforeach; ?>
                        <?php endif; ?>

                  </div>
                </div>
        </div>
      </div>
    </div>
  <div class="container-fluid exhibit-block">
      <div class="container">
        <div class="row">

                <div class="col-sm-6">
                  <div class="block-gallery">
                    <div class="row">
                        <?php
                        $block6gallery2 = get_field('block-6-gallery-2');
                        if ($block6gallery2) : ?>

                            <?php foreach ($block6gallery2 as $image) : ?>
                                <div class="col-6">
                                    <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <p><?php echo esc_html($image['caption']); ?></p>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                    <p><?php the_field('block-6-text-2') ?></p>
                </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
              <div class="col-12">
                  <div>
                      <p><?php the_field('block-6-text-3') ?></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- BLOCK 7: 1865 Treasury Raid -->
<section id="Treasury Raid">
  <div class="container-fluid py-5 mt-5 bg-dark text-white">
        <div class="container">
            <div class="row">
              <div class="col-12">
                  <div>
                      <h1 class="text-center"><?php the_field('block-7-title') ?></h1>
                  </div>
              </div>
          </div>
      </div>
  </div>
<?php
  // check if the repeater field has rows of data
  if( have_rows('block-7-repeater') ):

      // loop through the rows of data
      while ( have_rows('block-7-repeater') ) : the_row(); ?>'
      <div class="container-fluid exhibit-block alt-block">
        <div class="container">
          <div class="row ">
              <div class="col-md-6 col-sm-12">
                <?php the_sub_field('block-7-text'); ?>
              </div>
            <div class="col-lg-6 col-sm-12">
              <div class="row block-gallery">
                  <?php
                  $block7gallery = get_sub_field('block-7-gallery');
                  if ($block7gallery) : ?>
                      <?php foreach ($block7gallery as $image) : ?>
                            <div class="col-12">
                                <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <p><?php echo esc_html($image['caption']); ?></p>
                                </a>
                            </div>

                      <?php endforeach; ?>
                  <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>

  <?php else : ?>

  <?php endif; ?>
  <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
              <div class="col-12">
                  <div>
                      <p><?php the_field('block-7-text-1') ?></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container-fluid exhibit-block">
      <div class="container">
        <div class="row">

                <div class="col-12">
                  <div class="block-gallery">
                    <div class="row">
                        <?php
                        $block7gallery1 = get_field('block-7-gallery-1');
                        if ($block7gallery1) : ?>

                            <?php foreach ($block7gallery1 as $image) : ?>
                                <div class="col-sm-12 col-md-6">
                                    <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <p><?php echo esc_html($image['caption']); ?></p>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                  </div>
                </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
              <div class="col-12">
                  <div>
                      <p><?php the_field('block-7-text-2') ?></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container-fluid exhibit-block">
      <div class="container">
        <div class="row">

                <div class="col-12">
                  <div class="block-gallery">
                    <div class="row">
                        <?php
                        $block7gallery2 = get_field('block-7-gallery-2');
                        if ($block7gallery2) : ?>

                            <?php foreach ($block7gallery2 as $image) : ?>
                                <div class="col-sm-12 col-md-6">
                                    <a href="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_html($image['caption']); ?>">
                                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <p><?php echo esc_html($image['caption']); ?></p>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                  </div>
                </div>
        </div>
      </div>
    </div>
</section>
<?php get_footer(); ?>