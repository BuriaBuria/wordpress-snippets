<?php
/**
* @snippet WooCommerce Change Number of Related Products
*/

add_filter( 'woocommerce_output_related_products_args', 'buria_change_number_related_products', 100 );

function buria_change_number_related_products( $args ) {
    $args['posts_per_page'] = 12; // # of related products
    $args['columns'] = 4; // # of columns per row
    return $args;
}
