<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destyle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/shop.css">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/onigiri_tenmusu.png">
    <!-- JavaScript読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javaScript" charset="utf-8"></script>
    <title>おにぎりや</title>
</head>
<body>
    <header>
        <!-- ハンバーガーメニュー開いととき -->
            <div class="nav-sp-main">
                <nav class="nav-sp">
                    <ul class="nav-list-sp">
                        <li class="nav-item"><a href="">おにぎりや</a></li>
                        <li class="nav-item"><a href="">こだわり</a></li>
                        <li class="nav-item"><a href="">メニュー</a></li>
                        <li class="nav-item"><a href="">新着情報</a></li>
                        <li class="nav-item"><a href="">店舗情報</a></li>
                    </ul>
                </nav>
                <div class="sns-header">
                    <div class="sns-header-main">
                        <ul class="sns-area-header">
                            <li class="sns-area-detail"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/insta.png" alt="インスタアイコン" alt="" class="sns-icon-header"></a></li>
                            <li lass="sns-area-detail"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="twitterアイコン" alt="" class="sns-icon-header"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="tell-header">
                    <div class="tell-mail-main">
                        <div class="contact-area-header">
                            <a href="<?php echo home_url('contact'); ?>" class="header-contact-link">
                                <div class="contact-link-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mail-hbmenu.png" alt="メールアイコン" class="con-link-icon">
                                </div>
                                <span class="contact-text">お問い合わせ <br>
                                来店予約
                                </span>

                            </a>
                        </div>
                        <div class="tell-area-header">
                            <a href="<?php echo home_url('contact'); ?>" class="header-contact-link">
                                <div class="contact-link-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/tell-icon.png" alt="メールアイコン" class="con-link-icon">
                                </div>
                                <span class="tell-text">お電話</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
         <!-- ハンバーガーメニュー開いととき ここまで -->
       <nav id="gnav">
           <div class="logo-area-top">
               <a href="#" class="logo-area-maintop"><img src="<?php echo get_template_directory_uri(); ?>/images/onigiri_tenmusu.png" alt="ロゴ" class="logo-img"></a>
           </div>
           <div class="header-main-nav">
                <div class="inner-main-area">
                        <div class="inner-area">
                            <div class="header-tell">
                                <p class="tell">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/tell-icon.png" alt="電話アイコン" class="tell-icon">
                                    <span>0120-123-456</span>
                                </p>
                                    <div class="header-menu-area">
                                        <ul class="inner">
                                                <li class="inner_child"><a href="<?php echo home_url('top'); ?>" class="inner_text">おにぎりや</a></li>
                                                <li class="inner_child"><a href="<?php echo home_url('about'); ?>" class="inner_text">こだわり</a></li>
                                                <li class="inner_child"><a href="<?php echo home_url('menu'); ?>" class="inner_text">お品書き</a></li>
                                                <li class="inner_child"><a href="<?php echo home_url('news'); ?>" class="inner_text">新着情報</a></li>
                                                <li class="inner_child"><a href="<?php echo home_url('shop'); ?>" class="inner_text">店舗情報</a></li>
                                        </ul>
                                        <div class="header-box">
                                            <div class="sns-area">
                                                <ul class="sns-list">
                                                    <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/insta.png" alt="インスタアイコン" class="insta-icon"></a></li>
                                                    <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="twitterアイコン" class="twitter-icon"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                </div>
                <div class="contact-main-area">
                    <div class="contact-area">
                            <a href="#" class="contact-link">
                                <div class="contact-title">
                                    <span class="contact-icon"></span>
                                        <p class="contact-text">
                                            <span class="contact-text1">お問い合わせ</span>
                                            <span class="contact-text1">予約</span>
                                        </p>
                                </div>
                            </a>
                    </div>
                </div>
           </div>
           <div class="inner-main-area-sp">
               <button class="hamburger">
                    <span class="hamburger_bar"></span>
                    <span class="hamburger_bar"></span>
                    <span class="hamburger_bar"></span>
               </button>
                <div class="humbager-sns">
                    <div class="hmb-snslist">
                        <li class="sns-list">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/insta.png" alt="インスタアイコン" class="insta-icon-sp"></a>
                        </li>
                        <li class="sns-list">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="twitterアイコン" class="twitter-icon-sp"></a>
                        </li>
                    </div>
                </div>
           </div>
       </nav>
    </header>