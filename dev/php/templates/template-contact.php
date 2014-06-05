<?php
/*
Template Name: Contact template
*/
?>
<?php get_header(); ?>
	<div class="Content-yellow">
		<div class="u-gridContainer">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<article class="u-gridColumn6 " id="post-<?php the_ID(); ?>">
				
				<h2><?php the_title(); ?></h2>
				<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

				
				</div>
			</article>
		<?php endwhile; endif; ?>
	
			<aside class="u-gridColumn6">
				<div class="Contactbar">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39380.1706243579!2d4.507700883518167!3d51.91095520808406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c43361a2523f07%3A0xc015716f7d892184!2sVasteland+78!5e0!3m2!1sen!2snl!4v1401801152543" width="400" height="300" frameborder="0" style="border:0"></iframe>					<div id="map_canvas"></div>
					<!-- <div class="Contactbar-form">
					<?php echo do_shortcode('[gravityform id="1" name="Contact" title="false"]'); ?>
					</div> -->
				</div>
			</aside>
		</div>
	</div>

<?php get_footer(); ?>