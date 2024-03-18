<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>SAMURAI整体院</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/home.css">
        <meta name="description" content="SAMURAI整体院は、根本的な症状改善をサポートします"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Shippori+Mincho&display=swap" rel="stylesheet">    
<?php wp_head();?>
</head>
    <body>
        <header>
            <!-- PC用ナビ -->
            <nav id="nav-pc">
                <div id="top-logo">
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-logo.png"></a>
                </div>
                <div id="about-list">
                    <a href="/">ホーム　</a>
                    <a href="<?php echo home_url(); ?>/category/about">当院について　</a>
                    <a href="<?php echo home_url(); ?>/category/course">コース・料金　</a>
                    <a href="<?php echo home_url(); ?>/category/news">お知らせ　</a>
                    <a href="<?php echo home_url(); ?>/category/voice">お客様の声　</a>
                    <a href="<?php echo home_url(); ?>/category/contact"><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-button.png"></a>
                <div>
           </nav>
           <!-- スマホ用ロゴ -->
           <div id="top-logo-sp">
            <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-logo.png"></a>
        </div>
           <!-- スマホ用メニューボタン -->
           <img id="menu-sp" src="<?php echo get_template_directory_uri(); ?>/top-images/navigation.png" alt="ナビゲーションを開く" onclick="document.getElementById('nav-sp').style.display='block'">

            <!-- スマホ用ナビゲーション -->
     <nav id="nav-sp">
        <img id="close" src="<?php echo get_template_directory_uri(); ?>/top-images/close.png" alt="ナビゲーションを閉じる" onclick="document.getElementById('nav-sp').style.display = 'none'">
        <a id="logo-sp" href="/" onclick="document.getElementById('nav-sp').style.display = 'none'"><img src="top-images/top-logo.png" alt="トップページに戻る"></a>
        <h3>メニュー</h3>
        <a class="menu" href="/" onclick="document.getElementById('nav-sp').style.display = 'none'">ホーム</a>
        <a class="menu" href="<?php echo home_url(); ?>/category/about" onclick="document.getElementById('nav-sp').style.display = 'none'">当院について</a>
        <a class="menu" href="<?php echo home_url(); ?>/category/course" onclick="document.getElementById('nav-sp').style.display = 'none'">コース・料金</a>
        <a class="menu" href="<?php echo home_url(); ?>/category/news" onclick="document.getElementById('nav-sp').style.display = 'none'">お知らせ</a>
        <a class="menu" href="<?php echo home_url(); ?>/category/voice" onclick="document.getElementById('nav-sp').style.display = 'none'">お客様の声</a>
        <a id="button-sp" href="<?php echo home_url(); ?>/category/contact" onclick="document.getElementById('nav-sp').style.display = 'none'"><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-button.png" alt="ご予約・お問い合わせ"></a>
      </nav>
      
            <div id="about-content">
                <p>Information</p>
                <span>お知らせ</span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/top-images/SP-Voice1.png" id="sp-about-img">
            <div id="about-content-sp">
                <p>Information</p>
                <span>お知らせ</span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/top-images/Voice1.png" id="about-img">
            
        </header>

        <main>
            <p id="aboutus">ホーム > お知らせ</p>


        <section id="article-separate">
        <?php
               //取得したい投稿記事などの条件を引数として渡す
               $args = array(
                   // 投稿タイプ
                   'post_type'      => 'post',
                   // カテゴリー名
                   'category_name' => 'news',
                   // 1ページに表示する投稿数
                   'posts_per_page' => 10,
               );
               // データの取得
               $posts = get_posts($args);
             ?>
 
             <!-- ループ処理 -->
             <?php foreach($posts as $post): ?>
             <?php setup_postdata($post); ?>
             <div class="news_post_small">
               <div class="news_post_meta">
                 <ul>
                   <li>
                     <!-- aタグで投稿記事へのリンクを作成 -->
                     <a href="<?php echo get_permalink(); ?>">
                       <!-- 日付を出力する -->
                       <?php echo get_the_date(); ?>
                     </a>
                   </li>
                 </ul>
               </div>
               <div class="news_post_small_title">
                 <!--  aタグで投稿記事へのリンクを作成する -->
                 <a href="<?php the_permalink(); ?>">
                   <!--  投稿記事のタイトルを表示する -->
                   <?php the_title(); ?>
                 </a>
               </div>
             </div>
 
             <?php endforeach; ?>
             <!-- 使用した投稿データをリセット -->
             <?php wp_reset_postdata(); ?>
          




            <div id="category">
                <h3>カテゴリ</h3>
                <p>営業日時</p>
                <p>キャンペーン</p>
                <p>その他</p>
            </div>
        </section>
        <section id="page">
            <img src="<?php echo get_template_directory_uri(); ?>/top-images/pages.png">
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#F0F5E1" fill-opacity="1" d="M0,32L80,80C160,128,320,224,480,229.3C640,235,800,149,960,112C1120,75,1280,85,1360,90.7L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
        <div id="info">
            <div id="info-top">
                <h3 id="info-title">  お気軽にご来院ください  </h3>
            </div>
            <div id="info-content">
                <div id="infomation-left">
                    <h3>JR「秋葉原駅」より徒歩1分</h3>
                    <p>〒101-022<br>
                    東京都千代田区神田練塀町300番地<br>
                    住友不動産秋葉原駅前ビル5F</p>
                    <h3>tel:03-1234-5678</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/top-images/info-days.png">
                    <a href="page-contact.html"><img src="<?php echo get_template_directory_uri(); ?>/top-images/info-button.png"></a>
                </div>
                <div id="infomation-right">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.068855133684!2d139.7720776753246!3d35.699923172581144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188fee13660e23%3A0x77137876edf742ac!2z5L2P5Y-L5LiN5YuV55Sj56eL6JGJ5Y6f6aeF5YmN44OT44Or!5e0!3m2!1sja!2sjp!4v1708180355053!5m2!1sja!2sjp" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="sp-map"></iframe>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.068855133684!2d139.7720776753246!3d35.699923172581144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188fee13660e23%3A0x77137876edf742ac!2z5L2P5Y-L5LiN5YuV55Sj56eL6JGJ5Y6f6aeF5YmN44OT44Or!5e0!3m2!1sja!2sjp!4v1708180355053!5m2!1sja!2sjp" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="pc-map"></iframe>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <nav>
            <div id="footer">
                <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-logo.png"></a>
                <a href="/">ホーム</a>
                <a href="<?php echo home_url(); ?>/category/about">当院について　</a>
                <a href="<?php echo home_url(); ?>/category/course">コース・料金　</a>
                <a href="<?php echo home_url(); ?>/category/news">お知らせ　</a>
                <a href="<?php echo home_url(); ?>/category/voice">お客様の声　</a>
                <a href="<?php echo home_url(); ?>/category/contact">ご予約・お問い合わせ</a>
            </div>
        </nav>
        <div id="last">
            <p>&copy;2023 SAMURAI整体院</p>
            <a id="back-btn" href="#"><img src="<?php echo get_template_directory_uri(); ?>/top-images/scroll.png"></a>
        </div>
    </footer>
    <script>
        const backBtn = document.getElementById('back-btn');
        window.addEventListener('scroll', () => {
        const scrollValue = document.scrollingElement.scrollTop;
        if (scrollValue >= 300) {
        backBtn.style.display = 'inline';
        }
        else {
        backBtn.style.display = 'none';
        }
        });
        </script>
</body>
</html>