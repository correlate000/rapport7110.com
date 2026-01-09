<?php
/**
 * The template for displaying the footer
 * WF Structure × Existing Design
 */
?>
<div class="pagetop">
	<a class="scrl" href="#container"><img src="<?php echo esc_url( home_url( '/img/' ) ); ?>pagetop.png" alt="ページトップ"></a>
</div>
<footer id="ft">
<div class="inner-ft">
	<!-- Main Navigation -->
	<nav class="footer-nav">
		<ul>
			<li><a href="<?php echo esc_url( home_url( '/guide/' ) ); ?>">ご利用案内</a></li>
			<li><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>">お仕事内容</a></li>
			<li><a href="<?php echo esc_url( home_url( '/staff/' ) ); ?>">スタッフ紹介</a></li>
			<li><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">お知らせ</a></li>
			<li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">よくある質問</a></li>
			<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a></li>
		</ul>
	</nav>

	<!-- SNS Links -->
	<div class="footer-sns">
		<a target="_blank" href="https://www.instagram.com/rapport4407110" title="Instagram"><img src="<?php echo esc_url( home_url( '/img/' ) ); ?>icn-insta.png" alt="Instagram"></a>
	</div>

	<!-- Sub Navigation -->
	<ul class="footer-sub">
		<li><a href="<?php echo esc_url( home_url( '/business/' ) ); ?>">企業様へ</a></li>
		<li><a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">採用情報</a></li>
		<li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">プライバシーポリシー</a></li>
	</ul>
</div>
<div class="copyright">
	<p>Copyright (C) 2025 Rapport. All Rights Reserved.</p>
</div>
</footer>
</div><!-- /#wrapper -->
</div><!-- /#container -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<?php wp_footer(); ?>
</body>
</html>
