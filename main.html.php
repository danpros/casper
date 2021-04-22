<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<div class="post-feed">
<?php foreach ($posts as $p): ?>
<?php $img = get_image($p->body);?>
<article class="post-card post">
	<?php if (!empty($p->image)) { ?>
	<a class="post-card-image-link" href="<?php echo $p->url;?>">
		<img class="post-card-image" src="<?php echo $p->image;?>">
	</a>
	<?php } elseif (!empty($img) && empty($p->quote)) { ?>
	<a class="post-card-image-link" href="<?php echo $p->url;?>">
		<img class="post-card-image" src="<?php echo $img;?>">
	</a>
	<?php } ?>
	
	<?php if (!empty($p->video)) { ?>
	<span class="post-card-image-link">
        <iframe width="100%" height="200" src="https://www.youtube.com/embed/<?php echo get_video_id($p->video); ?>" frameborder="0" allowfullscreen></iframe>
	</span>
	<?php } ?>
	
	<?php if (!empty($p->audio)) { ?>
	<span class="post-card-image-link">
        <iframe width="100%" height="200" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $p->audio;?>&amp;auto_play=false&amp;visual=true"></iframe>
	</span>
	<?php } ?>
	
	<?php if (!empty($p->quote)) { ?>
    <a class="post-card-content-link" href="<?php echo($p->url); ?>">
		<blockquote class="post-card-title"><p><?php echo $p->quote ?></p></blockquote>
	</a>
	<?php } ?>
	
	<div class="post-card-content">
			<a class="post-card-content-link" href="<?php echo $p->url;?>">
			<header class="post-card-header">
				<div class="post-card-primary-tag"><?php echo strip_tags($p->category)?></div>
				<h2 class="post-card-title"><?php echo $p->title;?></h2>
			</header>
			<section class="post-card-excerpt"><?php echo $p->description; ?></section>
			</a>
		<footer class="post-card-meta">
			<ul class="author-list">
				<li class="author-list-item">
					<div class="author-name-tooltip"><?php echo $p->author;?></div>
					<a href="<?php echo $p->authorUrl;?>" class="static-avatar"><img class="author-profile-image" src="<?php echo site_url();?>themes/casper/images/avatar.png" alt="<?php echo $p->authorName;?>"/></a>
				</li>
			</ul>
			<div class="post-card-byline-content">
				<span><a href="<?php echo $p->authorUrl;?>"><?php echo $p->authorName;?></a></span>
				<span class="post-card-byline-date"><time><?php echo format_date($p->date) ?></time> <?php if (login()):?><span class="bull">•</span> <a href="<?php echo $p->url;?>/edit?destination=post">Edit</a><?php endif;?></span>  
			</div>
		</footer>
	</div>
</article>
<?php endforeach; ?>
<style>
.pager {position: relative;text-align: center;width:100%;padding:20px;}
</style>
<?php if (!empty($pagination['prev']) || !empty($pagination['next'])): ?>
    <div class="pager">
        <?php if (!empty($pagination['prev'])) { ?>
            <span class="newer" style="padding-right:30px;"><a href="?page=<?php echo $page - 1 ?>" rel="prev">&#8592; Newer</a></span>
        <?php } else { ?>
		<span class="newer" style="padding-right:30px;">&#8592; Newer</span>
		<?php } ?>
        <span class="page-number read-next-card-meta" style="text-align:center;dislay:inline-block;"><?php echo $pagination['pagenum'];?></span>
        <?php if (!empty($pagination['next'])) { ?>
            <span class="older" style="padding-left:30px;"><a href="?page=<?php echo $page + 1 ?>" rel="next">Older &#8594;</a></span>
        <?php } else { ?>
			<span class="older" style="padding-left:30px;">Older &#8594;</span>
		<?php } ?>
    </div>
<?php endif; ?>
</div>
