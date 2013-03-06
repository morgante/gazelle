<?php $theme->display('header'); ?>

	<div id="home-tiles" class="tiles">
		<?php for ($i = 1; $i <= 9; $i++) { ?>
		<div id="story<?php echo $i; ?>" class="tile span4">
			<a href="#">
				<img src="http://main.makeuseoflimited.netdna-cdn.com/wp-content/uploads/2010/09/01a-Copy-Public-Link.jpg" alt="Bob smells fish." />
				<h3>This is an EPIC story!!!</h3>
			</a>
		</div>
		<?php } ?>
	</div>
			

<?php $theme->display('footer'); ?>
