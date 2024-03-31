<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<article class="post-full post">
	<header class="post-full-header">
		<h1 class="post-full-title"><?php echo $p->title;?></h1>
		<?php if (authorized($p)):?><a href="<?php echo $p->url;?>/edit?destination=post">Edit</a><?php endif;?>
	</header>

	<section class="post-full-content">
		<div class="post-content">
		<?php echo $p->body;?>
		</div>
	</section>

</article>
<style>
.pager {position: relative;text-align: center;width:100%;padding:20px;font-size:18px;}
</style>
<?php if (!empty($prev) || !empty($next)): ?>
    <div class="pager">
        <?php if (!empty($next)): ?>
            <span class="older" style="padding-right:30px;"><a href="<?php echo($next['url']); ?>" rel="next">&#8592; <?php echo($next['title']); ?> </a></span>
        <?php endif;?> 
        <?php if (!empty($prev)): ?>
            <span class="newer" style="padding-left:30px;"><a href="<?php echo($prev['url']); ?>" rel="prev"><?php echo($prev['title']); ?> &#8594;</a></span>
        <?php endif;?>
    </div>
<?php endif; ?>	