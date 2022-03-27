<?php
    $logo = esc_attr( get_option('logo_url') );
    $fav = esc_attr( get_option('favicon_url') );
?>
<div class="wrap">
    <h1>Theme Options Panel</h1>
    <?php
        settings_errors();
    ?>
    <div class="theme-panel-wrap theme-admin-wrap">
        <div class="theme-panel-left">
            <div class="theme-box">
                <div class="theme-head">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/admin/admin-logo.png'; ?>" alt="">
                    <h3>Version 1.0.0</h3>
                </div>
            </div>
            <div class="theme-powered">
                <p>Reco P. Lacion</p>
            </div>
        </div>
        <div class="theme-panel-right">
            <div class="theme-box">
                <form action="options.php" method="post" class="theme-options-form">
                    <?php
                        settings_fields('theme-section');
                        do_settings_sections('rbr-theme-options');
                        submit_button('Save Changes', 'primary', 'btnSubmit');
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>