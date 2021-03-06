<?php

//Set post type to product in query argument
$args = array( 'post_type' => 'product' );
$args = array_merge( $args, $wp_query->query );
query_posts( $args ); 
?>

<!-- Product search form element -->
<form role="search" method="get" class="woocommerce-product-search" action="/" data-children-count="1">
	<label class="screen-reader-text" for="woocommerce-product-search-field-1">Search for:</label>
	<input type="search" id="woocommerce-product-search-field-1" class="search-field" placeholder="Search products…" value="" name="s">
	<input type="submit" id="search_submit" class="search-submit" value="<?php echo esc_attr_x( 'Search Product', 'submit button' ) ?>" />
	<!-- Create an hidden input, set name to post_type and value to product (Woocommerce product slug) -->
    <input type="hidden" name="post_type" value="product">
</form>	