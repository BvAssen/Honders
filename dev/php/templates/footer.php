
	<div class="Footer">
		<div class="u-gridContainer">
			<div class="u-gridRow">

			<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
			<div class="Footer-inner">
				<hr class="Line"></hr>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39380.1706243579!2d4.507700883518167!3d51.91095520808406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c43361a2523f07%3A0xc015716f7d892184!2sVasteland+78!5e0!3m2!1sen!2snl!4v1401801152543" width="400" height="300" frameborder="0" style="border:0"></iframe>					<div id="map_canvas"></div>
				
			</div>
			<?php endif; ?>
			</div>

		</div>
			<p class="Footer-text">&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website en SEO door <a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden.nl</a> - <a href="/algemene-voorwaarden/">Algemene voorwaarden</a> - <a href="/privacy-beleid">Privacy beleid</a></p>
		
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