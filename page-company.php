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
<section class="page-banner page-banner-company">
    <div class="cntr">
        <div class="page-banner-title">
            <h1>
                <?php the_title(); ?>
                <small>会社概要</small>
            </h1>
        </div>
    </div>
</section>
<!-- end of page banner -->

<!-- company -->
<section class="page-company">
    <div class="cntr">
        <div class="page-company-wrapper">
            <table class="table-company">
                <tbody>
                    <tr>
                        <td>社名</td>
                        <td>株式会社いくしまる.com</td>
                    </tr>
                    <tr>
                        <td>代表者</td>
                        <td>齋藤郁子</td>
                    </tr>
                    <tr>
                        <td>設立年月日</td>
                        <td>2019年9月24日</td>
                    </tr>
                    <tr>
                        <td>
                        従業員数 <br>
                        (外注先含む)
                        </td>
                        <td>30名※業務委託、アルバイト含む</td>
                    </tr>
                    <tr>
                        <td>住所</td>
                        <td>
                            〒150-0034 <br>
                            東京都渋谷区代官山町8-9 竜王ビル5階
                        </td>
                    </tr>
                    <tr>
                        <td>電話番号</td>
                        <td>03-6433-7443</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- end of company -->

<!-- become -->
<?php get_template_part( 'template-parts/template', 'become' ); ?>
<!-- end of become -->

<?php
get_footer();