<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tyche
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <!-- Google Tag Manager https://tagmanager.google.com/ GRM 3/11/18 -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-538BHWZ');</script>

  <!-- End Google Tag Manager -->

    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-538BHWZ"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="site">
	<?php
	/**
	 * Enable / Disable the top bar
	 */
	if ( get_theme_mod( 'tyche_enable_top_bar', true ) ) :
		get_template_part( 'template-parts/top-header' );
	endif;
	?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding container">
			<div class="row">
				<div class="col-sm-12 d-flex header-logo">

                    <?php
                    /**
                     * Custom Theme Logo
                     * Added from the Theme Options page
                     */

                    $alt = get_post_meta( '12783', '_wp_attachment_image_alt', true );

                    $tlj_logo = get_field( 'tlj_logo', 'option' );
                    $logo = wp_get_attachment_image( $tlj_logo, 'full', false, $attr = array('class' => 'img-fluid ', 'alt' => $alt ));

                      ?>

                        <?php if ( $tlj_logo ) { ?>
                            <a class="site-title" href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>">

                            <?php

                            echo $logo;
                            } ?>

                                </a>

				</div>

                <!-- Remove theme_mod 'tyche_show_banner' Ad area
                TODO: Remove from Customizer area or add note -->

			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-12 no-gutter">
						<?php
						wp_nav_menu(
							array(
								'menu'           => 'primary',
								'theme_location' => 'primary',
								'depth'          => 10,
								'container'      => '',
								'menu_id'        => 'desktop-menu',
								'menu_class'     => 'sf-menu',
								'fallback_cb'    => 'Tyche_Navwalker::fallback',
								'walker'         => new Tyche_Navwalker(),
							)
						);
						?>
						<!-- /// Mobile Menu Trigger //////// Using Menu plugin instead -->
<!--						<a href="#" id="mobile-menu-trigger"> <i class="fa fa-bars"></i> </a>-->

					</div>
				</div>
			</div>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<?php
	/**
	 * Enable / Disable the main slider
	 */
	$show_on_front = get_option( 'show_on_front' );
	if ( get_theme_mod( 'tyche_enable_main_slider', true ) && is_front_page() && 'posts' !== $show_on_front ) :
		get_template_part( 'template-parts/main-slider' );
	endif;
	?>
  <!-- G Translate Plugin -->
  <div class="container">
    <div class="row">
      <div class="col-xs-12 d-flex justify-content-end">
        <?php //echo do_shortcode('[gtranslate]'); ?>
      </div>
    </div>
  </div>

	<div class="site-content">
