<?php
/**
 * The template for displaying all pages
 *
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

<!-- page banner -->
<section class="page-banner page-banner-creator">
    <div class="cntr">
        <div class="page-banner-title" data-aos="fade-up">
            <h1>
                <?php the_title(); ?>
                <small>クリエイター＆グッズ</small>
            </h1>
        </div>
    </div>
</section>
<!-- end of page banner -->

<!-- creator -->
<section class="page-creator">
    <div class="cntr">
        <div class="page-creator-wrapper">
            <div class="creator-title" data-aos="fade-up">
                <h3>Creator</h3>
                <p> 所属クリエイター</p>
            </div>
            <ul class="page-creator-list">
                <li class="page-creator-item">
                    <div class="page-creator-card">
                        <p class="page-creator-card-title">コヤッキー</p>
                        <div class="page-creator-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creator-img01.jpg" alt="">
                        </div>
                        <ul class="page-creator-button">
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yt.svg" alt="" class="link-icon"> コヤッキースタジオ</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yt.svg" alt="" class="link-icon"> コヤッキーチャンネル</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link page-creator-button-link--instagram"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ins.svg" alt="" class="link-icon"> Instagram Account</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link page-creator-button-link--twitter"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twit.svg" alt="" class="link-icon"> Twitter Account</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="page-creator-item">
                    <div class="page-creator-card">
                        <p class="page-creator-card-title">とーや</p>
                        <div class="page-creator-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creator-img01.jpg" alt="">
                        </div>
                        <ul class="page-creator-button">
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/yt.svg" alt="" class="link-icon"> コヤッキースタジオ
                                </a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yt.svg" alt="" class="link-icon"> コヤッキースタジオ</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yt.svg" alt="" class="link-icon"> コヤチャンポケカ部</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link page-creator-button-link--instagram"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ins.svg" alt="" class="link-icon"> Instagram Account</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link page-creator-button-link--twitter"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twit.svg" alt="" class="link-icon"> Twitter Account</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="page-creator-item">
                    <div class="page-creator-card">
                        <p class="page-creator-card-title">熊野真修（マシュー）</p>
                        <div class="page-creator-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creator-img01.jpg" alt="">
                        </div>
                        <ul class="page-creator-button">
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yt.svg" alt="" class="link-icon"> コヤチャンポケカ部</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yt.svg" alt="" class="link-icon"> マシュチャンネル</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link page-creator-button-link--instagram"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ins.svg" alt="" class="link-icon"> Instagram Account</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link page-creator-button-link--twitter"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twit.svg" alt="" class="link-icon"> Twitter Account</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="page-creator-item">
                    <div class="page-creator-card">
                        <p class="page-creator-card-title">のすけ海鮮丼</p>
                        <div class="page-creator-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creator-img01.jpg" alt="">
                        </div>
                        <ul class="page-creator-button">
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yt.svg" alt="" class="link-icon"> Another Blue</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yt.svg" alt="" class="link-icon"> のすけの変タメ</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link page-creator-button-link--instagram"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ins.svg" alt="" class="link-icon"> Instagram Account</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link page-creator-button-link--twitter"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twit.svg" alt="" class="link-icon"> Twitter Account</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="page-creator-item">
                    <div class="page-creator-card">
                        <p class="page-creator-card-title">やまじゅん</p>
                        <div class="page-creator-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creator-img01.jpg" alt="">
                        </div>
                        <ul class="page-creator-button">
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yt.svg" alt="" class="link-icon"> やまじゅんのJクラブ研究室</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link page-creator-button-link--instagram"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ins.svg" alt="" class="link-icon"> Instagram Account</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link page-creator-button-link--twitter"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twit.svg" alt="" class="link-icon"> Twitter Account</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="page-creator-item">
                    <div class="page-creator-card">
                        <p class="page-creator-card-title">ポケカきっず。</p>
                        <div class="page-creator-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creator-img01.jpg" alt="">
                        </div>
                        <ul class="page-creator-button">
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yt.svg" alt="" class="link-icon"> コヤチャンポケカ部</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yt.svg" alt="" class="link-icon"> ポケカきっず。</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link page-creator-button-link--instagram"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ins.svg" alt="" class="link-icon"> Instagram Account</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link page-creator-button-link--twitter"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twit.svg" alt="" class="link-icon"> Twitter Account</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="page-creator-item">
                    <div class="page-creator-card">
                        <p class="page-creator-card-title">かい</p>
                        <div class="page-creator-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creator-img01.jpg" alt="">
                        </div>
                        <ul class="page-creator-button">
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yt.svg" alt="" class="link-icon"> コヤチャンポケカ部</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link page-creator-button-link--instagram"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ins.svg" alt="" class="link-icon"> Instagram Account</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link page-creator-button-link--twitter"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twit.svg" alt="" class="link-icon"> Twitter Account</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="page-creator-item">
                    <div class="page-creator-card">
                        <p class="page-creator-card-title">ゆうさく</p>
                        <div class="page-creator-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creator-img01.jpg" alt="">
                        </div>
                        <ul class="page-creator-button">
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yt.svg" alt="" class="link-icon"> コヤチャンポケカ部</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link page-creator-button-link--twitter"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twit.svg" alt="" class="link-icon"> Twitter Account</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="page-creator-item">
                    <div class="page-creator-card">
                        <p class="page-creator-card-title">ぶんぺい</p>
                        <div class="page-creator-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creator-img01.jpg" alt="">
                        </div>
                        <ul class="page-creator-button">
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yt.svg" alt="" class="link-icon"> コヤチャンポケカ部</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link page-creator-button-link--twitter"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twit.svg" alt="" class="link-icon"> Twitter Account</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="page-creator-item">
                    <div class="page-creator-card">
                        <p class="page-creator-card-title">ココペリ</p>
                        <div class="page-creator-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creator-img01.jpg" alt="">
                        </div>
                        <ul class="page-creator-button">
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yt.svg" alt="" class="link-icon"> コヤチャンポケカ部</a>
                            </li>
                            <li class="page-creator-button-item">
                                <a href="#" class="page-creator-button-link page-creator-button-link--twitter"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twit.svg" alt="" class="link-icon"> Twitter Account</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="creator-title" data-aos="fade-up">
                <h3>Goods</h3>
                <p>グッズ</p>
            </div>
            <div class="creator-route">
                <div class="creator-route-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/route.png" alt="">
                </div>
                <div class="creator-route-content">
                    <h3 class="route-title">Route1940</h3>
                    <p class="route-text">
                    登録者数80万人を超える人気Youtubeチャンネル <br>
                    『コヤッキーチャンネル』＆『コヤッキースタジオ』の公式ネットショップ
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- creator -->

<!-- become -->
<?php get_template_part( 'template-parts/template', 'become' ); ?>
<!-- end of become -->

<?php
get_footer();