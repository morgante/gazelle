<article id="post-<?php echo $content->id; ?>" class="post" itemscope itemtype="http://schema.org/BlogPosting">

	<img src="http://voting.sg.nyuad.org/photos/alex.jpg">
	<h1 itemprop="name"><?php echo $content->title_out; ?></h1>
	<h2>By <span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php echo $content->author->username; ?></span></span></h2>
	
	<ul class="nav nav-pills">  
		<li class="active"><a href="#profile<?php echo $content->id;?>">Profile</a></li>     
		<li><a href="#platform<?php echo $content->id;?>">Platform</a></li>   
	</ul>
	
	<div class="content active" itemprop="articleBody" id="profile<?php echo $content->id; ?>">
		<?php echo $content->content_out; ?>
	</div>
	
	<div class="content" id="platform<?php echo $content->id; ?>">
		<?php echo Post::get( array( 'slug' => $content->slug . '-platform' ) ) )->content; ?>
	</div>

</article>
