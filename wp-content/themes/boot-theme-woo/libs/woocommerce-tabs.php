<?php

add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );

function woo_rename_tabs( $tabs ) {

	global $product;
	
	if( $product->has_attributes() || $product->has_dimensions() || $product->has_weight() ) { // Check if product has attributes, dimensions or weight
		$tabs['additional_information']['title'] = __( 'Product Data' );	// Rename the additional information tab
	}
 
	return $tabs;
 
}

add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
function woo_new_product_tab( $tabs ) {
	
	// Adds the new tab
	
	$tabs['test_tab'] = array(
		'title' 	=> __( 'Additional Information', 'woocommerce' ),
		'priority' 	=> 50,
		'callback' 	=> 'woo_new_product_tab_content'
	);

	return $tabs;

}
function woo_new_product_tab_content() {

	// The new tab content

	$post_id = get_the_id();

	echo '<h2>Additional Product Information</h2>';
	echo '<p>We can add metboxes that can feed content to this tab. Use libs/metaboxes.php set them up to the Product post type.</p>';

	echo 'This is the Excerpt for this Product: '.get_the_excerpt();
	echo '<br><br>';
	echo 'Country of Origin: '.get_post_meta( $post_id, 'product_country', true );
	
}


?>