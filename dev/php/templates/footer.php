
	<div class="Footer">
		<div class="u-gridContainer">
			<div class="u-gridRow">

			<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
			<div class="Footer-inner">
				<hr class="Line"></hr>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
			</div>
			<?php endif; ?>
			</div>

		</div>
			<p class="Footer-text">&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Webshop en SEO door <a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden.nl</a> - <a href="/algemene-voorwaarden/">Algemene voorwaarden</a> - <a href="/privacy-beleid">Privacy beleid</a></p>
		
	</div>


	<!-- Copyright info -->
	

  <!-- Load jquery from google CDN if possible, with fallback to local version -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/standalone/jquery.min.js"><\/script>')</script>

	<!-- Footer javascript below here -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>