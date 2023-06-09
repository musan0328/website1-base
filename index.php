<?php get_header(); ?>
<!-- mainコンテンツ -->
<main>
    <div class="top-main">
        <div class="top-main-area">
            <div class="main-visual">
                <div class="main-imageandtext">
                    <div class="main-image-area">
                        <div class="main-image-dp">
                            <!-- slickで画像スライドする -->
                            <div class="image-topdp">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/tanbo.png" alt="メインビジュアル配置" class="main-visual-top">
                            </div>
                        </div>
                    </div>
                    <div class="main-text-viarea">
                        <div class="main-text-area">
                            <h1 class="topMvArea">
                                <span class="topMvText">新鮮と</span> <br>
                                <span class="topMvText">真心の</span> <br>
                                <span class="topMvText">お米屋</span> <br>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="topAdb">
                    <div class="message-area">
                        <h2 class="topAdb-title">新鮮な美味しさをお届けする</h2>
                        <div class="Adb-text-image">
                            <p class="topAbd-text">
                                真心込めて作ったおにぎりはいかが? <br class="pc_only">
                                美味しいおにぎりのために私たちはおにぎりの素材はもちろん、<br class="pc_only">
                                製造方法にもこだわりをもっています。
                            </p>
                            <div class="top-img-area">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/onigiri-image.jpg" alt="おにぎり画像" class="top-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="topAdbCompany">
                    <div class="topAdbComp-Area">
                        <div class="topAdb-Conpany-detail">
                                <div class="topAdb-text-area">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/human.jpg" alt="社長" class="human-img">
                                </div>
                                <div class="Company-detail">
                                    <span class="company_name">株式会社おにぎりや</span>
                                    <h3 class="daihyo">代表取締役 <span class="c_name">山田太郎</span></h3>
                                     <p class="c_detail">
                                        静岡県浜松市出身 食品メーカーに入社後、惣菜部会社代表、及び各店舗の責任者になる。
                                        2022年10月「株式会社おにぎりや」を創業する。
                                    </p>
                                </div>
                    </div>
            </div>
        </div>
    </div>
</div>
                    <div class="Btn-area">
                        <div class="more-btn">
                            <a href="#" class="btn-desin">
                                <span class="btn-text">MORE</span>
                            </a>
                        </div>
                    </div>
    <!-- NEWSエリア  -->
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
              <?php else: ?>
              <?php endif; wp_reset_postdata(); ?>
            </div>
        </div>
    <!-- Menuエリア -->
    <div class="menu-area-main">
        <div class="menu-area">
            <section>
                <h2 class="menu-title">MENU</h2>
                <span class="menu-text">メニュー一覧</span>
                    <div class="menu-images">
                        <figure class="top-menu-image">
                            <a href="#" class="menu-href"><img src="<?php echo get_template_directory_uri(); ?>/images/images1.jpg" alt="メニュー1" class="menu-img"></a>
                        </figure>
                        <figure class="top-menu-image">
                            <a href="#" class="menu-href"><img src="<?php echo get_template_directory_uri(); ?>/images/images2.jpg" alt="メニュー2" class="menu-img"></a>
                        </figure>
                        <figure class="top-menu-image">
                            <a href="#" class="menu-href"><img src="<?php echo get_template_directory_uri(); ?>/images/images3.jpg" alt="メニュー3" class="menu-img"></a>
                        </figure>
                        <figure class="top-menu-image">
                            <a href="#" class="menu-href"><img src="<?php echo get_template_directory_uri(); ?>/images/images4.jpg" alt="メニュー4" class="menu-img"></a>
                        </figure>
                        <figure class="top-menu-image">
                            <a href="#" class="menu-href"><img src="<?php echo get_template_directory_uri(); ?>/images/images5.jpg" alt="メニュー5" class="menu-img"></a>
                        </figure>
                        <figure class="top-menu-image">
                            <a href="#" class="menu-href"><img src="<?php echo get_template_directory_uri(); ?>/images/images6.jpg" alt="メニュー6" class="menu-img"></a>
                        </figure>
                        <figure class="top-menu-image">
                            <a href="#" class="menu-href"><img src="<?php echo get_template_directory_uri(); ?>/images/images7.jpg" alt="メニュー7" class="menu-img"></a>
                        </figure>
                    </div>
            </section>
        </div>
        <div class="Btn-area">
                <div class="more-btn">
                    <a href="#" class="btn-desin">
                        <span class="btn-text">MORE</span>
                    </a>
                </div>
        </div>
    </div>
    <!-- 会社所在地など -->
    <div class="company-area-main">
        <div class="company-area">
            <div class="top-company-menu">
                    <div class="company-detail-rogo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/onigiri_tenmusu.png" alt="" class="com-rogo-top">
                    </div>
            </div>
            <div class="com-text-imagearea">
                <div class="top-company-detail">
                    <div class="company-detail-text">
                        <p class="com-text-main">
                                〒123-4567 <br>
                                静岡県浜松市中区住吉町123-1 <br>
                                営業時間/ 8:30~17:00 定休日/月曜日・木曜日
                        </p>
                        <div class="com-tell-area">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/tell-icon.png" alt="電話アイコン" class="com-tell-icon">
                            <p class="tell-bango-area"><a href="#"><span class="tell-bango">0120-345-6789</span></a></p>
                        </div>
                    </div>
                </div>
                <div class="com-image-main">
                    <div class="com-image-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/com-image1.jpg" alt="" class="com-images">
                    </div>
                    <div class="com-image-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/com-image2.jpg" alt="" class="com-images">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- アクセス・SNSエリア -->
    <div class="top-access-sns-main">
        <div class="top-access-sns-area">
            <div class="access-sns-box">
                <div class="access-main-top">
                    <h3 class="acsns-text">ACCESS</h3>
                    <div class="google-map-area">
                        <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.957657525355!2d137.72599585023147!3d34.73146166842156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ade5459b8e16b%3A0x96c3457535e4caf9!2z44CSNDMwLTA5MDYg6Z2Z5bKh55yM5rWc5p2-5biC5Lit5Yy65L2P5ZCJ!5e0!3m2!1sja!2sjp!4v1685447503688!5m2!1sja!2sjp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="sns-main-top">
                    <h3 class="acsns-text">TWITTER</h3>
                    <div class="twitter-top">
                        <div class="twitter-area">
                        <a class="twitter-timeline" data-width="100%" data-height="400" href="https://twitter.com/yamamurata73235?ref_src=twsrc%5Etfw">Tweets by yamamurata73235</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Btn-area">
        <div class="more-btn-asns">
            <a href="#" class="btn-desin">
                <span class="btn-text">業務内容はこちら</span>
            </a>
        </div>
    </div>
    <!-- エリア情報 -->
    <div class="place-main">
        <div class="place-main-area">
            <div class="place-main-detail">
                <article class="article-1">
                    <h2 class="ar1-text">配達エリア <span class="ar1-small-text">(静岡県全域)</span></h2>
                    <div class="place-detail">
                        <dl class="place-dl">
                            <dt class="place-dt">東部エリア</dt>
                            <dd class="place-dd">富士市、富士宮市、沼津市、三島市、裾野市、御殿場市、熱海市、伊豆の国市、伊豆市、清水町、長泉市、函南町</dd>
                        </dl>
                        <dl class="place-dl">
                            <dt class="place-dt">中部エリア</dt>
                            <dd class="place-dd">静岡市、焼津市、藤枝市、島田市、吉田町、牧之原市</dd>
                        </dl>
                        <dl class="place-dl">
                            <dt class="place-dt">西部エリア</dt>
                            <dd class="place-dd">浜松市、磐田市、袋井市、掛川市、菊川市、森町</dd>
                        </dl>
                    </div>
                    <div class="other-area">
                        <p class="other-area-text">その他のエリアも相談ください。</p>
                    </div>
                </article>
                <article class="delivery-main">
                    <h2 class="ar2-text">配達内容</h2>
                    <div class="article-2">
                        <dl class="delivery-dl">
                            <dt class="delivery-dt">おにぎり</dt>
                            <dd class="delivery-dd">おにぎり、梅おにぎり、鮭おにぎり、昆布おにぎり、明太子おにぎり、いくらおにぎり、ツナマヨおにぎり</dd>
                        </dl>
                        <dl class="delivery-dl">
                            <dt class="delivery-dt">惣菜</dt>
                            <dd class="delivery-dd">卵焼き、唐揚げ、牛肉コロッケ、メンチカツ、生姜焼き</dd>
                        </dl>
                        <dl class="delivery-dl">
                            <dt class="delivery-dt">漬物</dt>
                            <dd class="delivery-dd">梅干し、たくあん、白菜の塩漬け、大根のぬか漬け、かぶの甘酢漬け</dd>
                        </dl>
                        <dl class="delivery-dl">
                            <dt class="delivery-dt">そのほか</dt>
                            <dd class="delivery-dd">具沢山おにぎり、プリン</dd>
                        </dl>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <!-- お問い合わせボタン -->
    <div class="form-main">
        <div class="form-btn-area">
            <div class="btn-add">
                <a href="#" class="addBtn-Form">
                    <div class="addBtn-Form-text">
                        <h1 href="#" class="add-btn-text">お問い合わせ</h1>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>