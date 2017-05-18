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


<div class="nav-bar">

  <h2 class="logo">Sasakura Company</h2>

<div class="nav-menu">

  <ul>
    <li><a href="#">サービス</a></li>
    <li><a href="#">ポートフォリオ</a></li>
    <li><a href="#">会社概要</a></li>
    <li><a href="#">ブログ</a></li>
    <li><a href="#">コンタクト</a></li>
  </ul>
</div>


</div>

<div class="top-image">

  <h2>Sasakura Company</h2>
  <p>Sasakura CompanyはWordpressやWeb制作、デザインを行なっている会社です。
  </p>
  <a href="#">お問い合わせ</a>


</div>

<div class="service-wrapper">
  <h2>Service</h2>
  <p>Sasakura companyが提供するサービスを紹介します。</p>

  <div class="service-contents">
    <img src="<?php bloginfo('template_directory'); ?>/images/wordpress1.png">

    <h4>ウェブサイト制作</h4>
    <p>WordPressやCSSフレームワーク（Bootstrap）を活用したスマートフォン対応のWebサイトの構築を行います。</p>
  </div>

  <div class="service-contents">
    <img src="<?php bloginfo('template_directory'); ?>/images/palet.png">

    <h4>デザイン</h4>
    <p>ウェブサイトやスマホサイト、ステッカー、パッケージ写真、ユニフォームなどのデザインを行っています。</p>
  </div>

  <div class="service-contents">
    <img src="<?php bloginfo('template_directory'); ?>/images/lego.png">

    <h4>その他ウェブ作業</h4>
    <p>サイトの更新作業、ブログの投稿、ネットショッピングへの出品作業をしています。
        クラウドワークスやランサーズで受注しています。
    </p>
  </div>

</div>


<div class="portofolio-wrapper row">

  <div class="container">


  <h2>We Make it</h2>
  <p>Sasakura company が制作してきた作品です</p>

    <div class="portofolio-contents col-md-3">
      <a href="http://konboku.com/">
        <img src="<?php bloginfo('template_directory'); ?>/images/utu-blog2.jpg" class="img-rounded">

      </a>
    </div>


    <div class="portofolio-contents col-md-3">
      <a href="http://konboku.com/">
        <img src="<?php bloginfo('template_directory'); ?>/images/utu-blog2.jpg" class="img-rounded">

      </a>
    </div>

    <div class="portofolio-contents col-md-3">
      <a href="http://konboku.com/">
        <img src="<?php bloginfo('template_directory'); ?>/images/utu-blog2.jpg" class="img-rounded">

      </a>
    </div>

  </div>



</div>


<div class="about-wrapper">

  <h2>About</h2>

</div>
