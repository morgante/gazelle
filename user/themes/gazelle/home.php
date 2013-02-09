<?php $theme->display('header'); ?>

	<div id="president">
		<h3>President</h3>

		<div class="posts" itemprop="blogPosts">
			<?php
			$presidents = Posts::get( array( 'vocabulary' => array( 'tags:term' => 'president' ) ) );
			echo $theme->content($posts);
			?>
		</div>

	</div>

<?php $theme->display('footer'); ?>
