<?php
function mytheme_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    register_nav_menus(["Header"=>"Header Menu"]);

}
add_action( 'after_setup_theme', 'mytheme_setup' );
?>