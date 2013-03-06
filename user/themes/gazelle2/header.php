<?php
$time = HabariDateTime::date_create();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php if($request->display_entry && isset($post)) { echo $post->title_title . ' - '; } ?><?php echo Options::get('title'); ?></title>
	<meta name="generator" content="Habari">
	<meta name="viewport" content="width=device-width, maximum-scale = 1">
	<link rel="Shortcut Icon" href="<?php echo $theme->get_url('/favicon.png'); ?>">
	<?php echo $theme->header(); ?>
</head>
<body class="<?php echo $theme->body_class(); ?>" itemscope itemtype="http://schema.org/Blog">

<div class="container">
	
	<div class="masthead">
		<div class="row">
			<div class="logo span3">Logo</div>
			<div class="name span6">The Gazelle</div>
			<div class="meta span3">
				<p class="date"><?php echo $time->format('l, F n, Y'); ?></p>
				<p class="time"><?php echo $time->format('g:ia') ?>, Abu Dhabi UAE</p>
				<p class="temperature">100º F, 30º C</p>
			</div>
		</div>
		
		<div class="nav row">
			<div class="span4 news"><a href="#">News</a></div>
			<div class="span4 features"><a href="#">Features</a></div>
			<div class="span4 opinion"><a href="#">Opinion</a></div>
		</div>
		
	</div>

	<div id="content">
