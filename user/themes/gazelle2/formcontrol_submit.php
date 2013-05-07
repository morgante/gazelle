<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<div<?php
		echo $control->parameter_map(
			array(
				'class', 'id' => 'name'
			)
		); ?>>
	<div class="controls">
		<input type="submit" class="btn" <?php
			echo $control->parameter_map(
				array(
					'tabindex', 'disabled', 'readonly',
					'id' => 'field',
					'name' => 'field',
				),
				array(
					'value' => Utils::htmlspecialchars( $control->caption ),
				)
			);
			?>>
		<?php $control->errors_out( '<li>%s</li>', '<ul class="error">%s</ul>' ); ?>
	</div>
</div>
