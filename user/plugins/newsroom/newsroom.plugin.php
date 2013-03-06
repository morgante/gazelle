<?php

class NewsRoom extends Plugin
{
	
	/**
	 * Add the options per post
	 */
	public function action_form_publish($form, $post, $context)
	{
		// add image field
		$form->append('text', 'main_image', 'main_image', _t('Main image', __CLASS__));
		$form->main_image->value = $post->info->main_image;
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
