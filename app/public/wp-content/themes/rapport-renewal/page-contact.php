<?php
/**
 * Template Name: お問い合わせ
 * Template for contact page
 */

get_header(); ?>

<div class="wrap">
  <!-- Page Header -->
  <div class="page-header">
    <h1 class="page-title">お問い合わせ</h1>
  </div>

  <!-- Contact Content -->
  <div class="page-ctn">
    <!-- FAQ Link -->
    <div class="contact-intro">
      <p><strong>お問い合わせの前に</strong></p>
      <p>よくある質問で解決するかもしれません</p>
      <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="btn btn-gray btn-small">よくある質問を見る</a>
    </div>

    <div class="page-inner">
      <!-- Phone Contact -->
      <div class="contact-tel-box">
        <p class="contact-tel-label">お電話でのお問い合わせ</p>
        <p class="contact-tel-number"><a href="tel:044-982-9006">044-982-9006</a></p>
        <p class="contact-tel-note">受付時間：平日 9:00〜15:00</p>
      </div>

      <!-- Contact Form -->
      <div class="contact-form">
        <p class="contact-form-title">フォームでのお問い合わせ</p>
        <?php
        while ( have_posts() ) : the_post();
          the_content();
        endwhile;
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
