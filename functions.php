<?php 

//allow redirection, even if my theme starts to send output to the browser; fix header output error
add_action('init', 'do_output_buffer');
function do_output_buffer() {
        ob_start();
}


// add menus
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );




// remove add to cart button in shop page
function remove_loop_button(){
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
}
add_action('init','remove_loop_button');


add_filter( 'woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);
function sb_woo_remove_reviews_tab($tabs) {

 unset($tabs['reviews']);

 return $tabs;
}




//show 12 products per page
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 24;' ), 12 );





// move price in products page 
remove_action( 'woocommerce_single_product_summary', 
               'woocommerce_template_single_price', 10 );
    add_action( 'woocommerce_single_product_summary', 
            'woocommerce_template_single_price', 21 );




// remove sale tag
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );





//hide related products
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);




//hide admin bar
add_filter('show_admin_bar', '__return_false');





// Change the description tab title to product name
add_filter( 'woocommerce_product_tabs', 'wc_change_product_description_tab_title', 10, 1 );
function wc_change_product_description_tab_title( $tabs ) {
  global $post;
	if ( isset( $tabs['description']['title'] ) )
		$tabs['description']['title'] = $post->post_title;
	return $tabs;
}
 




// Change the description tab heading to product name
add_filter( 'woocommerce_product_description_heading', 'wc_change_product_description_tab_heading', 10, 1 );
function wc_change_product_description_tab_heading( $title ) {
	global $post;
	return $post->post_title;
}




// Modify the default WooCommerce orderby dropdown
//
// Options: menu_order, popularity, rating, date, price, price-desc
function my_woocommerce_catalog_orderby( $orderby ) {
    unset($orderby["rating"]);
    return $orderby;
}
add_filter( "woocommerce_catalog_orderby", "my_woocommerce_catalog_orderby", 20 );








// yarpp thumbnail size
add_image_size('yarpp-thumbnail', 100, 100, true);





//remove extra coupon in checkout page
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );







// Woocommerce New Customer Admin Notification Email
add_action('woocommerce_created_customer', 'admin_email_on_registration');
function admin_email_on_registration() {
    $user_id = get_current_user_id();
    wp_new_user_notification( $user_id );
}


// exclude workshops from shop page 
add_action( 'pre_get_posts', 'custom_pre_get_posts_query' );
 
function custom_pre_get_posts_query( $q ) {
 
	if ( ! $q->is_main_query() ) return;
	if ( ! $q->is_post_type_archive() ) return;
	
	if ( ! is_admin() && is_shop() ) {
 
		$q->set( 'tax_query', array(array(
			'taxonomy' => 'product_cat',
			'field' => 'slug',
			'terms' => array( 'Workshops' ),
			'operator' => 'NOT IN'
		)));
	
	}
 
	remove_action( 'pre_get_posts', 'custom_pre_get_posts_query' );
 
}




//turn off default woocommerce styling
add_filter( 'woocommerce_enqueue_styles', '__return_false' );




?>
