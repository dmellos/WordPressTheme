<?php

/*
			======================
   				Include Scripts
			======================
*/	
	function simplyorange_script_enqueue(){
		wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/simplyorange.css', array(), '1.0.0', 'all');
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0', 'all');
		wp_enqueue_script('customjs', get_template_directory_uri() . '/js/simplyorange.js', array(), '1.0.0', true);
		wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.0.0', true);
		wp_enqueue_script('jquery');
	}

	add_action('wp_enqueue_scripts', 'simplyorange_script_enqueue');

/*
			======================
   				Activate Menus
			======================
*/

	function simplyorange_theme_setup(){

		add_theme_support('menus');

		register_nav_menu('primary', 'Primary Header Navigation');
		register_nav_menu('secondary', 'Footer Bottom Navigation');
				
	}

	add_action('init', 'simplyorange_theme_setup');

/*
			============================
   				Theme Support Featues
			============================
*/

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside', 'image','video'));


/*
	==========================================
	 			Sidebar function
	==========================================
*/
function simplyorange_widget_setup() {
	
	register_sidebar(
		array(	
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '<hr></aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);

	register_sidebar( array(
	'name' => 'Middlebar 1',
	'id' => 'middlebar-1',
	'description' => 'Appears After slider',
	'before_widget' => '<aside id="%1$s" align="center" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
	'name' => 'Middlebar 2',
	'id' => 'middlebar-2',
	'description' => 'Appears After slider',
	'before_widget' => '<aside id="%1$s" align="center" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title"><center>',
	'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
	'name' => 'Middlebar 3',
	'id' => 'middlebar-3',
	'description' => 'Appears After slider',
	'before_widget' => '<aside id="%1$s" align="center" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title"><center>',
	'after_title' => '</h3>',
	) );

	
}
add_action('widgets_init','simplyorange_widget_setup');


function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

	
/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div>
    <input type="text" class="form-control" placeholder="Search" value="' . get_search_query() . '" name="s" id="s"/>
    
    </div>
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );



