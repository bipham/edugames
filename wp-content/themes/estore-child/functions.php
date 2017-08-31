<?php
/**
 * Created by PhpStorm.
 * User: nobikun1412
 * Date: 19-Apr-17
 * Time: 21:31
 */
/**
 * ThemeGrill Starter functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ThemeGrill
 * @subpackage eStore
 * @since eStore 1.1.9
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

function my_site_WI_dequeue_script() {
    wp_dequeue_script( 'bxslider' ); //If you're using disqus, etc.
}

add_action( 'wp_print_scripts', 'my_site_WI_dequeue_script', 100 );

function load_styles() {
    wp_enqueue_script('tether-js', get_stylesheet_directory_uri() . '/libs/tether/tether.min.js', array('jquery'), false, true);
    // Enqueue the script
//    wp_enqueue_script( 'bxslider', get_template_directory_uri().'/js/jquery.bxslider' . $suffix . '.js', array('jquery'), false, true );
    wp_enqueue_script('jquery-js', get_stylesheet_directory_uri() . '/libs/jquery/jquery.min.js', array('jquery'), false, true);
    // Enqueue the script
    wp_enqueue_script('bx-slider-js', get_stylesheet_directory_uri() . '/libs/bxslider/jquery.bxslider.js', array('jquery'), false, true);
    // Enqueue the script
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/libs/bootstrap/js/bootstrap.min.js', array('jquery'), false, true);
    // Enqueue the style
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css');
    // Enqueue the style
    wp_enqueue_style('bx-slider-css', get_stylesheet_directory_uri() . '/libs/bxslider/jquery.bxslider.min.css');
    // Enqueue the script
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/public/js/custom.js', array('jquery'), false, true);
}
add_action( 'wp_enqueue_scripts', 'load_styles' );

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme Footer Web Settings',
        'menu_title'	=> 'Tùy chỉnh footer',
        'menu_slug' 	=> 'theme-general-settings'
    ));
}