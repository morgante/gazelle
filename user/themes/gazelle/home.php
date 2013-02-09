<?php $theme->display('header'); ?>

<div id="president" class="contentSection active">
		<h3>President</h3>

		<div class="posts" itemprop="blogPosts">
			<?php foreach(Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'president', 'profile') ) ) ) as $post) echo $theme->content($post); ?>
			
			<span class="clear"></span>
		</div>

	</div>
	
	<div id="vp" class="contentSection">
		<h3>Vice President</h3>

		<div class="posts" itemprop="blogPosts">
			<?php foreach(Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'vp', 'profile') ) ) ) as $post) echo $theme->content($post); ?>
			
			<span class="clear"></span>
		</div>

	</div>
	
	<div id="senator" class="contentSection">
		<h3>Senator</h3>

		<div class="posts" itemprop="blogPosts">
			<?php foreach(Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'senator', 'profile') ) ) ) as $post) echo $theme->content($post); ?>
			
			<span class="clear"></span>
		</div>

	</div>
	
	<div id="as" class="contentSection">
		<h3>Alternate Senator</h3>

		<div class="posts" itemprop="blogPosts">
			<?php foreach(Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'as', 'profile') ) ) ) as $post) echo $theme->content($post); ?>
			
			<span class="clear"></span>
		</div>

	</div>
	

	
	<div id="secretary" class="contentSection">
		<h3>Secretary</h3>

		<div class="posts" itemprop="blogPosts">
			<?php foreach(Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'secretary', 'profile') ) ) ) as $post) echo $theme->content($post); ?>
			
			<span class="clear"></span>
		</div>

	</div>
	
	<div id="treasurer" class="contentSection">
		<h3>Treasurer</h3>

		<div class="posts" itemprop="blogPosts">
			<?php foreach(Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'treasurer', 'profile') ) ) ) as $post) echo $theme->content($post); ?>
			
			<span class="clear"></span>
		</div>

	</div>
	
	<div id="junior" class="contentSection">
		<h3>Class of 2014 Representative</h3>

		<div class="posts" itemprop="blogPosts">
			<?php foreach(Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'junior', 'profile') ) ) ) as $post) echo $theme->content($post); ?>
			
			<span class="clear"></span>
		</div>

	</div>

<?php $theme->display('footer'); ?>
