<?php

//function artsychild_enqueue_parent_style() {
//
//	wp_enqueue_style( 'artsy_style', get_template_directory_uri() . '/framework/css/main.min.css' );
//
//}
//
//add_action( 'wp_enqueue_scripts', 'artsychild_enqueue_parent_style', 11 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', PHP_INT_MAX);

function theme_enqueue_styles() {
	// parent stylesheet
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	// child stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
}

/* *
 * Get rid of tags on posts.
 * */
function artsychild_unregister_cat() {
	unregister_taxonomy_for_object_type( 'category', 'post' );
}
add_action( 'init', 'artsychild_unregister_cat' );

/* ==========================================================================
  WooCommerce
=========================================================================== */

/* *
 * add zoom && lightbox && slider TO single product gallery
 * */
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

/* *
 * move short description to before buy button
 * */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 45 );

/* *
 * remove aditional info tab
 * */
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {
	
	unset( $tabs['additional_information'] );    // Remove the additional information tab
	
	return $tabs;
}

/* *
 *  Adding optional Tabs and Metaboxes to single products
 * */

## ---- 1. Backend ---- ##

// Adding a custom Meta container to admin products pages
add_action( 'add_meta_boxes', 'create_custom_meta_box' );
if ( ! function_exists( 'create_custom_meta_box' ) )
{
    function create_custom_meta_box()
    {
        add_meta_box(
            'custom_product_meta_box',
            __( 'Steeping & Storage <em>(optional)</em>', 'cmb' ),
            'add_custom_content_meta_box',
            'product',
            'normal',
            'default'
        );
    }
}

//  Custom metabox content in admin product pages
if ( ! function_exists( 'add_custom_content_meta_box' ) ){
    function add_custom_content_meta_box( $post ){
        $prefix = '_bhww_'; // global $prefix;

        $ingredients = get_post_meta($post->ID, $prefix.'steeping_wysiwyg', true) ? get_post_meta($post->ID, $prefix.'steeping_wysiwyg', true) : '';
        $benefits = get_post_meta($post->ID, $prefix.'storage_wysiwyg', true) ? get_post_meta($post->ID, $prefix.'storage_wysiwyg', true) : '';
        $args['textarea_rows'] = 6;

        echo '<p>'.__( 'Steeping Tips', 'cmb' ).'</p>';
        wp_editor( $ingredients, 'steeping_wysiwyg', $args );

        echo '<p>'.__( 'Storage Tips', 'cmb' ).'</p>';
        wp_editor( $benefits, 'benefits_wysiwyg', $args );

        echo '<input type="hidden" name="custom_product_field_nonce" value="' . wp_create_nonce() . '">';
    }
}



//Save the data of the Meta field
add_action( 'save_post', 'save_custom_content_meta_box', 10, 1 );
if ( ! function_exists( 'save_custom_content_meta_box' ) )
{

    function save_custom_content_meta_box( $post_id ) {
        $prefix = '_bhww_'; // global $prefix;

        // We need to verify this with the proper authorization (security stuff).

        // Check if our nonce is set.
        if ( ! isset( $_POST[ 'custom_product_field_nonce' ] ) ) {
            return $post_id;
        }
        $nonce = $_REQUEST[ 'custom_product_field_nonce' ];

        //Verify that the nonce is valid.
        if ( ! wp_verify_nonce( $nonce ) ) {
            return $post_id;
        }

        // If this is an autosave, our form has not been submitted, so we don't want to do anything.
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return $post_id;
        }

        // Check the user's permissions.
        if ( 'product' == $_POST[ 'post_type' ] ){
            if ( ! current_user_can( 'edit_product', $post_id ) )
                return $post_id;
        } else {
            if ( ! current_user_can( 'edit_post', $post_id ) )
                return $post_id;
        }

        // Sanitize user input and update the meta field in the database.
        update_post_meta( $post_id, $prefix.'steeping_wysiwyg', wp_kses_post($_POST[ 'steeping_wysiwyg' ]) );
        update_post_meta( $post_id, $prefix.'storage_wysiwyg', wp_kses_post($_POST[ 'storage_wysiwyg' ]) );
    }
}

## ---- 2. Front-end ---- ##

// Create custom tabs in product single pages
add_filter( 'woocommerce_product_tabs', 'custom_product_tabs' );
function custom_product_tabs( $tabs ) {
    global $post;

    $product_ingredients = get_post_meta( $post->ID, '_bhww_steeping_wysiwyg', true );
    $product_benefits    = get_post_meta( $post->ID, '_bhww_storage_wysiwyg', true );

    if ( ! empty( $product_ingredients ) )
        $tabs['steeping_tab'] = array(
            'title'    => __( 'Steeping Tips', 'woocommerce' ),
            'priority' => 45,
            'callback' => 'steeping_product_tab_content'
        );

    if ( ! empty( $product_benefits ) )
        $tabs['benefits_tab'] = array(
            'title'    => __( 'Storage Tips', 'woocommerce' ),
            'priority' => 50,
            'callback' => 'storage_product_tab_content'
        );

    return $tabs;
}

// Add content to custom tab in product single pages (1)
function steeping_product_tab_content() {
    global $post;

    $product_ingredients = get_post_meta( $post->ID, '_bhww_steeping_wysiwyg', true );

    if ( ! empty( $product_ingredients ) ) {
        echo '<h2>' . __( 'Some Ways to Steep this Tea', 'woocommerce' ) . '</h2>';

        // Updated to apply the_content filter to WYSIWYG content
        echo apply_filters( 'the_content', $product_ingredients );
    }
}

// Add content to custom tab in product single pages (2)
function storage_product_tab_content() {
    global $post;

    $product_benefits = get_post_meta( $post->ID, '_bhww_storage_wysiwyg', true );

    if ( ! empty( $product_benefits ) ) {
        echo '<h2>' . __( 'Some Tips on Storing this Tea', 'woocommerce' ) . '</h2>';

        // Updated to apply the_content filter to WYSIWYG content
        echo apply_filters( 'the_content', $product_benefits );
    }
}

/**
 * Remove related products output
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

/**
 *  Show Categories without products
 */
 add_filter( 'woocommerce_product_subcategories_hide_empty', '__return_false' );

