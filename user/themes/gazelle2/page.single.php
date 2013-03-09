<?php $theme->display('header'); ?>

	<div id="post-<?php echo $post->id; ?>" class="post primary span12" itemscope itemtype="http://schema.org/BlogPosting">
		<div class="wrapper">
			<div class="meta">
				<h1 itemprop="title"><?php echo $post->title_out; ?></h1>
			</div>
	
			<div class="content" itemprop="articleBody">
				<?php echo $post->content_out; ?>
			</div>
		</div>
	</div>
		
		<?php echo $theme->area('sidebar'); ?>
	</div>
			
<?php $theme->display('footer'); ?>