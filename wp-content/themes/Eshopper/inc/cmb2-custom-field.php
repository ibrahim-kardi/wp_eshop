<?php
/**
 * Get the bootstrap!
 */
if ( file_exists( __DIR__ . '/cmb2/init.php' ) ) {
  require_once __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once __DIR__ . '/CMB2/init.php';
}

add_action('cmb2_admin_init','ecom_cmb2');

function ecom_cmb2(){

		$prefix='_ecom_';

		$product_item = new_cmb2_box( array(
		'id'            => 'product_metabox',
		'title'         => __( 'product Metabox', 'ecom' ),
		'object_types'  => array( 'product'), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		
	) );

	$product_item->add_field( array(
		'name'       => __( 'Description', 'ecom' ),
		'desc'       => __( 'Write product details', 'ecom' ),
		'id'         => $prefix . 'product_discription',
		'type'       => 'textarea',
	
		
	) );


	$slider_item = new_cmb2_box( array(
		'id'            => 'slider_metabox',
		'title'         => __( 'slider Metabox', 'ecom' ),
		'object_types'  => array( 'slider'), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		
	) );
	$slider_item->add_field( array(
		'name'       => __( 'Slider caption', 'ecom' ),
		'desc'       => __( 'Write your slider caption', 'ecom' ),
		'id'         => $prefix . 'slider_caption',
		'type'       => 'text',
	
		
	) );
	// $client_item->add_field( array(
	// 	'name'       => __( 'client caption', 'client' ),
	// 	'desc'       => __( 'Write your slider caption', 'client' ),
	// 	'id'         => $prefix . 'client_caption',
	// 	'type'       => 'text',
	
		
	// ) );
}