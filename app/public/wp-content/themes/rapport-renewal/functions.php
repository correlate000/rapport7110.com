<?php
/**
	各種設定
 */


//		フィードの削除
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

//		絵文字の削除
remove_action('wp_head', 'print_emoji_detection_script', 7); 
remove_action('admin_print_scripts','print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles');

//		ブログ投稿ツール関連の削除
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

//		ワードプレスバージョンの表示の削除
remove_action('wp_head', 'wp_generator');

//		rel=”canonical”タグの表示
remove_action('wp_head', 'rel_canonical');


//		wp_head()でjQueryを読み込まないようにする方法
function delete_jquery() {
    wp_deregister_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'delete_jquery' );


//		アイキャッチ画像の有効化
add_theme_support('post-thumbnails');


//		【管理画面】メディアを追加で挿入されるimgタグから不要な属性を削除
add_filter('image_send_to_editor', 'remove_image_attribute', 10);
add_filter('post_thumbnail_html', 'remove_image_attribute', 10);
add_filter('wp_calculate_image_srcset_meta', '__return_null');
add_filter('wp_img_tag_add_width_and_height_attr', '__return_false');
function remove_image_attribute($html){
  $html = preg_replace('/(width|height)="\d*"\s/', '', $html); // width と heifht を削除
  $html = preg_replace('/class=[\'"]([^\'"]+)[\'"]/i', '', $html); // class を削除
  $html = preg_replace('/title=[\'"]([^\'"]+)[\'"]/i', '', $html); // title を削除
  $html = preg_replace('/sizes=[\'"]([^\'"]+)[\'"]/i', '', $html); // sizes を削除
  $html = preg_replace('/srcset=[\'"]([^\'"]+)[\'"]/i', '', $html); // srcset を削除
  $html = preg_replace('/<a href=".+">/', '', $html); // a タグを削除
  $html = preg_replace('/<\/a>/', '', $html); // a の閉じタグのを削除
  return $html;
}


//	投稿でspanタグが消えるの防ぐ
function my_tiny_mce_before_init( $init_array ) {
    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';
    return $init_array;
}
add_filter( 'tiny_mce_before_init' , 'my_tiny_mce_before_init' );


/*
//	管理画面でメニュー表示
add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}
*/

/*
// カスタム投稿タイプの追加
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'news', // 投稿タイプ名の定義
			array(
				'labels' => array(
				'name' => __( '新着情報' ), // 表示する投稿タイプ名
				'singular_name' => __( '新着情報' )
			),
			'public' => true,
			'menu_position' =>5,
			'has_archive'   => false,
			'supports' => array('title','editor','excerpt','thumbnail','author')
		)
	);
}
*/

/*
//		Pタグの無効化
//		すべての投稿に適用させる場合
remove_filter('the_content', 'wpautop'); // 記事の自動整形を無効にする
remove_filter('the_excerpt', 'wpautop'); // 抜粋の自動整形を無効にする


//		投稿ページのみに適用させる場合
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content) {
	global $post;
	$remove_filter = false;
	$arr_types = array('post');			//	適用させる投稿タイプを指定
//	$arr_types = array('page');			//	固定ページのみに適用させる場合
//	$arr_types = array('★カスタム投稿タイプをここに入力★');			//	カスタム投稿ページのみに適用させる場合
	$post_type = get_post_type( $post->ID );
	if (in_array($post_type, $arr_types)) $remove_filter = true;
		if ( $remove_filter ) {
		remove_filter('the_content', 'wpautop');
		remove_filter('the_excerpt', 'wpautop');
	}
	return $content;
}
*/


//	Pagenation
function pagination($pages = '', $range = 2){
	$showitems = ($range * 2)+1;	//表示するページ数（５ページを表示）
	global $paged;

	if(empty($paged)) $paged = 1;	//デフォルトのページ
		if($pages == ''){
			global $wp_query;
			$pages = $wp_query->max_num_pages;//全ページ数を取得
			if(!$pages){			//全ページ数が空の場合は、１とする
				$pages = 1;
			}
		}
		if(1 != $pages){			//全ページが１でない場合はページネーションを表示する
		//Prev：現在のページ値が１より大きい場合は表示
			if($paged > 1){
				echo "<div class=\"prev\"><a href='".get_pagenum_link($paged - 1)."'>前へ</a></div>\n";
			}
		//Next：総ページ数より現在のページ値が小さい場合は表示
			if ($paged < $pages){
				echo "<div class=\"next\"><a href=\"".get_pagenum_link($paged + 1)."\">次へ</a></div>\n";
			}
		 echo "<ul>\n";
			for ($i=1; $i <= $pages; $i++){
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
					//三項演算子での条件分岐
					echo ($paged == $i)? "<li class=\"active\">".$i."</li>\n":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
				}
			}
		echo "</ul>\n";
		}
}


// Contact Form 7 送信後にサンクスページへリダイレクト
add_action('wp_footer', 'cf7_redirect_to_thanks');
function cf7_redirect_to_thanks() {
    ?>
    <script>
    document.addEventListener('wpcf7mailsent', function(event) {
        location.href = '/contact-thanks/';
    }, false);
    </script>
    <?php
}


// ========================================
// 固定ページ自動作成機能
// ========================================

// 作成するページの定義
function rapport_get_pages_to_create() {
    return array(
        array(
            'title' => 'ご利用案内',
            'slug' => 'guide',
            'content' => '<p>ご利用案内のページです。内容を編集してください。</p>'
        ),
        array(
            'title' => 'お仕事内容',
            'slug' => 'work',
            'content' => '<p>お仕事内容のページです。内容を編集してください。</p>'
        ),
        array(
            'title' => 'スタッフ紹介',
            'slug' => 'staff',
            'content' => '<p>スタッフ紹介のページです。内容を編集してください。</p>'
        ),
        array(
            'title' => 'お知らせ',
            'slug' => 'news',
            'content' => '<p>お知らせ一覧のページです。</p>'
        ),
        array(
            'title' => 'よくある質問',
            'slug' => 'faq',
            'content' => '<p>よくある質問のページです。内容を編集してください。</p>'
        ),
        array(
            'title' => 'お問い合わせ',
            'slug' => 'contact',
            'content' => '[contact-form-7 id="2809987" title="コンタクトフォーム"]'
        ),
        array(
            'title' => '企業様へ',
            'slug' => 'business',
            'content' => '<p>企業様向けのページです。内容を編集してください。</p>'
        ),
        array(
            'title' => '採用情報',
            'slug' => 'recruit',
            'content' => '<p>採用情報のページです。内容を編集してください。</p>'
        ),
        array(
            'title' => 'プライバシーポリシー',
            'slug' => 'privacy-policy',
            'content' => '<p>プライバシーポリシーのページです。内容を編集してください。</p>'
        ),
        array(
            'title' => 'お問い合わせ完了',
            'slug' => 'contact-thanks',
            'content' => '<p>お問い合わせありがとうございました。</p><p>内容を確認の上、担当者よりご連絡させていただきます。</p>'
        ),
    );
}

// ページ作成関数
function rapport_create_pages() {
    $pages = rapport_get_pages_to_create();
    $created = array();

    foreach ($pages as $page_data) {
        // 既存ページをチェック
        $existing = get_page_by_path($page_data['slug']);

        if (!$existing) {
            $page_id = wp_insert_post(array(
                'post_title'   => $page_data['title'],
                'post_name'    => $page_data['slug'],
                'post_content' => $page_data['content'],
                'post_status'  => 'publish',
                'post_type'    => 'page',
            ));

            if ($page_id && !is_wp_error($page_id)) {
                $created[] = $page_data['title'];
            }
        }
    }

    return $created;
}

// 管理画面にメニュー追加
add_action('admin_menu', 'rapport_add_admin_menu');
function rapport_add_admin_menu() {
    add_theme_page(
        '固定ページ作成',
        '固定ページ作成',
        'manage_options',
        'rapport-create-pages',
        'rapport_create_pages_admin'
    );
}

// 管理画面の表示
function rapport_create_pages_admin() {
    $message = '';

    if (isset($_POST['create_pages']) && check_admin_referer('rapport_create_pages')) {
        $created = rapport_create_pages();
        if (!empty($created)) {
            $message = '<div class="notice notice-success"><p>以下のページを作成しました: ' . implode(', ', $created) . '</p></div>';
        } else {
            $message = '<div class="notice notice-info"><p>作成するページはありませんでした（既に存在します）</p></div>';
        }
    }

    $pages = rapport_get_pages_to_create();
    ?>
    <div class="wrap">
        <h1>固定ページ作成</h1>
        <?php echo $message; ?>
        <p>以下の固定ページを作成します（既存のページはスキップされます）:</p>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>ページ名</th>
                    <th>スラッグ</th>
                    <th>状態</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pages as $page): ?>
                <tr>
                    <td><?php echo esc_html($page['title']); ?></td>
                    <td><?php echo esc_html($page['slug']); ?></td>
                    <td>
                        <?php
                        $existing = get_page_by_path($page['slug']);
                        if ($existing) {
                            echo '<span style="color: green;">✓ 作成済み</span>';
                        } else {
                            echo '<span style="color: orange;">未作成</span>';
                        }
                        ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <form method="post" style="margin-top: 20px;">
            <?php wp_nonce_field('rapport_create_pages'); ?>
            <input type="submit" name="create_pages" class="button button-primary" value="未作成のページを作成する">
        </form>
    </div>
    <?php
}