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
                    <div class="menu-detail">
                            <div class="menu-detail-item">
                                <a href="<?php the_permalink() ?>" class="menupage-link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/menu-img2.jpg" alt="メニュー2" class="menupage-item">
                                </a>
                            </div>
                            <div class="menu-detail-text">
                                <span class="menu-text1">天むす</span>
                                <h2 class="menu-text2">600円</h2>
                            </div>
                    </div>
                    <div class="menu-detail">
                            <div class="menu-detail-item">
                                <a href="<?php the_permalink() ?>" class="menupage-link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/menu-img3.jpg" alt="メニュー3" class="menupage-item">
                                </a>
                            </div>
                            <div class="menu-detail-text">
                                <span class="menu-text1">豆おにぎり</span>
                                <h2 class="menu-text2">350円</h2>
                            </div>
                    </div>
                    <div class="menu-detail">
                            <div class="menu-detail-item">
                                <a href="<?php the_permalink() ?>" class="menupage-link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/menu-img4.jpg" alt="メニュー4" class="menupage-item">
                                </a>
                            </div>
                            <div class="menu-detail-text">
                                <span class="menu-text1">焼きおにぎり</span>
                                <h2 class="menu-text2">400円</h2>
                            </div>
                    </div>
                    <div class="menu-detail">
                            <div class="menu-detail-item">
                                <a href="<?php the_permalink() ?>" class="menupage-link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/menu-img5.jpg" alt="メニュー5" class="menupage-item">
                                </a>
                            </div>
                            <div class="menu-detail-text">
                                <span class="menu-text1">明太子茶漬け</span>
                                <h2 class="menu-text2">450円</h2>
                            </div>
                    </div>
                    <div class="menu-detail">
                            <div class="menu-detail-item">
                                <a href="<?php the_permalink() ?>" class="menupage-link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/menu-img6.jpg" alt="メニュー6" class="menupage-item">
                                </a>
                            </div>
                            <div class="menu-detail-text">
                                <span class="menu-text1">お味噌汁</span>
                                <h2 class="menu-text2">300円</h2>
                            </div>
                    </div>
                    <div class="menu-detail">
                            <div class="menu-detail-item">
                                <a href="<?php the_permalink() ?>" class="menupage-link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/menu-img7.jpg" alt="メニュー7" class="menupage-item">
                                </a>
                            </div>
                            <div class="menu-detail-text">
                                <span class="menu-text1">サワラ焼き定食</span>
                                <h2 class="menu-text2">750円</h2>
                            </div>
                    </div>
                    <div class="menu-detail">
                            <div class="menu-detail-item">
                                <a href="<?php the_permalink() ?>" class="menupage-link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/menu-img8.jpg" alt="メニュー8" class="menupage-item">
                                </a>
                            </div>
                            <div class="menu-detail-text">
                                <span class="menu-text1">唐揚げ</span>
                                <h2 class="menu-text2">350円</h2>
                            </div>
                    </div>
                    <div class="menu-detail">
                            <div class="menu-detail-item">
                                <a href="<?php the_permalink() ?>" class="menupage-link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/menu-img9.jpg" alt="メニュー9" class="menupage-item">
                                </a>
                            </div>
                            <div class="menu-detail-text">
                                <span class="menu-text1">コロッケ</span>
                                <h2 class="menu-text2">300円</h2>
                            </div>
                    </div>
                    <div class="menu-detail">
                            <div class="menu-detail-item">
                                <a href="<?php the_permalink() ?>" class="menupage-link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/menu-img10.jpg" alt="メニュー10" class="menupage-item">
                                </a>
                            </div>
                            <div class="menu-detail-text">
                                <span class="menu-text1">鯵の塩焼き</span>
                                <h2 class="menu-text2">700円</h2>
                            </div>
                    </div>
                    <div class="menu-detail">
                            <div class="menu-detail-item">
                                <a href="<?php the_permalink() ?>" class="menupage-link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/menu-img11.jpg" alt="メニュー11" class="menupage-item">
                                </a>
                            </div>
                            <div class="menu-detail-text">
                                <span class="menu-text1">かぶの餡かけスープ</span>
                                <h2 class="menu-text2">500円</h2>
                            </div>
                    </div>
                    <div class="menu-detail">
                            <div class="menu-detail-item">
                                <a href="<<?php the_permalink() ?>" class="menupage-link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/menu-img12.jpg" alt="メニュー12" class="menupage-item">
                                </a>
                            </div>
                            <div class="menu-detail-text">
                                <span class="menu-text1">カツカレー定食</span>
                                <h2 class="menu-text2">900円</h2>
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
                wp_reset_postdata()
             ?>
</main>
<?php get_footer(); ?>