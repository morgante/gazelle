<?php $theme->display('header'); ?>

	<div class="">

	<article id="post-<?php echo $post->id; ?>" class="post" itemscope itemtype="http://schema.org/BlogPosting">

		<h1 itemprop="title"><?php echo $post->title_out; ?></h1>
		
		<img src="http://inapcache.boston.com/universal/site_graphics/blogs/bigpicture/popelastday/bp1.jpg">
		
		<div class="content active" itemprop="articleBody" id="profile<?php echo $post->id; ?>">
			<h2>by <span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php echo $post->author->username; ?></span></span></h2>

			<?php echo $post->content_out; ?>
		</div>

		<div class="content" id="platform<?php echo $post->id; ?>">
			<?php echo $post->content; ?>
		</div>

	</article>
	
<?php $theme->display('footer'); ?>