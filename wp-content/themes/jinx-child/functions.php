<?php

/**
 * Child Theme Function
 *
 */

add_action( 'after_setup_theme', 'jinx_child_theme_setup' );
add_action( 'wp_enqueue_scripts', 'jinx_child_enqueue_styles', 100);

if( !function_exists('jinx_child_enqueue_styles') ) {
    function jinx_child_enqueue_styles() {
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style( 'jinx-child-style', get_stylesheet_directory_uri() . '/style.css', null, $version );
    }
}


if( !function_exists('jinx_child_theme_setup') ) {
    function jinx_child_theme_setup() {
        load_child_theme_textdomain( 'jinx-child', get_stylesheet_directory() . '/languages' );
    }
}


add_filter('wc_empty_cart_message', function (){
    return 'Your Cart Is empty';
});

add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);

function posts_columns($defaults){
    $defaults['lakit_post_thumbs'] = __('Thumbs');
    return $defaults;
}

function posts_custom_columns($column_name, $id){
    if($column_name === 'lakit_post_thumbs'){
        echo '<span>';
        the_post_thumbnail( 'featured-thumbnail' );
        echo '</span>';
    }
}

add_action('admin_head', function (){
    ?>
    <style>
			.lakit_post_thumbs img {
				width: 80px;
				height: auto;
			}
    </style>
    <?php
});


//add_action('after_setup_theme', function (){
//    if(wp_is_mobile()){
//        add_filter('show_admin_bar', '__return_false');
//    }
//});


add_action( 'woocommerce_before_shop_loop_item_title', function (){
    global $product;
    if( in_array( $product->get_id(), [ 418, 416 ] ) ){
        echo '<span class="la-custom-badge badge-hot"><span>hot</span></span>';
    }
}, -2000 );