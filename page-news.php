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
    'post_type' => 'post', //投稿タイプスラッグ
    'category_name' => 'news',
    'posts_per_page' => 6
 );
 $the_query = new WP_Query( $args );
 if ( $the_query->have_posts() ) :
?>

<!-- ページネーション -->
<!-- 参考サイト https://shogo-log.com/setup-pagenation/ -->
<?php
 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
 $the_query = new WP_Query( array(
     'post_status' => 'publish',
     'paged' => $paged,
     'posts_per_page' => 5, // 表示件数
     'orderby'     => 'date',
     'order' => 'DESC'
 ) );
?>

<div class="topNewsArea">
        <div class="NewsGroup">
            <div class="NewsArea">
                <h2 class="news-text">NEWS</h2>
                <span class="news-subtext">新着情報</span>
            </div>
            <div class="NewsContent">
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="news">
                            <a href="<?php echo get_permalink(); ?>" class="news-link">
                                <div class="news-area">   
                                        <p class="news-day"><?php the_date(); ?></p>
                                        <p class="news-title"><?php the_title(); ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
              </div>
        </div>

        <div class="pagenation">
        <?php 
            if ($the_query->max_num_pages > 1) {
                echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'format' => 'page/%#%/',
                    'current' => max(1, $paged),
                    'mid_size' => 1,
                    'total' => $the_query->max_num_pages
                ));
            }
            wp_reset_postdata();?>
        </div>
</div>
    <?php else: ?>
   <?php endif; wp_reset_postdata(); ?>
<?php get_footer(); ?>