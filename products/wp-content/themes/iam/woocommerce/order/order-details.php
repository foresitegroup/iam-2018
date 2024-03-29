<?php
/**
 * Order details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 7.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! $order = wc_get_order( $order_id ) ) {
	return;
}

$order_items = $order->get_items( apply_filters( 'woocommerce_purchase_order_item_types', 'line_item' ) );
//$show_purchase_note    = $order->has_status( apply_filters( 'woocommerce_purchase_note_order_statuses', array( 'completed', 'processing' ) ) );
//$show_customer_details = is_user_logged_in() && $order->get_user_id() === get_current_user_id();
?>
<h2 style="margin: 0.1em 0;"><?php _e( 'ORDER DETAILS', 'woocommerce' ); ?></h2>
<table class="shop_table order_details" cellspacing="0">
	<thead>
		<tr class="table-header">
			<th class="product-name"><?php _e( 'ITEM NAME', 'woocommerce' ); ?></th>
			<th class="product-total"><?php _e( 'TOTAL', 'woocommerce' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ( $order_items as $item_id => $item ) {
				$product = apply_filters( 'woocommerce_order_item_product', $item->get_product(), $item );

				wc_get_template( 'order/order-details-item.php', array(
					'order'			     => $order,
					'item_id'		     => $item_id,
					'item'			     => $item,
					//'show_purchase_note' => $show_purchase_note,
					//'purchase_note'	     => $product ? $product->get_purchase_note() : '',
					'product'	         => $product,
				) );
			}
		?>
		<?php do_action( 'woocommerce_order_items_table', $order ); ?>
	</tbody>
	<tfoot>
		<?php
			foreach ( $order->get_order_item_totals() as $key => $total ) {
				if ($total['label'] != "Payment Method:") {
				?>
				<tr>
					<th scope="row"><?php echo $total['label']; ?></th>
					<td><?php echo $total['value']; ?></td>
				</tr>
				<?php
			  }
			}
		?>
	</tfoot>
</table>

<?php do_action( 'woocommerce_order_details_after_order_table', $order ); ?>

<?php //if ( $show_customer_details ) : ?>
	<?php wc_get_template( 'order/order-details-customer.php', array( 'order' =>  $order ) ); ?>
<?php //endif; ?>
