<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<div class="post-feed">
<?php foreach ($posts as $p): ?>
<?php $img = get_image($p->body);?>
<article class="post-card post">
	<?php if (!empty($p->image)) { ?>
	<a class="post-card-image-link" href="<?php echo $p->url;?>">
		<img class="post-card-image" alt="<?php echo $p->title;?>" src="<?php echo $p->image;?>">
	</a>
	<?php } elseif (!empty($img) && empty($p->quote) && empty($p->video) && empty($p->audio)) { ?>
	<a class="post-card-image-link" href="<?php echo $p->url;?>">
		<img class="post-card-image" alt="<?php echo $p->title;?>" src="<?php echo $img;?>">
	</a>
	<?php } ?>
	
	<?php if (!empty($p->video)) { ?>
	<a class="post-card-image-link" href="<?php echo $p->url;?>">
        <img src="//img.youtube.com/vi/<?php echo get_video_id($p->video);?>/sddefault.jpg" width="100%">
	</a>
	<?php } ?>
	
	<?php if (!empty($p->audio)) { ?>
	<a class="post-card-image-link" href="<?php echo $p->url;?>">
        <img src="<?php echo theme_path();?>images/soundcloud.jpg" width="100%">
	</a>
	<?php } ?>
	
	<?php if (!empty($p->quote)) { ?>
    <a class="post-card-content-link" href="<?php echo($p->url); ?>">
		<blockquote class="post-card-title"><p><?php echo $p->quote ?></p></blockquote>
	</a>
	<?php } ?>
	
	<div class="post-card-content">
			<a class="post-card-content-link" href="<?php echo $p->url;?>">
			<header class="post-card-header">
				<h2 class="post-card-title"><?php echo $p->title;?></h2>
			</header>
			<section class="post-card-excerpt"><?php echo $p->description; ?></section>
			</a>
		<footer class="post-card-meta">
			<span class="post-card-byline-date"><time><?php echo format_date($p->date) ?></time> <span class="bull">•</span> <?php echo $p->category;?> <?php if (authorized($p)):?><span class="bull">•</span> <a href="<?php echo $p->url;?>/edit?destination=post">Edit</a><?php endif;?></span>  
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
            <span class="newer" style="padding-right:30px;"><a href="?page=<?php echo $page - 1 ?>" rel="prev">&#8592; <?php echo i18n('Newer');?></a></span>
        <?php } else { ?>
		<span class="newer" style="padding-right:30px;">&#8592; <?php echo i18n('Newer');?></span>
		<?php } ?>
        <span class="page-number read-next-card-meta" style="text-align:center;dislay:inline-block;"><?php echo $pagination['pagenum'];?></span>
        <?php if (!empty($pagination['next'])) { ?>
            <span class="older" style="padding-left:30px;"><a href="?page=<?php echo $page + 1 ?>" rel="next"><?php echo i18n('Older');?> &#8594;</a></span>
        <?php } else { ?>
			<span class="older" style="padding-left:30px;"><?php echo i18n('Older');?> &#8594;</span>
		<?php } ?>
    </div>
<?php endif; ?>
</div>
