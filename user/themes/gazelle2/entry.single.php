<?php $theme->display('header'); ?>

	<div id="post-<?php echo $post->id; ?>" class="post primary span8" itemscope itemtype="http://schema.org/BlogPosting">
		<div class="wrapper">
			<div class="meta">
				<h1 itemprop="title"><?php echo $post->title_out; ?></h1>
				<h2>by <span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php echo $post->author->username; ?></span></span></h2>
			</div>
			
			<div class="content" itemprop="articleBody">
				<?php echo $post->content_out; ?>
			</div>
			
			<?php if ( !$post->info->comments_disabled || $post->comments->moderated->count ) :?>
				<div class="comments" id="comments">
					<h2><?php echo $post->comments->moderated->count; ?> Comments</h2>
				<?php if ( $post->comments->moderated->count ) : ?>
					<?php foreach ( $post->comments->moderated as $comment ) : ?>

					<?php 

						if ( $comment->url_out == '' ) {
							$comment_url = $comment->name_out;
						}
						else {
							$comment_url = '<a href="' . $comment->url_out . '" rel="external">' . $comment->name_out . '</a>';
						}

					?>

					<div id="comment-<?php echo $comment->id; ?>" class="post-comment row">
						
						<div class="meta span2">
							<h4 class="commentor"><?php echo $comment_url; ?></h4>
							<p class="post-comment-link"><a href="#comment-<?php echo $comment->id; ?>" title="<?php _e( 'Time of this comment - Click for comment permalink' ); ?>"><?php $comment->date->out(); ?></a></p>
							<?php if ( $comment->status == Comment::STATUS_UNAPPROVED ) : ?>
							<p class="comment-message"><em><?php _e( 'Your comment is awaiting moderation' ) ;?></em></p>
							<?php endif; ?>
						</div>
						
						<div class="comment-body span5">
							<?php echo $comment->content_out; ?>
						</div>
					</div>
					<?php endforeach; ?>
				<?php else : ?>
				<?php endif; ?>
					<div id="post-comments-footer">
						<!-- TODO: A hook can be placed here-->
					</div>
				</div>
			<?php endif; ?>
			
			<?php if ( !$post->info->comments_disabled ) : ?>
			<div class="comment-form form">
				<h2>Add your voice</h2>
			<?php if ( Session::has_messages() ) Session::messages_out(); ?>
			<?php $post->comment_form()->out(); ?>
			</div>
			<?php	else: ?> 
			<div id="comments-closed">
				<p><?php _e( "Comments are closed for this post" ); ?></p>
			</div>
			<?php 	endif; ?>
		
		</div>
		
	</div>
	
	<div id="sidebar" class="sidebar span4">
		
		<section class="block picks">
			<h2>Editors' Picks</h2>
			<div class="content">
				<ul>
					<?php foreach(Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( 'pick' ) ), 'not:id' => array( $post->id ) ) ) as $li): ?>
					<li><a href="<?php echo $li->permalink; ?>"><?php echo $li->title; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</section>
		
		<section class="block picks">
			<h2>Other in <?php echo ucfirst( $section ); ?></h2>
			<div class="content">
				<ul>
					<?php foreach(Posts::get( array( 'vocabulary' => array( 'tags:all:term' => array( $section ), 'tags:not:term' => array( 'section' ) ), 'not:id' => array( $post->id ) ) ) as $li): ?>
					<li><a href="<?php echo $li->permalink; ?>"><?php echo $li->title; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</section>
		
		<?php echo $theme->area('sidebar'); ?>
	</div>
			
<?php $theme->display('footer'); ?>