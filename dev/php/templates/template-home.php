<?php
/*
Template Name: Home template
*/
?>

<?php get_header(); ?>
<div class="u-gridContainer">
	<div class="u-gridColumn7">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<h4><?php the_title(); ?></h4>
			<div>
				<p class="two-col"><?php the_content(); ?></p>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>
	<div class="Home-img">
		<img src="/files/2014/06/kwaliteitslabel.jpg"></img>
		<img src="/files/2014/06/Geschillencommissie-Advocatuur.jpg"></img>
		<img src="/files/2014/06/High-Trust-2.jpg"></img>
		
	</div>
</div>

<div class="Sidebar">
	<div>
		<a class="Button Button--home" href="#">Neem contact op</a>
		<!-- <p class="Body-text"><strong>MR. J.M.F. Honders</strong></p> -->
		<hr class="Line--sidebar"></hr>
		<img src="/files/2014/06/Plieger-Version-3-copy.jpg"></img>


		<p> MR. J.M.F. Honders</p>


	
	</div> 
</div>

</div>
<?php get_footer(); ?>

	<!-- <ul class="Usp">
			<li class="Usp--head"><strong>MR. J.M.F. Honders</strong></li>
			<li>Arbeids- en sociaal zekerheidsrecht</li>
			<li>Contracten, schade, <br>en 
			ansprakelijkheid</li>
			<li>Ondernemingspraktijk</li>
			<li>Personen- en familierecht</li>
			<li>Strafrecht, tuchtrecht, 
			vreemdelingenbewaring</li>
		</ul> -->