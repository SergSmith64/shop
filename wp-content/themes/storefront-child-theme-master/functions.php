<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */


//  __ SS64 __ This hook removes ALL style markup ____
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

//  __ SS64 ____ Disable the display of product descriptions in categories ______
remove_filter( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
remove_filter( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10);

add_action ( 'woocommerce_after_main_content', 'woocommerce_taxonomy_archive_description', 15);
add_action ( 'woocommerce_after_main_content', 'woocommerce_product_archive_description', 15);
// function ss64_taxonomy_archive_description() {
//     woocommerce_taxonomy_archive_description();
// }

