<?php
/**
 * The template for displaying single posts
 * WF Structure × Existing Design
 */

get_header(); ?>

<div class="wrap">
  <!-- Page Header -->
  <div class="page-header">
    <h1 class="page-title">お知らせ</h1>
  </div>

  <!-- Article Content -->
  <div class="page-ctn">
    <div class="page-inner">
      <?php while ( have_posts() ) : the_post(); ?>

      <div class="article-header">
        <p class="article-date"><?php the_time('Y.m.d'); ?></p>
        <h2 class="article-title"><?php the_title(); ?></h2>
      </div>

      <div class="article-content">
        <?php the_content(); ?>
      </div>

      <?php endwhile; ?>

      <!-- Post Navigation -->
      <div class="post-nav">
        <?php if (get_previous_post()): ?>
          <div class="prev"><?php previous_post_link('%link', '← 前の記事'); ?></div>
        <?php else: ?>
          <div></div>
        <?php endif; ?>

        <div class="back">
          <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="btn btn-small">一覧に戻る</a>
        </div>

        <?php if (get_next_post()): ?>
          <div class="next"><?php next_post_link('%link', '次の記事 →'); ?></div>
        <?php else: ?>
          <div></div>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <!-- CTA Section -->
  <section class="page-cta">
    <div class="page-cta-inner">
      <p class="cta-sub">まずは見学から始めてみませんか？</p>
      <p class="cta-main">見学・体験は随時受付中</p>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn">お問い合わせはこちら</a>
    </div>
  </section>
</div>

<?php get_footer(); ?>
