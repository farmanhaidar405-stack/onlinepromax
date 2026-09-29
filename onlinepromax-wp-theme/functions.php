<?php
/**
 * Online Pro Max WordPress Theme
 * functions.php
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ---------------------------------------------------------
   Theme setup
--------------------------------------------------------- */
function opm_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'automatic-feed-links' );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'onlinepromax' ),
		'footer'  => __( 'Footer Menu', 'onlinepromax' ),
	) );
}
add_action( 'after_setup_theme', 'opm_theme_setup' );

/* ---------------------------------------------------------
   Core styles & scripts (loaded on every page)
--------------------------------------------------------- */
function opm_enqueue_core_assets() {
	// Google Fonts + Font Awesome (as used across the original site)
	wp_enqueue_style( 'opm-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', array(), '6.5.0' );

	// Main global stylesheet (this IS the theme stylesheet, so use get_stylesheet_uri)
	wp_enqueue_style( 'opm-style', get_stylesheet_uri(), array( 'opm-fontawesome' ), wp_get_theme()->get( 'Version' ) );

	// Global site behaviour (mobile nav, cursor, scroll progress, counters, reveal animations)
	wp_enqueue_script( 'opm-main', get_template_directory_uri() . '/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'opm_enqueue_core_assets' );

/**
 * Helper: enqueue a page-specific CSS/JS pair (e.g. about.css + about.js).
 * Call this from inside a page template BEFORE get_header() runs.
 */
function opm_enqueue_page_assets( $slug ) {
	add_action( 'wp_enqueue_scripts', function() use ( $slug ) {
		$css = get_template_directory() . '/' . $slug . '.css';
		$js  = get_template_directory() . '/' . $slug . '.js';
		if ( file_exists( $css ) ) {
			wp_enqueue_style( 'opm-' . $slug, get_template_directory_uri() . '/' . $slug . '.css', array( 'opm-style' ), '1.0' );
		}
		if ( file_exists( $js ) ) {
			wp_enqueue_script( 'opm-' . $slug . '-js', get_template_directory_uri() . '/' . $slug . '.js', array(), '1.0', true );
		}
	} );
}

/* ---------------------------------------------------------
   Blog post template: enqueue blog-post.css/js on single posts
--------------------------------------------------------- */
function opm_enqueue_blog_assets() {
	if ( is_singular( 'post' ) ) {
		wp_enqueue_style( 'opm-blog-post', get_template_directory_uri() . '/blog-post.css', array( 'opm-style' ), '1.0' );
		wp_enqueue_script( 'opm-blog-post-js', get_template_directory_uri() . '/blog-post.js', array(), '1.0', true );
	}
	if ( is_page_template( 'page-blog.php' ) || is_home() ) {
		wp_enqueue_style( 'opm-blog', get_template_directory_uri() . '/blog.css', array( 'opm-style' ), '1.0' );
		wp_enqueue_script( 'opm-blog-js', get_template_directory_uri() . '/blog.js', array(), '1.0', true );
	}
}
add_action( 'wp_enqueue_scripts', 'opm_enqueue_blog_assets' );

/* ---------------------------------------------------------
   Register Blog Post custom fields used by single.php
   (Read Time + Category Tag) via a simple meta box.
--------------------------------------------------------- */
function opm_register_post_meta_box() {
	add_meta_box( 'opm_post_meta', 'Online Pro Max — Article Settings', 'opm_post_meta_html', 'post', 'side' );
}
add_action( 'add_meta_boxes', 'opm_register_post_meta_box' );

function opm_post_meta_html( $post ) {
	$read_time = get_post_meta( $post->ID, 'opm_read_time', true );
	$category  = get_post_meta( $post->ID, 'opm_category_label', true );
	wp_nonce_field( 'opm_save_meta', 'opm_meta_nonce' );
	echo '<p><label>Read time (minutes)<br /><input type="text" name="opm_read_time" value="' . esc_attr( $read_time ) . '" style="width:100%;" placeholder="e.g. 10" /></label></p>';
	echo '<p><label>Category label<br /><input type="text" name="opm_category_label" value="' . esc_attr( $category ) . '" style="width:100%;" placeholder="e.g. Digital Marketing" /></label></p>';
}

function opm_save_post_meta( $post_id ) {
	if ( ! isset( $_POST['opm_meta_nonce'] ) || ! wp_verify_nonce( $_POST['opm_meta_nonce'], 'opm_save_meta' ) ) return;
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( isset( $_POST['opm_read_time'] ) ) {
		update_post_meta( $post_id, 'opm_read_time', sanitize_text_field( $_POST['opm_read_time'] ) );
	}
	if ( isset( $_POST['opm_category_label'] ) ) {
		update_post_meta( $post_id, 'opm_category_label', sanitize_text_field( $_POST['opm_category_label'] ) );
	}
}
add_action( 'save_post', 'opm_save_post_meta' );

/* ---------------------------------------------------------
   Company contact details as reusable constants/shortcodes
--------------------------------------------------------- */
define( 'OPM_PHONE', '+971 55 259 4585' );
define( 'OPM_PHONE_LINK', '+971552594585' );
define( 'OPM_EMAIL', 'contact@onlinepromax.com' );
define( 'OPM_WHATSAPP', 'https://wa.me/971552594585' );

function opm_shortcode_phone() { return esc_html( OPM_PHONE ); }
add_shortcode( 'opm_phone', 'opm_shortcode_phone' );

function opm_shortcode_email() { return esc_html( OPM_EMAIL ); }
add_shortcode( 'opm_email', 'opm_shortcode_email' );

/* ---------------------------------------------------------
   Cleanup
--------------------------------------------------------- */
remove_action( 'wp_head', 'wp_generator' );
