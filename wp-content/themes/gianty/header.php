<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja" dir="ltr">
<head>
<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/bootstrap/bootstrap.css">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-style-type" content="text/css" />
<meta name="viewport" content="width=device-width,user-scalable=yes,initial-scale=1.0">
<title><?php bloginfo( 'name' ); wp_title( '|', true, 'left' ); 
    global $page, $paged;
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; ?>
</title>
<?php wp_head(); ?>
<link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/img/share/favicon.png">

</head>
<body <?php body_class(); ?> >

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=226942327444861";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <div class="wrapper">
    <div id="header">
      <h1 class="logo"><a href="/"><img src="<?php bloginfo("template_url"); ?>/img/share/logo-gianty.jpg" height="45" width="105" alt="GNT" /></a></h1>
      <p class="info_contact hidden-xs">
        <a href="/contact/">
          <span class="number">03-5766-6002(オフショア開発事業部直通)</span>
          <span>お問い合わせ・ご相談</span>
        </a>
      </p>
      <p class="txt_header">ベトナムITオフショア開発のGNTは、成長するラボ型開発チームをご提供します。<br />エンジニア・デザイナーの在籍200名突破！</p>
      <div class="btn_menu"><img src="<?php bloginfo("template_url"); ?>/img/share/sp/btn-menu_off.gif" height="28" width="34" alt="button menu" /></div>
    <!-- /#header --></div>
  <?php 
    if(is_home()||is_front_page()){ 
      include(locate_template('inc/slider.php'));
    } 
  ?>
  
  <div id="global_nav">
    <div class="inner">
      <div class="wrap_menu">
        <ul class="top_nav">
          <li class="home <?php if(is_home()) { echo 'current'; } ?>"><a href="/">Home</a></li>
          <li class="news <?php if(is_singular( 'news' ) || is_post_type_archive( 'news' )) { echo 'current'; } ?>"><a href="/news/">ニュース</a></li>
          <li class="company <?php if(is_page('company')||is_child('company')) { echo 'current'; } ?>">
            <a href="/company/" class="have_sub">企業情報</a>
            <ul class="sub_nav">
              <li><a href="/company/">基本情報</a></li>
              <li><a href="/company/message/">役員紹介</a></li>
              <li><a href="/company/staffs/">スタッフ紹介</a></li>
              <li><a href="/company/gallery/">ギャラリー</a></li>
              <li><a href="/company/recruit/">求人情報</a></li>
            </ul>
          </li>
          <li class="services <?php if(is_page('services')||is_child('services')) { echo 'current'; } ?>">
            <a href="/services/lab/" class="have_sub">サービス</a>
            <ul class="sub_nav">
              <li><a href="/services/lab/">ラボ型開発</a></li>
            </ul>
          </li>
          <li class="vietnam <?php if(is_page('about-viet-nam')) { echo 'current'; } ?>"><a href="/about-viet-nam/">ベトナムの魅力</a></li>
          <li class="faq <?php if(is_singular( 'faq' ) || is_post_type_archive( 'faq' )) { echo 'current'; } ?>"><a href="/faq/">FAQ</a></li>
          <li class="recruit <?php if(is_page('achievement')) { echo 'current'; } ?>"><a href="/achievement/">実績紹介</a></li>
          <li class="contact <?php if(is_page('contact')) { echo 'current'; } ?>"><a href="/contact/">お問い合わせ</a></li>
        </ul>
        <div class="btn_close"><span>閉じる</span></div>
      <!-- /.wrap_menu --></div>
    <!-- /.inner --></div>
  <!-- /#global_nav --></div>