<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'market-store' ); ?></a>

<div class="row">
	<div class="container">
		<div class="col-12">
			<?php
				wp_nav_menu(array(
					'theme_location'  => 'third',
					'container'       => 'div',
					'container_id'    => 'top-nav',
					'container_class' => 'justify-content-end',
					'menu_id'         => false,
					'menu_class'      => 'navbar-nav',
					'depth'           => 1,
					'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
					'walker'          => new wp_bootstrap_navwalker()
				));
			?>
		</div>
	</div>
</div>
<div class="header-top container" id="headerTop">
	<div class="row align-items-center justify-content-between">

		<div class="navbar-brand col">
			<?php if ( get_theme_mod( 'header_logo' ) ): ?>
				<a href="<?php echo esc_url( home_url( '/' )); ?>">
					<img src="<?php echo esc_url(get_theme_mod( 'header_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="img-fluid">
				</a>
				<?php else : ?>
					<a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
					<?php endif; ?>
				</div>
				<nav class="navbar col-auto" id="commerce-nav">
					<?php

						if( $current_user = wp_get_current_user() ) {
							echo $current_user->display_name;
							
							wp_nav_menu(array(
								'theme_location'  => 'primary',
								'container'       => 'div',
								'container_class' => 'justify-content-end',
								'menu_id'         => false,
								'menu_class'      => 'navbar-nav',
								'depth'           => 2,
								'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
								'walker'          => new wp_bootstrap_navwalker()
							));
							
						}
							?>

					<a class="cart-customlocation xoo-wsc-cart-trigger" href="#<?php /*echo wc_get_cart_url();*/ ?>" title="<?php _e( 'Ver carrito' ); ?>">
						<i class="lnricons-bag2"></i>
						<span class="cart__quantity-badge"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span>
						<?php echo WC()->cart->get_cart_total(); ?>
					</a>
				</nav>
				
			</div>
		</div>
	</div>
</div>

<div id="wrapper">

	<header id="masthead" class="site-header navbar-static-top ohm_bg-primary m-0" role="banner">
		<div class="container py-3 py-lg-0">
			<div class="row align-items-center">
				<div class="col-2">
					<a class="hamburger is-active d-lg-none" data-bs-toggle="collapse" href="#collapseCategory" role="button" aria-expanded="true" aria-controls="collapseCategory">
						<div class="_layer -top"></div>
						<div class="_layer -mid"></div>
						<div class="_layer -bottom"></div>
					</a>
				</div>
				<div class="col-10 d-lg-none">
						<?php echo do_shortcode('[aws_search_form]'); ?>
				</div>
			</div>
			<div class="row align-items-center justify-content-between menu-categories_wraper">
				<div class="col-12 col-lg-8 p-lg-0 menu-categories order-2 order-lg-0">
					<nav class="navbar navbar-expand-lg row g-0 p-0">
						<div class="menu-categories_title">
							<span><?php _e( "Categorías", "wp-bootstrap-starter"); ?></span>
							<a class="" data-bs-toggle="collapse" href="#collapseCategory" role="button" aria-expanded="true" aria-controls="collapseCategory">
								<i class="lnricons-chevron-down"></i>
							</a>
						</div>
						<div class="collapse pt-3 pt-lg-0 <?php if(is_front_page()) { echo 'show'; }; ?>" id="collapseCategory">
							<?php
								wp_nav_menu(array(
										'theme_location'  => 'secondary',
										'container'       => 'div',
										'container_id'    => 'main-nav',
										'menu_id'         => false,
										'menu_class'      => 'navbar-nav',
										'depth'           => 0,
										'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
										'walker'          => new wp_bootstrap_navwalker()
								));
							?>
						</div>	
					</nav>
				</div>
				<div class="col-12 col-lg-4 pe-lg-0 my-3 my-lg-0 d-none d-lg-block">
						<?php echo do_shortcode('[aws_search_form]'); ?>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<main id="main" class="container"<?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 100px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
		<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if ( is_single() || is_archive() ) :
		?>
			<div class="row">
				<div class="col-12">
		<?php
			endif;
		?>
