<?php 
function ecom_theme_support(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('slide-img',1500,500,true);
	register_nav_menus(array(

		 'primary_menu'=>'Primary Menu'  


		));
}

add_action('after_setup_theme','ecom_theme_support');

function ecom_css_js(){
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.min.css');
	wp_enqueue_style('prettyPhoto',get_template_directory_uri().'/css/prettyPhoto.css');
	wp_enqueue_style('price',get_template_directory_uri().'/css/price-range.css');
	wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.css');
	wp_enqueue_style('main',get_template_directory_uri().'/css/main.css');
	wp_enqueue_style('responsive',get_template_directory_uri().'/css/responsive.css');
	wp_enqueue_style('protfolio-main-style',get_stylesheet_uri());

	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery.js');
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js','jquery',null,true);
	wp_enqueue_script('scrollUp',get_template_directory_uri().'/js/jquery.scrollUp.min.js','jquery',null,true);
	wp_enqueue_script('price-range',get_template_directory_uri().'/js/price-range.js','jquery',null,true);
	wp_enqueue_script('prettyPhoto',get_template_directory_uri().'/js/jquery.prettyPhoto.js','jquery',null,true);
	wp_enqueue_script('main',get_template_directory_uri().'/js/main.js','jquery',null,true);

	
}

add_action('wp_enqueue_scripts','ecom_css_js');


	function office_master_fallback_menu(){ ?>

								<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="#" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="#">Products</a></li>
										<li><a href="#">Product Details</a></li> 
										<li><a href="#">Checkout</a></li> 
										<li><a href="#">Cart</a></li> 
										<li><a href="#">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="#">Blog List</a></li>
										<li><a href="#">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="#">404</a></li>
								<li><a href="#">Contact</a></li>
							</ul>



	<?php }

	function ecom_custom_post(){

			register_post_type('slider',array(

		'labels'=>array(
			'name'=>'Main Slider',
			'menu_name'=>'Slider Menu',
			'all_items'=>'All Sliders',
			'add_new'=>'Add New Slider',
			'add_new_item'=>'Add new slider item'

			),
			'public'=>true,
			'supports'=>array(
				'title','thumbnail','revisions','custom-fields','page-attributes'
				)
		));	

			register_post_type('product',array(

		'labels'=>array(
			'name'=>'product Slider',
			'menu_name'=>'product Menu',
			'all_items'=>'All product',
			'add_new'=>'Add New product',
			'add_new_item'=>'Add new product item'

			),
			'public'=>true,
			'supports'=>array(
				'title','thumbnail','revisions','custom-fields','page-attributes'
				)
		));

	}

	add_action('init','ecom_custom_post');

	include_once('inc/cmb2-custom-field.php'); 