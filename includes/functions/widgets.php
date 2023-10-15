<?php

function woofusition_sidebar_widgets() {
	

	//Footer Widgets 
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'conskip' ),
		'id'            => 'footer_1',
		'before_widget' => '<div class="footer-info  footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );


}

add_action( 'widgets_init', 'woofusition_sidebar_widgets' );