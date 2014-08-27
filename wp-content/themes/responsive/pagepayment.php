<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * 
Template Name: payment.php 
 *
 *
 * @file           page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
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
<link href="<?php echo get_template_directory_uri()?>/vnaka/css/payment.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/vnaka/css/index_sp.css" media="screen and (max-width: 640px)">
</head>
<?php
  get_header();
?>

    <div class="content">
   <div class="inner">
    <div class="article">
      <h2>CHUYỂN KHOẢN QUA TÀI KHOẢN NGÂN HÀNG NỘI ĐỊA, ATM HOẶC INTERNET BANKING</h2>
      <span>Lưu ý:</span>
      <p>Vui lòng ghi rõ nội dung thanh toán tại phiếu gửi tiền ở ngân hàng. Chúng tôi sẽ không ch trách nhiệm khi bạn chuyển tiền nhầm hoặc không phải tài khoản ghi trên website của VNAKA</p>
      <div id="cart">
      <ul>
        <li>
          <span class="ico_left"><img src="<?php echo get_template_directory_uri()?>/vnaka/img/acb.jpg" height="115" width="177" alt="Thẻ ACB"></span>
          <h3>Ngân hàng Tư nhân ACB - Vietcombank chi nhánh Quận 1 - TP. Hồ Chí Minh</h3>
          <p>Chủ tài khoản: <strong>Đặng Đức Thịnh</strong></p>
          <p>Số tài khoản: <strong>137534839</strong></p>
        </li>  
        <li>
          <span class="ico_left"><img src="<?php echo get_template_directory_uri()?>/vnaka/img/dab.jpg" height="115" width="177" alt="thẻ đông á"></span>
          <h3>Ngân hàng TMCP Đông Á - DongA Bank Chi Nhánh: Hội sở giao dịch Ngân Hàng Đông Á - TP. Hồ Chí Minh</h3>
          <p>Chủ tài khoản: <strong>Đặng Đức Thịnh</strong></p>
          <p>Số tài khoản: <strong>0071000905217</strong></p>
        </li>
        <li>
          <span class="ico_left"><img src="<?php echo get_template_directory_uri()?>/vnaka/img/vcb.jpg" height="115" width="177" alt="Thẻ Vietcombank"></span>
          <h3>Ngân hàng Ngoại thương Việt Nam - Vietcombank chi nhánh Quận 1 - TP. Hồ Chí Minh</h3>
          <p>Chủ tài khoản: <strong>Đặng Đức Thịnh</strong></p>
          <p>Số tài khoản: <strong>0102129697</strong></p>
        </li>      
      </ul>        
      <!-- /#cart --></div>
    <!-- /.article --></div>
    <div class="aside">
    <!-- /.aside --></div>  
   <!-- /.inner --></div>
  <!-- /.content --></div>


<?php
  get_footer();
?>

