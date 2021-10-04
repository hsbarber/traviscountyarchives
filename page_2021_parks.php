<?php
/*
  Template Name: 2021 Parks Page Template

 */
?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
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
<div class="parks-page-container" >

    <div class="container hd-page-container">
        <div class="row">

            <div class="col-md-12 page-container-full-width">


                <!-- Main Content -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php
                    function wpse5422_display_prev_next($prevID=false, $nextID=false){
                        if( empty($prevID) && empty($nextID) )
                        return false;

                        $html = '<div class="parks-page-navigation">';

                        if( !empty($prevID) ){
                            $html .= '<div class="alignleft">';
                            $html .= '<a href="'.get_permalink($prevID).'" title="'.get_the_title($prevID).'">

                            <h4><< '.get_the_title($prevID).'</h4></a>';
                            $html .= '</div>';
                        }

                        if( !empty($nextID) ){
                            $html .= '<div class="alignright">';
                            $html .= '<a href="'.get_permalink($nextID).'" title="'.get_the_title($nextID).'"><h4>'.get_the_title($nextID).' >></h4></a>';
                            $html .= '</div>';
                        }

                        $html .= '</div><!-- .navigation -->';

                        return $html;
                    }
                    function wpse5422_the_page_siblings(){
                        $post_id = get_the_ID();
                        $parent_id = wp_get_post_parent_id($post_id);
                        $post_type = get_post_type($post_id);

                        $sibling_list = get_pages(array(
                            'sort_column'=>'menu_order title',
                            'sort_order' =>'asc',
                            'child_of' =>$parent_id,
                            'post_type'=> $post_type
                        ));

                        if( !$sibling_list || is_wp_error($sibling_list) )
                            return false;

                        $pages = array();
                        foreach ($sibling_list as $sibling ) {
                            $pages[] = $sibling->ID;
                        }

                        $current = array_search($post_id, $pages);
                        $prevID = isset($pages[$current-1]) ? $pages[$current-1] : false;
                        $nextID = isset($pages[$current+1]) ? $pages[$current+1] : false;

                        echo wpse5422_display_prev_next($prevID, $nextID);
                    }


                    wpse5422_the_page_siblings();
                ?>

                <div class="parks-page-header">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="the_content">
                    <?php the_content(); ?>
                </div>
                <?php endwhile; else: ?>
                    <div class="page-header">
                        <h1>Oh no!</h1>
                    </div>
                    <p>No content is appearing for this page!</p>
                    <?php endif; ?>
            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>


