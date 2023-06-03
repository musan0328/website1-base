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
        
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <article <?php post_class( 'article-content' ); ?>>
            <div class="menu-detail-area">
                <div class="menu-detail-content">
                    <div class="menu-detail-parent">
                        <!-- ページタイトル -->
                        <span class="menu-text-detail-con"><?php the_title(); ?></span>
                        <!-- サブタイトル -->
                        <?php
                            //カスタムフィールドの取得
                            $sub_title = get_field('sub_title');
                            //カスタムフィールドの出力
                            if($sub_title) {echo '<h2>' .$sub_title .'</h2>';} 
                        ?>
                        <!-- <h2 class="menu-detail-con2">味噌おにぎり</h2> -->
                    </div>
                </div>
            </div>

            <div class="menu-detail-image-area">
                <div class="menu-detail-images">
                    <div class="menu-detail-con-img">
                        <ul class="menu-con-imgpa">
                            <li class="menu-con-imgch">
                            <!-- アイキャッチ画像の表示 -->
                            <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail();
                                    }
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div>
                <div>
                    <!-- 本文入力  -->
                    <?php the_content(); ?>
                </div>
                
            </div>

        </article>
        <?php
            endwhile;
            endif;
        ?>
        
    </div>
</main>

<?php get_footer(); ?>