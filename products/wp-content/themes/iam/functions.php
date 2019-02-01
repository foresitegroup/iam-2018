<?php
function my_thumbnail_size() {
  set_post_thumbnail_size();
}
add_action('after_setup_theme', 'my_thumbnail_size', 11);


// Make "more" link go to top of page instead of anchor
function remove_more_link_scroll( $link ) {
  $link = preg_replace( '|#more-[0-9]+|', '', $link );
  return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );


// Wrap video embed code in DIV for responsive goodness
add_filter( 'embed_oembed_html', 'my_oembed_filter', 10, 4 ) ;
function my_oembed_filter($html, $url, $attr, $post_ID) {
  $return = '<div class="video">'.$html.'</div>';
  return $return;
}


///////////////
// WooCommerce
///////////////

// Index Page
remove_all_actions('woocommerce_archive_description');
remove_all_actions('woocommerce_before_shop_loop');

remove_all_actions('woocommerce_before_shop_loop_item');

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

add_action('woocommerce_before_shop_loop_item_title', 'iam_woocommerce_template_loop_product_thumbnail', 10);
function iam_woocommerce_template_loop_product_thumbnail() {
  echo '<article>
  <div class="shop-index-left">
    <a href="'.get_the_permalink().'"><img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" alt=""></a>
  </div>
  <div class="shop-index-right">
    <a href="'.get_the_permalink().'">';
}

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
add_action('woocommerce_after_shop_loop_item_title', 'iam_woocommerce_after_shop_loop_item_title', 5);
function iam_woocommerce_after_shop_loop_item_title() {
  echo "</a>\n";
  if (get_the_excerpt() != "") echo "<p>".get_the_excerpt()."</p>\n";
  echo '<a href="'.get_the_permalink().'" class="learnmore">Learn More</a>';
}

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

add_action('woocommerce_after_shop_loop_item', 'iam_woocommerce_after_shop_loop_item', 15);
function iam_woocommerce_after_shop_loop_item() {
  $note = get_post_meta(get_the_ID(), 'product_note', true);
  if ($note != "") echo '<div class="note">' . $note . "</div>\n";
  echo "</div>\n</article>\n";
}

add_action('woocommerce_after_main_content', 'iam_woocommerce_footer', 15);
function iam_woocommerce_footer() {
  echo '<div class="darkgray store-title">
  <article>
    <h1>YOUR TRUSTED PARTNER SINCE 1985.</h1>
  </article>
</div>';
}

remove_all_actions('woocommerce_sidebar');

// Single Product Page
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

add_action('woocommerce_before_single_product', 'iam_woocommerce_single_product_header', 5);
function iam_woocommerce_single_product_header() {
  echo '<div class="darkgray store-title mb">
  <article>
    <h1>IAM PRODUCTS</h1>
  </article>
</div>';
}

remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
add_action('woocommerce_before_single_product_summary', 'woocommerce_before_single_product_summary', 10);
function woocommerce_before_single_product_summary() {
  echo '<article>
  <div class="shop-index-left">
    <img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" alt="">
  </div>';
}

add_action('woocommerce_single_product_summary', 'iam_woocommerce_template_single_description', 9);
function iam_woocommerce_template_single_description() {
  the_content();
}

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

add_action('woocommerce_single_product_summary', 'iam_woocommerce_template_single_note', 35);
function iam_woocommerce_template_single_note() {
  $note = get_post_meta(get_the_ID(), 'product_note', true);
  if ($note != "") echo '<div class="note">' . $note . "</div>\n";
}

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
add_action('woocommerce_after_single_product_summary', 'iam_woocommerce_end_article', 50);
function iam_woocommerce_end_article() {
  echo "</article>\n";
}


// Cart
add_action('woocommerce_before_cart', 'iam_woocommerce_begin_article', 5);
function iam_woocommerce_begin_article() {
  echo '<article style="margin-top: 2em;">';
}

add_action('woocommerce_after_cart_table', 'iam_woocommerce_howdy', 5);
function iam_woocommerce_howdy() {
  echo 'HOWDY';
}

add_action('woocommerce_after_cart', 'iam_woocommerce_end_article', 50);

add_action('woocommerce_after_cart', 'iam_woocommerce_footer', 55);
?>