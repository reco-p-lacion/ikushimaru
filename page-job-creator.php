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
<section class="page-banner page-banner-job-creator">
    <div class="cntr">
        <div class="page-banner-title">
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
        <div class="creator-title tc">
            <h3>Support</h3>
            <p> サポート内容</p>
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
        <div class="creator-title tc">
            <h3>Flow</h3>
            <p> 申し込みの流れ</p>
        </div>
        <ul class="flow-list">
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
                        審査 <br>
                        （マニア・オタク募集）
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
                        クリエイター契約
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
                        JOIN！いくしまる.com
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
        <div class="creator-title tc">
            <h3>Faq</h3>
            <p> よくあるご質問</p>
        </div>
        <div class="faq-wrapper">
            <p class="faq-text faq-text--pink">Q.審査にはどのくらいの期間がかかりますか？</p>
            <p class="faq-text">A.カスタマーサポートが確認後、7営業日以内にご連絡いたします。</p>
            <p class="faq-text faq-text--pink">Q.所属したら、スタジオや撮影機材は、お借りすることできますか？</p>
            <p class="faq-text">
                A.基本的には、可能です。ただし、所属クリエイターが増えてきており、
                スケジュールが取れない可能性が御座います。
            </p>
            <p class="faq-text faq-text--pink">Q.未成年でもいくしまる.comに所属できますか？</p>
            <p class="faq-text">
                A.基本は、お断りしております。ただし、総合的な審査を実施して、
                所属の是非を検討いたします。
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