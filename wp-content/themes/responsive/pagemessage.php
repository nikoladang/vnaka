<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * 
Template Name: message.php 
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
<link href="<?php echo get_template_directory_uri()?>/vnaka/css/quotation.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/vnaka/css/index_sp.css" media="screen and (max-width: 640px)">
</head>
<?php
  get_header();
?>

  <div class="content">
    <div class="inner">
      <div id="message">
        <?php echo the_title(); ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'post-data' ); ?>

        <?php endwhile; ?>
      <!-- /#message --></div>
    <!-- /.inner --></div>
  <!-- /.content --></div>

<?php
  get_footer();
?>

