<h3>カテゴリ</h3>
<p>営業日時</p>
<p>キャンペーン</p>
<p>その他</p>

<?php
           $args = array(
             'hide_empty' => 1, // 投稿記事があるカテゴリーのみ表示する
             'title_li' => '',  // リストの外側に表示するタイトルと表示形式（''であれば何も表示しない）
           );
           wp_list_categories( $args ); 
         ?>

<?php
           $args = array(
             'posts_per_page' => 3 //表示件数の指定
           );
           $posts = get_posts( $args );
           foreach ( $posts as $post ): //ループの開始
           setup_postdata( $post ); //記事データのセット
         ?>
         <li>
           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
         </li>
         <?php
           endforeach;
           wp_reset_postdata(); //今回作成したクエリをリセットする
         ?>