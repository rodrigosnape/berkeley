<?php


// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

//add_filter( 'wp_default_editor',  'rv_editor_padrao_tinymce');

/**
 * Add automatic image sizes
 */
if ( function_exists( 'add_image_size' ) ) {
//	add_image_size( 'post-feature-img', 770, 120, true ); //(cropped)
//	add_image_size( 'member-img', 200, 200, false ); //(scaled)
//	add_image_size( 'people-img', 360, 360, true ); //(cropped)
	add_image_size( 'parceiros-logo', 150, 120, false ); //(scaled)
}

//Carregar menu boostrap
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

// Carregando nossos scripts e folhas de estilos jquery.flexslider-min.js
function rv_carregar_scripts(){
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );

	wp_enqueue_script( 'jquery.flip.min.js', get_template_directory_uri() . '/js/jquery.flip.min.js', array( 'jquery' ), '1.1.1', true );

	wp_enqueue_script( 'tweenmax-js', get_template_directory_uri() . '/js/TweenMax.min.js', array( 'jquery' ), '2.0.2', true );
	wp_enqueue_script( 'draggable-js', get_template_directory_uri() . '/js/Draggable.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array( 'jquery' ), '2.7.2', true );

	wp_enqueue_script( 'jquery-mask-js', get_template_directory_uri() . '/js/jquery.mask.js', array( 'jquery' ), '1.14.15', true );

	wp_enqueue_script( 'splittext-js', get_template_directory_uri() . '/js/SplitText.min.js', array( 'jquery' ), '2.0.2', true );
	wp_enqueue_script( 'scrollmagic-js', get_template_directory_uri() . '/js/ScrollMagic.min.js', array( 'jquery' ), '2.0.6', true );
	wp_enqueue_script( 'scrollmagic-gsap-js', get_template_directory_uri() . '/js/animation.gsap.min.js', array(), '2.0.6', true );
	wp_enqueue_script( 'addindicators-js', get_template_directory_uri() . '/js/debug.addIndicators.min.js', array(),'2.0.6', true );
	wp_enqueue_script( 'template-js', get_template_directory_uri() . '/js/template.js', array( 'jquery'), '1.0.0', true );

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all' );
	wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/css/flexslider.css', array(), '2.7.2', 'all' );
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'celular', get_template_directory_uri() . '/css/celular.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'rv_carregar_scripts' );

function rv_configurar(){
	// Registrando nossos menus
	register_nav_menus(
		array(
			'main_menu' => 'Menu Principal',
			'rodape_menu' => 'Menu do Rodapé'
		)
	);
}
add_action( 'after_setup_theme', 'rv_configurar', 0 );
