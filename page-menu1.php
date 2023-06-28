<?php get_header(); ?>

<main>
            <div class="about-main">
                    <div class="about-content-main">
                            <div class="about-main-area">
                                <div class="about-main-areaText">
                                    <div class="top-about-title">
                                        <h1 class="tabout-tit">MENU</h1>
                                        <span class="sub-tab-text">お品書き</span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="link-area-top">
                        <div class="link-area-about">
                            <ul class="list-link-about">
                                <li class="list-alink">
                                    <a href="#" class="about-top-link">TOP</a>
                                </li>
                                <li class="about-top-link-sub">お品書き</li>
                            </ul>
                     </div>
            </div>

            <?php 
                $args = array(
                    'post_type' => array('menu'), //投稿タイプスラッグ
                    'posts_per_page' => 12
                 );

                // $the_query = new WP_Query( $args );
                $my_posts = get_posts($args);
                echo count($my_posts);
                echo "aaa";
                $post = get_page_by_path('menu');
                // 固定ページのカスタムフィールドの内容を取得
                // get_field('フィールド名','投稿ID','フォーマットバリュー');
                
                $postID = $post->ID;
            ?>
            <?php
                if(have_posts() ):
            ?>

            <div class="menu-main">
                <div class="menupage-main-area">
                  <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
                    <div class="menu-detail">
                            <div class="menu-detail-item">
                                    <!-- the_permalink() ページのURLを文字列を表示 -->
                                    <a href="<?php the_permalink() ?>" class="menupage-link">
                                    <!-- アイキャッチ画像の表示 -->
                                    <!-- the_field の2つ目の引数を個々のidを取得する -->
                                    <!-- 画像URLを取得する -->
                                        <img src="<?php the_field('menu_img'); ?>" alt="画像投稿" class="ac-img">
                                    </a>
                            </div>
                            <div class="menu-detail-text">
                                <!-- カスタムフィールドACFで出力 -->
                                <span class="menu-text1"><?php the_field('menu_text'); ?></span>
                                <!-- カスタム投稿商品情報の詳細ページで金額を表示させる例※数値フィールド -->
                                <?php
                                    $price = get_field('menu_price'); //金額
                                ?>
                                <h2 class="menu-text2"><?php echo number_format($price); ?>円</h2>
                            </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
</main>
<?php get_footer(); ?>