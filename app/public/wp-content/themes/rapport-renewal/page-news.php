<?php
/**
 * Template Name: お知らせ一覧
 * Template for displaying news list
 */

get_header(); ?>

<div class="wrap">
  <!-- Page Header -->
  <div class="page-header">
    <h1 class="page-title">お知らせ</h1>
  </div>

  <!-- News List -->
  <div class="page-ctn">
    <div class="news-list">
      <ul>
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 10,
          'paged' => $paged
        );
        $news_query = new WP_Query($args);

        if ($news_query->have_posts()) :
          while ($news_query->have_posts()) : $news_query->the_post();
        ?>
        <li>
          <time><?php the_time('Y.m.d'); ?></time>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
        <?php
          endwhile;
        else :
        ?>
        <li style="text-align: center; padding: 40px;">お知らせはまだありません。</li>
        <?php endif; ?>
      </ul>

      <?php if ($news_query->max_num_pages > 1) : ?>
      <div class="pagination">
        <?php
        echo paginate_links(array(
          'total' => $news_query->max_num_pages,
          'current' => $paged,
          'prev_text' => '←',
          'next_text' => '→',
        ));
        ?>
      </div>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>
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
