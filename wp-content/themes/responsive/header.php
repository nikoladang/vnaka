<?php
/*
/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}
/*
?>
	<!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title><?php wp_title( '&#124;', true, 'right' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">

<?php responsive_header(); // before header hook ?>
	<div class="skip-container cf">
		<a class="skip-link screen-reader-text focusable" href="#content"><?php _e( '&darr; Skip to Main Content', 'responsive' ); ?></a>
	</div><!-- .skip-container -->
	<div id="header">

		<?php responsive_header_top(); // before header content hook ?>

		<?php if( has_nav_menu( 'top-menu', 'responsive' ) ) {
			wp_nav_menu( array(
				'container'      => '',
				'fallback_cb'    => false,
				'menu_class'     => 'top-menu',
				'theme_location' => 'top-menu'
			) );
		} ?>

		<?php responsive_in_header(); // header hook ?>

		<?php if( get_header_image() != '' ) : ?>

			<div id="logo">
				<a href="<?php echo home_url( '/' ); ?>"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
			</div><!-- end of #logo -->

		<?php endif; // header image was removed ?>

		<?php if( !get_header_image() ) : ?>

			<div id="logo">
				<span class="site-name"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<span class="site-description"><?php bloginfo( 'description' ); ?></span>
			</div><!-- end of #logo -->

		<?php endif; // header image was removed (again) ?>

		<?php get_sidebar( 'top' ); ?>
		<?php wp_nav_menu( array(
			'container'       => 'div',
			'container_class' => 'main-nav',
			'fallback_cb'     => 'responsive_fallback_menu',
			'theme_location'  => 'header-menu'
		) ); ?>

		<?php if( has_nav_menu( 'sub-header-menu', 'responsive' ) ) {
			wp_nav_menu( array(
				'container'      => '',
				'menu_class'     => 'sub-header-menu',
				'theme_location' => 'sub-header-menu'
			) );
		} ?>

		<?php responsive_header_bottom(); // after header content hook ?>

	</div><!-- end of #header -->
<?php responsive_header_end(); // after header container hook ?>

<?php responsive_wrapper(); // before wrapper container hook ?>
	<div id="wrapper" class="clearfix">
<?php responsive_wrapper_top(); // before wrapper content hook ?>
<?php responsive_in_wrapper(); // wrapper hook ?>

*/
?>

<body>
<div id="fb-root"></div>
<div class="warpper">
  <div id="header">
    <div class="inner">
      <div id="nav">
        <ul>
          <li class="first"><a href="./">Trang Chủ</a></li>
          <li><a href="./aboutus.php">Giới Thiệu</a></li>
          <li><a href="#">Khuyến Mãi</a></li>
          <li><a href="./payment.php">Thanh Toán</a></li>
          <li><a href="#">Liên Hệ</a></li>
          <li><a href="#">VNAKA Media</a></li>
        </ul>
      <!-- /#nav --></div>
      <div class="logo_promotion">
        <h1 class="logo"><img src="<?php echo get_template_directory_uri()?>/vnaka/img/logo_vnaka.png" width="" height="" alt="logo"></h1>
        <div class="promotion">
          <ul id="slide_promotion">
            <li><p><marquee>Khuyến mãi đăng ký website nhân dịp 2/9 bạn được giảm 20%</marquee></p></li>
          </ul>
          <p class="read_more"><a href="#"><img src="<?php echo get_template_directory_uri()?>/vnaka/img/ico-chi_tiet.png" height="19" width="77" alt="Chi Tiết"></a></p>
        <!-- /.promotion --></div>
      <!-- /.logo --></div>
    <!-- /.inner --></div>
  <!-- /#header --></div>
  <div id="global_navi" class="clearfix">
    <div class="inner">
      <ul>
        <li><a href="<?php echo get_site_url() ?>">Trang Chủ</a></li>
        <li><a href="./quotation/">Bảng Báo Giá</a></li>
        <li><a href="#">Mẫu Giao Diện</a></li>
        <li><a href="./message/">Gửi Tin Nhắn</a></li>
      </ul>
      <p class="hotline"><strong>HOTLINE: 090 7875 093</strong></p>
    <!-- /.inner --></div>
  <!-- /#global_navi --></div>