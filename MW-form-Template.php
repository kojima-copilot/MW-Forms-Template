1.基本的なお問い合わせフォーム
MW WP Formコンテンツ
	
<div class="form-group">
  <label>お名前</label>
  [mwform_text name="onamae" class="form-control" size="60"]
</div>

<div class="form-group">
  <label>メールアドレス</label>
  [mwform_email name="mail" class="form-control" size="60"]
</div>

<div class="form-group">
  <label>お問い合わせ内容</label>
  [mwform_textarea name="contact-text" class="form-control" cols="50" rows="5"]
</div>

<div class="d-flex">
  [mwform_bconfirm class="btn btn-secondary" value="confirm"]確認画面へ[/mwform_bconfirm]

  [mwform_bsubmit name="my_submit" class="btn btn-secondary" value="send"]送信する[/mwform_bsubmit]

  [mwform_bback class="btn btn-secondary ml-3" value="back"]戻る[/mwform_bback]
</div>
自動返信メール

    Copy to clipboard
    
	
    wrap
	
お問い合わせありがとうございました

1営業日以内に担当者よりご連絡をいたしますので今しばらくお待ち下さい

お問い合わせ内容は以下のとおりです

===================================

お名前：{onamae}

メールアドレス：{mail}

お問い合わせ内容：{contact-text}

===================================
管理者宛メール設定

    Copy to clipboard
    
	
    wrap
	
お問い合わせを受け付けました

できるだけ早く対応お願いいたします

===================================

お名前：{onamae}

メールアドレス：{mail}

お問い合わせ内容：{contact-text}

===================================


2.お問い合わせ全パターン
MW WP Formコンテンツ

    Copy to clipboard
    
	
    wrap
	
<div class="form-group">
  <label>日付ピッカー</label>
  [mwform_datepicker name="my_date" size="30" class="form-control"]
</div>

<div class="form-group">
  <label>メールアドレス</label>
  [mwform_email name="mail" size="60" class="form-control"]
</div>

<div class="form-group">
  <label>ファイル入力</label>
  [mwform_file name="my_file" class="form-control-file"]
</div>

<div class="form-group">
  <label>画像アップロード</label>
  [mwform_image name="my_image" class="form-control-file"]
</div>

<div class="form-group">
  <label>月</label>
  [mwform_monthpicker name="monthpicker" size="30" class="form-control"]
</div>

<div class="form-group">
  <label>番号</label>
  [mwform_number name="my_number" step="1"]
</div>

<div class="form-group">
  <label>パスワード</label>
  [mwform_password name="password" size="60"]
</div>

<div class="form-group">
  <label>範囲</label>
  [mwform_range name="range" class="form-control-range" min="0" max="100" step="1"]
</div>

<div class="form-group">
  <label>電話番号</label>
  [mwform_tel name="tel" class="form-control"]
</div>

<div class="form-group">
  <label>テキスト</label>
  [mwform_text name="text" size="60" class="form-control"]
</div>

<div class="form-group">
  <label>テキストエリア</label>
  [mwform_textarea name="textarea" cols="50" rows="5" class="form-control"]
</div>

<div class="form-group">
  <label>URLフィールド</label>
  [mwform_url name="url" size="60" class="form-control"]
</div>

<div class="form-group">
  <label>郵便番号</label>
  [mwform_zip name="zip" class="form-control"]
</div>

<label>チェックボックス</label>
<div class="form-group form-check-inline">
  [mwform_checkbox name="checkbox" children="キー1:値1,キー2:値2" separator="," class="form-check-input"]
</div>

<label>ラジオボタン</label>
<div class="form-group form-check-inline">
  [mwform_radio name="radio" children="キー1:値1,キー2:値2" class="form-check-input"]
</div>

<div class="form-group">
  <label>セレクトボックス</label>
  [mwform_select name="select" children="キー1:値1,キー2:値2" class="custom-select"]
</div>

<div class="d-flex">
  [mwform_bconfirm class="btn btn-secondary" value="confirm"]確認画面へ[/mwform_bconfirm]

  [mwform_bsubmit name="my_submit" class="btn btn-secondary" value="send"]送信する[/mwform_bsubmit]

  [mwform_bback class="btn btn-secondary ml-3" value="back"]戻る[/mwform_bback]
</div>
3.お問い合わせ条件分岐
MW WP Formコンテンツ

    Copy to clipboard
    
	
    wrap
	
<div class="form-group">
  <label>お名前</label>
  [mwform_text name="name" class="form-control" size="60"]
</div>

<div class="form-group">
  <label>メールアドレス</label>
  [mwform_email name="mail" class="form-control" size="60"]
</div>

<div class="form-group">
  <label>お問い合わせ内容</label>
  [mwform_textarea name="content" class="form-control" cols="50" rows="5"]
</div>

<p>お問い合わせ種類</p>
<div class="form-group">
  [mwform_radio id="contact" name="contact-type" children="contact:お問い合わせ" value="contact" class="form-check-inline"]
  [mwform_radio id="mitsumori" name="contact-type" children="mitsumori:見積もり" class="form-check-inline"]
</div>

<div id="contact-check">
  <p>お問い合わせ内容</p>
  <div class="form-group form-check-inline">
    [mwform_checkbox name="contact" children="お問い合わせ内容１,お問い合わせ内容２" separator="," class="form-check-input"]
  </div>
</div>

<div id="mitsumori-check">
  <p>見積内容</p>
  <div class="form-group form-check-inline">
    [mwform_checkbox name="mitsumori" children="見積もり内容１,見積もり内容２" separator="," class="form-check-input"]
  </div>
</div>

<div class="d-flex">
  [mwform_bconfirm class="btn btn-secondary" value="confirm"]確認画面へ[/mwform_bconfirm]

  [mwform_bsubmit name="my_submit" class="btn btn-secondary" value="send"]送信する[/mwform_bsubmit]

  [mwform_bback class="btn btn-secondary ml-3" value="back"]戻る[/mwform_bback]
</div>
funstions.php

    Copy to clipboard
    
	
    wrap
	
/************************************************************
 * 3.お問い合わせ条件分岐
 * クリックで表示非表示が変わるmwform.jsを読み込む
 * https://plugins.2inc.org/mw-wp-form/action-hook/mwform_enqueue_scripts_mw-wp-form-xxx/
*************************************************************/
function my_mwform_enqueue_scripts() {
  wp_enqueue_script( 'mwform-script', get_template_directory_uri() . '/js/mwform.js', array(), '', true );
}
add_action( 'mwform_enqueue_scripts_mw-wp-form-118', 'my_mwform_enqueue_scripts' );


/************************************************************
 * 3.お問い合わせ条件分岐
 * MW WP FORM条件分岐 管理者用自動返信メール
 * https://plugins.2inc.org/mw-wp-form/filter-hook/mwform_admin_mail/
*************************************************************/
function autoback_my_mail( $Mail_raw, $values, $Data ) {
  if ($Data->get( 'contact-type' ) == '見積もり'){
    $Mail_raw->body =
      "──────────────────────────"."\n"."\n".
      'お名前　　　　　　:'.$Data->get('name')."\n"."\n".
      'メールアドレス　　:'.$Data->get( 'mail' )."\n"."\n".
      'お問い合わせ内容　:'.$Data->get('content')."\n"."\n".
      '見積内容          :'.$Data->get('mitsumori')."\n"."\n".
      '──────────────────────────'."\n"."\n"
    ;
  }
  return $Mail_raw;
}
add_filter( 'mwform_admin_mail_mw-wp-form-118','autoback_my_mail', 10, 3 );

/************************************************************
 * 3.お問い合わせ条件分岐
 * MW WP FORM 条件分岐 自動返信メール
 * https://plugins.2inc.org/mw-wp-form/filter-hook/mwform_auto_mail/
*************************************************************/
function my_mail( $Mail, $values, $Data ) {
  if ($Data->get( 'contact-type' ) == '見積もり'){
    $Mail->body =
    $Data->get( 'name' ). "様
      以下の内容でお問い合わせを承りました。
      1営業日以内に担当者よりご連絡いたします。
      それでは、今しばらくお待ちくださいませ。"."\n".
      "──────────────────────────"."\n"."\n".
      'お名前　　　　　　:'.$Data->get('name')."\n"."\n".
      'メールアドレス　　:'.$Data->get( 'mail' )."\n"."\n".
      'お問い合わせ内容　:'.$Data->get('content')."\n"."\n".
      '見積内容          :'.$Data->get('mitsumori')."\n"."\n".
      '──────────────────────────'."\n"."\n"
    ;
  }
  return $Mail;
}
add_filter( 'mwform_auto_mail_mw-wp-form-118', 'my_mail', 10, 3 );
フック末尾の番号は各自のフォームkeyにしてくださいね！
js/mwform.js

    Copy to clipboard
    
	
    wrap
	
(function($){
  var path = location.pathname ;
  if( path == '/sample/contact-3/') { 
    $('#contact-check').show();
    $('#mitsumori-check').hide();
    $('[name="contact-type"]:radio').change( function() {
        if( $('#contact-1').prop('checked')) {
            $('#contact-check').show();
            $('#mitsumori-check').hide();
        } else if ($('#mitsumori-1').prop('checked')) {
            $('#contact-check').hide();
            $('#mitsumori-check').show();
        } 
    });
  } else if( path == '/sample/confirm-3/') { 
    var contactType = $('input[name="contact-type"]').val();
    if( contactType == 'contact') {
        $('#contact-check').show();
        $('#mitsumori-check').hide();
    } else if (contactType == 'mitsumori') {
        $('#contact-check').hide();
        $('#mitsumori-check').show();
    } 
  }
})(jQuery);
4.郵便番号自動入力

    Copy to clipboard
    
	
    wrap
	
<div class="h-adr">
  <span class="p-country-name" style="display:none;">Japan</span>
  <div class="form-group">
    <label>郵便番号</label>
    [mwform_zip name="zip" size="8" class="p-postal-code form-control"]
  </div>
  <div class="form-group">
    <label>住所</label>
    [mwform_select name="region" children="都道府県を選択,北海道,青森県,岩手県,宮城県,秋田県,山形県,福島県,茨城県,栃木県,群馬県,埼玉県,千葉県,東京都,神奈川県,新潟県,富山県,石川県,福井県,山梨県,長野県,岐阜県,静岡県,愛知県,三重県,滋賀県,京都府,大阪府,兵庫県,奈良県,和歌山県,鳥取県,島根県,岡山県,広島県,山口県,徳島県,香川県,愛媛県,高知県,福岡県,佐賀県,長崎県,熊本県,大分県,宮崎県,鹿児島県,沖縄県" class="p-region form-control"]
  </div>
  <div class="form-group">
    <label>住所</label>
    [mwform_text name="locality" class="p-locality p-street-address p-extended-address form-control" placeholder=""]
  </div>
</div>

<div class="d-flex">
  [mwform_bconfirm class="btn btn-secondary" value="confirm"]確認画面へ[/mwform_bconfirm]

  [mwform_bsubmit name="my_submit" class="btn btn-secondary" value="send"]送信する[/mwform_bsubmit]

  [mwform_bback class="btn btn-secondary ml-3" value="back"]戻る[/mwform_bback]
</div>
functions.php

    Copy to clipboard
    
	
    wrap
	
/************************************************************
 * 4.お問合せフォーム 住所自動入力
 * 郵便番号自動入力
 * https://yubinbango.github.io/
*************************************************************/
function yubinbango_enqueue_scripts() {
  wp_enqueue_script( 'yubinbango-script', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), false, true );
}
add_action( 'mwform_enqueue_scripts_mw-wp-form-123', 'yubinbango_enqueue_scripts' );
5.カスタム投稿タイプお問い合わせ

    Copy to clipboard
    
	
    wrap
	
<div class="form-group">
  <label>カスタム投稿タイプを動的に出力</label>
  [mwform_checkbox name="products" class="form-check-label"]
</div>

<div class="form-group">
  <label>URL引数から指定</label>
  [mwform_checkbox name="products" value="{post_title}" class="form-check-label"]
</div>

<div class="form-group">
  <label>URL引数から指定</label>
  [mwform_text name="URL引数から指定" value="{post_name}" class="form-control"]
</div>

<div class="d-flex">
  [mwform_bconfirm class="btn btn-secondary" value="confirm"]確認画面へ[/mwform_bconfirm]

  [mwform_bsubmit name="my_submit" class="btn btn-secondary" value="send"]送信する[/mwform_bsubmit]

  [mwform_bback class="btn btn-secondary ml-3" value="back"]戻る[/mwform_bback]
</div>
funstions.php

    Copy to clipboard
    
	
    wrap
	
/************************************************************
* 5.お問合せフォーム カスタム投稿タイプを指定
* MW WP Form お問合せフォームの生地項目をカスタム投稿タイプから取得
* https://2inc.org/blog/2013/10/13/3743/
* https://plugins.2inc.org/mw-wp-form/filter-hook/mwform_choices/
*************************************************************/
function add_products( $children, $atts ) {
  // name属性が「products」の場合にカスタマイズ
  if ( $atts['name'] == 'products' ) {
    $args = array(
      'post_type' => array('book'),
      'posts_per_page' => -1,
    );
    $products = get_posts($args);

    foreach ( $products as $product ) {
        $children[$product->post_title] = $product->post_title;
    }
  }
  return $children;
}
add_filter( 'mwform_choices_mw-wp-form-126','add_products', 10, 2 );