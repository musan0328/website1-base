<?php get_header(); ?>
<!-- mainコンテンツ -->

<main>
<div class="about-main">
            <div class="about-content-main">
                    <div class="about-main-area">
                        <div class="about-main-areaText">
                            <div class="top-about-title">
                                <h1 class="tabout-tit">CONTACT</h1>
                                <span class="sub-tab-text">お問い合わせ・来店予約</span>
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
                                <li class="about-top-link-sub">お問い合わせ・来店予約</li>
                            </ul>
                     </div>
            </div>

            <div class="form-content">
                <div class="form-main-area">
                    <p class="form-title-text">以下のフォームに必要事項をご記入の上、送信ボタンをクリックしてください。</p>
                    <div class="form-area-con">
                        <form action="#" method="post">
                            <dl class="formItem"> 
                                <dt class="form-subject">
                                    <span class="form-name">お名前</span>
                                    <span class="form-rabel">必須</span>
                                </dt>   
                                <dd class="form-detail-area">
                                    <div class="form-error-text"></div>
                                    <input type="text" id="name1" name="name1" class="detail-text" placeholder="全角で入力ください" value>
                                </dd>
                            </dl>

                            <dl class="formItem"> 
                                <dt class="form-subject">
                                    <span class="form-name">お名前(フリガナ)</span>
                                    <span class="form-rabel">必須</span>
                                </dt>   
                                <dd class="form-detail-area">
                                    <div class="form-error-text"></div>
                                    <input type="text" id="name1" name="name1" class="detail-text" placeholder="全角カナで入力ください" value>
                                </dd>
                            </dl>

                            <dl class="formItem"> 
                                <dt class="form-subject">
                                    <span class="form-name">郵便番号</span>
                                    <span class="form-rabel">必須</span>
                                </dt>   
                                <dd class="form-detail-area">
                                    <div class="form-error-text"></div>
                                    <label for="" class="post-con">〒</label>
                                    <input type="text" id="name1" name="name1" class="detail-text2" placeholder="半角英数字" value>
                                </dd>
                            </dl>

                            <dl class="formItem"> 
                                <dt class="form-subject">
                                    <span class="form-name">現住所</span>
                                    <span class="form-rabel">必須</span>
                                </dt>   
                                <dd class="form-detail-area">
                                    <div class="form-error-text"></div>
                                    <input type="text" id="name1" name="name1" class="detail-text" placeholder="全角でご入力ください" value>
                                </dd>
                            </dl>

                            <dl class="formItem">
                                <dt class="form-subject">
                                    <span class="form-name">建物・ビル名</span>
                                </dt>   
                                <dd class="form-detail-area">
                                    <div class="form-error-text"></div>
                                    <input type="text" id="name1" name="name1" class="detail-text" placeholder="全角でご入力ください" value>
                                </dd>
                            </dl>

                            <dl class="formItem">
                                <dt class="form-subject">
                                    <span class="form-name">電話番号</span>
                                    <span class="form-rabel">必須</span>
                                </dt>   
                                <dd class="form-detail-area">
                                    <div class="form-error-text"></div>
                                    <input type="text" id="name1" name="name1" class="detail-text" placeholder="半角でご入力ください" value>
                                </dd>
                            </dl>

                            <dl class="formItem">
                                <dt class="form-subject">
                                    <span class="form-name">メールアドレス</span>
                                    <span class="form-rabel">必須</span>
                                </dt>   
                                <dd class="form-detail-area">
                                    <div class="form-error-text"></div>
                                    <input type="text" id="name1" name="name1" class="detail-text" placeholder="半角でご入力ください" value>
                                    <ul class="mail-note">
                                        <li class="note-text">※入力アドレスに内容を自動返信いたします。</li>
                                        <li class="note-text">※受信制限をされている方は「@onigiri.jp」を許可してください。</li>
                                        <li class="note-text">※Gmailや一部のフリーメールをご利用の場合、メールが正常に届かない場合があります。</li>
                                    </ul>
                                </dd>
                            </dl>

                            <dl class="formItem">
                                <dt class="form-subject">
                                    <span class="form-name">メールアドレス(確認用)</span>
                                    <span class="form-rabel">必須</span>
                                </dt>   
                                <dd class="form-detail-area">
                                    <div class="form-error-text"></div>
                                    <input type="text" id="name1" name="name1" class="detail-text" placeholder="" value>
                                </dd>
                            </dl>

                            <dl class="formItem">
                                <dt class="form-subject">
                                    <span class="form-name">ご来店 第1希望 【日時】</span>
                                    <span class="form-rabel">必須</span>
                                </dt>   
                                <dd class="form-detail-area">
                                    <div class="form-error-text"></div>
                                    <input type="text" id="name1" name="name1" class="detail-text" placeholder="カレンダーよりご入力ください" value>
                                </dd>
                            </dl>

                            <dl class="formItem">
                                <dt class="form-subject">
                                    <span class="form-name">ご相談内容</span>
                                    <span class="form-rabel">必須</span>
                                </dt>
                                <dd class="form-detail-area">
                                    <div class="form-error-text"></div>
                                    <textarea name="form-textarea" id="comment" cols="30" rows="10" class="form-textarea-main"></textarea>
                                </dd>
                            </dl>

                            <dl class="formItem">
                                <dt class="form-subject">
                                    <span class="form-name">個人情報の取り扱いについて</span>
                                    <span class="form-rabel">必須</span>
                                </dt>
                                <dd class="form-detail-area">
                                   <input type="checkbox" id="ch-submit" class="check-submit">
                                   <label for="">同意する</label>
                                </dd>
                            </dl>
                        </form>
                    </div>
                </div>
            </div>

</main>

<?php get_footer(); ?>