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
                                    <a href="<?php echo home_url('top'); ?>" class="about-top-link">TOP</a>
                                </li>
                                <li>
                                    <!-- カテゴリー部分リンク設定 -->
                                    <?php
                                         $category = get_the_category();
                                         echo '<a href="' . esc_url(get_category_link($category[0]->term_id)) . '">' . $category[0]->name . '</a>';
                                    ?>
                                </li>
                                <!-- <li class="about-top-link-sub">お品書き</li>
                                <li class="about-top-link-sub2">味噌おにぎり</li> -->
                            </ul>
                     </div>
            </div>
    <div class="menu-detail-main">
        
    <?php
                if(have_posts()):
                while(have_posts()):
                the_post();
            ?>
            <div class="menu-main">
                <div class="menupage-main-area">
                    <div class="menu-detail">
                            <div class="menu-detail-item">
                                <!-- the_permalink() ページのURLを文字列を表示 -->
                                <a href="<?php the_permalink() ?>" class="menupage-link">
                                <!-- アイキャッチ画像の表示 -->
                                   <p><?php the_post_thumbnail('thumbnail'); ?></p>
                                </a>
                            </div>
                            <div class="menu-detail-text">
                                <!-- カスタムフィールドACFで出力 -->
                                <span class="menu-text1"><?php the_title(); ?></span>
                                <!-- カスタム投稿商品情報の詳細ページで金額を表示させる例※数値フィールド -->
                                <?php
                                    $price = get_field('price'); //金額
                                ?>
                                <h2 class="menu-text2"><?php echo number_format($price); ?>円</h2>
                            </div>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                else:
            ?>
             <?php
                endif;
             ?>
</main>

<?php get_footer(); ?>