<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<div id="wrapper-navbar">
	<div class="container">
	<nav id="footer-nav" class="navbar navbar-expand-md navbar-dark" aria-labelledby="footer-nav-label">
	
				<!-- The WordPress Menu goes here -->
				<?php
          wp_nav_menu(
            array(
              'theme_location'  => 'footer',
              'container_class' => 'collapse navbar-collapse',
              'container_id'    => 'footernavbarNavDropdown',
              'menu_class'      => 'navbar-nav ml-auto',
              'fallback_cb'     => '',
              'menu_id'         => 'footer-menu',
              'depth'           => 1,
              'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
            )
          );
					?>
		</nav>
	</div>
</div>
<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info center">

						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

