<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tyche
 */
?>
<!-- removed 'post-' prefix on ID -->
<article id="<?php the_ID(); ?>" <?php post_class( 'tightlines-search-post' ); ?>>
	<header class="entry-header">
		<div class="tightlines-blog-meta">
			<?php search_meta(); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php //the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
