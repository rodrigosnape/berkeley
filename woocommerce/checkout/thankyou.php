<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="woocommerce-order">

	<?php
	if ( $order ) :

		do_action( 'woocommerce_before_thankyou', $order->get_id() );


		?>

		<script type="text/javascript">
			var rv_sucesso = true;
		</script>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<script type="text/javascript">
				rv_sucesso = false;
			</script>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ); ?></a>
				<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>

			<p class="rv_nome_completo"><?php echo $nome_cliente = $order->get_formatted_billing_full_name();?></p>

			<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'woocommerce' ), $order ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>

			<ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">

				<li class="woocommerce-order-overview__order order">
					<?php esc_html_e( 'Order number:', 'woocommerce' ); ?>
					<div class="rv_numero_pedido"><strong><?php echo $order->get_order_number(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong></div>
				</li>

				<li class="woocommerce-order-overview__date date">
					<?php esc_html_e( 'Date:', 'woocommerce' ); ?>
					<div class=""><strong><?php echo wc_format_datetime( $order->get_date_created() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong></div>
<div class="rv_data_compra" style="display: none;"><?php echo $order->get_date_created()->format ('Y-m-d'); ?></div>
				</li>

				<?php //if ( is_user_logged_in() && $order->get_user_id() === get_current_user_id() && $order->get_billing_email() ) : ?>
				<?php if ( $order->get_billing_email() ) : ?>
					<li class="woocommerce-order-overview__email email">
						<?php esc_html_e( 'Email:', 'woocommerce' ); ?>
						<div class="rv_email"><strong><?php echo $order->get_billing_email(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong></div>
					</li>
				<?php endif; ?>

				<li class="woocommerce-order-overview__total total">
					<?php esc_html_e( 'Total:', 'woocommerce' ); ?>
					<strong><?php echo $order->get_formatted_order_total(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
				</li>

				<?php if ( $order->get_payment_method_title() ) : ?>
					<li class="woocommerce-order-overview__payment-method method">
						<?php esc_html_e( 'Payment method:', 'woocommerce' ); ?>
						<strong><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></strong>
					</li>
				<?php endif; ?>

			</ul>

		<?php endif; ?>

		<?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
		<?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>

	<?php else : ?>

		<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'woocommerce' ), null ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>

	<?php endif; ?>

</div>
<script type="text/javascript">
	jQuery(document).ready(function(){

		var rv_email = jQuery('.rv_email').text();

		var rv_nome = jQuery('.rv_nome_completo').text();

		var rv_data_compra = jQuery(".rv_data_compra").text();

		var rv_numero_pedido = jQuery(".rv_numero_pedido").text();

		var rv_produtos_lista = jQuery(".woocommerce-table__product-name.product-name a").map(function(){
			return this.innerText;
		})
		.get();
//		.join(",");

	var rv_teste = [];

/*
	rv_teste.push("bola");
	rv_teste.push("rede");
	rv_teste.push("carro");

	rv_teste.push({"name":"bola"});
	rv_teste.push({"name":"rede"});
	rv_teste.push({"name":"carro"});*/


	rv_teste = ["bola","rede", "carro"];


		console.log(rv_email);
		console.log(rv_nome);
		console.log(rv_numero_pedido);
		console.log(rv_data_compra);

		console.log(rv_produtos_lista);

			console.log(rv_teste);


		_dAutomationGtmAccess("dinamize.berkeley.com.br", "bgDOwJ8My0lWBg==",
		{
			"cmp1":rv_email,
			"cmp2":rv_nome,
			"cmp22":rv_produtos_lista,
			"cmp26":rv_data_compra,
			"cmp33":rv_numero_pedido,
			"cmpInsert": true

	 });
	});
</script>
