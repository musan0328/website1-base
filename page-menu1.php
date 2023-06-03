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
                                <li class="about-top-link-sub2">味噌おにぎり</li>
                            </ul>
                     </div>
            </div>
    <div class="menu-detail-main">
        <div class="menu-detail-area">
            <div class="menu-detail-content">
                <div class="menu-detail-parent">
                    <span class="menu-text-detail-con">おにぎりメニュー</span>
                    <h2 class="menu-detail-con2">味噌おにぎり</h2>
                </div>
            </div>
        </div>

        <div class="menu-detail-image-area">
            <div class="menu-detail-images">
                <div class="menu-detail-con-img">
                    <ul class="menu-slider">
                        <li class="menu-con-imgch">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sample1.jpg" alt="サンプル画像" class="menu-detail-sample-img">
                        </li>
                        <li class="menu-con-imgch">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sample2.jpg" alt="サンプル画像" class="menu-detail-sample-img">
                        </li>
                        <li class="menu-con-imgch">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sample3.jpg" alt="サンプル画像" class="menu-detail-sample-img">
                        </li>
                        <li class="menu-con-imgch">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sample4.jpg" alt="サンプル画像" class="menu-detail-sample-img">
                        </li>
                        <li class="menu-con-imgch">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sample5.jpg" alt="サンプル画像" class="menu-detail-sample-img">
                        </li>
                    </ul>
                        <p class="menu-co-textarea">テキストが入ります。テキストが入ります。</p>
                    <ul class="menu-thumb">
                        <li class="menu-con-imgch">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sample1.jpg" alt="サンプル画像" class="menu-detail-sample-img">
                        </li>
                        <li class="menu-con-imgch">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sample2.jpg" alt="サンプル画像" class="menu-detail-sample-img">
                        </li>
                        <li class="menu-con-imgch">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sample3.jpg" alt="サンプル画像" class="menu-detail-sample-img">
                        </li>
                        <li class="menu-con-imgch">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sample4.jpg" alt="サンプル画像" class="menu-detail-sample-img">
                        </li>
                        <li class="menu-con-imgch">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/sample5.jpg" alt="サンプル画像" class="menu-detail-sample-img">
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="menu-detail-text-area">
            <div class="menu-detail-text-content">
                <div class="menu-detail-con-pe">
                    <p class="menu-con-ptext">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                    <p class="menu-con-ptext2">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-btn-main">
        <div class="menu-btn-content-main">
            <div class="menu-btn-linkdetail">
                <ul class="menu-btn-linkmain">
                    <li class="btn-linkli1"><a href="<?php echo home_url(''); ?>" class="btn-linka">前の記事へ</a></li>
                    <li class="btn-linkli2"><a href="<?php echo home_url('menu'); ?>" class="btn-linka2">一覧へ戻る</a></li>
                </ul>
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

<script>
    // スライダー
    $('.menu-slider').slick({
        autoplay:false,
        autoplaySpeed:5000,
        dots:false,
        // menu-thumbクラスとリンクさせる
        asNavFor:'.menu-thumb',
    });

    $('.menu-thumb').slick({
        //本体とサムネイルをリンクさせる
        asNavFor:'.menu-slider',
        //サムネイル画像をクリックして本体をスライドさせる
        focusOnSelect: true,
    })

    console.log('aaa');
</script>