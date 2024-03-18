<?php
/*
+Template Name: イベント投稿ページ
+Template Post Type: post
+*/
?>

<?php get_header(); ?>
 
 <?php if(have_posts()) :?>
   <?php while (have_posts()) : the_post() ; ?>
        <main>
            <p id="aboutus">ホーム > お知らせ > お知らせ詳細</p>


        <section id="article-separate">
            <div id="article-content">
                <h2> <?php the_title(); ?></h2>
                <p><?php echo post_custom('month'); ?>月<span><?php echo post_custom('day'); ?></span><span>日</span>　　<img src="top-images/open-hour.png"></p>            
                <img src="top-images/Topic1.png">
                    <div class="article-box">
                        <h2><?php the_content(); ?></h2>
                    </div>
                    <div id="pages">
                        <a href="/"><　前の記事へ</a>
                        <a href="/">一覧</a>
                        <a href="/">次の記事へ　></a>
                    </div>
            </div>
            <?php endwhile; ?>
     <?php endif; ?>
            <div id="category">
            <?php get_sidebar(); ?>
            </div>
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
                    <a href="<?php echo home_url(); ?>/category/contact"><img src="<?php echo get_template_directory_uri(); ?>/top-images/info-button.png"></a>
                </div>
                <div id="infomation-right">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.068855133684!2d139.7720776753246!3d35.699923172581144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188fee13660e23%3A0x77137876edf742ac!2z5L2P5Y-L5LiN5YuV55Sj56eL6JGJ5Y6f6aeF5YmN44OT44Or!5e0!3m2!1sja!2sjp!4v1708180355053!5m2!1sja!2sjp" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="sp-map"></iframe>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.068855133684!2d139.7720776753246!3d35.699923172581144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188fee13660e23%3A0x77137876edf742ac!2z5L2P5Y-L5LiN5YuV55Sj56eL6JGJ5Y6f6aeF5YmN44OT44Or!5e0!3m2!1sja!2sjp!4v1708180355053!5m2!1sja!2sjp" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="pc-map"></iframe>
                </div>
            </div>
        </div>
    </main>
        <?php get_footer(); ?>