<?php
/*
  Plugin Name: Viavi WP Testimonials
  Plugin URI: http://codecanyon.net/user/viaviwebtech/portfolio
  Description: Viavi WordPress Testimonials is a plugin that allows you to manage and display testimonials for your blog, product or service. 
  Author: viaviwebtech
  Author URI: http://viaviweb.com
  Version: 1.0
	License: GPLv2 or later
*/
  
 
if( ! current_theme_supports('post-thumbnails') )
  add_theme_support( 'post-thumbnails' );
add_image_size('tm-thumb', 100, 100, true);
require_once 'cpt.php';  

add_shortcode('WordPress_Testimonials', 'getTestimonials');
add_shortcode('Sliding_WordPress_Testimonials', 'slidingTestimonials');
function getTestimonials($atts){
   $defaults = array(
                      'view'    => 'list',
                      'style'   => 'one',
                      'columns' => 3,
                      'limit'   => '10',
                      'thumb'   => 'medium',
                      'post_id' => '',
                      'orderby' => 'date',
                      'order'   => 'DESC',
											'colors_theme'   => ''
                    );
                    
   extract( shortcode_atts($defaults,$atts) );
   // Fix for the WordPress 3.0 "paged" bug.
  $paged = 1;
  if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
  if ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
  $paged = intval( $paged );
   $args = array('post_type' => 'testimonial', 'posts_per_page' => $limit, 'orderby' => $orderby, 'order' => $order, 'paged' => $paged);
   if( $post_id != '') { $args['p'] = $post_id;}
   
   $tm = "";
   $WordPress_Testimonials = new WP_Query($args);
   if( $WordPress_Testimonials->have_posts() ):     
     if($view == 'list'){
      if($style == "one" ) include_once "view/list-one.php";
      if($style == "two" ) include_once "view/list-two.php";      
      if($style == "three" ) include_once "view/list-three.php";
     }
		 else
		 {
			 include_once "view/tp_table.php";
		 }
   endif;
   
   $tm .= tm_pagination($WordPress_Testimonials);
   wp_reset_query();
      
   return $tm;
}
function slidingTestimonials($atts){
   $defaults = array(
                      'view'    => 'list',
                      'style'   =>'one',
                      'columns' => 3,
                      'limit'   => '10',
                      'thumb'   => 'medium',
                      'post_id' => '',
                      'orderby' => 'date',
                      'order'   => 'DESC',
                      'autoslide' => true,
                      'animation' => 'fade',
                      'pauseOnHover' => false,
                      'directional_nav' => true,
                      'slideshowSpeed' => 7000,
                      'animationSpeed' => 600,
											'colors_theme'   => ''
                    );
                    
   extract( shortcode_atts($defaults,$atts) );
   $args = array('post_type' => 'testimonial', 'posts_per_page' => $limit, 'orderby' => $orderby, 'order' => $order);
   if( $post_id != '') { $args['p'] = $post_id;}
   
   $tm = "";
   $WordPress_Testimonials = new WP_Query($args);
   if( $WordPress_Testimonials->have_posts() ):
      if($style == "one" ) include_once "view/slider/slider-one.php";
			if($style == "two" ) include_once "view/slider/slider-two.php";
			if($style == "three" ) include_once "view/slider/slider-three.php";
			 
   endif;       
   wp_reset_postdata();   
   return $tm;     
}

add_action('admin_enqueue_scripts', 'WordPress_Testimonials_Admin_scripts');

function WordPress_Testimonials_Admin_scripts(){
  
	wp_enqueue_media();
	
	wp_enqueue_style('jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');	
	
	wp_enqueue_script('jquery-ui-tabs');
  
	wp_register_style( 'WordPress_Testimonials-Admin-css', plugins_url( 'css/WordPress_Testimonials_Admin.css', __FILE__ ), array(), '3.0', 'all' );
  wp_enqueue_style( 'WordPress_Testimonials-Admin-css' ); 
  
}

// Adding Testimonials CSS & JS file
add_action( 'wp_enqueue_scripts', 'WordPress_Testimonials_scripts' );

function WordPress_Testimonials_scripts(){
  
  wp_register_style( 'WordPress_Testimonials-css', plugins_url( 'css/WordPress_Testimonials.css', __FILE__ ), array(), '3.0', 'all' );
  wp_enqueue_style( 'WordPress_Testimonials-css' );	 
	 
  wp_register_style( 'flexslider-css', plugins_url( 'css/flexslider.css', __FILE__ ), array(), '3.0', 'all' );
  wp_enqueue_style( 'flexslider-css' );
  
  wp_enqueue_script( 'flexslider', plugins_url( 'js/jquery.flexslider-min.js', __FILE__ ), array( 'jquery' ), '20131205', true );   
  wp_enqueue_script( 'flexslider-manualDirectionControls', plugins_url( 'js/jquery.flexslider.manualDirectionControls.js', __FILE__ ), array( 'jquery' ), '20131205', true );
}

add_filter('widget_text', 'do_shortcode');

if ( ! function_exists( 'tm_pagination' ) ) {
	function tm_pagination( $query = '', $args = array()) {
		global $wp_rewrite, $wp_query;

		if ( $query ) {
			$wp_query = $query;
		} // End IF Statement
    
		/* If there's not more than one page, return nothing. */
		if ( 1 >= $wp_query->max_num_pages )
			return;

		/* Get the current page. */
		$current = ( get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1 );

		/* Get the max number of pages. */
		$max_num_pages = intval( $wp_query->max_num_pages );

		/* Set up some default arguments for the paginate_links() function. */
		$defaults = array(
			'base' => add_query_arg( 'paged', '%#%' ),
			'format' => '',
			'total' => $max_num_pages,
			'current' => $current,
			'prev_next' => true,
			'prev_text' => __( '&larr; Previous', 'tm' ), // Translate in WordPress. This is the default.
			'next_text' => __( 'Next &rarr;', 'tm' ), // Translate in WordPress. This is the default.
			'show_all' => false,
			'end_size' => 1,
			'mid_size' => 1,
			'add_fragment' => '',
			'type' => 'plain',
			'before' => '<div class="pagination tm-pagination">', // Begin tm_pagination() arguments.
			'after' => '</div>',
			'echo' => false, 
			'use_search_permastruct' => false
		);

		/* Allow themes/plugins to filter the default arguments. */
		$defaults = apply_filters( 'tm_pagination_args_defaults', $defaults );

		/* Add the $base argument to the array if the user is using permalinks. */
		if( $wp_rewrite->using_permalinks() && ! is_search() )
			$defaults['base'] = user_trailingslashit( trailingslashit( get_pagenum_link() ) . 'page/%#%' );

		/* Merge the arguments input with the defaults. */
		$args = wp_parse_args( $args, $defaults );

		/* Allow developers to overwrite the arguments with a filter. */
		$args = apply_filters( 'tm_pagination_args', $args );

		/* Don't allow the user to set this to an array. */
		if ( 'array' == $args['type'] )
			$args['type'] = 'plain';

		/* Make sure raw querystrings are displayed at the end of the URL, if using pretty permalinks. */
		$pattern = '/\?(.*?)\//i';

		preg_match( $pattern, $args['base'], $raw_querystring );

		if( $wp_rewrite->using_permalinks() && $raw_querystring )
			$raw_querystring[0] = str_replace( '', '', $raw_querystring[0] );
			@$args['base'] = str_replace( $raw_querystring[0], '', $args['base'] );
			@$args['base'] .= substr( $raw_querystring[0], 0, -1 );
		
		/* Get the paginated links. */
		$page_links = paginate_links( $args );

		/* Remove 'page/1' from the entire output since it's not needed. */
		$page_links = str_replace( array( '&#038;paged=1\'', '/page/1\'' ), '\'', $page_links );

		/* Wrap the paginated links with the $before and $after elements. */
		$page_links = $args['before'] . $page_links . $args['after'];

		/* Allow devs to completely overwrite the output. */
		$page_links = apply_filters( 'tm_pagination', $page_links );

		/* Return the paginated links for use in themes. */
		if ( $args['echo'] )
			echo $page_links;
		else
			return $page_links;
	} // End tm_pagination()
} // End IF Statement


//Add Menu
add_action('admin_menu', 'add_custom_post_menu');

function add_custom_post_menu(){
     add_submenu_page( 'edit.php?post_type=testimonial', 'Testimonial Help', 'Testimonial Help', 'manage_options','testimonial_help','viavi_testimonial_themes'); 
}

function viavi_testimonial_themes() {
	 
	 include("WordPress_Testimonials-Help.php");
}

 