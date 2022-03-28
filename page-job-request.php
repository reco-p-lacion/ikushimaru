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
<section class="page-banner page-banner-job-request">
    <div class="cntr">
        <div class="page-banner-title" data-aos="fade-up">
            <h1>
                <?php the_title(); ?>
                <small>クリエイターになる</small>
            </h1>
        </div>
    </div>
</section>
<!-- end of page banner -->

<!-- support -->
<section class="support mb-100">
    <div class="cntr">
        <div class="creator-title tc" data-aos="fade-up">
            <h3>Data</h3>
            <p> データ</p>
        </div>
        <div class="support-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/support.svg" alt="">
        </div>
    </div>
</section>
<!-- end of support -->

<!-- flow -->
<section class="flow mb-100">
    <div class="cntr">
        <div class="creator-title tc" data-aos="fade-up">
            <h3>Flow</h3>
            <p> 申し込みの流れ</p>
        </div>
        <ul class="flow-list flow-list--request">
            <li class="flow-list-item">
                <div class="flow-list-card">
                    <p class="flow-list-step">Step1</p>
                    <div class="flow-list-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step1.png" alt="">
                    </div>
                    <p class="flow-list-text">
                    　申し込み <br>
                    （基本情報入力）
                    </p>
                </div>
            </li>
            <li class="flow-list-item">
                <div class="flow-list-card">
                    <p class="flow-list-step">Step2</p>
                    <div class="flow-list-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step2.png" alt="">
                    </div>
                    <p class="flow-list-text">
                        ヒアリング
                    </p>
                </div>
            </li>
            <li class="flow-list-item">
                <div class="flow-list-card">
                    <p class="flow-list-step">Step3</p>
                    <div class="flow-list-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step3.png" alt="">
                    </div>
                    <p class="flow-list-text">
                        企画ミーティング
                    </p>
                </div>
            </li>
            <li class="flow-list-item">
                <div class="flow-list-card">
                    <p class="flow-list-step">Step4</p>
                    <div class="flow-list-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step4.png" alt="">
                    </div>
                    <p class="flow-list-text">
                        契約
                    </p>
                </div>
            </li>
            <li class="flow-list-item">
                <div class="flow-list-card">
                    <p class="flow-list-step">Step5</p>
                    <div class="flow-list-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step5.png" alt="">
                    </div>
                    <p class="flow-list-text">
                        企画実施
                    </p>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- end of flow -->

<!-- faq -->
<section class="faq mb-100">
    <div class="cntr">
        <div class="creator-title tc" data-aos="fade-up">
            <h3>Faq</h3>
            <p> よくあるご質問</p>
        </div>
        <div class="faq-wrapper">
            <p class="faq-text faq-text--pink">Q.依頼してから、どれくらいの日数で企画実施をしていただきますか？</p>
            <p class="faq-text">A.2〜3週間前後で企画実施が可能です。ただし、制作スケジュールにより多少前後いたします。</p>
            <p class="faq-text faq-text--pink">Q.どんなジャンルの案件でも受けていただけますか？</p>
            <p class="faq-text">
                A.要相談になります。
            </p>
            <p class="faq-text faq-text--pink">Q.ライブやイベントの登壇は、可能ですか？</p>
            <p class="faq-text">
                A.はい、可能です。ただし、スケジュールによっては、出来かねる場合があります。
            </p>
        </div>
    </div>
</section>
<!-- end of faq -->

<!-- contact -->
<?php get_template_part( 'template-parts/template', 'contact' ); ?>
<!-- end of contact -->

<?php
get_footer();