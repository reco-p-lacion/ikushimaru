<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TEMPLATENAME
 */

?>
	<footer class="main-footer">
		<div class="cntr">
			<div class="footer-wrapper">
				<div class="footer-logo">
					<a href="<?php bloginfo('home'); ?>" class="footer-link">
						IKUSHIMURA.com
					</a>
				</div>
				<div class="footer-list">
					<ul class="footer-nav">
						<li class="footer-nav-item">
							<a href="<?php bloginfo('url'); ?>/company" class="footer-nav-link">Company</a>
						</li>
						<li class="footer-nav-item">
							<a href="<?php bloginfo('url'); ?>/service" class="footer-nav-link">Service</a>
						</li>
						<li class="footer-nav-item">
							<a href="<?php bloginfo('url'); ?>/creator" class="footer-nav-link">Creator</a>
						</li>
						<li class="footer-nav-item">
							<a href="<?php bloginfo('url'); ?>/job-request" class="footer-nav-link">Contact</a>
						</li>
					</ul>
					<ul class="footer-social">
						<li class="footer-social-item">
							<a href="#">
								<i class="fa-brands fa-instagram"></i>
							</a>
						</li>
						<li class="footer-social-item">
							<a href="#">
								<i class="fa-brands fa-twitter"></i>
							</a>
						</li>
						<li class="footer-social-item">
							<a href="#">
								<i class="fa-brands fa-youtube"></i>
							</a>
						</li>
						<li class="footer-social-item">
							<a href="#">
								<i class="fa-brands fa-facebook-square"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
	<?php 
		$custom_js = get_option( 'theme_js' );
		if(!empty($custom_js)) {
			?>
				<?php echo '<script>'. $custom_js. '</script> '; ?>
			<?php
		}
	?>
	</body>
</html>