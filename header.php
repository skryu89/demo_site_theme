<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <title>新宿のホームページ制作会社  XXX</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script.js"></script>
    <?php wp_head(); ?>
</head>    

<body>
<header><!-- ここからヘッダー-->
    <div class="w_inner">
        <div id="top">
            <div class="tagline">新宿のホームページ制作</div>
        </div>
    <nav id="main_menu" class="w_inner">
           <ul>
              <li><a href="<?php bloginfo('url'); ?>">トップ</a></li>
              <li><a href="<?php bloginfo('url'); ?>/service">サービス</a></li>
              <li><a href="<?php bloginfo('url'); ?>/price">料金案内</a></li>
              <li><a href="<?php bloginfo('url'); ?>/news">ニュース</a><li>
              <li><a href="<?php bloginfo('url'); ?>/company">会社概要</a></li>
              <li><a href="<?php bloginfo('url'); ?>/content">お問合せ</a></li>
           </ul>
    </nav>
</div>
<?php if(is_front_page()){ ?>
<div class="header_img"><!-- TOPページ用 -->
    <img src="<?php bloginfo('template_url'); ?>./img/header_img.jpg" srcset="./img/header_img@2x.jpg 2x" alt="">
</div>
<?php }else if(is_page('service')){ ?>
<div class="header_img"><!-- サービス用 -->
    <img src="<?php bloginfo('template_url'); ?>./img/header_service.jpg" srcset="./img/header_service@2x.jpg 2x" alt="">
</div>
<?php }else if(is_page('price')){ ?>
<div class="header_img"><!-- 料金案内用 -->
    <img src="<?php bloginfo('template_url'); ?>./img/header_price.jpg" srcset="./img/header_price@2x.jpg 2x" alt="">
</div>
<?php }else if(is_page('company')){ ?>
<div class="header_img"><!-- 会社概要用 -->
    <img src="<?php bloginfo('template_url'); ?>./img/header_company.jpg" srcset="./img/header_company@2x.jpg 2x" alt="">
</div>
<?php }else if(is_page('contact')){ ?>
<div class="header_img"><!-- お問い合わせ -->
    <img src="<?php bloginfo('template_url'); ?>./img/header_contact.jpg" srcset="./img/header_contact@2x.jpg 2x" alt="">
</div>
<?php }else if(is_archive()){ ?>
<div class="header_img"><!-- ニュース -->
    <img src="<?php bloginfo('template_url'); ?>./img/header_news.jpg" srcset="./img/header_news@2x.jpg 2x" alt="">
</div>
<?php }else{} ?>
</header><!-- ここまでヘッダー -->

<div id="wrap">
