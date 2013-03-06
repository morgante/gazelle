<?php $theme->display('header'); ?>

	<div id="post-<?php echo $post->id; ?>" class="post span8" itemscope itemtype="http://schema.org/BlogPosting">
		
		<div class="meta">
			<h1 itemprop="title"><?php echo $post->title_out; ?></h1>
			<h2>by <span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php echo $post->author->username; ?></span></span></h2>
		</div>
	
		<img src="http://inapcache.boston.com/universal/site_graphics/blogs/bigpicture/popelastday/bp1.jpg">
	
		<div class="content" itemprop="articleBody">
			<?php echo $post->content_out; ?>
		</div>

	</div>
	
	<div id="sidebar" class="sidebar span4">
		
		<section class="block picks">
			<h2>Editors' Picks</h2>
			<div class="content">
				<ul>
					<?php for ($i = 1; $i <= 9; $i++) { ?>
					<li><a href="#">Article about something fantastic</a></li>
					<?php } ?>
				</ul>
			</div>
		</section>
		
		<section class="block picks">
			<h2>Other in News</h2>
			<div class="content">
				<ul>
					<?php for ($i = 1; $i <= 5; $i++) { ?>
					<li><a href="#">Another news ARTICLE</a></li>
					<?php } ?>
				</ul>
			</div>
		</section>
		
		<?php echo $theme->area('sidebar'); ?>
	</div>
			
<?php $theme->display('footer'); ?>