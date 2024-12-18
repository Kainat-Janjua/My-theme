<?php 
/**
 * Proper way to enqueue scripts and styles
 */
 function Mytheme_enqueue_styles(): void{
    //Enqueue main stylesheet
    wp_enqueue_style(handle: 'Mytheme-style' , src: get_stylesheet_uri());
 }
 add_action(hook_name: 'wp_enqueue_scripts', callback: 'Mytheme_enqueue_styles');

 if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
	
	function mytheme_register_nav_menu(){
		}
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'Mytheme' ),
	    	'footer_menu'  => __( 'Footer Menu', 'Mytheme' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
function load_theme_supports(): void{
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
}
add_action('wp_enqueue_theme','load_theme_supports');
function my_custom_post_type() {
    register_post_type('my_custom_post', array(
        'labels' => array(
            'name' => __('My Custom Posts'),
            'singular_name' => __('My Custom Post')
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'Relox-Datejust'), // Add 'thumbnail' here
    ));
}
add_action('init', 'my_custom_post_type'); ?>  

<?php function enqueue_swiper() {
    // Enqueue Swiper CSS
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    
    // Enqueue Swiper JS
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper'); ?>