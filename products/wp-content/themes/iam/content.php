<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
	?>

	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content(
				sprintf(
					__( 'Continue reading %s', 'twentyfifteen' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				)
			);

			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
		?>
	</div><!-- .entry-content -->

	<?php
		// Author bio.
	if ( is_single() && get_the_author_meta( 'description' ) ) :
		get_template_part( 'author-bio' );
		endif;
	?>

	<footer class="entry-footer">
		<?php
		if (is_single()) {
			// twentyfifteen_entry_meta();
			echo '<span class="posted-on"><span>Posted on </span><a href="'.get_permalink().'">'.get_the_date('F j, Y')."</a></span>\n";

			if ('post' == get_post_type()) {
        if (is_singular() || is_multi_author()) {
          printf( '<span class="byline"><span class="author vcard"><span class="screen-reader-text">%1$s </span><a class="url fn n" href="%2$s">%3$s</a></span></span>', _x('Author', 'Used before post author name.', 'twentyfifteen'), esc_url(get_author_posts_url(get_the_author_meta('ID'))), get_the_author());
        }

        $categories_list = get_the_category_list(_x(', ', 'Used between list items, there is a space after the comma.', 'twentyfifteen')); 
        if ($categories_list && twentyfifteen_categorized_blog()) { 
          printf('<span class="cat-links"><span class="screen-reader-text">%1$s </span>%2$s</span>', _x( 'Categories', 'Used before category names.', 'twentyfifteen'), $categories_list); 
        }
 
        $tags_list = get_the_tag_list('', _x(', ', 'Used between list items, there is a space after the comma.', 'twentyfifteen')); 
        if ($tags_list) { 
          printf('<span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span>', _x('Tags', 'Used before tag names.', 'twentyfifteen'), $tags_list); 
        }
      }
		} else {
			echo '<span class="posted-on"><span>Posted on </span><a href="'.get_permalink().'">'.get_the_date('F j, Y')."</a></span>\n";
		}
		?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
