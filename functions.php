<?php
// //OVERRIDE AUTOPTIMIZER PLUGIN
// add_filter('autoptimize_filter_css_replacetag','my_ao_override_css_replacetag',10,1);
// function my_ao_override_css_replacetag($replacetag) {
//         return array("<injectcss />","replace");
//         }
function theme_styles () {

	// wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function google_fonts() {
	wp_enqueue_style( 'wpb-google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,300italic,600italic|Fjalla+One', true );
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );

// function google_fonts() {
// 	if (!is_admin()) {
// 		wp_register_style('google', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,300italic,600italic|Pathway+Gothic+One|Oswald|Fjalla+One', array(), null, 'all');
// 		wp_enqueue_style('google');
// 	}
// }
// add_action('wp_enqueue_scripts', 'google_fonts');


function theme_js() {
	global $wp_scripts;
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js');
	if( !is_admin()) {
		if ( is_page( 'lost-travis-county' ) ) {
			wp_enqueue_script( 'google-map', 'http://maps.googleapis.com/maps/api/js?key=AIzaSyDmHd1GLs16yHEAjodIb-diEgmbpsW4HJY', '', '', true);
			wp_enqueue_script( 'map_js', get_template_directory_uri() . '/js/map.js', '', '', true  );
		}
		if ( is_page( 'county-clerk' ) ) {
			wp_enqueue_script( 'portal_js', get_template_directory_uri() . '/js/portal.js',  array('jquery'), '1.1.0', true );
		}
		if ( is_page( 'district-clerk' ) ) {
			wp_enqueue_script( 'portal2_js', get_template_directory_uri() . '/js/portal2.js',  array('jquery'), '1.1.0', true );
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


function register_theme_menus() {
	register_nav_menus(
			array(
				'header-menu'   => __( 'Header Menu' )
			)
		);
}
add_action( 'init', 'register_theme_menus' );


// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Bootstrap to Wordpress' ),
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



create_widget( 'Header Right', 'top-right', 'Displays in the header on the right' );
create_widget( 'Header Left', 'top-left', 'Displays in the header on the left' );
create_widget( 'Footer Center', 'footer-center', 'Displays in the footer in the center' );
create_widget( 'Footer Left', 'footer-left', 'Displays in the footer in the left' );
create_widget( 'Footer Right', 'footer-right', 'Displays in the footer in the right' );
create_widget( 'Footer Left', 'footer-left', 'Displays in the footer in the left' );
create_widget( 'Footer Bottom', 'footer-bottom', 'Displays in the footer in the bottom' );


create_widget( 'Front Page 0', 'front0', 'Front page about section widget' );
create_widget( 'Front Page 1a', 'front1a', 'First a widget homepage' );
create_widget( 'Front Page 1b', 'front1b', 'First b widget homepage' );
create_widget( 'Front Page 2', 'front2', 'Second widget homepage' );
create_widget( 'Front Page 3', 'front3', 'Third widget homepage' );
create_widget( 'Front Page 4', 'front4', 'Fourth widget homepage' );
create_widget( 'Front Page 5', 'front5', 'Fourth widget homepage' );
create_widget( 'Front Page Hero', 'frontx', 'Front page Hero Container' );


create_widget( 'Page Sidebar top', 'page-tp', 'Displays on the side of pages with a sidebar' );
create_widget( 'Page Sidebar bottom', 'page-bt', 'Displays on the side of pages with a sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of blog with a sidebar' );
create_widget( 'Announcements Sidebar', 'Announcements', 'Displays on the side of Announcements Page with a sidebar' );

?>