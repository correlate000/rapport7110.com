<?php
/**
 * The front page template
 * Based on WF (Wireframe) structure
 */

get_header(); ?>

  <!-- ========================================
       1. KV
  ======================================== -->
  <section class="kv">
    <p class="kv-text">人と人との繋がりを大切にし、<br>お互いを信頼し合い成長する、<br>バーベナはそういう場所です。</p>
    <p class="kv-sub">就労継続支援B型 バーベナ</p>
  </section>

  <!-- ========================================
       2. バーベナについて
  ======================================== -->
  <section class="section" id="about">
    <h2 class="section-title">バーベナについて</h2>
    <p class="text-center mb-30" style="font-size: 16px;">
      バーベナは就労継続支援Ｂ型の<strong>福祉サービス事業所</strong>です
    </p>
    <div class="office-grid" style="align-items: flex-start;">
      <div>
        <p style="font-size: 14px; line-height: 2; margin-bottom: 20px;">
          障がいをお持ちの方、就労に不安がある方、社会とつながり自立を目指す方のサポートを行っています。<br>
          雇用契約を結ばずに、事業所内で就労訓練を行い、就労する機会の提供や終了に必要なスキルアップを目的とした支援事業です。<br>
          工賃の向上や自主性を育む支援をご提供します。
        </p>
        <p style="font-size: 14px; line-height: 2;">
          ご都合にあわせ週１回でも、半日のみも選べます。<br>
          まずはお気軽に見学にお越しいただき、事業所の雰囲気などをご確認ください。
        </p>
      </div>
      <div class="office-image">
        <img src="<?php echo esc_url( home_url( '/img/' ) ); ?>pht-about.png" alt="施設内写真">
      </div>
    </div>
    <div class="text-center mt-30" style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
      <a href="<?php echo esc_url( home_url( '/guide/' ) ); ?>" class="btn">ご利用案内を見る</a>
      <a href="<?php echo esc_url( home_url( '/staff/' ) ); ?>" class="btn btn-outline">スタッフ紹介を見る</a>
    </div>
  </section>

  <!-- ========================================
       3. お仕事内容
  ======================================== -->
  <section class="section bg-gray" id="work">
    <h2 class="section-title">お仕事内容</h2>

    <p class="text-center mb-30" style="font-size: 15px;">
      障がいや体調に合わせ、ご自分のペースで働けます。
    </p>

    <!-- 作業カード -->
    <div class="work-cards">
      <div class="work-card">
        <div class="work-card-image">
          <img src="<?php echo esc_url( home_url( '/img/' ) ); ?>work-plant.jpg" alt="多肉植物">
        </div>
        <p class="work-card-title">多肉植物の育成・販売</p>
      </div>
      <div class="work-card">
        <div class="work-card-image">
          <img src="<?php echo esc_url( home_url( '/img/' ) ); ?>work-pet.jpg" alt="ペット用品">
        </div>
        <p class="work-card-title">ペット用品の製作・販売</p>
      </div>
      <div class="work-card">
        <div class="work-card-image">
          <img src="<?php echo esc_url( home_url( '/img/' ) ); ?>work-pc.jpg" alt="PC作業">
        </div>
        <p class="work-card-title">PC作業・事務作業</p>
      </div>
    </div>

    <!-- 1行キャッチ -->
    <p class="text-center mt-20" style="font-size: 14px; color: #4a7c59;">
      <strong>お昼ごはん無料</strong> ／ <strong>工賃あり</strong> ／ <strong>週1日からOK</strong>
    </p>

    <div class="text-center mt-20">
      <a href="<?php echo esc_url( home_url( '/work/' ) ); ?>" class="btn">お仕事内容を詳しく見る</a>
      <p class="mt-10"><a href="<?php echo esc_url( home_url( '/business/' ) ); ?>" style="font-size: 13px; color: #666;">企業様からのご依頼もお待ちしています →</a></p>
    </div>
  </section>

  <!-- ========================================
       4. 事業所情報
  ======================================== -->
  <section class="section bg-gray" id="office">
    <h2 class="section-title">事業所情報</h2>

    <div class="office-grid">
      <div class="office-info">
        <h3 style="font-size: 16px; margin-bottom: 20px;">就労継続支援B型 バーベナ</h3>
        <dl>
          <dt>住所</dt>
          <dd>神奈川県川崎市多摩区南生田4-12-1 Ruhe（ルーエ）204</dd>
        </dl>
        <dl>
          <dt>TEL</dt>
          <dd>044-982-9006</dd>
        </dl>
        <dl>
          <dt>アクセス</dt>
          <dd>小田急線【生田駅】バス15分【生田高校前】徒歩2分<br>他にも南武線や田園都市線駅からもアクセス可能です</dd>
        </dl>
        <dl>
          <dt>運営会社</dt>
          <dd>株式会社Rapport</dd>
        </dl>
      </div>
      <div class="office-image">
        <img src="<?php echo esc_url( home_url( '/img/' ) ); ?>pht-office.png" alt="施設外観写真">
      </div>
    </div>

    <!-- Google Map -->
    <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d811.0218844367527!2d139.5373668696467!3d35.60090719828835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f0ae2bb0b2ad%3A0x6b25bee911518dc6!2z44CSMjE0LTAwMzYg56We5aWI5bed55yM5bed5bSO5biC5aSa5pGp5Yy65Y2X55Sf55Sw77yU5LiB55uu77yR77yS4oiS77yR!5e0!3m2!1sja!2sjp!4v1735102492676!5m2!1sja!2sjp" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

  <!-- ========================================
       5. お知らせ
  ======================================== -->
  <section class="section" id="news">
    <div class="news-section">
      <div class="news-header">
        <h2 class="section-title">お知らせ</h2>
        <p class="mt-10"><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="btn btn-small">一覧を見る</a></p>
      </div>
      <ul class="news-list">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3
        );
        $the_query = get_posts($args);
        if($the_query):
          foreach($the_query as $post) : setup_postdata($post);
        ?>
        <li class="news-item">
          <span class="news-date"><?php the_time('Y.m.d'); ?></span>
          <span class="news-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></span>
        </li>
        <?php
          endforeach;
        endif;
        wp_reset_postdata();
        ?>
      </ul>
    </div>
  </section>

  <!-- ========================================
       6. お問い合わせ
  ======================================== -->
  <section class="section cta-section" id="contact">
    <h2 class="section-title">お問い合わせ</h2>

    <div class="cta-box">
      <!-- 電話でのお問い合わせ -->
      <div class="cta-phone">
        <p style="font-size: 14px; margin-bottom: 10px;">お電話でのお問い合わせ</p>
        <p class="cta-phone-number">
          <a href="tel:044-982-9006">044-982-9006</a>
        </p>
        <p class="cta-phone-time">受付時間：平日 9:00〜15:00</p>
      </div>

      <!-- フォームへのリンク -->
      <div class="cta-form">
        <p style="font-size: 14px; margin-bottom: 15px;">フォームでのお問い合わせ</p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn">お問い合わせフォームへ</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
