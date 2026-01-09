<?php
/**
 * The template for displaying category archives
 * WF Structure × Existing Design
 */

get_header(); ?>

<div class="wrap">
  <!-- Page Header -->
  <div class="page-header">
    <h1 class="page-title"><?php single_cat_title(); ?></h1>
  </div>

  <!-- News List -->
  <div class="page-ctn">
    <div class="news-list">
      <?php if (have_posts()) : ?>
      <ul>
        <?php while (have_posts()) : the_post(); ?>
        <li>
          <time><?php the_time('Y.m.d'); ?></time>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
        <?php endwhile; ?>
      </ul>

      <?php if (function_exists('pagination')) : ?>
      <div class="pagination">
        <?php pagination($wp_query->max_num_pages); ?>
      </div>
      <?php endif; ?>

      <?php else : ?>
      <p style="text-align: center; padding: 40px;">記事がありません。</p>
      <?php endif; ?>
    </div>
  </div>

  <!-- CTA Section -->
  <section class="page-cta">
    <div class="page-cta-inner">
      <p class="cta-sub">バーベナの雰囲気を見てみませんか？</p>
      <p class="cta-main">見学・体験は随時受付中</p>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn">お問い合わせはこちら</a>
    </div>
  </section>
</div>

<?php get_footer(); ?>
