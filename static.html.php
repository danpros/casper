<article class="post-full post">
	<header class="post-full-header">
		<h1 class="post-full-title"><?php echo $p->title;?></h1>
		<?php if (login()):?><a href="<?php echo $p->url;?>/edit?destination=post">Edit</a><?php endif;?>
	</header>

	<section class="post-full-content">
		<div class="post-content">
		<?php echo $p->body;?>
		</div>
	</section>
</article>