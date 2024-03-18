<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>SAMURAI整体院</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <meta name="description" content="SAMURAI整体院は、根本的な症状改善をサポートします"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Shippori+Mincho&display=swap" rel="stylesheet">    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
<?php wp_head();?>
</head>
    <body>
        <header>
            <nav id="nav-pc">
                <div id="top-logo">
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-logo.png"></a>
                </div>
                <div id="top-list">
                    <a href="/">ホーム　</a>
                    <a href="<?php echo home_url(); ?>/category/about">当院について　</a>
                    <a href="<?php echo home_url(); ?>/category/course">コース・料金　</a>
                    <a href="<?php echo home_url(); ?>/category/news">お知らせ　</a>
                    <a href="<?php echo home_url(); ?>/category/voice">お客様の声　</a>
                    <a href="<?php echo home_url(); ?>/category/contact"><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-button.png"></a>
                </div>
            </nav>
            <!-- スマホ用ロゴ -->
            <nav id="top-logo-sp">
                <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-logo.png"></a>
            </nav>
               <!-- スマホ用メニューボタン -->
            <nav id="button-sp">
               <img id="menu-sp" src="<?php echo get_template_directory_uri(); ?>/top-images/navigation.png" alt="ナビゲーションを開く" onclick="document.getElementById('nav-sp').style.display='block'">
            </nav>
                <!-- スマホ用ナビゲーション -->
         <nav id="nav-sp">
            <img id="close" src="<?php echo get_template_directory_uri(); ?>/top-images/close.png" alt="ナビゲーションを閉じる" onclick="document.getElementById('nav-sp').style.display = 'none'">
            <a id="logo-sp" href="/" onclick="document.getElementById('nav-sp').style.display = 'none'"><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-logo.png" alt="トップページに戻る"></a>
            <h3>メニュー</h3>
            <a class="menu" href="/" onclick="document.getElementById('nav-sp').style.display = 'none'">ホーム</a>
            <a class="menu" href="<?php echo home_url(); ?>/category/about" onclick="document.getElementById('nav-sp').style.display = 'none'">当院について</a>
            <a class="menu" href="<?php echo home_url(); ?>/category/course" onclick="document.getElementById('nav-sp').style.display = 'none'">コース・料金</a>
            <a class="menu" href="<?php echo home_url(); ?>/category/news" onclick="document.getElementById('nav-sp').style.display = 'none'">お知らせ</a>
            <a class="menu" href="<?php echo home_url(); ?>/category/voice" onclick="document.getElementById('nav-sp').style.display = 'none'">お客様の声</a>
            <a id="button-sp" href="<?php echo home_url(); ?>/category/contact" onclick="document.getElementById('nav-sp').style.display = 'none'"><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-button.png" alt="ご予約・お問い合わせ"></a>
        </nav>
        <div id="top-content">
            <p>根本的な症状改善を<br>サポートします</p>
        </div>
            <!-- PC用カルーセル -->
        <div class="top-images">
            <div><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-carousel1.png" class="carouselImg"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-carousel2.png" class="carouselImg"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-carousel3.png" class="carouselImg"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-carousel4.png" class="carouselImg"></div>
        </div>
        <!-- スマホ用カルーセル -->
        <div class="top-images-sp">
            <div><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-carousel1.png" class="carouselImg"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-carousel2.png" class="carouselImg"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-carousel3.png" class="carouselImg"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-carousel4.png" class="carouselImg"></div>
        </div>
    </header>