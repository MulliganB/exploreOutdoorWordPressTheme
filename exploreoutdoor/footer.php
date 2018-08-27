<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package exploreOutdoor
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer">
		<div id="footer-sidebar" class="secondary row">
			<div id="footer-sidebar1 col-4">
				<?php
				if(is_active_sidebar('footer-sidebar-1')){
				dynamic_sidebar('footer-sidebar-1');
				}
				?>
			</div>
			<div id="footer-sidebar2 col-4">
				<?php
				if(is_active_sidebar('footer-sidebar-2')){
				dynamic_sidebar('footer-sidebar-2');
				}
				?>
			</div>
			<div id="footer-sidebar3 col-4">
				<?php
				if(is_active_sidebar('footer-sidebar-3')){
				dynamic_sidebar('footer-sidebar-3');
				}
				?>
			</div>
		</div>
		<div class="site-info row">
			<div class="col-8">
				<a>Disclaimer | Privacy Policy | Data Protection Policy</a>
			</div>
			<div class="col-4">
				<a>Copyright 2018. exploreOutdoor ltd.</a>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
