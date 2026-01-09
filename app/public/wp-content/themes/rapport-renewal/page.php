<?php
/**
 * The template for displaying pages
 * WF Structure × Existing Design
 */

get_header(); ?>

<div class="wrap">
  <!-- Page Header -->
  <div class="page-header">
    <h1 class="page-title"><?php the_title(); ?></h1>
  </div>

  <!-- Page Content -->
  <div class="page-ctn">
    <div class="page-inner">
      <?php
      while ( have_posts() ) : the_post();
        the_content();
      endwhile;
      ?>
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
