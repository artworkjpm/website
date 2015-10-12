<?php
function wpt_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<p>',
		'after_title' => '</p>'
	));

}

wpt_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
wpt_create_widget( 'Search Sidebar', 'search', 'Displays on the sidebar-right' );


function custom_theme_setup() {
	add_theme_support( 'post-thumbnails');
}
add_action( 'after_setup_theme', 'custom_theme_setup' );


?>