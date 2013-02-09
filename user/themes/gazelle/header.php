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

<div class="wrapper">
	
		<header id="header">
			<div class="container">
				<hgroup>
					<h1 itemprop="name"><a href="/" itemprop="url"><?php echo Options::get('title'); ?></a></h1>
					<h2 itemprop="issue">Elections 2013</h2>
					<span class="date">Full Launch <strong>February 22, 2012</strong></span>
				</hgroup>
			</div>
		</header>
		
		<div id="nav">
			<ul>
				<li id="nav-president" class="active"><a href="#president">President</a></li>
				<li id="nav-vp"><a href="#vp">Vice President</a></li>
				<li id="nav-senator"><a href="#senator">Senator</a></li>
				<li id="nav-as"><a href="#as">Alternate Senator</a></li>
				<li id="nav-secretary"><a href="#secretary">Secretary</a></li>
				<li id="nav-treasurer"><a href="#treasurer">Treasurer</a></li>
				<li id="nav-junior"><a href="#junior">Junior Representative</a></li>
			</ul>
		</div>

	<div id="content" class="jcarousel">
		<?php Session::messages_out(); ?>
