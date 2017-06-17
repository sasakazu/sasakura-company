<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
  </head>

  <body>

    <?php wp_head(); ?>

    <script>
  //スムーズスクロール
  jQuery(function(){
     // #で始まるアンカーをクリックした場合に処理
     jQuery('a[href^=#]').click(function() {
      // スクロールの速度
      var speed = 600; // ミリ秒
      // アンカーの値取得
      var href= jQuery(this).attr("href");
      // 移動先を取得
      var target = jQuery(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top;
      // スムーススクロール
      jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
     });
  });
  </script>



<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>">Sasakura Company</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


      <ul class="nav navbar-nav navbar-right">
          <li>
            <?php wp_nav_menu(); ?>

          </li>



        <!-- <li><a href="#servise">サービス</a></li>
        <li><a href="#portofolio">ポートフォリオ</a></li>
        <li><a href="#about">会社概要</a></li>
        <li><a href="http://konboku.com/" target="_blank">ブログ</a></li>
        <li><a href="#contact">お問い合わせ</a></li>
        <li><a href="/index.php/categories/blog/" target="_blank">ブログ</a></li> -->




      </ul>
    </div>
  </div>
</nav>


<div class="top-image">



  <h2>Sasakura Company</h2>
  <p>Sasakura CompanyはWordpressやWeb制作、デザインを行なっている会社です。
  </p>
  <a href="#contact">お問い合わせ</a>


</div>
