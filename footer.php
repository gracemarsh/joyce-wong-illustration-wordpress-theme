<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Joyce_Wong_Concept_Artist
 */
?>

	<footer id="colophon" class="site-footer mt-5">
		<div class="pre-footer-container">
			<?php if (is_active_sidebar('pre-footer-widget')) : ?>
				<?php dynamic_sidebar('pre-footer-widget'); ?>
			<?php endif; ?>
		</div>

		<div class="footer-text-container">
			<small>&copy; <?php bloginfo('name'); ?> <? echo date('Y'); ?></small>
			<small>
				Website by
				<a target="_blank" href="https://gracemarsh.github.io/">Grace Notes Web Solutions</a>
			</small>
		</div>
	</footer>
</div><!-- #page -->

<!-- Back to top button -->
<button type="button" class="btn btn-floating btn-lg" id="btn-back-to-top">
	<i class="fas fa-arrow-up"></i>
</button>
<!-- /Back to top button -->

<?php wp_footer(); ?>

</body>

</html>