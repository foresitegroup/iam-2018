<?php
/**
 * Thankyou page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version   3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

echo "<article style=\"padding-top: 2em;\">";

if ( $order ) : ?>

	<?php if ( $order->has_status( 'failed' ) ) : ?>

		<p><?php _e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction.', 'woocommerce' ); ?></p>

		<p><?php
			if ( is_user_logged_in() )
				_e( 'Please attempt your purchase again or go to your account page.', 'woocommerce' );
			else
				_e( 'Please attempt your purchase again.', 'woocommerce' );
		?></p>

		<p>
			<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php _e( 'Pay', 'woocommerce' ) ?></a>
			<?php if ( is_user_logged_in() ) : ?>
			<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php _e( 'My Account', 'woocommerce' ); ?></a>
			<?php endif; ?>
		</p>

	<?php else : ?>

		<h2 style="text-transform: uppercase;"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Your order has been received.', 'woocommerce' ), $order ); ?></h2>
    
    <div class="iamuid">
			<?php
			$items = $order->get_items();
			$array_pid = array();
			foreach ( $items as $item ) {
				$array_pid[] = $item['product_id'];
			}

			$UID = preg_replace('/[^0-9]/', '', get_post_meta( $order->id, 'IAM_User_ID', true ));

			if (($UID != "") && ($UID[0] == "3") && (strlen($UID) == "10")) {
				$TopDir = ($_SERVER['DOCUMENT_ROOT'] != dirname(__FILE__)) ? "http://" . $_SERVER['HTTP_HOST'] . "/" : "";
				if ($_SERVER['SERVER_NAME'] == "localhost") { $parts = explode("/", $_SERVER['REQUEST_URI']); $TopDir .= $parts[1] . "/"; }

				// IAM Pro
				if (in_array(12, $array_pid)) echo "Thank you for ordering Investment Account Manager Professional. You will receive your software activation code within 24 hours.  If you have any questions or concerns about your order, please <a href=\"" . $TopDir . "/contact-us.php\">contact us</a>.<br>";
				// IAM Pro Renewal
				if (in_array(17, $array_pid)) echo "Thank you for renewing your Investment Account Manager Professional Support Policy. You will receive your support renewal code within 24 hours.  If you have any questions or concerns about your order, please <a href=\"" . $TopDir . "/contact-us.php\">contact us</a>.<br>";
			} elseif (($UID != "") && ($UID[0] == "2") && (strlen($UID) == "10")) {
				require_once( trailingslashit( get_stylesheet_directory() ) . 'woocommerce/activation-code-sub.php' );
			  $ActCodeArray = GetActCodes($UID);

		    // IAM
		    if (in_array(8, $array_pid)) echo "Thank you for ordering Investment Account Manager. In the opening form after starting IAM, click on the \"software activation key\" button, and then enter this code:<br>Software Activation: <strong>" . $ActCodeArray[0] . "</strong><br>";
		    // IAM with QuoteMedia
				if (in_array(10, $array_pid)) echo "Thank you for ordering Investment Account Manager. In the opening form after starting IAM, click on the \"software activation key\" button, and then enter these codes:<br>Software Activation: <strong>" . $ActCodeArray[0] . "</strong><br>QuoteMedia Code: <strong>" . $ActCodeArray[1] . "</strong><br>";
				// Support Renewal
				if (in_array(14, $array_pid)) echo "Thank you for renewing your Investment Account Manager Support Policy. After starting IAM, please select the Help Menu | Product Support and enter the following renewal code:<br>Tech Support Activation Code: <strong>" . $ActCodeArray[2] . "</strong><br>";
				// Support Renewal with QuoteMedia
				if (in_array(16, $array_pid)) echo "Thank you for renewing your Investment Account Manager Support Policy, along with the QuoteMedia&trade; data feed. After starting IAM, please select the Help Menu | Product Support and enter the following renewal codes:<br>Tech Support Activation Code: <strong>" . $ActCodeArray[2] . "</strong><br>QuoteMedia Code: <strong>" . $ActCodeArray[3] . "</strong><br>";
			} else {
		    echo "Sorry, you did not provide a proper User Identification Number so we could not give you your activation code at this time. Please contact customer service to get your code.<br>";
		  }
			?>
		</div>

	  <div>
			<div class="two-col" style="font-weight: bold; text-transform: uppercase;">
				ORDER NUMBER: <?php echo $order->get_order_number(); ?>
				<?php if ( $order->payment_method_title ) : ?>
				  <br>
					<?php _e( 'Payment Method:', 'woocommerce' ); ?>
					<?php echo wp_kses_post($order->get_payment_method_title()); ?>
				</li>
				<?php endif; ?>
			</div>
			<div class="two-col" style="font-weight: bold; text-transform: uppercase; text-align: right;">
				<?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?>
			</div>
			<div style="clear: both;"></div>
		</div>

	<?php endif; ?>

	<?php do_action( 'woocommerce_thankyou', $order->get_id ); ?>

<?php else : ?>

	<p><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), null ); ?></p>

<?php endif; ?>
  
  <br>
	<div style="text-align: center;">
		<a href="mailto:?subject=Investment Account Manager&body=%0AHello, I thought you might find this investment software useful.%0Ahttps://www.investmentaccountmanager.com">Refer a Friend</a>
	</div>

</article>

<div class="darkgray store-title">
  <article>
    <h1>YOUR TRUSTED PARTNER SINCE 1985.</h1>
  </article>
</div>