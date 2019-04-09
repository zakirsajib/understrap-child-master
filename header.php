<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark bg-primary d-none d-md-block">

		<?php if ( 'container' == $container ) : ?>
			<div class="container-fluid">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->
				
				<div class="d-flex flex-column">	
					<form role="search" id="searchform" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<div class="input-group">
		<label class="sr-only" for="woocommerce-product-search-field-0">Search for:</label>
		<input type="search" id="woocommerce-product-search-field-0" class="search-field field form-control" placeholder="Search products…" value="" name="s">
		<input type="hidden" name="post_type" value="product">
		<span class="input-group-append">
			<button class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
		</span>
	</div>
</form>
					
									
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>"><span class="navbar-toggler-icon"></span>
					</button>
					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
				</div>
				<div class="d-flex flex-column">
					<div class="free-delivery d-md-none d-lg-block">
						<h4>Free next day delivery</h4>
						<p>For all orders over £45 placed before 12:00pm</p>
					</div>
					<div class="woo-btn align-items-center">
						<div class="d-flex">
							<div class="flex-fill"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account',''); ?>"><i class="pt pt-user-circle-o pt-lg"></i> My Account</a></div>
							<div class="flex-fill"><a class="basket-icon" href="<?php echo wc_get_cart_url(); ?>"><i class="pt pt-shopping-bag pt-lg"></i> Basket</a>
<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( '%d', WC()->cart->get_cart_contents_count() ); ?> </a></div>
						</div>
					</div>
				</div>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->
		
		<nav class="navbar navbar-expand-md navbar-dark bg-primary d-block d-sm-block d-md-none mobile">

		<?php if ( 'container' == $container ) : ?>
			<div class="container-fluid">
		<?php endif; ?>
					
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>"><span class="navbar-toggler-icon"></span>
					</button>
					
					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->
					<div class="woo-btn align-items-center">
						<div class="d-flex">
							<div class="flex-fill"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account',''); ?>"><i class="pt pt-user-circle-o pt-2x"></i></a></div>
							<div class="flex-fill"><a class="basket-icon" href="<?php echo wc_get_cart_url(); ?>"><i class="pt pt-shopping-bag pt-2x"></i></a>
<a class="cart-contents align-top" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( '%d', WC()->cart->get_cart_contents_count() ); ?> </a></div>
						</div>
					</div>
					<form role="search" id="searchform" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<div class="input-group">
		<label class="sr-only" for="woocommerce-product-search-field-0">Search for:</label>
		<input type="search" id="woocommerce-product-search-field-0" class="search-field field form-control" placeholder="Search products…" value="" name="s">
		<input type="hidden" name="post_type" value="product">
		<span class="input-group-append">
			<button class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
		</span>
	</div>
</form>
				<?php if ( 'container' == $container ) : ?>
					</div><!-- .container -->
				<?php endif; ?>
					<div class="free-delivery">
						<?php if ( 'container' == $container ) : ?>
							<div class="container-fluid">
						<?php endif; ?>
						<div class="text-center">
							<span class="free-msg">Free next day delivery</span> 
							<span class="del-msg">for all orders over £45 placed before 12:00pm</span> 
						</div>
						<?php if ( 'container' == $container ) : ?>
							</div><!-- .container -->
						<?php endif; ?>
					</div>				
				
			

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
