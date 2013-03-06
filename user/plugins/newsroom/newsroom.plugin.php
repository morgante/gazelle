<?php

class NewsRoom extends Plugin
{
	
	/**
	 * Add the options per post
	 */
	public function action_form_publish( $form, $post )
	{
		$main_image = $form->append( 'text', 'main_image', 'null:null', _t( 'Main Image' ), 'admincontrol_text' );
		$main_image->value = $post->info->main_image;
		$form->move_after( $main_image, $form->title );
	}

	/**
	 * Save the fields from the publish form
	 * Also extract images if requested for later
	 */
	public function action_publish_post( $post, $form )
	{		
		$post->info->main_image = $form->main_image->value;
	}
}

?>
