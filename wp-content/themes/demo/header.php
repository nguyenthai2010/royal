<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
	<div class="wrapper">
		 <header  style="height:50px;background:blue;">
         	<?php
				
				$defaults = array(
					'theme_location'  => 'menu_top',
					'menu'            => '',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => '',
					'before'          => '<div class="abc">',
					'after'           => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				);
				
				wp_nav_menu( $defaults );
				
			?>
         </header>