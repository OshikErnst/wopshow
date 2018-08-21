<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(''); ?>
<?php if(wp_title(' ', false)) { echo '--'; } ?> 
<?php bloginfo('name'); ?></title>
	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	


<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/cufon.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/Comfortaa_400-Comfortaa_700.font.js"></script>
<script type="text/javascript">

Cufon('#logo h1');



</script>


<?php wp_head(); ?>

</head> 
<body>
<div id="wrapper">
<div id="top_part">
<?php if (is_front_page() || (is_single() && in_category('video'))){?>
<div id="header">
<?php }else{ ?>
<div id="header_inner">
<?php } ?>
<div id="logo"><h1><a href="<?php bloginfo('url'); ?>" title="Home"><?php bloginfo('name'); ?></a></h1></div>


<div id="pages">
<ul>
	<li><a href="<?php echo get_option('home'); ?>">Home</a></li>
	<?php wp_list_pages('title_li=&depth=1&number=7'); ?>
</ul>
</div>		
</div>

	
	


