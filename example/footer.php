<footer>
            <nav>
                <div id="footer">
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/top-images/top-logo.png"></a>
                    <a href="/">ホーム</a>
                    <a href="<?php echo home_url(); ?>/category/about">当院について</a>
                    <a href="<?php echo home_url(); ?>/category/ncourse">コース・料金</a>
                    <a href="<?php echo home_url(); ?>/category/news">お知らせ</a>
                    <a href="<?php echo home_url(); ?>/category/voice">>お客様の声</a>
                    <a href="<?php echo home_url(); ?>/category/contact">ご予約・お問い合わせ</a>
                </div>
            </nav>
            <div id="last">
                <p>&copy;2023 SAMURAI整体院</p>
                <a id="back-btn" href="#"><img src="<?php echo get_template_directory_uri(); ?>/top-images/scroll.png"></a>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script id="script-pc">
            $('.top-images').slick({
                autoplay: true,
                dots: true,
            });
        </script>
         <script id="script-sp">
            $('.top-images-sp').slick({
                autoplay: true,
                dots: true,
            });
        </script>
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
        <?php wp_footer(); ?>
    </body>
</html>