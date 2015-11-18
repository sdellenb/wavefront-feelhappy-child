<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); if ( is_404() ) : _e(' » '); _e('Not Found'); elseif ( is_home() ) : _e(' » '); bloginfo('description'); else : wp_title(); endif; ?>:</title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta name="description" content="<?php bloginfo('description') ?>" />
	<meta name="keywords" content="medizinische massage, fussreflexzonenmassage, lymphdrainage, aarau" />
	<meta name="generator" content="WordPress <?php bloginfo('version') ?>" /><!-- Please leave for stats -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />


<?php wp_head() ?>

</head>

<body>

<div id="outerWrap">

<div id="wrapper">

	<div id="container">
		
		<div id="header">
			
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<div class="description"><?php bloginfo('description'); ?></div>


			<div id="menu" class="content active">
				<ul>
					<li class="page_item <?php if (is_front_page()) { echo "current_page_item"; }?>"><a href="<?php bloginfo('url'); ?>" title="home">Kontakt</a></li>
					<!-- 
					To exclude pages from menu list, add 'exclude=pageID' to the wp_list_pages() variables below
					Example, to exclude page 2: wp_list_pages('sort_column=menu_order&title_li=&exclude=2') 
					-->
					<?php wp_list_pages('sort_column=menu_order&title_li=&depth=1&exclude=12'); ?>
             	</ul>
			</div>

		
		</div><!--  #header -->