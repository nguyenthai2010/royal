<!DOCTYPE html>
<head>
<meta charset="UTF-8" />
<base href="<?php echo get_bloginfo('template_url');?>/"></base>
<title>Hotel &amp; Villas in the heart of Seminyak</title>

<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="
<?php if ( is_single() ) {
    single_post_title('', true); 
} else {
    bloginfo('name'); echo " - "; bloginfo('description');
}
?>" 
/>

<meta name="robots" content="index,follow,noarchive">
<!--[if lt IE 9]>
<script src="themes/klasik/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link rel='stylesheet' id='googleFonts-css'  href='http://fonts.googleapis.com/css?family=Roboto+Condensed%3A300%2C400%2C700%7COpen+Sans%3A400%2C700&#038;ver=3.7.4' type='text/css' media='all' />

<link rel='stylesheet' id='prettyphoto-css-css'  href='themes/klasik/css/all.css' type='text/css' media='screen, all' />
<link rel='stylesheet' id='main-css-css'  href='css/all.css' type='text/css' media='all' />

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery-migrate.min.js'></script>

<script type='text/javascript' src='js/comment-reply.min.js'></script>
<script type='text/javascript' src='js/class.properties.js'></script>
<script type='text/javascript' src='js/class.overview.js'></script>
<script type='text/javascript' src='js/class.contact.js'></script>
<?php wp_head();?>
</head>