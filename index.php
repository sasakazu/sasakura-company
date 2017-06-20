

<?php get_header(); ?>




<div class="top-image">



  <h2>Sasakura Company</h2>
  <p>Sasakura CompanyはWordpressやWeb制作、デザインを行なっている会社です。
  </p>
  <a href="#contact">お問い合わせ</a>


</div>





<div class="service-wrapper" id="servise">
  <div class="container">

  <h2>Service</h2>
  <p>Sasakura companyが提供するサービスを紹介します。</p>

  <div class="service-contents col-md-4">
    <img src="<?php bloginfo('template_directory'); ?>/images/wordpress1.png">

    <h4>ウェブサイト制作</h4>
    <p>WordPressやCSSフレームワーク（Bootstrap）を活用したスマートフォン対応のWebサイトの構築を行います。</p>
  </div>

  <div class="service-contents col-md-4">
    <img src="<?php bloginfo('template_directory'); ?>/images/palet.png">

    <h4>デザイン</h4>
    <p>ウェブサイトやスマホサイト、ステッカー、パッケージ写真、ユニフォームなどのデザインを行っています。</p>
  </div>

  <div class="service-contents col-md-4">
    <img src="<?php bloginfo('template_directory'); ?>/images/lego.png">

    <h4>その他ウェブ作業</h4>
    <p>サイトの更新作業、ブログの投稿、ネットショッピングへの出品作業をしています。
        クラウドワークスやランサーズで受注しています。
    </p>
  </div>

</div>


</div>


<div class="portofolio-wrapper" id="portofolio">

  <div class="container">


  <h2>We Make it</h2>
  <p>Sasakura company が制作してきた作品です</p>

    <div class="portofolio-contents col-sm-6 col-md-3">
      <a href="http://konboku.com/" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/runaway.png" class="img-rounded">

      </a>
    </div>

    <div class="portofolio-contents col-sm-6 col-md-3">
      <a href="" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/commingsoon.png" class="img-rounded">

      </a>
    </div>


    <div class="portofolio-contents col-sm-6 col-md-3">
      <a href="" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/commingsoon.png" class="img-rounded">

      </a>
    </div>

    <div class="portofolio-contents col-sm-6 col-md-3">
      <a href="" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/commingsoon.png" class="img-rounded">

      </a>
    </div>

  </div>



</div>


<div class="about-wrapper" id="about">
  <div class="container">



    <div class="col-md-4 about-contents">
      <img src="<?php bloginfo('template_directory'); ?>/images/about.png">
      <p>私たちについて</p>
      <h2>About</h2>

    </div>


    <div class="col-md-8 about-contents">

      <table class="table">
          <th>社名</th>
          <td>Sasakura company</td>
      </table>

      <table class="table">
          <th>代表</th>
          <td>笹倉一也</td>
      </table>

      <table class="table">
          <th>事業内容</th>
          <td>ウェブ制作、ワードプレス、SEO、更新</td>
      </table>

      <table class="table">
          <th>所在地</th>
          <td>滋賀県草津市青地町</td>
      </table>



      <table class="table">
        <th></th>
        <td></td>
      </table>

  </div>

</div>
</div>


<div class="contact-wrapper" id="contact">
  <div class="container">

    <h2>CONTACT</h2>

    <div class="contact-contents">
      <?php echo do_shortcode('[contact-form-7 id="36" title="コンタクトフォーム 1"]'); ?>

    </div>

  </div>
</div>



<?php get_footer(); ?>
