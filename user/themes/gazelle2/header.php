<?php
$time = HabariDateTime::date_create();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php if(($request->display_entry || $request->display_page) && isset($post)) { echo $post->title_title . ' - '; } ?><?php echo Options::get('title'); ?></title>
	<meta name="generator" content="Habari">
	<meta name="viewport" content="width=device-width, maximum-scale = 1">
	<link rel="Shortcut Icon" href="<?php echo $theme->get_url('/favicon.png'); ?>">
	<?php echo $theme->header(); ?>
</head>
<body class="<?php echo $theme->body_class(); ?>" itemscope itemtype="http://schema.org/Blog">

<div id="main" class="container">
	
	<div class="redge"></div>
	
	<div class="masthead">
		<div class="bgtile"></div>
		<div class="row">
			<div class="logo span4"><a href="<?php Site::out_url( 'habari' ); ?>">Go home</a></div>
			<div class="name span5"><a href="<?php Site::out_url( 'habari' ); ?>">The Gazelle</a></div>
			<div class="meta span3">
				<p class="date"><?php echo $time->format('l, F n, Y'); ?></p>
				<p class="time"><?php echo $time->format('g:ia') ?>, Abu Dhabi UAE</p>
				<p class="temperature">100º F, 30º C</p>
			</div>
		</div>
		
		<div class="navigation row">
			<div class="span4 news"><a href="<?php Site::out_url( 'habari' ); ?>/news">News</a></div>
			<div class="span4 features"><a href="<?php Site::out_url( 'habari' ); ?>/features">Features</a></div>
			<div class="span4 opinion"><a href="<?php Site::out_url( 'habari' ); ?>/opinion">Opinion</a></div>
		</div>
		
	</div>

	<div id="content" class="row">