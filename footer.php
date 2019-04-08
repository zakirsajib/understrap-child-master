<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row">
				<div class="col-6 col-lg-3 col-xl-3">
					<ul>
						<li><h5>Menu 01</h5></li>
						<li><a href="#">Option 01</a></li>
						<li><a href="#">Option 02</a></li>
						<li><a href="#">Option 03</a></li>
					</ul>
				</div>
				<div class="col-6 col-lg-3 col-xl-3">
					<ul>
						<li><h5>Menu 01</h5></li>
						<li><a href="#">Option 01</a></li>
						<li><a href="#">Option 02</a></li>
						<li><a href="#">Option 03</a></li>
					</ul>
				</div>
				<div class="col-6 col-lg-3 col-xl-3">
					<ul>
						<li><h5>Menu 01</h5></li>
						<li><a href="#">Option 01</a></li>
						<li><a href="#">Option 02</a></li>
						<li><a href="#">Option 03</a></li>
					</ul>
				</div>
				<div class="col-6 col-lg-3 col-xl-3">
					<ul>
						<li><h5>Visit Our Store</h5></li>
						<li><a href="#">Test Drive</a></li>
						<li><a href="#">Testville</a></li>
						<li><a href="#">TE57 1NG</a></li>
					</ul>
				</div>	
		</div>
		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->
	</div><!-- container end -->
</div><!-- wrapper end -->	
<div class="social-footer">	
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row justify-content-center">
			<div class="align-items-center d-none d-sm-block d-md-block d-lg-block d-xl-block">
				<div class="d-flex">
					<div class="flex-fill"><a href="#" target="_blank"><i class="pt pt-facebook pt-lg"></i> Facebook</a></div>
					<div class="flex-fill"><a href="#" target="_blank"><i class="pt pt-instagram pt-lg"></i> Instagram</a></div>
					<div class="flex-fill"><a href="#" target="_blank"><i class="pt pt-twitter pt-lg"></i> Twitter</a></div>
					<div class="flex-fill"><a href="#" target="_blank"><i class="pt pt-envelope pt-lg"></i> Email</a></div>
				</div>
			</div>
			<div class="align-items-center d-block d-xl-none d-lg-none d-md-none">
				<div class="d-flex">
					<div class="flex-fill"><a href="#" target="_blank"><i class="pt pt-facebook pt-2x"></i></a></div>
					<div class="flex-fill"><a href="#" target="_blank"><i class="pt pt-instagram pt-2x"></i></a></div>
					<div class="flex-fill"><a href="#" target="_blank"><i class="pt pt-twitter pt-2x"></i></a></div>
					<div class="flex-fill"><a href="#" target="_blank"><i class="pt pt-envelope pt-2x"></i></a></div>
				</div>
			</div>
		</div>
	</div>
</div>	


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

