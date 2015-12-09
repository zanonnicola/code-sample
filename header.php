<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if IE 9]><html <?php language_attributes(); ?> class="no-js ie9"><![endif]-->
<!--[if gt IE 8]><!--> 

<?php if (isset($_COOKIE["font"])) { ?>
  <html <?php language_attributes(); ?> class="no-js fonts-loaded">

<?php } else { ?>

  <html <?php language_attributes(); ?> class="no-js">

<?php } ?>


<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title><?php wp_title('|', true, 'right'); ?></title>
  <!-- Meta description will be added by Yoast WordPress SEO plugin -->
  
  <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="HandheldFriendly" content="True"> <!-- For older dumb phones. Palm and Blackberries -->
  <meta name="MobileOptimized" content="320"> <!-- Older "Windows Mobile" Phones -->
  <meta name="apple-mobile-web-app-capable" content="yes"><!-- iOS meta tag defines whether the web application should run in full-screen mode -->	
	<meta name="format-detection" content="telephone=no"><!-- Prevent iOS to change the style of a telephone number -->
  <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon-152x152.png" />
  
  <!-- 

  You can access the template URL inside JS file.
  Just reference the global variable "templateUrl"
   
  -->
  <script type="text/javascript">
    var templateUrl = '<?= get_bloginfo("template_url"); ?>';
  </script>
  
  <?php wp_head(); ?>

  <?php
    if (!isset($_COOKIE["font"])) { ?>
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/libs/mobile-mustard.js"></script>
  <?php } ?>

<body <?php body_class('widget'); ?> id="<?php echo $post->ID; ?>" data-features="hack common page<?php echo $post->ID; if (is_blog()) { echo ' blogSingle'; }?> <?php echo ' '.str_replace('-','',substr(get_page_template_slug(), 0, -4)); ?>">
<!--[if lt IE 8]>
  <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WNGZTW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WNGZTW');</script>
<!-- End Google Tag Manager -->
