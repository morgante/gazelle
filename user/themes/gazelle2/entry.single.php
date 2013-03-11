<?php $theme->display('header'); ?>

	<div id="post-<?php echo $post->id; ?>" class="post primary span8" itemscope itemtype="http://schema.org/BlogPosting">
		<div class="wrapper">
			<div class="meta">
				<h1 itemprop="title"><?php echo $post->title_out; ?></h1>
				<h2>by <span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php echo $post->author->username; ?></span></span></h2>
			</div>
			
			<?php if( $post->info->main_image != null ): ?>
				<img class="mainimage" src="<?php echo $post->info->main_image; ?>">
			<?php endif; ?>
			
			<div class="content" itemprop="articleBody">
				<?php echo $post->content_out; ?>
			</div>
		</div>
	</div>
	
	<div id="sidebar" class="sidebar span4">
		
		<section class="block picks">
			<h2>Editors' Picks</h2>
			<div class="content">
				<ul>
					<?php foreach(Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'pick' ) ), 'not:id' => array( $post->id ) ) ) as $li): ?>
					<li><a href="<?php echo $li->permalink; ?>"><?php echo $li->title; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</section>
		
		<section class="block picks">
			<h2>Other in <?php echo ucfirst( $section ); ?></h2>
			<div class="content">
				<ul>
					<?php foreach(Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( $section ) ), 'not:id' => array( $post->id ) ) ) as $li): ?>
					<li><a href="<?php echo $li->permalink; ?>"><?php echo $li->title; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</section>
		
		<?php echo $theme->area('sidebar'); ?>
	</div>
			
<?php $theme->display('footer'); ?>