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


// STEP-20
// __ I remove SEARCH (remove_filter) from the header and add SEARCH as a widget after the title in the theme SETTINGS. __
// __ Убираю из шапки ПОИСК (remove_filter) и добавляю ПОИСК как виджет после заголовка в НАСТРОЙКАХ

// __ I do the wrapper as it is a child theme and its FUNCTION is executed first. __
// __ Делаю обертку так как это дочерняя тема и ее FUNCTION выполняется первым __
add_action( 'after_setup_theme', 'basic_child_theme_setup', 1 );
function basic_child_theme_setup () {
    remove_filter( 'storefront_header', 'storefront_product_search', 40 );
}

