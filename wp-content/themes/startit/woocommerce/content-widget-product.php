<?php
/**
 * The template for displaying product widget entries.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product; 

if ( ! is_a( $product, 'WC_Product' ) ) {
	return;
}

?>
<li>
   	<div class="qodef-product-list-widget-image-wrapper">
		<a href="<?php echo esc_url( $product->get_permalink() ); ?>">
			<?php echo wp_kses($product->get_image(), array(
				'img' => array(
					'src' => true,
					'width' => true,
					'height' => true,
					'class' => true,
					'alt' => true,
					'title' => true,
					'id' => true
				)
			)); ?>
			<span class="product-title"><?php echo esc_html($product->get_name()); ?></span>
		</a>

		<?php if ( ! empty( $show_rating ) ) : ?>
			<?php echo wc_get_rating_html( $product->get_average_rating() ); ?>
		<?php endif; ?>

		<?php echo esc_html($product->get_price_html()); ?>

		<?php do_action( 'woocommerce_widget_product_item_end', $args ); ?>
	</div>
	<div class="qodef-product-list-widget-info-wrapper">
		<a href="<?php echo esc_url( $product->get_permalink() ); ?>" title="<?php echo esc_attr( $product->get_name() ); ?>">
			<span class="qodef-product-title"><?php print esc_attr($product->get_name()); ?></span>
		</a>
		<?php echo wp_kses_post($product->get_price_html()); ?>
	</div>
</li>