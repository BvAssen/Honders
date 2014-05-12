<?php get_header(); ?>

	<div>
		<div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h5><?php the_title(); ?></h5>
				<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
		</div>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>