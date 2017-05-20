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



<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Sasakura Company</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">サービス</a></li>
        <li><a href="#">ポートフォリオ</a></li>
        <li><a href="#">会社概要</a></li>
        <li><a href="#">ブログ</a></li>
        <li><a href="#">お問い合わせ</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="top-image">



  <h2>Sasakura Company</h2>
  <p>Sasakura CompanyはWordpressやWeb制作、デザインを行なっている会社です。
  </p>
  <a href="#">お問い合わせ</a>


</div>
