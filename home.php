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

      <div class="col-md-12 page-container">

          <div class="page-header">
            <h2><?php wp_title(''); ?></h2>
          </div>
            <!--pagination-->


             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="post">

            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><em>
              <?php echo the_time('l, F jS, Y'); ?>
              in <?php the_category( ', ' ); ?>.
              <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
            </em></p>

            <?php the_excerpt(); ?>

            <hr>

          </article>


          <?php endwhile; ?>
              <div class="pagination">
                <?php pagination_bar(); ?>
              </div>

          <?php else : ?>



          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>

      </div>

  </div>

</div>
<?php get_footer(); ?>
