<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
	/* Sidebar Widget */
    register_sidebar( array(
        'name' 			=> ('First Widget'),
        'id' 			=> 'first-widget',
        'description'   => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
        ));

	/* First Footer Widget */
	register_sidebar( array(
		'name'	 		=> ('First Footer Widget'),
		'id' 	 		=> 'footer-one',
		'description'	=> 'Left widget in the footer',
		'before_widget' => '<div class="widget-footer widget-left">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
		));

	/* Second Footer Widget */
	register_sidebar( array(
		'name'	 		=> ('Second Footer Widget'),
		'id' 	 		=> 'footer-two',
		'description'	=> 'Middle widget in the footer',
		'before_widget' => '<div class="widget-footer widget-middle">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
		));


	/* Third Footer Widget */
	register_sidebar( array(
		'name'	 		=> ('Third Footer Widget'),
		'id' 	 		=> 'footer-three',
		'description'	=> 'Right widget in the footer',
		'before_widget' => '<div class="widget-footer widget-right">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
		));

    }
add_action('widgets_init', 'blank_widgets_init');



/*-------------- Enable Menu --------------- */

add_theme_support('menus');

/*------------ Enable Multiple Menus -----------*/

function register_my_menus() {
  register_nav_menus(
    array(
    	'global-menu' => __( 'Global Menu' ),
    	'top-menu' => __( 'Top Menu' )
    	'footer-menu1' => __( 'Footer Menu 1' ),
    	'footer-menu2' => __( 'Footer Menu 2' ),
    	'footer-menu3' => __( 'Footer Menu 3' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


/*--- Enable Post Thumbnails ---*/

add_theme_support( 'post-thumbnails' );


/*----- Custom Banner Thumbnail (index.php) -----*/
