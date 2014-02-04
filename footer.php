<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sweet Sassafras
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			&copy; 
			<a href="<?php bloginfo ('site_url'); ?>"><?php bloginfo ('site_name'); ?></a>, all rights reserved.
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'sweet-sassafras' ), 'Sweet Sassafras', '<a href="http://liamdempsey.com" rel="designer">Liam Dempsey</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>