<?php

function my_theme_init(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('img_thumb',400,200,true);
	register_nav_menus(array(
		'header_menu' => 'Main Menu',
		'footer_menu' => 'Footer Menu'

		));
}


function my_widgets(){

	register_sidebar(array(
		'name'=>'first',
		'id'=>'1st_wid'

		));
	register_sidebar(array(
		'name'=>'Second',
		'id'=>'2nd_wid'

		));


}
add_action('widgets_init','my_widgets');

add_theme_support('html5');


add_action('after_setup_theme','my_theme_init');

function my_custom_posts(){

	register_post_type('my_product',array(

		'labels'=>array(
			'name'=>'My Products',
			'menu_name'=>'My products',
			'all_items'=>'All products',
			'add_new'=>'Add new product'
			),
			'public'=>true,
			'supports'=>array(
				'title','editor','thumbnail','revisions','custom-fields','page-attributes'
				)
		));




	register_post_type('my_service',array(

		'labels'=>array(
			'name'=>'My Service',
			'menu_name'=>'My Service',
			'all_items'=>'All Service',
			'add_new'=>'Add new Service'
			),
			'public'=>true,
			'supports'=>array(
				'title','editor','thumbnail','revisions','custom-fields','page-attributes'
				)
		));
}
 add_action('init','my_custom_posts');

function my_css_js(){
	wp_enqueue_style('my-test-style',get_template_directory_uri().'/css/test.css',null,'v1.0','all');
	wp_enqueue_style('main-style',get_stylesheet_uri(),array('my-test-style'),'v3.25','all');

	wp_enqueue_script('my-test-js',get_template_directory_uri().'/js/script.js',array('jequery'),'v2.00',true);
	wp_enqueue_script('jequery');
}
add_action('wp_enqueue_scripts','my_css_js');