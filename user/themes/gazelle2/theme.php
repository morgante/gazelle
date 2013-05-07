<?php

class WaziTheme extends Theme
{
	
	public function action_init_theme()
	{
		// Add FormUI template for comments
		$this->add_template( 'gazelle_text', dirname( __FILE__ ) . '/formcontrol_text.php' );
		$this->add_template( 'gazelle_textarea', dirname( __FILE__ ) . '/formcontrol_textarea.php' );
		$this->add_template( 'gazelle_submit', dirname( __FILE__ ) . '/formcontrol_submit.php' );
		
	}
	
	/**
	 * Customize comment form layout. Needs thorough commenting.
	 */
	public function action_form_comment( $form ) {
		$form->class[] = 'form-horizontal';
		
		$form->cf_commenter->template = 'gazelle_text';
		$form->cf_commenter->class[] = 'control-group';
		
		$form->cf_email->template = 'gazelle_text';
		$form->cf_email->class[] = 'control-group';
		
		$form->cf_url->template = 'gazelle_text';
		$form->cf_url->class[] = 'control-group';
		
		$form->cf_content->template = 'gazelle_textarea';
		$form->cf_content->class[] = 'control-group';
		
		$form->cf_submit->template = 'gazelle_submit';
		$form->cf_submit->class[] = 'control-group';
		
	}
	
	function action_template_header($theme) {
		// Add the HTML5 shiv for IE < 9
		Stack::add('template_header_javascript', array('http://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.js', null, '<!--[if lt IE 9]>%s<![endif]-->'), 'html5_shiv');
		Stack::add('template_header_javascript', '//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js', 'jquery');
		
		Stack::add('template_header_javascript', '//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/js/bootstrap.min.js', 'bootstrap-js');
		
		Stack::add('template_header_javascript', $theme->get_url('/js/jquery.sticky.js'), 'sticky');
		
		Stack::add('template_header_javascript', $theme->get_url('/js/layout.js'), 'layout');
		
		Stack::add('template_stylesheet', '//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/css/bootstrap-combined.min.css', 'bootstrap');
		
		// Stack::add('template_header_javascript', $theme->get_url('/js/jquery.jcarousel.js'), 'jquery.jcarousel');
		
		// Stack::add('template_header_javascript', $theme->get_url('/js/election.js'), 'election-js');
		
		// Add this line to your config.php to show an error and a notice, and
		// to process the raw LESS code via javascript instead of the rendered CSS:  define('DEBUG_THEME', 1);
		if(defined('DEBUG_THEME')) {
			Session::error('This is a <b>sample error</b>');
			Session::notice('This is a <b>sample notice</b> for ' . $_SERVER['REQUEST_URI']);

			Stack::add('template_header_javascript', $theme->get_url('/less/less-1.3.0.min.js'), 'less');
			Stack::add('template_stylesheet', array($theme->get_url('/less/style.less'), null, array('type'=> null, 'rel' => 'stylesheet/less')), 'style');
		}
		else {
			Stack::add('template_stylesheet', $theme->get_url('/css/style.css'), 'style');
		}
	}
	
	public function add_template_vars()
	{
		
		// Utils::debug( $this->request );
		
		if ( is_object($this->request) ) {
			if( $this->request->display_entry && !$this->template_engine->assigned( 'section' ) ) {
				if( $this->post->tags->has('Opinion') )
				{
					$this->assign( 'section', 'opinion' );
				} elseif( $this->post->tags->has('Features') )
				{
					$this->assign( 'section', 'features' );
				} elseif( $this->post->tags->has('News') )
				{
					$this->assign( 'section', 'news' );
				}
			}
			elseif( $this->request->display_entries_by_tag )
			{
				// Utils::debug( Controller::get_param( $tag ) );
			}
			elseif( $this->request->display_home && !$this->template_engine->assigned( 'tiles' ) ) {
				$posts = array();
				$posts[] = Post::get( array( 'slug' => 'news' ) );
				$posts[] = Post::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'features', 'pick' ) ), 'limit' => 1, 'offset' => 0 ) );
				$posts[] = Post::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'opinion', 'pick' ) ), 'limit' => 1, 'offset' => 0 ) );
				$posts[] = Post::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'news', 'pick' ) ), 'limit' => 1, 'offset' => 0 ) );
				$posts[] = Post::get( array( 'slug' => 'features' ) );
				$posts[] = Post::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'opinion', 'pick' ) ), 'limit' => 1, 'offset' => 1 ) );
				$posts[] = Post::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'news', 'pick' ) ), 'limit' => 1, 'offset' => 1 ) );
				$posts[] = Post::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'features', 'pick' ) ), 'limit' => 1, 'offset' => 1 ) );
				$posts[] = Post::get( array( 'slug' => 'opinion' ) );
				$this->assign( 'tiles', $posts );
			}
			elseif( $this->request->display_page && $this->post->tags->has('section') && !$this->template_engine->assigned( 'tiles' ) ) {
				$posts = Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( $this->post->slug ) ), 'limit' => 9 ) );
				$this->assign( 'tiles', $posts );
			}
		}

		parent::add_template_vars();
		
	}
}

?>
