<?php
function the_title_trim($title) {
	$title = attribute_escape($title);
	$findthese = array(
		'#Protected:#',
	);
	$replacewith = array(
		'', 
	);
	$title = preg_replace($findthese, $replacewith, $title);
	return $title;
}
add_filter('the_title', 'the_title_trim');

/*-----------------------------------------------------------------------------------*/
/*	Register Sidebars
/*-----------------------------------------------------------------------------------*/

if ( !function_exists( 'zilla_sidebars_init' ) ) {

    function zilla_sidebars_init() {
		register_sidebar(array(
    		'name' => __('Main Sidebar', 'zilla'),
    		'description' => __('Widget area for blog pages.', 'zilla'),
    		'id' => 'sidebar-main',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget' => '</div>',
    		'before_title' => '<h3 class="widget-title">',
    		'after_title' => '</h3>',
    	));
    	
    	register_sidebar(array(
    		'name' => __('Page Sidebar', 'zilla'),
    		'description' => __('Widget area for pages.', 'zilla'),
    		'id' => 'sidebar-page',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget' => '</div>',
    		'before_title' => '<h3 class="widget-title">',
    		'after_title' => '</h3>',
    	));
    	
    	register_sidebars(3, array(
     	   'name' => __('Footer Column %d', 'zilla'),
     	   'id' => "footer-column",
     	   'before_widget' => '<div id="%1$s" class="widget %2$s">',
     	   'after_widget' => '</div>',
     	   'before_title' => '<h3 class="widget-title">',
     	   'after_title' => '</h3>'
    	));
    	register_sidebar(array(
		'name'=> 'Main Sidebar 2',
		'id' => 'home_sidebar',
		'before_widget' => '<div id="home-sidebar" class="sidebar-section">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name'=> 'Post Sidebar 2',
		'id' => 'post_sidebar',
		'before_widget' => '<div id="post-sidebar" class="sidebar-section">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name'=> 'Page Sidebar 2',
		'id' => 'page_sidebar',
		'before_widget' => '<div id="page-sidebar" class="sidebar-section">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	
	}
	
}
add_action( 'widgets_init', 'zilla_sidebars_init' );
