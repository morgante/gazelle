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
				<p class="date">Monday, January 7th, 2012</p>
				<p class="time">3:45pm, Abu Dhabi UAE</p>
				<p class="temperature">100º F, 30º C</p>
			</div>
		</div>
		
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container row">
					<ul class="nav row">
						<li class="span4"><a href="#">News</a></li>
						<li class="span4"><a href="#">Features</a></li>
						<li class="span4"><a href="#">Opinion</a></li>
					</ul>
				</div>
			</div><!-- /.navbar -->
		</div>
		
	</div>

	<div id="content">
