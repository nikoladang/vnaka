<?php

/*// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Index Template
 *
 *
 * @file           index.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/index.php
 * @link           http://codex.wordpress.org/Theme_Development#Index_.28index.php.29
 * @since          available since Release 1.0
 */
?>
<!DOCTYPE html>
<html lang="vn">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<meta name="copyright" content="">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
<title>Home Page</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<link href="<?php echo get_template_directory_uri()?>/vnaka/css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo get_template_directory_uri()?>/vnaka/css/index.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/vnaka/css/index_sp.css" media="screen and (max-width: 640px)">
<link href="<?php echo get_template_directory_uri()?>/vnaka/css/jquery.bxslider.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo get_template_directory_uri()?>/vnaka/js/jquery-v1.10.2.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri()?>/vnaka/js/jquery.bxslider.js" type="text/javascript"></script>
<script>
  $(document).ready(function(){
    $('.bxslider').bxSlider({
      auto: true,
      infiniteLoop: true,
      // autoControls: false
    });
    $('.newslide').bxSlider({
      auto: true,
      mode: 'vertical',
      slideMargin: 20
    });
});
</script>
</head>

<?php
  get_header();
?>


  <div class="content">
    <div id="slideshow">
      <div class="inner">
        <ul class="bxslider">
          <li><img src="<?php echo get_template_directory_uri()?>/vnaka/img/bnr-slide_01.png" width="960" height="310" alt="slide_01"/></li>
          <li><img src="<?php echo get_template_directory_uri()?>/vnaka/img/bnr-slide_02.png" width="960" height="310" alt="slide_02"/></li>
          <li><img src="<?php echo get_template_directory_uri()?>/vnaka/img/bnr-slide_03.png" width="960" height="310" alt="slide_03"/></li>
          <li><img src="<?php echo get_template_directory_uri()?>/vnaka/img/bnr-slide_04.png" width="960" height="310" alt="slide_04"/></li>
        </ul>
      <!-- /.inner --></div>
    <!-- /#slideshow --></div>
    <div id="slideshow_sp">
      <div class="inner">
        <ul>
          <li><img src="<?php echo get_template_directory_uri()?>/vnaka/img/sp/bnr-slide_01.png" alt="slide_01"/></li>
        </ul>
      <!-- /.inner --></div>
    <!-- /#slideshow --></div>    
    <div class="article">
      <div class="bd_title">
        <div class="inner">
          <h2 class="title"><img src="<?php echo get_template_directory_uri()?>/vnaka/img/title-content_big.png" height="25" width="678" alt="VNAKA dịch vụ website hàng đầu &amp; chuyên nghiệp, giá rẻ!"></h2>
        <!-- /.inner --></div>
      <!-- /.bd_title --></div>
      <div class="inner clearfix">
        <div class="detail">
          <ul>
            <li>
              <h3 class="tx_text">Hỗ trợ khởi nghiệp cho doanh nghiệp mới bắt đầu</h3>
              <img src="<?php echo get_template_directory_uri()?>/vnaka/img/img6.png" height="50" width="50" alt="Doanh nghiệp">
              <p>Bạn mới bắt đầu kinh doanh website là không thể thiếu cho sự quảng bá thương hiệu của bạn VNAKA cung cấp các dịch vụ marketing tốt nhất giúp bạn khởi tạo doanh nghiệp thành công.</p>
            </li>
            <li>
              <h3 class="tx_text">Cung cấp email newsletter</h3>
              <img src="<?php echo get_template_directory_uri()?>/vnaka/img/img5.png" height="50" width="50" alt="Cung cấp email newsletter">
              <p>Bạn có thể dễ dàng gửi e-mail cho khách hàng của bạn bằng dịch vụ của chúng tôi, đảm bảo sẽ gửi vào inbox, không tạo spam cho khách hàng. chỉ có tại VNAKA hệ thống gửi e-mail tiết kiệm và nhanh chóng.</p>
            </li>
          </ul>
          <ul>  
            <li>
              <h3 class="tx_text">Không giới hạn dung lượng và băng thông</h3>
              <img src="<?php echo get_template_directory_uri()?>/vnaka/img/img4.png" height="50" width="50" alt="dung lượng và băng thông">
              <p>VNAKA không giới hạn dung lượng và băng thông hosting giúp bạn đăng tải mọi thứ bạn cần mà không phải lo lắng một điều gì. Hãy an tâm sử dụng website tại VNAKA</p>
            </li>
            <li>
              <h3 class="tx_text">Hỗ trợ phiên bản mobile</h3>
              <img src="<?php echo get_template_directory_uri()?>/vnaka/img/img3.png" height="50" width="50" alt="phiên bản mobile">
              <p>Các website sử dụng VNAKA đều hiển thị tốt trên mobile, cung cấp rất nhiều mẫu giao diện mobile chuyên nghiệp, đáp ứng nhu cầu website của bạn trên nền tảng mobile.</p>
            </li>
          </ul>
          <ul>  
            <li>
              <h3 class="tx_text">Giao diện đẹp</h3>
              <img src="<?php echo get_template_directory_uri()?>/vnaka/img/img2.png" height="50" width="50" alt="Giao diện đẹp">
              <p>VNAKA có hàng trăm </span>mẫu giao diện website<span style="color: #292929;"> cực đẹp phù hợp với nhiều ngành nghề, giúp bạn thoải mái lựa chọn.</p>
            </li>
            <li>
              <h3 class="tx_text">Giá cực rẻ, chỉ từ 49.000 đồng</h3>
              <img src="<?php echo get_template_directory_uri()?>/vnaka/img/img1.png" height="50" width="50" alt="Giá cực rẻ">
              <p>Bạn sẽ sở hữu ngay website chuyên nghiệp, giao diện đẹp, chỉ với 49.000/tháng, bao gồm cả hosting, tên miền.</p>
            </li>
          </ul>
        <!-- /.detail --></div>
        <div class="aside">
          <div class="item_news">
            <div class="news">
              <h4 class="txt_news">Thông tin website</h4>
                <ul class="newslide">
                  <li>
                    <img src="<?php echo get_template_directory_uri()?>/vnaka/img/ico-date_news.png" height="55" width="55" alt="date">
                    <p class="text_item">Khuyến mãi cho website 99K, bạn sẽ được tên miền miễn phí 1 năm mà không cần lo lắng.</p>
                  </li>
                  <li>
                    <img src="<?php echo get_template_directory_uri()?>/vnaka/img/ico-date_news.png" height="55" width="55" alt="date">
                    <p class="text_item">Khuyến mãi cho website 99K, bạn sẽ được tên miền miễn phí 1 năm mà không cần lo lắng bạn sẽ được tên miền miễn phí 1 năm.</p>
                  </li>
                  <li>
                    <img src="<?php echo get_template_directory_uri()?>/vnaka/img/ico-date_news.png" height="55" width="55" alt="date">
                    <p class="text_item">Khuyến mãi cho website 99K, bạn sẽ được tên miền miễn phí 1 năm mà không cần lo lắng.</p>
                  </li>
                   <li>
                    <img src="<?php echo get_template_directory_uri()?>/vnaka/img/ico-date_news.png" height="55" width="55" alt="date">
                    <p class="text_item">Khuyến mãi cho website 99K, bạn sẽ được tên miền miễn phí 1 năm mà không cần bạn sẽ được tên miền miễn phí 1 năm lo lắng.</p>
                  </li>
                  <li>
                    <img src="<?php echo get_template_directory_uri()?>/vnaka/img/ico-date_news.png" height="55" width="55" alt="date">
                    <p class="text_item">Khuyến mãi cho website 99K, bạn sẽ được tên miền miễn phí 1 năm mà không cần lo lắng bạn sẽ được tên miền miễn phí 1 năm.</p>
                  </li>
                  <li>
                    <img src="<?php echo get_template_directory_uri()?>/vnaka/img/ico-date_news.png" height="55" width="55" alt="date">
                    <p class="text_item">Khuyến mãi cho website 99K, bạn sẽ được tên miền miễn phí 1 năm mà không cần lo lắng.</p>
                  </li>
                   <li>
                    <img src="<?php echo get_template_directory_uri()?>/vnaka/img/ico-date_news.png" height="55" width="55" alt="date">
                    <p class="text_item">Khuyến mãi cho website 99K, bạn sẽ được tên miền miễn phí 1 năm mà không cần bạn sẽ được tên miền miễn phí 1 năm lo lắng.</p>
                  </li>                
                </ul>
            <!-- /.news --></div>
          <!-- /.item_news --></div>
          <div class="item_facebook">
            <div class="fb-like-box" data-href="https://www.facebook.com/vnakamedia" data-width="320" data-height="230" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
          <!-- /.item_facebook --></div>
        <!-- /.aside --></div>
      <!-- /.inner --></div>
    <!-- /.article --></div>
    <div class="contact_we">
      <div class="inner clearfix">
        <div class="item_we">
          <p><a href="#"><img src="<?php echo get_template_directory_uri()?>/vnaka/img/img-why_website.png" height="48" width="271" alt="Tại sao dùng website"></a></p>
          <p><a href="#"><img src="<?php echo get_template_directory_uri()?>/vnaka/img/img-why_rigister.png" height="48" width="271" alt="Tại sao dùng website"></a></p>
          <p><a href="#"><img src="<?php echo get_template_directory_uri()?>/vnaka/img/img-why_card.png" height="48" width="326" alt="Tại sao dùng website"></a></p>
        <!-- /.item_we --></div>
        <img src="<?php echo get_template_directory_uri()?>/vnaka/img/buoc-thuc-hien-web.png" width="960" height="141" alt="buoc thuc hien web" >
      <!-- /.inner --></div>
    <!-- /.contact_we --></div>
  <!-- /.content --></div>
<?php
  get_footer();
?>