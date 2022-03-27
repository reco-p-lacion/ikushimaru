<?php
/**
 * The template for displaying all pages
 * Template Name: Homepage
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TEMPLATENAME
 */

get_header();
?>

<!-- banner -->
<section class="banner">
    <div class="banner-wrapper">
        <div class="banner-content">
            <h1>
                遊びを「冒険」に、<br>
                情報を「仕事」に
            </h1>
            <p>
                すべてのエンターテインメントを <br>
                アップグレードする
            </p>
        </div>
        <div class="banner-images">
            <ul class="banner-list">
                <li class="banner-list-item">
                    <div class="banner-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner1.png" alt="">
                    </div>
                </li>
                <li class="banner-list-item">
                    <div class="banner-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner2.png" alt="">
                    </div>
                </li>
                <li class="banner-list-item">
                    <div class="banner-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner3.png" alt="">
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- end of banner -->

<!-- stort 01 -->
<section class="story-01">
    <div class="cntr">
        <div class="story-01-wrapper">
            <ul class="story-list">
                <li class="story-list-item">
                    <div class="story-list-wrapper">
                         <div class="story-list-left">
                            <div class="title">
                                <h3>
                                    <span class="title-number">01.</span>
                                    <div class="title-wrapper">
                                        <small>ストーリー</small>
                                        <p>Story</p>
                                    </div>
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
                                </h3>
                            </div>
                            <p class="story-text-big">子供の心をわすれたくない <br>「本気の大人が集まる場所」</p>
                            <p class="story-text">
                            私達は、子供の頃のあの感覚 <br>
                            「ただ、知りたい」<br>
                            「ただ、やりたい」<br>
                            「ただ、楽しみたい」<br>
                            そんな童心を忘れたくない、本気の大人が集まっています。
                            </p>
                            <div class="story-list-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image02.png" alt="" class="w-300">
                            </div>
                            <div class="story-list-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image04.jpg" alt="" class="w-400">
                            </div>
                         </div>
                         <div class="story-list-right">
                            <div class="story-list-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image01.jpg" alt="">
                            </div>
                            <div class="story-list-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image03.jpg" alt="">
                            </div>
                            <p class="story-text-big">好きなものをすきなだけ</p>
                            <p class="story-text">
                                インターネットを通じて、情報が「仕事」になってきた。<br>
                                無我夢中に目の前の好きなものを突き詰めていく私達。<br>
                                情報が仕事になる時代。<br><br>
                                誰になんと言われようとも、自分の好きを追求する。<br>
                                そんな大人がいてもいいと思う。
                            </p>
                         </div>
                    </div>
                </li>
                <li class="story-list-item">
                    <div class="story-list-wrapper">
                        <div class="story-list-left">
                            <p class="story-text-big">さぁ。旅にでよう。</p>
                            <p class="story-text">
                                がむしゃらに人生を遊ぶ。それがいつしかあなたの「冒険」となる。<br>
                                いくつもの谷を超え、山を超え、楽しい冒険を作り上げる。<br><br>
                                私たちと一緒に、情報という武器を手に取り、<br>
                                人生という名の「冒険」の旅に出よう。
                            </p>
                        </div>
                        <div class="story-list-right">
                            <div class="story-list-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image05.png" alt="" class="w-370">
                            </div>
                            <div class="story-list-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image06.jpg" alt="" class="w-480">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- end of story 01 -->

<!-- company -->
<section class="company">
    <div class="cntr">
        <div class="title">
            <h3>
                <span class="title-number">02.</span>
                <div class="title-wrapper">
                    <small>会社概要</small>
                    <p>Company</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
            </h3>
        </div>
        <div class="company-wrapper">
            <div class="company-title">
                <h3>
                    遊びを「冒険」に、<br>
                    情報を「仕事」
                </h3>
            </div>
            <p class="company-text">
            「大人げない」そんな言葉を無視して、本気で大人が遊ぶ。<br>
            本気で遊ぶからこそ、私達はどこよりも専門的・尖ったコンテンツを提供できています。<br><br>
            子供の頃、時間を忘れて夢中になったあの感覚を忘れたくない。<br><br>
            そんな「大人げない」大人が集まる、集団こそ。いくしまる.comです。
            </p>
            <div class="button-link">
                <a href="#">WHO WE ARE</a>
            </div>
        </div>
    </div>
</section>
<!-- end of company -->

<!-- service -->
<section class="service">
    <div class="cntr">
        <div class="title">
            <h3>
                <span class="title-number">03.</span>
                <div class="title-wrapper">
                    <small>サービス</small>
                    <p>Service</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
            </h3>
        </div>
        <div class="service-wrappper">
            <ul class="service-list">
                <li class="service-list-item">
                    <div class="service-list-row">
                        <div class="service-list-col">
                            <div class="service-list-content">
                                <h3 class="service-list-title">動画の企画、制作、編集および配信</h3>
                                <p class="service-list-text">
                                    YouTubeを中心とした、動画の企画・制作・編集を行い、幅広いユーザーに届くようなコンテンツを発信しています。<br>
                                    企画から制作、編集まで一気通貫でクリエイターのサポートを行います。
                                </p>
                            </div>
                        </div>
                        <div class="service-list-col">
                            <div class="service-list-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service01.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="service-list-item">
                    <div class="service-list-row">
                        <div class="service-list-col">
                            <div class="service-list-content">
                                <h3 class="service-list-title">キャラクター商品の企画、制作および販売</h3>
                                <p class="service-list-text">
                                    所属クリエイターのキャラクターを企画、制作、販売をサポートしています。<br>
                                    クリエイターイメージに沿ったキャラクターグッズを <br>
                                    独自で制作しファンユーザーに届けるための販促まで行います。
                                </p>
                            </div>
                        </div>
                        <div class="service-list-col">
                            <div class="service-list-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service02.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="service-list-item">
                    <div class="service-list-row">
                        <div class="service-list-col">
                            <div class="service-list-content">
                                <h3 class="service-list-title">
                                インフルエンサーの養成 <br>
                                マネジメント及びプロモート事業
                                </h3>
                                <p class="service-list-text">
                                    YouTubeを中心とした、インフルエンサーの育成を行います。<br>
                                    インフルエンサーのマネジメントやプロモーションを行い、クリエイターが仕事により集中できるような環境を構築します。
                                </p>
                            </div>
                        </div>
                        <div class="service-list-col">
                            <div class="service-list-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="service-list-item">
                    <div class="service-list-row">
                        <div class="service-list-col">
                            <div class="service-list-content">
                                <h3 class="service-list-title">
                                    イベント等の企画、制作、運営
                                </h3>
                                <p class="service-list-text">
                                    所属クリエイターのイベント企画、制作、運営を行います。<br>
                                    視聴者の方が感動し、また来たくなるような <br>
                                    イベントを企画し、サポートを行います。
                                </p>
                            </div>
                        </div>
                        <div class="service-list-col">
                            <div class="service-list-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service04.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="service-list-item">
                    <div class="service-list-row">
                        <div class="service-list-col">
                            <div class="service-list-content">
                                <h3 class="service-list-title">
                                    飲食店の企画・経営
                                </h3>
                                <p class="service-list-text">
                                    飲食店を企画し、コミュニケーションを促進できるような場所を提供しております。<br><br>
                                    オフラインイベントの会場にも利用しております。
                                </p>
                            </div>
                        </div>
                        <div class="service-list-col">
                            <div class="service-list-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service05.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="button-link">
                <a href="#">Service</a>
            </div>
        </div>
    </div>
</section>
<!-- end of service -->

<!-- creator -->
<section class="creator">
    <div class="cntr">
        <div class="creator-wrapper">
            <div class="creator-title">
                <p> 所属クリエイター</p>
                <h3>Creator</h3>
            </div>
            <div class="creator-subtitle">
                <p>
                    合計登録者数100万人超え <br>
                    クリエイター集団
                </p>
            </div>
            <p class="creator-text">
                「遊びを冒険に、情報を仕事に」をコンセプトとして <br>
                どこよりも変わったクリエイターが所属しています。<br><br>
                「都市伝説」「ワンピース」「ポケモンカード」<br>
                など見ている人が<br>
                学び、笑顔になれるようなコンテンツを提供しています。<br><br>
                いくしまる.comに所属している変わったクリエイターを紹介！
            </p>
            <div class="button-link">
                <a href="#">Creator</a>
            </div>
        </div>
    </div>
</section>
<!-- end of creator -->

<!-- become -->
<?php get_template_part( 'template-parts/template', 'become' ); ?>
<!-- end of become -->

<?php
get_footer();