<?php
function woo_fusion_setup(){
    load_theme_textdomain( 'wc-fusion' );
     /** tag-title **/
    add_theme_support('title-tag');
    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
      /** post formats */
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);
    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );

 /** Register Nav Menu */
    register_nav_menus( array(
      'main-menu' => __( 'Main Menu', 'wc-fusion' ),
      'footer-one' => __( 'Footer One', 'wc-fusion' ),
      'footer-two' => __( 'Footer Two', 'wc-fusion' ),
      'footer-three' => __( 'Footer Three', 'wc-fusion' ),
  ) );

  add_image_size( "module-small", 320, 196,true );


}
add_action("after_setup_theme","woo_fusion_setup");