<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tyche
 */
?>
</div><!-- #content -->

<?php get_template_part('template-parts/top-footer'); ?>

<?php get_sidebar( 'footer' ); ?>

<?php
$enable_copyright = get_theme_mod( 'tyche_enable_copyright', true );
?>
<?php if ( $enable_copyright ) : ?>
	<!-- Copyright -->
	<footer class="site-copyright">
		<div class="site-info ">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php
						if ( has_nav_menu( 'social' ) ) {

							wp_nav_menu(
								array(
									'theme_location'  => 'social',
									'container'       => 'div',
									'container_id'    => 'menu-social',
									'container_class' => 'menu pull-left',
									'menu_id'         => 'menu-social-items',
									'menu_class'      => 'menu-items',
									'depth'           => 1,
									'link_before'     => '<span class="screen-reader-text">',
									'link_after'      => '</span>',
									'fallback_cb'     => '',
								)
							);
						}
						?>

						<div class="copyright-text pull-right">
              <?php echo 'Copyright'; ?> &copy; <?php echo date("Y"); ?><?php echo '. Tight Lines Jewelry'; ?>
              <?php

              //							Removed Customize Menu interface;

							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- / Copyright -->
<?php endif; ?>
</div><!-- #page -->


<a href="javascript:" class="return" style="display: inline;"><i class="fa fa-chevron-up"></i></a>


<?php wp_footer(); ?>

</body></html>
