<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function thenobility_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'thenobility' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'thenobility' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'thenobility_widgets_init' );



function footer_widget(){

	register_sidebar( array(
        'name' => __( 'Footer Widget', 'theme-slug' ),
        'id' => 'footer-1',
        'description' => __( '', 'theme-slug' ),
        'before_widget' => '<div class="top-left">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget_title">',
		'after_title'   => '</h4>',
	    ) );
		register_sidebar( array(
        'name' => __( 'Footer Widget 2', 'theme-slug' ),
        'id' => 'footer-2',
        'description' => __( '', 'theme-slug' ),
        'before_widget' => '<div class="footer-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget_title">',
		'after_title'   => '</h4>',
	    ) );
	    register_sidebar( array(
        'name' => __( 'Footer Widget 3', 'theme-slug' ),
        'id' => 'footer-3',
        'description' => __( '', 'theme-slug' ),
        'before_widget' => '<div class="top-right">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget_title">',
		'after_title'   => '</h4>',
	    ) );
	    register_sidebar( array(
        'name' => __( 'Footer Widget 4', 'theme-slug' ),
        'id' => 'footer-4',
        'description' => __( '', 'theme-slug' ),
        'before_widget' => '<div class="footer_widget_content para_default">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget_title">',
		'after_title'   => '</h4>',
	    ) );
}

add_action( 'widgets_init', 'footer_widget' );