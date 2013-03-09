<?php $theme->display('header'); ?>

	<div id="home-tiles" class="tiles">
		<?php foreach( $tiles as $tile ): ?>
		<div id="story-<?php echo $tile->slug; ?>" class="tile span4">
			<a href="<?php echo $tile->permalink; ?>">
				<?php if( $tile->info->main_image): ?><img src="<?php echo $tile->info->main_image; ?>" /><?php endif; ?>
				<h3><?php echo $tile->title; ?></h3>
			</a>
		</div>
		<?php endforeach; ?>
		<?php for ($i = 1; $i <= 0; $i++) { ?>
		<div id="story<?php echo $i; ?>" class="tile span4">
			<a href="#">
				<img src="http://main.makeuseoflimited.netdna-cdn.com/wp-content/uploads/2010/09/01a-Copy-Public-Link.jpg" alt="Bob smells fish." />
				<h3>This is an EPIC story!!!</h3>
			</a>
		</div>
		<?php } ?>
	</div>
			

<?php $theme->display('footer'); ?>
