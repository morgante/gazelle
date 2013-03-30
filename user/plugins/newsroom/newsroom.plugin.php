<?php

class NewsRoom extends Plugin
{
	
	/**
	 * Add the options per post
	 */
	public function action_form_publish( $form, $post )
	{
		if( $post->content_type == Post::type( 'entry' ) )
		{
			$thumbnail = $form->append( 'text', 'thumbnail', 'null:null', _t( 'Thumbnail' ), 'admincontrol_text' );
			$thumbnail->value = $post->thumb;
			$form->move_after( $thumbnail, $form->title );
		}
	}

	/**
	 * Save the fields from the publish form
	 * Also extract images if requested for later
	 */
	public function action_publish_post( $post, $form )
	{		
		$post->info->thumbnail = $form->thumbnail->value;
	}
	
	/**
	 * Make sure to apply shortcodes (important for DropBox)
	 */
	function filter_shortcode_fields($fields, $post)
	{
		$fields[] = 'thumb';
		$fields[] = 'thumbnail';
		return $fields;
	}
	
	/**
	 * Automatically chose a thumbnail image
	 */
	public function filter_post_get_6( $thumb, $name, $post )
	{
		if( $name == 'thumb' || $name == 'thumbnail' )
		{
			if( $post->info->thumbnail != null )
			{
				// we have an explicit (new system) thumbnail
				return $post->info->thumbnail;
			}
			elseif( $post->info->main_image != null )
			{
				// use an old-style thumbnail
				return $post->info->main_image;
			}
		}
		return $thumb;
	}
	
	/**
	 * We need to inject old-style thumbnail images
	 */
	public function filter_post_content_out( $content, $post )
	{
		if( $post->info->main_image != null )
		{
			$content = '<img class="mainimage" src="' . $post->info->main_image . '">' . $content;
		}
		return $content;
	}
	
	
}

?>
