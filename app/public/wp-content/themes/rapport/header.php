<?php
/**
 * The template for displaying the header
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
				<li><a class="scrl" href="<?php if ( !is_front_page() ) : ?><?php echo esc_url( home_url( '/' ) ); ?><?php endif; ?>#about">バーベナについて</a></li>
				<li><a class="scrl" href="<?php if ( !is_front_page() ) : ?><?php echo esc_url( home_url( '/' ) ); ?><?php endif; ?>#works">お仕事内容</a></li>
				<li><a class="scrl" href="<?php if ( !is_front_page() ) : ?><?php echo esc_url( home_url( '/' ) ); ?><?php endif; ?>#office">事業所情報</a></li>
				<li><a class="scrl" href="<?php if ( !is_front_page() ) : ?><?php echo esc_url( home_url( '/' ) ); ?><?php endif; ?>#news">お知らせ</a></li>
				<li><a class="scrl" href="<?php if ( !is_front_page() ) : ?><?php echo esc_url( home_url( '/' ) ); ?><?php endif; ?>#recruit">採用情報 </a></li>
			</ul>
		</div>
	</div>
	<div class="hd-contact">
		<a class="scrl" href="<?php if ( !is_front_page() ) : ?><?php echo esc_url( home_url( '/' ) ); ?><?php endif; ?>#contact">お問い合わせ</a>
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
				<li><a class="scrl" href="<?php if ( !is_front_page() ) : ?><?php echo esc_url( home_url( '/' ) ); ?><?php endif; ?>#sct1">バーベナについて</a></li>
				<li><a class="scrl" href="<?php if ( !is_front_page() ) : ?><?php echo esc_url( home_url( '/' ) ); ?><?php endif; ?>#sct2">お仕事内容</a></li>
				<li><a class="scrl" href="<?php if ( !is_front_page() ) : ?><?php echo esc_url( home_url( '/' ) ); ?><?php endif; ?>#office">事業所情報</a></li>
				<li><a class="scrl" href="<?php if ( !is_front_page() ) : ?><?php echo esc_url( home_url( '/' ) ); ?><?php endif; ?>#news">お知らせ</a></li>
				<li><a class="scrl" href="<?php if ( !is_front_page() ) : ?><?php echo esc_url( home_url( '/' ) ); ?><?php endif; ?>#sct4">採用情報 </a></li>
			</ul>
		</div>
	</div>
	<div class="hd-contact">
		<a class="scrl" href="#contact">お問い合わせ</a>
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
				<li><a class="scrl trig" href="<?php if ( !is_front_page() ) : ?><?php echo esc_url( home_url( '/' ) ); ?><?php endif; ?>#sct1">バーベナについて</a></li>
				<li><a class="scrl trig" href="<?php if ( !is_front_page() ) : ?><?php echo esc_url( home_url( '/' ) ); ?><?php endif; ?>#sct2">お仕事内容</a></li>
				<li><a class="scrl trig" href="<?php if ( !is_front_page() ) : ?><?php echo esc_url( home_url( '/' ) ); ?><?php endif; ?>#office">事業所情報</a></li>
				<li><a class="scrl trig" href="<?php if ( !is_front_page() ) : ?><?php echo esc_url( home_url( '/' ) ); ?><?php endif; ?>#news">お知らせ</a></li>
				<li><a class="scrl trig" href="<?php if ( !is_front_page() ) : ?><?php echo esc_url( home_url( '/' ) ); ?><?php endif; ?>#sct4">採用情報 </a></li>
			</ul>
		</div>
		<div class="btn-contact">
			<a class="scrl trig" href="<?php if ( !is_front_page() ) : ?><?php echo esc_url( home_url( '/' ) ); ?><?php endif; ?>#contact">お問い合わせ</a>
		</div>
		<div class="close trig">
			<div><span></span><span></span></div>
		</div>
</div>
</div>
