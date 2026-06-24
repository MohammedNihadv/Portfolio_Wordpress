<?php

/**
 * Minimalistic Portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Minimalistic Portfolio
 */

define( 'MINIMALISTIC_PORTFOLIO_URL', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'minimalistic_portfolio_setup' ) ) {

	load_theme_textdomain( 'minimalistic-portfolio', get_template_directory() . '/languages' );

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function minimalistic_portfolio_setup() {

		// Add theme support
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'customize-selective-refresh-widgets' );

		require get_template_directory() .'/inc/core/main.php';
	}
}
add_action( 'after_setup_theme', 'minimalistic_portfolio_setup' );

/**
 * Enqueue scripts and styles
 */
function minimalistic_portfolio_scripts() {
	$version = wp_get_theme( 'minimalistic-portfolio' )->get( 'Version' );
	// Stylesheet
	wp_enqueue_style( 'minimalistic-portfolio-styles', get_theme_file_uri( '/style.css' ), array(), $version );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), $version, 'all' );

	if ( file_exists( get_template_directory() . '/assets/css/theme-style.css' ) ) {
		wp_enqueue_style( 'minimalistic-portfolio-theme-style', get_template_directory_uri() . '/assets/css/theme-style.css',  array(), $version );
	}

	$deps = array( 'minimalistic-portfolio-animate' );
	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$deps[] = 'wc-blocks-vendors-style';
	}

	if ( is_rtl() ) {
    	wp_enqueue_style( 'style-rtl-css', get_template_directory_uri() . '/assets/css/style-rtl.css', array( 'minimalistic-portfolio-styles' ), $version );
	}

	wp_enqueue_style( 'fontawesome-style', esc_url(get_template_directory_uri()).'/assets/fontawesome/css/all.css' );

	// Scripts
	$deps = array( 'jquery' );
	wp_enqueue_script( 'animate', get_template_directory_uri() . '/assets/js/wow.js', $deps, $version );
	wp_enqueue_script( 'emailjs', 'https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js', array(), null, true );
	wp_enqueue_script( 'minimalistic-portfolio-contact', get_template_directory_uri() . '/assets/js/contact.js', array( 'emailjs' ), $version, true );

}
add_action( 'wp_enqueue_scripts', 'minimalistic_portfolio_scripts' );

/**
 * Add editor styles
 */
function minimalistic_portfolio_editor_style() {
    wp_enqueue_style( 'minimalistic-portfolio-editor-style', get_template_directory_uri() . '/assets/css/editor-style.css' );
}
add_action( 'enqueue_block_assets', 'minimalistic_portfolio_editor_style' );

/**
 * Enqueue assets scripts for both backend and frontend
 */
function minimalistic_portfolio_block_assets()
{
    wp_enqueue_style( 'minimalistic-portfolio-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css' );
}
add_action( 'enqueue_block_assets', 'minimalistic_portfolio_block_assets' );

function minimalistic_portfolio_enqueue_admin_script($hook) {
    // Enqueue admin JS for notices
    wp_enqueue_script('minimalistic-portfolio-welcome-notice', get_template_directory_uri() . '/inc/core/minimalistic-portfolio-welcome-notice.js', array('jquery'), '', true);
    
    // Localize script to pass data to JavaScript
    wp_localize_script('minimalistic-portfolio-welcome-notice', 'minimalistic_portfolio_localize', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('minimalistic_portfolio_welcome_nonce'),
        'dismiss_nonce' => wp_create_nonce('minimalistic_portfolio_welcome_nonce'), // Nonce for dismissal
        'redirect_url' => admin_url('themes.php?page=minimalistic-portfolio-guide-page')
    ));
}
add_action('admin_enqueue_scripts', 'minimalistic_portfolio_enqueue_admin_script');

/**
 * Load core file
 */
require get_theme_file_path( '/inc/core/init.php' );

/**
 * Getstart
 */

require get_template_directory() .'/inc/core/customizer-notice/minimalistic-portfolio-customizer-notify.php';

load_template( trailingslashit( get_template_directory() ) . '/inc/core/class-upgrade-pro.php' );