<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TEMPLATENAME
 */
	$fav = esc_attr( get_option( 'favicon_url' ) );
	$logo = esc_attr( get_option( 'logo_url' ) );
	$fb = esc_attr( get_option('fb_url') );
	$twit = esc_attr( get_option('twitter_url') );
	$insta = esc_attr( get_option('insta_url') );
	$addressUrl = nl2br(esc_attr( get_option( 'address_url' ) ));
	$phoneUrl = esc_attr( get_option( 'phone_url' ) );
	$copyright = esc_attr( get_option( 'copyright_url' ) );
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
		<?php
		bloginfo('name');
		echo ' | ';
        if (wp_title('', false)) {
			echo "";
        } else {
            echo bloginfo('description');
        } wp_title('');
		?>
	</title>
    <link rel="icon" href="<?php echo $fav; ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.min.js"></script>
	<?php wp_head(); ?>
	<?php 
		$custom_css = get_option( 'theme_css' );
		if(!empty($custom_css)) {
			?>
				<?php echo '<style type="text/css">'. $custom_css. '</style> '; ?>
			<?php
		}
	?>
</head>
<body <?php body_class(); ?>>

<header class="menu-header">
	<nav class="navbar" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-group">
			<div class="navbar-brand">
				<a class="logo" href="<?php bloginfo('url'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
				</a>
			</div>
			<!-- use in container class navbar-slide-right, navbar-collapse for different styling -->
			<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'navbar-type navbar-slide-right',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'WP_Custom_Navwalker::fallback',
					'walker'            => new WP_Custom_Navwalker(),
				) );
			?>
			<div class="navbar-button-wrapper">
				<a href="<?php bloginfo('url'); ?>/become-creator" class="navbar-button">クリエイターになる</a>
				<a href="<?php bloginfo('url'); ?>/job-request" class="navbar-button">仕事の依頼</a>
			</div>
			<button class="navbar-toggler" type="button">
				<div class="navbar-toggler-box">
					<span class="navbar-toggler-icon"></span>
				</div>
			</button>
		</div>
	</nav>
</header>