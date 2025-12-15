<?php
/**
 * The template for displaying pages
 */

get_header(); ?>
<div class="wrap">
<div class="page-ctn">
	<article>
<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
?>
	<?php the_content(); ?>
	</article>
<?php endwhile; ?>
</div>

</div>
<?php get_footer(); ?>
