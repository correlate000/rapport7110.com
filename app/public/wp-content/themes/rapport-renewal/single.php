<?php
/**
 * The template for displaying single posts
 * Based on WF (Wireframe) structure
 */

get_header(); ?>

  <!-- Page Header -->
  <div class="page-header">
    <h1 class="page-title">お知らせ</h1>
  </div>

  <!-- Article Content -->
  <section class="section">
    <article class="post-content">
      <?php while ( have_posts() ) : the_post(); ?>

      <div class="post-header" style="margin-bottom: 30px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
        <p class="news-date" style="margin-bottom: 10px;"><?php the_time('Y.m.d'); ?></p>
        <h2 style="font-size: 22px; font-weight: bold;"><?php the_title(); ?></h2>
      </div>

      <div class="post-body" style="font-size: 15px; line-height: 2;">
        <?php the_content(); ?>
      </div>

      <?php endwhile; ?>

      <!-- Pagination -->
      <div class="post-nav" style="margin-top: 40px; padding-top: 30px; border-top: 1px solid #eee; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
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
    </article>
  </section>

<?php get_footer(); ?>
