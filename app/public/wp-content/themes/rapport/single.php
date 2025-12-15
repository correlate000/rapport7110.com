<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
<div class="wrap">
<div class="page-ctn">
	<article>
<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
?>

		<div class="article-title">
			<h2><?php the_title(); ?></h2>
			<p><time><?php the_time('Y.n.j'); ?></time></p>
		</div>
		<div class="article-ctn">
			<?php the_content(); ?>
		</div>
	</article>
<?php endwhile; ?>
		<div class="pager">
			<div class="inner">
				<?php if (get_previous_post()): ?>
					<div class="prev"><?php previous_post_link('%link', '前へ'); ?></div>
				<?php endif; ?>
				<?php if (get_next_post()): ?>
					<div class="next"><?php next_post_link('%link', '次へ'); ?></div>
				<?php endif; ?>
				<div class="back"><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/news/">一覧に戻る</a></div>
			</div>
		</div>
</div>

</div>

<?php get_footer(); ?>
