<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Alien Ship
 * @since Alien Ship 0.1
 */
?>

	</div><!-- #content -->
	<?php do_action( 'alienship_content_after' );

	// Footer widgets
	alienship_do_sidebar( 'footer' ); ?>

</div><!-- #page -->

<?php do_action( 'alienship_footer_before' ); ?>
<footer class="site-footer" id="colophon" role="contentinfo">
	<?php do_action( 'alienship_footer_top' ); ?>

	<div class="container">
		<div class="row">

			<div class="bottom-navigation col-sm-6 col-sm-push-6">
				<?php if ( has_nav_menu( 'bottom' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'bottom',
						'container'      => false,
						'menu_class'     => 'footer-nav mobile'
						)
					);
				} ?>
			</div><!-- .bottom-navigation -->
			<div class="footer-text col-sm-6 col-sm-pull-6">
				<?php if ( of_get_option('alienship_custom_footer_toggle') ) {
					echo '' . of_get_option('alienship_custom_footer_text') . '';
				} else {
					// add profile link
				    $current_user = wp_get_current_user();
				    echo '<a href="/members/' . $current_user->user_login . '/profile/edit/"> My Account</a>';
					echo ' | &copy; ' . date('Y') . ' ' . get_bloginfo('name'); } 
					?>

				<?php 
				// If the current user can manage options(ie. an admin)
				if( current_user_can( 'manage_options' ) ) 
				    // Print the saved global 
				    printf( '<div><strong>Current template:</strong> %s</div>', get_current_template() ); 
				?>

			</div><!-- .footer-text -->

		</div><!-- .row -->
	</div><!-- .container -->

	<?php do_action( 'alienship_footer_bottom' ); ?>

</footer><!-- #colophon -->
<?php
do_action( 'alienship_footer_after' );

wp_footer();

do_action( 'alienship_footer' ); ?>

</body>
</html>