 <article class="post">

            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><em>
              On <?php echo the_time('l, F jS, Y'); ?>
            </em></p>

            <?php the_excerpt(); ?>

            <hr>

</article>