<?php
	add_action('after_setup_theme','radix_theme_setup');
	function radix_theme_setup(){
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		register_nav_menus(array(
			'main_menu'   => 'Main Menu',
		));


		register_post_type('industries',array(
			'labels'   => array(
				'name'   => 'Industries',
				'add_new' => 'Add New Industries',
				'add_new_item' => 'Add New Industries',
			),
			'public' => true,
			'menu_icon' => 'dashicons-image-filter',
			'supports'   => array('title')
		));
		register_post_type('team',array(
			'labels'   => array(
				'name'   => 'Team',
				'add_new'=> 'Add New Team Member',
				'add_new_item'=> 'Add New Team Member',
			),
			'public'   => true,
			'menu_icon'=> 'dashicons-admin-users',
			'supports' => array('title'),
		));
		register_post_type('tech',array(
			'labels'   => array(
				'name'   => 'Tech',
				'add_new'=> 'Add New stack',
				'add_new_item'=> 'Add New stack',
				''
			),
			'public'   => true,
			'menu_icon'=> 'dashicons-image-filter',
			'supports' => array('title'),
		));
		register_taxonomy('stack','tech',array(
			'labels'   => array(
				'name'   => 'Stack',
				'add_new'=> 'Add New Stack',
				'add_item_item'=> 'Add New Stack',
				'parent_item' => 'Parent Stack',
			),
			'public'   => true,
			'hierarchical' => true,
		));
		register_post_type('events',array(
			'labels'   => array(
				'name'   => 'Events',
				'add_new'=> 'Add New Events',
				'add_new_item'=> 'Add New Events'
			),
			'public'   => true,
			'menu_icon'=> 'dashicons-image-filter',
			'supports' => array('title'),
		));
		register_taxonomy('year','events',array(
			'labels'   => array(
				'name'   => 'Year',
				'add_new'=> 'Add New Year',
				'add_item_item'=> 'Add New Year',
				'parent_item' => 'Parent Year',
			),
			'public'   => true,
			'hierarchical' => true,
		));
	}

	add_action('widgets_init','radix_widget');
	function radix_widget(){
		register_sidebar(array(
			'name'   => 'Footer_widget 1',
			'id'     => 'footer_widget_1'
		));

		register_sidebar(array(
			'name'   => 'Footer_widget 2',
			'id'     => 'footer_widget_2'
		));

		register_sidebar(array(
			'name'   => 'Footer_widget 3',
			'id'     => 'footer_widget_3'
		));

		register_sidebar(array(
			'name'   => 'Footer_widget 4',
			'id'     => 'footer_widget_4'
		));

		register_sidebar(array(
			'name'   => 'Footer_widget 5',
			'id'     => 'footer_widget_5'
		));
	}

	add_action('wp_enqueue_scripts','css_js_script');
	function css_js_script(){
		wp_register_style('normalize',get_template_directory_uri().'/assets/css/normalize.css');
		wp_register_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
		wp_register_style('font-awesome',get_template_directory_uri().'/assets/css/font-awesome.min.css');
		wp_register_style('font-awesome2','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
		wp_register_style('Montserrat','https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,900|Roboto:300,400,500,700,900&display=swap');
		wp_register_style('main',get_template_directory_uri().'/assets/css/style.css');
		wp_register_style('responsive',get_template_directory_uri().'/assets/css/responsive.css');
		wp_register_style('style',get_stylesheet_uri());


		wp_enqueue_style('normalize');
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('font-awesome');
		wp_enqueue_style('font-awesome');
		wp_enqueue_style('Montserrat');
		wp_enqueue_style('main');
		wp_enqueue_style('responsive');
		wp_enqueue_style('style');


		wp_register_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js',array(jquery));
		wp_register_script('popper',get_template_directory_uri().'/assets/js/popper.js',array(jquery));
		wp_register_script('scrollIt',get_template_directory_uri().'/assets/js/scrollIt.min.js',array(jquery));
		wp_register_script('map','https://maps.googleapis.com/maps/api/js?key=AIzaSyD6BT-qXMiStdRg2lcwRzW-GK_YfS2NixU&callback=initMap');
		wp_register_script('jquery-ui',get_template_directory_uri().'/assets/js/jquery-ui.min.js',array(jquery));
		wp_register_script('magnific-popup',get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js',array(jquery));
		wp_register_script('custom',get_template_directory_uri().'/assets/js/custom.js',array(jquery));


		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrap');
		wp_enqueue_script('poppe');
		wp_enqueue_script('scrollIt');
		wp_enqueue_script('map');
		wp_enqueue_script('jquery-ui');
		wp_enqueue_script('magnific-popup');
		wp_enqueue_script('custom');
	}


	/*********** redux include ************/
	 require_once('inc/redux/ReduxCore/framework.php');
	 require_once('inc/redux/sample/config.php');

	/*********** cmb2 include ************/
	 require_once('inc/cmb2/init.php');
	 require_once('inc/cmb2/functions.php');


	/*********** shortcode include ************/
	 require_once('shortcode/main.php');
