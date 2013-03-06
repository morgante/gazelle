<?php $theme->display('header'); ?>

	<div id="home-tiles" class="tiles">
		<?php for ($i = 1; $i <= 9; $i++) { ?>
		<div id="story<?php echo $i; ?>" class="tile">
			<a href="#">
				<img src="" alt="Bob smells fish." />
				<h3>This is an EPIC story!!!</h3>
			</a>
		</div>
		<?php } ?>
	</div>
			

<?php $theme->display('footer'); ?>
