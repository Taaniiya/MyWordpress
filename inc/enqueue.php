<?php
 /**
 * Enqueue scripts and styles.
 */
function setto_scripts() {
	
	// Styles	
	wp_enqueue_style('bootstrap-min',get_template_directory_uri().'/assets/css/bootstrap.min.css');
	
	wp_enqueue_style('owl-carousel-min',get_template_directory_uri().'/assets/css/owl.carousel.min.css');
	
	wp_enqueue_style('owl-default-min',get_template_directory_uri().'/assets/css/owl.theme.default.min.css');
	
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/fonts/font-awesome/css/font-awesome.min.css');
	
	wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/animate.min.css');
	
	wp_enqueue_style('setto-editor-style',get_template_directory_uri().'/assets/css/editor-style.css');

	wp_enqueue_style('setto-skin-theme', get_template_directory_uri() . '/assets/css/skin-theme.css');

	wp_enqueue_style('swiper',get_template_directory_uri().'/assets/css/swiper.min.css');
	
	wp_enqueue_style('setto-theme-color',get_template_directory_uri().'/assets/css/theme-color.css');
	
	wp_enqueue_style('setto-main', get_template_directory_uri() . '/assets/css/main.css');
	
	wp_enqueue_style( 'setto-style', get_stylesheet_uri() );
	
	// Scripts
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), false, true);
	
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);

	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), false, true);
	
	wp_enqueue_script('setto-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), false, true);
	
	wp_enqueue_script('swiper-min', get_template_directory_uri() . '/assets/js/swiper.min.js', array('jquery'), false, true);
	
	wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), false, false, true);

	wp_enqueue_script('setto-custom-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'setto_scripts' );

//Admin Enqueue for Admin
function setto_admin_enqueue_scripts(){
	wp_enqueue_style('setto-admin-style', get_template_directory_uri() . '/inc/customizer/assets/css/admin.css');
	wp_enqueue_script( 'setto-admin-script', get_template_directory_uri() . '/inc/customizer/assets/js/setto-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'setto-admin-script', 'setto_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'setto_admin_enqueue_scripts' );