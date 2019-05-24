<?php

function theme_styles () {
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/bootstrap-4.0.0/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function google_fonts() {
  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,300italic,600italic|Fjalla+One|Alice', true );
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );


function replace_core_jquery_version() {
    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', "https://code.jquery.com/jquery-3.1.1.min.js", array(), '3.1.1' );
    wp_deregister_script( 'jquery-migrate' );
    wp_register_script( 'jquery-migrate', "https://code.jquery.com/jquery-migrate-3.0.0.min.js", array(), '3.0.0' );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

function theme_js() {
	global $wp_scripts;
	wp_enqueue_script( 'popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js','', '', false);
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/vendors/bootstrap.min.js');
	wp_enqueue_script( 'searchbar_js', get_template_directory_uri() . '/js/custom/search.js', array('jquery'), '', false);
	wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/js/all.js','', '', false);
	if( !is_admin()) {
		if ( is_page( 'lost-travis-county' ) ) {
			wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDmHd1GLs16yHEAjodIb-diEgmbpsW4HJY', '', '', true);
			wp_enqueue_script( 'map_js', get_template_directory_uri() . '/js/custom/map.js', '', '', true  );
		}
		if ( is_page( 'county-clerk' ) ) {
			wp_enqueue_script( 'portal_js', get_template_directory_uri() . '/js/custom/portal.min.js',  array('jquery'), '', false );
		}
		if ( is_page( 'district-clerk' ) ) {
			wp_enqueue_script( 'portal2_js', get_template_directory_uri() . '/js/custom/portal2.min.js',  array('jquery'), '', false );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'theme_js' );



// DON'T SHOW ADMIN BAR
add_filter( 'show_admin_bar', '__return_false' );

add_theme_support('html5', array('search-form'));
add_theme_support( 'menus' );


// Make featured a background image for pages
add_theme_support( 'post-thumbnails');




add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
// Add header logo
add_theme_support( 'custom-header' );

$args = array(
	'width'         => 60,
	'flex-width'    => true,
	'height'        => 60,
	'flex-height'    => true,
	'default-image' => get_template_directory_uri() . '/images/tcseal-compressor.svg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );


// Register Custom Navigation Walker
require_once get_template_directory() . '/bootstrap-navwalker.php';


register_nav_menus( array(
    'nav-menu' => esc_html__( 'Primary', 'archives-menu' ),
) );


function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

}
// Pagination for posts
function pagination_bar() {
    global $wp_query;

    $total_pages = $wp_query->max_num_pages;

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}


create_widget( 'Instagram', 'instagram', 'instagram display on home page' );
create_widget( 'Newsletter', 'newsletter', 'newsletter display in footer' );
create_widget( 'Newsletter-Image', 'newsletter image', 'newsletter background image in footer' );
create_widget( 'Footer Left', 'footer-left', 'Displays in the footer in the left' );
create_widget( 'Footer Right', 'footer-right', 'Displays in the footer in the right' );


create_widget( 'Page Sidebar top', 'page-tp', 'Displays on the top side of pages with a sidebar' );
create_widget( 'Page Sidebar bottom', 'page-bottom', 'Displays on the bottom side of pages with a sidebar' );

?>