<?php
// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );


// Load in our CSS
function enqueue_styles_scripts() {
	wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/assets/styles/style.css', [], '', 'all' );
	//
	wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/assets/scripts/app.min.js', [], '', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_scripts', 150 );

// Call styles to login page
function enqueue_styles_scripts_to_login() {
	wp_enqueue_script( 'customize-js', get_stylesheet_directory_uri() . '/assets/scripts/customize.js', [ 'jquery' ], time(), true );
	wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/assets/styles/style.css', [], '', 'all' );
}
add_action( 'login_enqueue_scripts', 'enqueue_styles_scripts_to_login' );
// Call functions to dashboard
function enqueue_scripts_to_dashboard() {
	wp_enqueue_script( 'customize-js', get_stylesheet_directory_uri() . '/assets/scripts/customize.js', [ 'jquery' ], time(), true );
}
add_action( 'admin_enqueue_scripts', 'enqueue_scripts_to_dashboard' );

// Action to fix alert about jQuery JQMIGRATE version:
add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
    }
});

// Register Menu Locations
register_nav_menus( [
	'main-menu' => esc_html__( 'Main Menu', 'wptest_apis3' ),
	'footer-menu' => esc_html__( 'Footer Menu', 'wptest_apis3' ),
]);


// ACTION HOOKS:
function mytheme_custom_excerpt_length( $length ) {
    return 35;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// Setup widgets areas
function wptest_apis3_widgets_init() {
	register_sidebar( [
		'name'			=> esc_html__( 'Footer form newsletter', 'wptest_apis3' ),
		'id'			=> 'footer-newsletter',
		'description'	=> esc_html__( 'Área para formulário de newsletter', 'wptest_apis3' ),
		'before_widget'	=> '<section class="widget">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>',
	] );
}
add_action( 'widgets_init', 'wptest_apis3_widgets_init' );

 ?>
