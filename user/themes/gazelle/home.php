<?php $theme->display('header'); ?>

	<div id="results">
		<h3>Results</h3>
		<p>We are happy to announce the results of the 2013 Spring Elections. Congratulations to the winners and thank you to all candidates.</p>
		<ul>
			<li>President: <a href="#president">Leah Reynolds</a></li>
			<li>Vice President: <a href="#vp">Corey Meyer</a></li>
			<li>Senator: <a href="#senator">Geo Kamus</a></li>
			<li>Alternate Senator: <a href="#as">Clara Correia</a></li>
			<li>Secretary: <a href="#secretary">Veronica Houk</a></li>
			<li>Treasurer: <a href="#treasurer">Angelina Micha Djaja</a></li>
			<li>Class of 2014 Representative: <a href="#junior">Irene Pañeda</a></li>
		</ul>
		<p>Thank you,</p>
		<p class="signature">The Elections Board</p>
	</div>
	<div id="president" class="contentSection active">
		<h3>President: <a href="#post-231">Leah Reynolds</a></h3>

		<div class="posts" itemprop="blogPosts">
			<?php foreach(Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'president', 'profile') ) ) ) as $post) echo $theme->content($post); ?>
			
			<span class="clear"></span>
		</div>

	</div>
	
	<div id="vp" class="contentSection">
		<h3>Vice President: <a href="#post-211">Corey Meyer</a></h3>

		<div class="posts" itemprop="blogPosts">
			<?php foreach(Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'vp', 'profile') ) ) ) as $post) echo $theme->content($post); ?>
			
			<span class="clear"></span>
		</div>

	</div>
	
	<div id="senator" class="contentSection">
		<h3>Senator: <a href="#post-131">Geo Kamus</a></h3>

		<div class="posts" itemprop="blogPosts">
			<?php foreach(Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'senator', 'profile') ) ) ) as $post) echo $theme->content($post); ?>
			
			<span class="clear"></span>
		</div>

	</div>
	
	<div id="as" class="contentSection">
		<h3>Alternate Senator: <a href="#post-331">Clara Correia</a></h3>

		<div class="posts" itemprop="blogPosts">
			<?php foreach(Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'as', 'profile') ) ) ) as $post) echo $theme->content($post); ?>
			
			<span class="clear"></span>
		</div>

	</div>
	

	
	<div id="secretary" class="contentSection">
		<h3>Secretary: <a href="#post-351">Veronica Houk</a></h3>

		<div class="posts" itemprop="blogPosts">
			<?php foreach(Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'secretary', 'profile') ) ) ) as $post) echo $theme->content($post); ?>
			
			<span class="clear"></span>
		</div>

	</div>
	
	<div id="treasurer" class="contentSection">
		<h3>Treasurer: <a href="#post-141">Angelina Micha Djaja</a></h3>

		<div class="posts" itemprop="blogPosts">
			<?php foreach(Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'treasurer', 'profile') ) ) ) as $post) echo $theme->content($post); ?>
			
			<span class="clear"></span>
		</div>

	</div>
	
	<div id="junior" class="contentSection">
		<h3>Class of 2014 Representative: <a href="#post-291">Irene Pañeda</a></h3>

		<div class="posts" itemprop="blogPosts">
			<?php foreach(Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'junior', 'profile') ) ) ) as $post) echo $theme->content($post); ?>
			
			<span class="clear"></span>
		</div>

	</div>

<?php $theme->display('footer'); ?>
