<?php


if ( site_url() == "http://localhost/test/" ) {
	define( "VERSION", time() );
} else {
	define( "VERSION", wp_get_theme()->get( "Version" ) );
}


if ( ! function_exists( 'woo_fusion_scripts' ) ) {

	function woo_fusion_scripts() {
		

		// Styles
		wp_enqueue_style('woofusion-fontawesome', get_theme_file_uri('/assets/css/all.min.css'),null,VERSION);
		wp_enqueue_style('woofusion-aos', get_theme_file_uri('/assets/css/aos.css'),null,VERSION);
		wp_enqueue_style('woofusion-bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css'),null,VERSION);
		wp_enqueue_style('woofusion-bootstrap-map', get_theme_file_uri('/assets/css/bootstrap.min.css.map'),null,VERSION);
		wp_enqueue_style('woofusion-main', get_theme_file_uri('/assets/css/style.css'),null,VERSION);
		wp_enqueue_style('woofusion-responsive', get_theme_file_uri('/assets/css/responsive.css'),null,VERSION);
		wp_enqueue_style('woofusion-stylesheet',  get_stylesheet_uri(),null,VERSION);

		// Scripts
		wp_enqueue_script('woofusion-bootstrap', get_theme_file_uri('/assets/js/bootstrap.bundle.min.js'),array('jquery'),VERSION,true);
		wp_enqueue_script('woofusion-aos-js', get_theme_file_uri('/assets/js/aos.js'),array('jquery'),VERSION,true);
		wp_enqueue_script('woofusion-scrollUp', get_theme_file_uri('/assets/js/jquery.scrollUp.min.js'),array('jquery'),VERSION,true);
		wp_enqueue_script('woofusion-mixitup', get_theme_file_uri('/assets/js/mixitup.min.js'),null,VERSION,true);
		wp_enqueue_script('woofusion-main', get_theme_file_uri('/assets/js/customs.js'),array('jquery'),VERSION,true);
		wp_enqueue_script('woofusion-main', get_theme_file_uri('/assets/js/plugins.js'),array('jquery'),VERSION,true);
		

	}
} 

add_action( 'wp_enqueue_scripts', 'woo_fusion_scripts' );