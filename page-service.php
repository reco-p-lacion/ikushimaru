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
<section class="page-banner page-banner-service">
    <div class="cntr">
        <div class="page-banner-title" data-aos="fade-up">
            <h1>
                <?php the_title(); ?>
                <small>サービス</small>
            </h1>
        </div>
    </div>
</section>
<!-- end of page banner -->

<!-- service -->
<section class="service page-service">
    <div class="cntr">
        <div class="service-wrappper">
            <ul class="service-list">
                <li class="service-list-item">
                    <div class="service-list-row">
                        <div class="service-list-col">
                            <div class="service-list-content">
                                <h3 class="service-list-title" data-aos="fade-up">動画の企画、制作、編集および配信</h3>
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
                                <h3 class="service-list-title" data-aos="fade-up">キャラクター商品の企画、制作および販売</h3>
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
                                <h3 class="service-list-title" data-aos="fade-up">
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
                                <h3 class="service-list-title" data-aos="fade-up">
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
                                <h3 class="service-list-title" data-aos="fade-up">
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
        </div>
    </div>
</section>
<!-- end of service -->

<!-- become -->
<?php get_template_part( 'template-parts/template', 'become' ); ?>
<!-- end of become -->

<?php
get_footer();