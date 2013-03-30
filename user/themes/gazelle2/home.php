<?php $theme->display('header'); ?>

	<div id="home-tiles" class="tiles primary span12">
		<div class="wrapper">
			<?php foreach( $tiles as $tile ): ?>
			<div id="story-<?php echo $tile->slug; ?>" class="tile">
				<a href="<?php echo $tile->permalink; ?>">
					<?php if( $tile->thumb): ?><img src="<?php echo $tile->thumb; ?>" /><?php endif; ?>
					<h3><?php echo $tile->title; ?></h3>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
			

<?php $theme->display('footer'); ?>
