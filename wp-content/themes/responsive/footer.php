<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}
/*
/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */

/*
 * Globalize Theme options
 */

global $responsive_options;
$responsive_options = responsive_get_options();
?>
<?php responsive_wrapper_bottom(); // after wrapper content hook ?>
</div><!-- end of #wrapper -->
<?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>
<?php
/*
<div id="footer" class="clearfix">
	<?php responsive_footer_top(); ?>

	<div id="footer-wrapper">

		<?php get_sidebar( 'footer' ); ?>

		<div class="grid col-940">

			<div class="grid col-540">
				<?php if( has_nav_menu( 'footer-menu', 'responsive' ) ) {
					wp_nav_menu( array(
						'container'      => '',
						'fallback_cb'    => false,
						'menu_class'     => 'footer-menu',
						'theme_location' => 'footer-menu'
					) );
				} ?>
			</div><!-- end of col-540 -->

			<div class="grid col-380 fit">
				<?php echo responsive_get_social_icons() ?>
			</div><!-- end of col-380 fit -->

		</div><!-- end of col-940 -->
		<?php get_sidebar( 'colophon' ); ?>

		<div class="grid col-300 copyright">
			<?php esc_attr_e( '&copy;', 'responsive' ); ?> <?php echo date( 'Y' ); ?><a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<?php bloginfo( 'name' ); ?>
			</a>
		</div><!-- end of .copyright -->

		<div class="grid col-300 scroll-top"><a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'responsive' ); ?>"><?php _e( '&uarr;', 'responsive' ); ?></a></div>

		<div class="grid col-300 fit powered">
			<a href="<?php echo esc_url( 'http://cyberchimps.com/responsive-theme/' ); ?>" title="<?php esc_attr_e( 'Responsive Theme', 'responsive' ); ?>">
				Responsive Theme</a>
			<?php esc_attr_e( 'powered by', 'responsive' ); ?> <a href="<?php echo esc_url( 'http://wordpress.org/' ); ?>" title="<?php esc_attr_e( 'WordPress', 'responsive' ); ?>">
				WordPress</a>
		</div><!-- end .powered -->

	</div><!-- end #footer-wrapper -->

	<?php responsive_footer_bottom(); ?>
</div><!-- end #footer -->
<?php responsive_footer_after(); ?>

<?php wp_footer(); ?>
</body>
</html>
*/
?>

  <div class="page_top">
    <div class="pagetop_pc">
      <a href="#" id="home"><img src="<?php echo get_template_directory_uri()?>/vnaka/img/img-page_top.png" height="24" width="78" alt=""></a>
    <!-- /.pagetop_pc --></div>    
    <!-- /.page_top --></div>
  <div id="footer">
    <div class="footer_pc">
      <div class="footer_menu">
        <div class="menu_ad">
          <ul>
          <li class="first_child"><a href="index.html">Trang Chủ</a></li>
          <li><a href="quotation.html">Bảng Báo Giá</a></li>
          <li><a href="#">Mẫu Giao Diện</a></li>
          <li class="last_child"><a href="#">Gửi Tin Nhắn</a></li>
          </ul>
        <!-- /.menu_ad --></div>
        <div class="contact_ad">
          <ul>
            <li><span>Mr. Thinh: 090 7875 093</span></li>
            <li><span>Email: dangducthinh@vnaka.com</span></li>
            <li><span>Marketing &amp; Sales</span></li>
          </ul>
          <ul>
            <li><span>Mr. Toàn: 01277 609 160</span></li>
            <li><span>Email: dangkhactoan@vnaka.com</span></li>
            <li><span>Website Development</span></li>
          </ul>
        <!-- /.contact_ad --></div>
      <!-- /.footer_menu --></div>
      <div class="copyright">
        <p>Copyright(C)2014 VNAKA MEDIA Co.,Ltd. All Rights Reserved.</p>
        <p class="text_last">Thiết kế website chuyên nghiệp</p>
      <!-- /.copyright --></div>
    <!-- /.footer_pc --></div>       
  <!-- /#footer --></div>  
<!-- /.warpper --></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=222487204609916&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
