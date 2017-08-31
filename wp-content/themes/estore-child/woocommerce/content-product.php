<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $product, $post;
$size = 'full';
if ( has_post_thumbnail() ) {
    $image_id = get_post_thumbnail_id($post->ID);
    $image_url = wp_get_attachment_image_src($image_id, $size, false);
}
//var_dump($product->get_id());
//Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}
?>
<div class="card col-xxs-12 col-xs-6 col-sm-4 col-md-4 product-item">
    <div class="card-top-thumbnail store-item-inner">
        <a class="img-middle-custom" href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>" alt="<?php the_title(); ?>"><img class="img-vertical-center img-responsive img-product-custom" src="<?php echo ( has_post_thumbnail() ) ? esc_url( $image_url[0] ) : estore_woocommerce_placeholder_img_src(); ?>"></a>
        <?php if ( get_theme_mod( 'estore_woocommerce_product_thumb_mask', '' ) != 1) : ?>
            <div class="frame-hover-product w3-animate-top"><div class="button-area-product-item"><span class="btn favorite-product btn-for-product"><a href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></span><span class="btn zoom-product btn-for-product"><a href="<?php echo $image_url[0]; ?>" class="zoom" data-rel="prettyPhoto"><i class="fa fa-search-plus"> </i></a></span></div></div>
        <?php endif; ?>
    </div>
    <div class="card-block card-body-product"><span class="name-product"><a href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>"><h6 class="card-title title-product"><?php echo esc_html(get_the_title()); ?></h6></a></span></div>
</div>