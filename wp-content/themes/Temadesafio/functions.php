<?php 
if (function_exists('register_nav_menus')) {
	register_nav_menus (array('superior' => 'Menú principal superior'));
}


if ( function_exists( ' add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );

}



?>