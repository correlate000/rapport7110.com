<?php
/**
 * The main template file
 */

get_header(); ?>

<section id="kv">
<div class="inner-kv">
	<div class="ctn">
		<h1><img src="<?php echo esc_url( home_url( '/img/' ) ); ?>kv-txt.png" alt="人と人との繋がりを大切にし、お互いを信頼し合い成長する、バーベナはそういう場所です。"></h1>
	</div>
	<div class="bg-kv">
		<div class="kv-1"></div>
		<div class="kv-2"></div>
		<div class="kv-3"></div>
		<div class="kv-4"></div>
	</div>
</div>
</section>

<section id="news">
<div class="inner-sct">
	<div class="ctn-flex">
		<div class="tit">
			<h2><img src="<?php echo esc_url( home_url( '/img/' ) ); ?>ttl-news.png"><span>お知らせ</span></h2>
			<div class="more">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/news/">一覧はこちら</a>
			</div>
		</div>
		<div class="ctn">
			<ul>
<?php $args = array(
	'post_type' => 'post',
	'posts_per_page' => 3
); ?>
<?php $the_query = get_posts($args); ?>
    <?php if($the_query): ?>
        <?php foreach($the_query as $post) : setup_postdata($post); ?>
			<li><time><?php the_time('Y.n.j'); ?></time> <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endforeach; ?>
    <?php endif; ?>
<?php wp_reset_postdata(); ?>
			</ul>
		</div>
	</div>
</div>
</section>

<section id="lead">
<div class="inner-sct">
	<div class="ctn">
		<p>バーベナは就労継続支援Ｂ型の<span>福祉サービス事業所です</span></p>
	</div>
</div>
</section>

<section id="about"><div id="sct1"></div>
<div class="inner-sct">
	<div class="ttl">
		<h2><img src="<?php echo esc_url( home_url( '/img/' ) ); ?>ttl-about.png" alt="バーベナについて"></h2>
	</div>
	<div class="ctn-flex">
		<div class="txt">
			<p class="mb">障がいをお持ちの方、就労に不安がある方、社会とつながり自立を目指す方のサポートを行っています。<br>
				雇用契約を結ばずに、事業所内で就労訓練を行い、就労する機会の提供や終了に必要なスキルアップを目的とした支援事業です。<br>
				工賃の向上や自主性を育む支援をご提供します。</p>
			<p>ご都合にあわせ週１回でも、半日のみも選べます。<br>
				まずはお気軽に見学にお越しいただき、事業所の雰囲気などをご確認ください。</p>
		</div>
		<div class="pht">
			<figure><img src="<?php echo esc_url( home_url( '/img/' ) ); ?>pht-about.png"></figure>
		</div>
	</div>
</div>
</section>

<section id="works"><div id="sct2"></div>
<div class="inner-sct">
	<div class="ttl">
		<h2><img src="<?php echo esc_url( home_url( '/img/' ) ); ?>ttl-works.png" alt="お仕事内容"></h2>
	</div>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
</div>
</section>

<div class="bg-2">
<section id="office">
<div class="inner-sct">
	<div class="ttl">
		<h2><img src="<?php echo esc_url( home_url( '/img/' ) ); ?>ttl-office.png" alt="事業所情報"></h2>
	</div>
	<div class="ctn-flex">
		<div class="txt">
			<div class="inner">
				<h3>株式会社Rapport</h3>
				<ul>
					<li><dl>
						<dt>住所</dt>
						<dd>神奈川県川崎市多摩区南生田4-12-1 Ruhe（ルーエ）204</dd>
					</dl></li>
					<li><dl>
						<dt>TEL</dt>
						<dd>044-982-9006</dd>
					</dl></li>
<?php
/*
					<li><dl>
						<dt>営業時間</dt>
						<dd>月～金　9～15時<span class="note">※休業日  /  土日祝日</span><span class="note">※内容により土曜日も開業あり</span></dd>
					</dl></li>
*/
?>
					<li><dl>
						<dt>アクセス</dt>
						<dd>小田急線【生田駅】バス15分【生田高校前】徒歩2分<br>他にも南武線や田園都市線駅からもアクセス可能です（バスターミナル至近あり）</dd>
					</dl></li>
					<li><dl>
						<dt>SNS</dt>
						<dd class="insta"><a target="_blank" href="https://www.instagram.com/rapport4407110"><img src="<?php echo esc_url( home_url( '/img/' ) ); ?>icn-insta.png"><span>バーベナ公式Instagram</span></a></dd>
<?php
/*						<dd class="line"><a target="_blank" href=""><img src="<?php echo esc_url( home_url( '/img/' ) ); ?>icn-line.png"><span>ラポール公式LINE</span></a><img class="qr" src="<?php echo esc_url( home_url( '/img/' ) ); ?>line-qr.jpg"></dd>
 */
?>
					</dl></li>
				</ul>
			</div>
		</div>
		<div class="pht">
			<figure><img src="<?php echo esc_url( home_url( '/img/' ) ); ?>pht-office.png"></figure>
		</div>
	</div>
	<div class="map">
		<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d811.0218844367527!2d139.5373668696467!3d35.60090719828835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f0ae2bb0b2ad%3A0x6b25bee911518dc6!2z44CSMjE0LTAwMzYg56We5aWI5bed55yM5bed5bSO5biC5aSa5pGp5Yy65Y2X55Sf55Sw77yU5LiB55uu77yR77yS4oiS77yR!5e0!3m2!1sja!2sjp!4v1735102492676!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
	</div>
</div>
</section>

<section id="recruit"><div id="sct4"></div>
<div class="inner-sct">
	<div class="ttl">
		<h2><img src="<?php echo esc_url( home_url( '/img/' ) ); ?>ttl-recruit.png" alt="採用情報"></h2>
	</div>
	<div class="ctn">

<?php $args = array(
	'post_type' => 'page',
	'pagename' => 'recruit'
); ?>
<?php $the_query = get_posts($args); ?>
	<?php if($the_query): ?>
		<?php foreach($the_query as $post) : setup_postdata($post); ?>
			<?php the_content(); ?>
		<?php endforeach; ?>
	<?php else: ?>
<p class="end">採用完了し、現在、募集を終了しました。</p>
	<?php endif; ?>
<?php wp_reset_postdata(); ?>

	</div>
</div>
</section>
</div>

<section id="contact">
<div class="inner-sct">
	<div class="ttl">
		<h2><img src="<?php echo esc_url( home_url( '/img/' ) ); ?>ttl-contact.png" alt="お問い合わせ"></h2>
	</div>
	<div class="ctn">
<?php echo do_shortcode('[contact-form-7 id="2809987" title="コンタクトフォーム"]'); ?>
	</div>
</div>
</section>

<?php get_footer(); ?>
