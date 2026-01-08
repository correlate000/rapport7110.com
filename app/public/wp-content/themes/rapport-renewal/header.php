<?php
/**
 * The template for displaying the header
 * Based on WF (Wireframe) structure
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
<title><?php bloginfo('name'); ?><?php if ( !is_front_page() ) : ?> | <?php wp_title(''); ?><?php endif; ?></title>

<!-- Open Graph -->
<meta property="og:title" content="<?php bloginfo('name'); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo home_url(); ?>">
<meta property="og:description" content="<?php bloginfo('description'); ?>">
<meta property="og:image" content="">
<meta property="og:locale" content="ja_JP">

	<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>

<body <?php body_class(); ?>>

<div class="site-container">

  <!-- Header -->
  <header class="site-header">
    <div class="site-logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php if ( has_custom_logo() ) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <img src="<?php echo esc_url( home_url( '/img/' ) ); ?>logo.png" alt="<?php bloginfo('name'); ?>">
        <?php endif; ?>
      </a>
    </div>
    <button class="hamburger" aria-label="メニューを開く">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <nav class="site-nav">
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/guide/' ) ); ?>">ご利用案内</a></li>
        <li><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>">お仕事内容</a></li>
        <li><a href="<?php echo esc_url( home_url( '/staff/' ) ); ?>">スタッフ紹介</a></li>
        <li><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">お知らせ</a></li>
        <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">よくある質問</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a></li>
      </ul>
    </nav>
    <div class="nav-overlay"></div>
  </header>

  <main>
