<?php add_filter('term_links-post_tag','limit_to_five_tags');
function limit_to_five_tags($terms) {
return array_slice($terms,0,4,true);
}
function roleplayuniverse_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js');
}

add_action( 'wp_enqueue_scripts', 'roleplayuniverse_scripts' );
function startwordpress_google_fonts() {
	wp_register_style('OpenSans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
	wp_enqueue_style( 'OpenSans');
}

add_action('wp_print_styles', 'startwordpress_google_fonts');
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );