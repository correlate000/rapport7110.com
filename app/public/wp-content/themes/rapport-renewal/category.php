<?php
/**
 * The template for displaying archive pages
 */

get_header(); ?>

<div class="wrap">
<div class="page-kv">
	<h2><img src="<?php echo esc_url( home_url( '/img/' ) ); ?>kv-news.png" alt="お知らせ"></h2>
</div>
<div class="page-ctn">
	<div class="news-list">
<?php if ( have_posts() ) : ?>
<ul>

<?php while ( have_posts() ) : the_post(); ?>
	<li><time><?php the_time( 'Y.m.d' ); ?></time> <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul>
	</div>
	<div class="pager">
		<div class="inner">
<?php
		if (function_exists('pagination')) {
				pagination($wp_query->max_num_pages);
		}
?>
		</div>
	</div>
<?php endif; ?>

</div>
</div>
<?php get_footer(); ?>
