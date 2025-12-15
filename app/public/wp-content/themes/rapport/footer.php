<?php
/**
 * The template for displaying the footer
 */
?>
<div class="pagetop">
	<a class="scrl" href="#container"><img src="<?php echo esc_url( home_url( '/img/' ) ); ?>pagetop.png" alt="ページトップ"></a>
</div>
<footer id="ft">
<div class="inner-ft">
	<ul>
		<li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">プライバシーポリシー</a></li>
	</ul>
</div>
<div class="copyright">
	<p>Copyright (C) 2024 Rapport. All Rights Reserved.</p>
</div>
</footer>
</div><!-- /#wrapper -->
</div><!-- /#container -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<?php wp_footer(); ?>
</body>
</html>
