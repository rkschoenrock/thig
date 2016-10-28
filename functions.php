<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
	/* Image Slider */
    register_sidebar( array(
        'name' 			=> ('Slider Widget'),
        'id' 			=> 'slider-widget',
        'description'   => 'Slider plugin goes in here',
        'before_widget' => '<div class="widget-slider">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
        ));

	/* Product Slider */
		register_sidebar( array(
				'name' 			=> ('Products Widget'),
				'id' 			=> 'products-widget',
				'description'   => 'Products slider goes in here',
				'before_widget' => '<div class="widget-products">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>'
				));

	/* Intro Widget */
    register_sidebar( array(
        'name' 			=> ('Intro Widget'),
        'id' 			=> 'intro-widget',
        'description'   => 'Introduction of your page',
        'before_widget' => '<div class="widget-intro">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
        ));

	/* File Claim Widget */
    register_sidebar( array(
        'name' 			=> ('Claim1 Widget'),
        'id' 			=> 'claim-widget1',
        'description'   => 'How to file a claim 1',
        'before_widget' => '<div class="widget-claim1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
        ));
		register_sidebar( array(
        'name' 			=> ('Claim2 Widget'),
        'id' 			=> 'claim-widget2',
        'description'   => 'How to file a claim2',
        'before_widget' => '<div class="widget-claim2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
        ));
		register_sidebar( array(
        'name' 			=> ('Claim3 Widget'),
        'id' 			=> 'claim-widget3',
        'description'   => 'How to file a claim3',
        'before_widget' => '<div class="widget-claim3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
        ));

	/* Agent Widget */
	register_sidebar( array(
		'name'	 		=> ('Agent Widget'),
		'id' 	 		=> 'agent-widget',
		'description'	=> 'Agent widget',
		'before_widget' => '<div class="widget-agent">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
		));

	/* Latest News Widget */
	register_sidebar( array(
		'name'	 		=> ('News Widget'),
		'id' 	 		=> 'news-widget',
		'description'	=> 'Latest News widget',
		'before_widget' => '<div class="widget-news">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
		));


	/* Subscribe Widget */
	register_sidebar( array(
		'name'	 		=> ('Subscribe Widget'),
		'id' 	 		=> 'subscribe-widget',
		'description'	=> 'Suscribe widget',
		'before_widget' => '<div class="widget-subscribe">',
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
    	'top-menu' => __( 'Top Menu' ),
    	'footer1-menu' => __( 'Footer Menu 1' ),
    	'footer2-menu' => __( 'Footer Menu 2' ),
    	'footer3-menu' => __( 'Footer Menu 3' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


/*--- Enable Post Thumbnails ---*/

add_theme_support( 'post-thumbnails' );


/*----- Custom Banner Thumbnail (index.php) -----*/
