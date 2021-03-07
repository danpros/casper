<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<article class="post-full post">
	<header class="post-full-header">
		<h1 class="post-full-title">This page doesn't exist!</h1>
	</header>

	<section class="post-full-content">
		<div class="post-content">
        <p>Please search to find what you're looking for or visit our <a href="<?php echo site_url() ?>">homepage</a> instead.</p>
        <?php echo search() ?>
		</div>
	</section>
</article>