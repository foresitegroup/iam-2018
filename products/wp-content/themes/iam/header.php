<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

$TopDir = substr( home_url(), 0, strrpos( home_url(), '/')+1);

$PageTitle = "Products";
if (is_page() || is_single()) $PageTitle = strip_tags(get_the_title());

if (is_front_page()) {
  $PageTitle = "Products";
  $Description = "Investment Account Manager has three software products that you can purchase: Investment Account Manager Individual, IAM Individual support renewal, and IAM professional support renewal.";
  $Keywords = "Shop, products, support";
}

if (is_home()) {
  $PageTitle = "Blog";
  $Description = "Investment Account Manager posts blogs that help you better understand how to manage your money.";
  $Keywords = "Blog, posts, articles, money management";
}

include "../header.php";
?>