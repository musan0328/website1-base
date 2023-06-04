<?php get_header(); ?>

            <div class="about-main">
                    <div class="about-content-main">
                            <div class="about-main-area">
                                <div class="about-main-areaText">
                                    <div class="top-about-title">
                                        <h1 class="tabout-tit">NEWS</h1>
                                        <span class="sub-tab-text">新着情報</span>
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
                                <li class="about-top-link-sub">新着情報</li>
                            </ul>
                     </div>
            </div>

<?php
//参考サイト https://ecco.co.jp/blog/wp_query/
// 固定ページに特定のカテゴリーを表示
 $args = array(
    'post_type' => 'post',
    'category_name' => 'news',
    'posts_per_page' => 6
 );
 $the_query = new WP_Query( $args );
 if ( $the_query->have_posts() ) :
?>
<div class="topNewsArea">
        <div class="NewsGroup">
            <div class="NewsArea">
                <h2 class="news-text">NEWS</h2>
                <span class="news-subtext">新着情報</span>
            </div>
            <div class="NewsContent">
                <div class="news">
                        <a href="<?php echo get_permalink(); ?>" class="news-link">
                            <div class="news-area">
                                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                    <p class="news-day"><?php the_date(); ?></p>
                                    <p class="news-title"><?php the_title(); ?></p>
                            </div>
                        </a>
                        <?php endwhile; ?>
                </div>
                <div class="news">
                    <a href="#" class="news-link">
                        <div class="news-area">
                                <p class="news-day">2023.04.10</dt>
                                <p class="news-title">花見に行きました。</dt>
                        </div>
                    </a>
                </div>
                <div class="news">
                    <a href="#" class="news-link">
                        <div class="news-area">
                                <p class="news-day">2023.01.01</dt>
                                <p class="news-title">2023年もよろしくお願いします。</dt>
                        </div>
                    </a>
                </div>
                <div class="news">
                    <a href="#" class="news-link">
                        <div class="news-area">
                                <p class="news-day">2022.12.31</dt>
                                <p class="news-title">大晦日</dt>
                        </div>
                    </a>
                </div>
                <div class="news">
                    <a href="#" class="news-link">
                        <div class="news-area">
                                <p class="news-day">2022.12.27</dt>
                                <p class="news-title">年末年始のお休みのお知らせ</dt>
                        </div>
                    </a>
                </div>
                <div class="news">
                    <a href="#" class="news-link">
                        <div class="news-area">
                                <p class="news-day">2022.12.23</dt>
                                <p class="news-title">クリスマス会</dt>
                        </div>
                    </a>
                </div>
              </div>
            </div>
        </div>
     <?php else: ?>
   <?php endif; wp_reset_postdata(); ?>
<?php get_footer(); ?>