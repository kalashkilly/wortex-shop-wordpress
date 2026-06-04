<?php
/**
 * Enqueue script and styles for child theme
 */
function woodmart_child_enqueue_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'woodmart-style' ), woodmart_get_theme_info( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'woodmart_child_enqueue_styles', 10010 );

// Redirect mobile users from homepage to Clothing category
add_action( 'template_redirect', function() {

    // Only mobile devices
    if ( ! wp_is_mobile() ) {
        return;
    }

    // Only home page
    if ( ! is_front_page() ) {
        return;
    }

    // Target URL
    $target_url = 'https://wortex.one/product-category/clothing/';

    // Prevent redirect loop
    if ( isset($_SERVER['REQUEST_URI']) && strpos( $_SERVER['REQUEST_URI'], '/product-category/clothing/' ) === 0 ) {
        return;
    }

    // Redirect (302 temporary)
    wp_redirect( $target_url, 302 );
    exit;
});
/**
 * Enqueue Wortex custom design layer.
 */
add_action( 'wp_enqueue_scripts', function () {
    $file = get_stylesheet_directory() . '/assets/css/wortex-design.css';

    if ( file_exists( $file ) ) {
        wp_enqueue_style(
            'wortex-design',
            get_stylesheet_directory_uri() . '/assets/css/wortex-design.css',
            array(),
            filemtime( $file )
        );
    }
}, 99 );



