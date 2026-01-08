<?php
/**
 * Rapport Renewal Theme functions and definitions
 */


// フィードの削除
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

// 絵文字の削除
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts','print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles');

// ブログ投稿ツール関連の削除
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

// ワードプレスバージョンの表示の削除
remove_action('wp_head', 'wp_generator');

// rel="canonical"タグの表示
remove_action('wp_head', 'rel_canonical');


// wp_head()でjQueryを読み込まないようにする方法
function delete_jquery() {
    wp_deregister_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'delete_jquery' );


// アイキャッチ画像の有効化
add_theme_support('post-thumbnails');

// カスタムロゴの有効化
add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 300,
    'flex-height' => true,
    'flex-width'  => true,
));


// 【管理画面】メディアを追加で挿入されるimgタグから不要な属性を削除
add_filter('image_send_to_editor', 'remove_image_attribute', 10);
add_filter('post_thumbnail_html', 'remove_image_attribute', 10);
add_filter('wp_calculate_image_srcset_meta', '__return_null');
add_filter('wp_img_tag_add_width_and_height_attr', '__return_false');
function remove_image_attribute($html){
  $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
  $html = preg_replace('/class=[\'"]([^\'"]+)[\'"]/i', '', $html);
  $html = preg_replace('/title=[\'"]([^\'"]+)[\'"]/i', '', $html);
  $html = preg_replace('/sizes=[\'"]([^\'"]+)[\'"]/i', '', $html);
  $html = preg_replace('/srcset=[\'"]([^\'"]+)[\'"]/i', '', $html);
  $html = preg_replace('/<a href=".+">/', '', $html);
  $html = preg_replace('/<\/a>/', '', $html);
  return $html;
}


// 投稿でspanタグが消えるの防ぐ
function my_tiny_mce_before_init( $init_array ) {
    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';
    return $init_array;
}
add_filter( 'tiny_mce_before_init' , 'my_tiny_mce_before_init' );


// Pagenation
function pagination($pages = '', $range = 2){
  $showitems = ($range * 2)+1;
  global $paged;

  if(empty($paged)) $paged = 1;
    if($pages == ''){
      global $wp_query;
      $pages = $wp_query->max_num_pages;
      if(!$pages){
        $pages = 1;
      }
    }
    if(1 != $pages){
      if($paged > 1){
        echo "<div class=\"prev\"><a href='".get_pagenum_link($paged - 1)."'>前へ</a></div>\n";
      }
      if ($paged < $pages){
        echo "<div class=\"next\"><a href=\"".get_pagenum_link($paged + 1)."\">次へ</a></div>\n";
      }
     echo "<ul>\n";
      for ($i=1; $i <= $pages; $i++){
        if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
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
