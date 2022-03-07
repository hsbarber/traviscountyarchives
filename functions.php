<?php






function theme_styles () {
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function google_fonts() {
  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,300italic,600italic|Fjalla+One|Alice|Sawarabi+Gothic&display=swap', true );
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
	//wp_enqueue_script( 'popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js','', '', false);
	//wp_enqueue_script( 'bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js','','', false);
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/vendors/bootstrap.min.js');
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.min.js');
	// wp_enqueue_script( 'slideshow_js', get_template_directory_uri() . '/js/custom/slideshow.js');
	wp_enqueue_script( 'searchbar_js', get_template_directory_uri() . '/js/custom/search.js', array('jquery'), '', false);
	//wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendors/modernizr.js');
	if( !is_admin()) {
		if ( is_page( 'lost-travis-county' ) ) {
			wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDmHd1GLs16yHEAjodIb-diEgmbpsW4HJY', '', '', true);
			wp_enqueue_script( 'map_js', get_template_directory_uri() . '/js/custom/map.js', '', '', true  );
		}
		if ( is_page( 'history-day-2017' ) ) {
			wp_enqueue_script( 'google-map2', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB1LkeZuDwLTrm2CtTpUKoWUzkp4AarUCc', '', '', true);
			wp_enqueue_script( 'hauntedmap_js', get_template_directory_uri() . '/js/custom/hauntedplaces.js', '', '', true  );
		}
		if ( is_page( 'county-clerk' ) ) {
			wp_enqueue_script( 'portal_js', get_template_directory_uri() . '/js/custom/portal.min.js',  array('jquery'), '', false );
		}
		if ( is_page( 'district-clerk' ) ) {
			wp_enqueue_script( 'portal2_js', get_template_directory_uri() . '/js/custom/portal2.min.js',  array('jquery'), '', false );
		}
		if (is_page( 'parkshistory' ) ) {
			wp_enqueue_script( 'vertnav_js', get_template_directory_uri() . '/js/custom/verticalnavigation.js', array('jquery'), '', false);
			wp_enqueue_script( 'lazyloadvideo', get_template_directory_uri() . '/js/custom/lazyloadvideo.js');
		}
	}
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

/**
 * Font Awesome Kit Setup
 *
 * This will add your Font Awesome Kit to the front-end, the admin back-end,
 * and the login screen area.
 */
if (! function_exists('fa_custom_setup_kit') ) {
  function fa_custom_setup_kit($kit_url = '') {
    foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
      add_action(
        $action,
        function () use ( $kit_url ) {
          wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
        }
      );
    }
  }
}
fa_custom_setup_kit('https://kit.fontawesome.com/7d8b6130f8.js');



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


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


register_nav_menus( array(
    'nav-menu' => esc_html__( 'Primary', 'archives-menu' ),
		'hd2021-menu' => __( 'hd2021-menu' )
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

create_widget( 'Giveaway', 'giveaway', 'giveaway for history day 2021' );
create_widget( 'Giveaway-Photos', 'giveaway-photos', 'giveaway photos for history day 2021' );
create_widget( 'Instagram', 'instagram', 'instagram display on home page' );
create_widget( 'Newsletter', 'newsletter', 'newsletter display in footer' );
create_widget( 'Newsletter-Image', 'newsletter image', 'newsletter background image in footer' );
create_widget( 'Footer Left', 'footer-left', 'Displays in the footer in the left' );
create_widget( 'Footer Right', 'footer-right', 'Displays in the footer in the right' );


create_widget( 'Page Sidebar top', 'page-tp', 'Displays on the top side of pages with a sidebar' );
create_widget( 'Page Sidebar bottom', 'page-bottom', 'Displays on the bottom side of pages with a sidebar' );

// Create Custom Post Type for Sliders


function create_slider_post_type() {

	$labels = array(
		'name' => __( 'Sliders' ),
		'singular_name' => __( 'Sliders' ),
		'all_items'           => __( 'All Sliders' ),
		'view_item'           => __( 'View Slider' ),
		'add_new_item'        => __( 'Add New Slider' ),
		'add_new'             => __( 'Add New Slider' ),
		'edit_item'           => __( 'Edit Slider' ),
		'update_item'         => __( 'Update Slider' ),
		'search_items'        => __( 'Search Slider' ),
		'search_items' => __('Sliders')
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Add New Slider contents',
		'menu_position' => 27,
		'public' => true,
		'has_archive' => true,
		'map_meta_cap' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'rewrite' => array('slug' => false),
		'menu_icon'=>'dashicons-format-image',
		'supports' => array(
			'title',
			'thumbnail','excerpt'
		),
	);
	register_post_type( 'slider', $args);
}
add_action( 'init', 'create_slider_post_type' );
add_action( 'init', function() {
    remove_post_type_support( 'slider', 'editor' );
    remove_post_type_support( 'slider', 'slug' );
} );
function cih_theme_support() {

   add_theme_support( 'post-thumbnails' );
   add_image_size( 'slider_image','1024','720',true);

}
add_action('after_setup_theme','cih_theme_support');
?>