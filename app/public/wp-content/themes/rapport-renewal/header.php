<?php
/**
 * The template for displaying the header
 * WF Structure × Existing Design
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
<title><?php bloginfo('name'); ?></title>

<!-- Open Graph -->
<meta property="og:title" content="<?php bloginfo('name'); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo home_url(); ?>">
<meta property="og:description" content="<?php bloginfo('description'); ?>">
<meta property="og:image" content="">
<meta property="og:locale" content="ja_JP">

	<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<?php if ( is_front_page() ) : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index.css">
<?php else: ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css">
<?php endif; ?>
</head>

<body <?php body_class(); ?>>

<div id="container">
<div id="wrapper">
<?php if ( is_front_page() ) : ?>
<header id="hd">
<div class="inner-hd">
	<div class="hd-ctn">
		<div class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( home_url( '/img/' ) ); ?>logo_300x386.png"></a>
		</div>
		<div class="nav">
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/guide/' ) ); ?>">ご利用案内</a></li>
				<li><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>">お仕事内容</a></li>
				<li><a href="<?php echo esc_url( home_url( '/staff/' ) ); ?>">スタッフ紹介</a></li>
				<li><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">お知らせ</a></li>
				<li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">よくある質問</a></li>
			</ul>
		</div>
	</div>
	<div class="hd-contact">
		<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a>
	</div>
	<div class="sp-menu trig">
		<div><span></span><span></span><span></span></div>
	</div>
</div>
</header>
<?php endif; ?>

<div class="<?php if ( !is_front_page() ) : ?>paged<?php endif; ?>" id="fix-nav">
<div class="inner-hd">
	<div class="hd-ctn">
		<div class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( home_url( '/img/' ) ); ?>logo_320x100.jpg"></a>
		</div>
		<div class="nav">
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/guide/' ) ); ?>">ご利用案内</a></li>
				<li><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>">お仕事内容</a></li>
				<li><a href="<?php echo esc_url( home_url( '/staff/' ) ); ?>">スタッフ紹介</a></li>
				<li><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">お知らせ</a></li>
				<li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">よくある質問</a></li>
			</ul>
		</div>
	</div>
	<div class="hd-contact">
		<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a>
	</div>
	<div class="sp-menu trig">
		<div><span></span><span></span><span></span></div>
	</div>
</div>
</div>


<div id="sp-nav">
<div class="inner">
		<div class="nav">
			<ul>
				<li><a class="trig" href="<?php echo esc_url( home_url( '/guide/' ) ); ?>">ご利用案内</a></li>
				<li><a class="trig" href="<?php echo esc_url( home_url( '/work/' ) ); ?>">お仕事内容</a></li>
				<li><a class="trig" href="<?php echo esc_url( home_url( '/staff/' ) ); ?>">スタッフ紹介</a></li>
				<li><a class="trig" href="<?php echo esc_url( home_url( '/news/' ) ); ?>">お知らせ</a></li>
				<li><a class="trig" href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">よくある質問</a></li>
			</ul>
		</div>
		<div class="btn-contact">
			<a class="trig" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a>
		</div>
		<div class="close trig">
			<div><span></span><span></span></div>
		</div>
</div>
</div>
