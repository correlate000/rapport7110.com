<?php
/**
 * Template Name: お問い合わせ完了
 * Template for contact thanks page
 */

get_header(); ?>

<div class="wrap">
  <!-- Page Header -->
  <div class="page-header">
    <h1 class="page-title">お問い合わせ完了</h1>
  </div>

  <!-- Thanks Content -->
  <div class="page-ctn">
    <div class="page-inner">
      <div class="thanks-content">
        <div class="thanks-icon">
          <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
            <polyline points="22 4 12 14.01 9 11.01"/>
          </svg>
        </div>
        <h2 class="thanks-title">お問い合わせありがとうございました</h2>
        <p class="thanks-text">
          内容を確認の上、担当者よりご連絡させていただきます。<br>
          今しばらくお待ちくださいませ。
        </p>
        <div class="thanks-back">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn">トップページへ戻る</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
