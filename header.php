<?php
/**
 * Header used by all templates
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php bloginfo('name'); ?><?php wp_title( '|', true, 'left' ); ?></title>
	<meta name="description" content="<?php echo $description; ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.css" />
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
    	<script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
	<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2409342-16', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>


