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
function opm_asset_ver( $file ) {
	$path = get_template_directory() . '/' . $file;
	return file_exists( $path ) ? (string) filemtime( $path ) : wp_get_theme()->get( 'Version' );
}

function opm_enqueue_core_assets() {
	// Google Fonts + Font Awesome (as used across the original site)
	wp_enqueue_style( 'opm-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', array(), '6.5.0' );

	// Main global stylesheet (this IS the theme stylesheet, so use get_stylesheet_uri)
	wp_enqueue_style( 'opm-style', get_stylesheet_uri(), array( 'opm-fontawesome' ), opm_asset_ver( 'style.css' ) );

	// Global site behaviour (mobile nav, cursor, scroll progress, counters, reveal animations)
	wp_enqueue_script( 'opm-main', get_template_directory_uri() . '/main.js', array(), opm_asset_ver( 'main.js' ), true );
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
			wp_enqueue_style( 'opm-' . $slug, get_template_directory_uri() . '/' . $slug . '.css', array( 'opm-style' ), opm_asset_ver( $slug . '.css' ) );
		}
		if ( file_exists( $js ) ) {
			wp_enqueue_script( 'opm-' . $slug . '-js', get_template_directory_uri() . '/' . $slug . '.js', array(), opm_asset_ver( $slug . '.js' ), true );
		}
	} );
}

/* ---------------------------------------------------------
   Blog post template: enqueue blog-post.css/js on single posts
--------------------------------------------------------- */
function opm_enqueue_blog_assets() {
	if ( is_singular( 'post' ) ) {
		wp_enqueue_style( 'opm-blog-post', get_template_directory_uri() . '/blog-post.css', array( 'opm-style' ), opm_asset_ver( 'blog-post.css' ) );
		wp_enqueue_script( 'opm-blog-post-js', get_template_directory_uri() . '/blog-post.js', array(), opm_asset_ver( 'blog-post.js' ), true );
	}
	if ( is_page_template( 'page-blog.php' ) || is_home() ) {
		wp_enqueue_style( 'opm-blog', get_template_directory_uri() . '/blog.css', array( 'opm-style' ), opm_asset_ver( 'blog.css' ) );
		wp_enqueue_script( 'opm-blog-js', get_template_directory_uri() . '/blog.js', array(), opm_asset_ver( 'blog.js' ), true );
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
   Favicon — uses the theme logo icon unless a Site Icon has
   been set in Appearance → Customize → Site Identity.
--------------------------------------------------------- */
function opm_output_favicon() {
	if ( function_exists( 'has_site_icon' ) && has_site_icon() ) return;
	$dir = get_template_directory_uri() . '/assets/';
	echo '<link rel="icon" type="image/x-icon" href="' . esc_url( $dir . 'favicon.ico' ) . '" sizes="any" />' . "\n";
	echo '<link rel="icon" type="image/png" sizes="32x32" href="' . esc_url( $dir . 'favicon-32x32.png' ) . '" />' . "\n";
	echo '<link rel="icon" type="image/png" sizes="192x192" href="' . esc_url( $dir . 'favicon-192x192.png' ) . '" />' . "\n";
	echo '<link rel="apple-touch-icon" sizes="180x180" href="' . esc_url( $dir . 'apple-touch-icon.png' ) . '" />' . "\n";
}
add_action( 'wp_head', 'opm_output_favicon', 2 );
add_action( 'admin_head', 'opm_output_favicon' );
add_action( 'login_head', 'opm_output_favicon' );

/* ---------------------------------------------------------
   Blog post images
   The WordPress importer cannot download the extension-less
   Unsplash featured images in onlinepromax-content-import.xml,
   so posts end up with no thumbnail. This helper falls back to:
   featured image → known image for the post slug → first image
   in the post content → an image matching the post category.
--------------------------------------------------------- */
function opm_get_post_image( $post_id = null, $size = 'large' ) {
	$post_id = $post_id ? $post_id : get_the_ID();

	$thumb = get_the_post_thumbnail_url( $post_id, $size );
	if ( $thumb ) return $thumb;

	$w = ( 'thumbnail' === $size ) ? 240 : ( ( 'medium' === $size ) ? 800 : 1200 );
	$unsplash = function( $id ) use ( $w ) {
		return 'https://images.unsplash.com/' . $id . '?w=' . $w . '&auto=format&fit=crop&q=80';
	};

	$by_slug = array(
		'ai-marketing-automation-2026'       => 'photo-1677756119517-756a188d2d94',
		'cloud-native-software-architecture' => 'photo-1555066931-4365d14bab8c',
		'generative-ai-content-creation'     => 'photo-1620641788421-7a1c342ea42e',
		'zero-party-data-privacy-marketing'  => 'photo-1531746790731-6c087fecd65a',
		'low-code-no-code-platforms'         => 'photo-1547658719-da2b51169166',
		'meta-ads-vs-google-ads-2025'        => 'photo-1665799871677-f1fd17338b43',
	);
	$slug = get_post_field( 'post_name', $post_id );
	if ( isset( $by_slug[ $slug ] ) ) return $unsplash( $by_slug[ $slug ] );

	$content = get_post_field( 'post_content', $post_id );
	if ( $content && preg_match( '/<img[^>]+src=["\']([^"\']+)["\']/i', $content, $m ) ) {
		return $m[1];
	}

	$by_cat = array(
		'digital-marketing'    => 'photo-1432888622747-4eb9a8efeb07',
		'software-development' => 'photo-1555066931-4365d14bab8c',
		'web-development'      => 'photo-1547658719-da2b51169166',
		'content-creation'     => 'photo-1620641788421-7a1c342ea42e',
		'graphic-design'       => 'photo-1713616147761-c126f8009c6f',
	);
	foreach ( get_the_category( $post_id ) as $cat ) {
		if ( isset( $by_cat[ $cat->slug ] ) ) return $unsplash( $by_cat[ $cat->slug ] );
	}

	return $unsplash( 'photo-1432888622747-4eb9a8efeb07' );
}

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
