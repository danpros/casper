<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<!DOCTYPE html>
<html lang="<?php echo blog_language();?>">
<head>    
    <?php echo head_contents();?>
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $description; ?>"/>
    <link rel="canonical" href="<?php echo $canonical; ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo theme_path();?>css/style.css">
	<?php if (config('casper.dark') == 'true') :?>
	<link rel="stylesheet" type="text/css" href="<?php echo theme_path();?>css/dark.css">
	<?php endif;?>
</head>
<?php if (isset($is_front)) {?>
<body class="home-template">
<?php if (login()) { toolbar(); } ?>
	<div class="site-wrapper">
		<header class="site-home-header">
		<?php if (empty(config('casper.header'))) {?>
		<style type="text/css">.responsive-header-img {background-image: url(<?php echo theme_path();?>images/publication-cover.jpg);}</style>
		<?php } else {?>
		<style type="text/css">.responsive-header-img {background-image: url(<?php echo config('casper.header')?>);}</style>
		<?php } ?>
			<div class="outer site-header-background responsive-header-img">
<?php } elseif (isset($is_post) || isset($is_page) || isset($is_subpage) || isset($is_404) || isset($is_404search)) {?>
<body class="post-template">
<?php if (login()) { toolbar(); } ?>
	<div class="site-wrapper">
		<header class="site-header">
			<div class="outer site-nav-main" <?php if (login()):?>style="position:relative;"<?php endif;?>>
<?php } else {?>
<body class="tag-template">
<?php if (login()) { toolbar(); } ?>
	<div class="site-wrapper">
		<header class="site-archive-header">
			<div class="outer site-nav-main" <?php if (login()):?>style="position:relative;"<?php endif;?>>		
<?php } ?>
				<div class="inner">
					<nav class="site-nav">
						<div class="site-nav-left-wrapper">
							<div class="site-nav-left">
								<a class="site-nav-logo" href="<?php echo site_url();?>"><img src="<?php echo theme_path();?>images/avatar.png" alt="<?php echo blog_title();?>"></a>
								<div class="site-nav-content">
									<?php echo menu();?>
								</div>
							</div>
						</div>
						<div class="site-nav-right">
								<div class="social-links">
								<?php if(!empty(config('social.facebook'))):?>
									<a class="social-link social-link-fb" href="<?php echo config('social.facebook');?>" title="Facebook" target="_blank" rel="noopener"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M16 0c8.837 0 16 7.163 16 16s-7.163 16-16 16S0 24.837 0 16 7.163 0 16 0zm5.204 4.911h-3.546c-2.103 0-4.443.885-4.443 3.934.01 1.062 0 2.08 0 3.225h-2.433v3.872h2.509v11.147h4.61v-11.22h3.042l.275-3.81h-3.397s.007-1.695 0-2.187c0-1.205 1.253-1.136 1.329-1.136h2.054V4.911z"></path></svg></a>
								<?php endif;?>
								<?php if(!empty(config('social.twitter'))):?>
									<a class="social-link social-link-tw" href="<?php echo config('social.twitter');?>" title="Twitter" target="_blank" rel="noopener"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"></path></svg></a>
								<?php endif;?>
								</div>
								<a class="rss-button" href="<?php echo site_url();?>feed/rss" title="RSS" target="_blank" rel="noopener"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><circle cx="6.18" cy="17.82" r="2.18"></circle><path d="M4 4.44v2.83c7.03 0 12.73 5.7 12.73 12.73h2.83c0-8.59-6.97-15.56-15.56-15.56zm0 5.66v2.83c3.9 0 7.07 3.17 7.07 7.07h2.83c0-5.47-4.43-9.9-9.9-9.9z"></path></svg></a>
						</div>
					</nav>
					<?php if (isset($is_front)):?>
					<div class="site-header-content">
						<h1 class="site-title"><?php echo blog_title();?></h1>
						<h2 class="site-description"><?php echo blog_tagline();?></h2>
					</div>
					<?php endif;?>
				</div>
			</div>
			<?php if (isset($is_profile)):?>		
			<div class="outer site-header-background no-image">
				<div class="inner site-header-content author-header">
					<img class="author-profile-image" src="<?php echo theme_path();?>images/avatar.png" alt="<?php echo $name;?>">
					<div class="author-header-content">
						<h1 class="site-title"><?php echo $name;?></h1>
						<style>.author-bio p {margin:0;}</style>
						<div class="author-bio"><?php echo $about;?></div>
						<div class="author-meta">
							<span class="author-social-link"><a href="<?php echo site_url();?>" target="_blank" rel="noopener">Website</a></span>
							<?php if(!empty(config('social.twitter'))):?><span class="author-social-link"><a href="<?php echo config('social.twitter');?>" target="_blank" rel="noopener">Twitter</a></span><?php endif;?>
							<?php if(!empty(config('social.facebook'))):?><span class="author-social-link"><a href="<?php echo config('social.facebook');?>" target="_blank" rel="noopener">Facebook</a></span><?php endif;?>
						</div>
					</div>
				</div>		
			</div>
			<?php endif;?>
			<?php if (isset($is_archive)):?>		
			<div class="outer site-header-background no-image">
				<div class="inner site-header-content">
					<h1 class="site-title"><?php echo $archive->title;?></h1>
				</div>					
			</div>
			<?php endif;?>
			<?php if (isset($is_category)):?>		
			<div class="outer site-header-background no-image">
				<div class="inner site-header-content">
					<h1 class="site-title"><?php echo $category->title;?></h1>
					<div class="site-description">
					<?php echo $category->body; ?>
					</div>
				</div>
					
			</div>
			<?php endif;?>
			<?php if (isset($is_tag)):?>		
			<div class="outer site-header-background no-image">
				<div class="inner site-header-content">
					<h1 class="site-title"><?php echo $tag->title;?></h1>
				</div>					
			</div>
			<?php endif;?>
			<?php if (isset($is_search)):?>		
			<div class="outer site-header-background no-image">
				<div class="inner site-header-content">
					<h1 class="site-title"><?php echo $search->title;?></h1>
				</div>					
			</div>
			<?php endif;?>
			<?php if (isset($is_type)):?>		
			<div class="outer site-header-background no-image">
				<div class="inner site-header-content">
					<h1 class="site-title"><?php echo $type->title;?></h1>
				</div>					
			</div>
			<?php endif;?>				
		</header>
		<main id="site-main" class="site-main outer">
			<div class="inner">
				<?php echo content();?>
			</div>
		</main>
		
		<?php if (isset($is_post)):?>
		<aside class="read-next outer">
			<div class="inner">
				<div class="read-next-feed">
					<?php $recent = recent_posts(true);?>
					<article class="read-next-card">
						<header class="read-next-card-header">
							<h3><?php echo i18n('Recent_posts');?></h3>
						</header>
						<div class="read-next-card-content">
							<ul>
							<?php foreach ($recent as $r): ?>
							<li style="padding-bottom:0;">
                                <h4><a href="<?php echo $r->url;?>"><?php echo $r->title;?></a></h4>
                                <div class="read-next-card-meta">
                                    <p><time><?php echo format_date($r->date) ?></time></p>
                                </div>
                            </li>
							<?php endforeach;?>
							</ul>
						</div>
						<footer class="read-next-card-footer" style="margin-bottom:25px;">
							<?php echo i18n('All_blog_posts');?>: <?php echo $p->category;?>
						</footer>
					</article>
					
					<?php if (!empty($next)): ?>
					<article class="post-card post" style="min-height:20px;padding:0 0 20px 0;margin:0px 25px 25px 25px;">
						<div class="post-card-content">
							<a class="post-card-content-link" href="<?php echo($next['url']); ?>">
								<header class="post-card-header" style="margin:0;">
									<div class="post-card-primary-tag"><?php echo i18n('Next_post');?></div>
									
									<?php $img = get_image($next['body']);?>
									<?php if (!empty($next['image'])) { ?>
									<img class="post-card-image" alt="<?php echo $next['title'];?>" style="margin-bottom:15px;" src="<?php echo $next['image'];?>">
									<?php } elseif (!empty($img) && empty($next['quote'])) { ?>
									<img class="post-card-image" alt="<?php echo $next['title'];?>" style="margin-bottom:15px;" src="<?php echo $img;?>">
									<?php } ?>
									
									<?php if (!empty($next['video'])) { ?>
									<span class="post-card-image-link" style="margin-bottom:15px;">
										<iframe width="100%" height="200" src="https://www.youtube.com/embed/<?php echo $next['video']; ?>" frameborder="0" allowfullscreen></iframe>
									</span>
									<?php } ?>
									
									<?php if (!empty($next['audio'])) { ?>
									<span class="post-card-image-link" style="margin-bottom:15px;">
										<iframe width="100%" height="200" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $next['audio'];?>&amp;auto_play=false&amp;visual=true"></iframe>
									</span>
									<?php } ?>
									
									<?php if (!empty($next['quote'])) { ?>
									<blockquote class="post-card-title"><p><?php echo $next['quote']; ?></p></blockquote>
									<?php } ?>

									<h2 class="post-card-title"><?php echo($next['title']); ?></h2>
								</header>

								<section class="post-card-excerpt">
										<?php echo($next['description']); ?>
								</section>
							</a>

							<footer class="post-card-meta">
								<span class="post-card-byline-date"><time><?php echo format_date($next['date']) ?></time> <span class="bull">•</span><?php echo $next['category'];?></span>
							</footer>
						</div>
					</article>
					<?php endif;?>
					
					<?php if (!empty($prev)): ?>
					<article class="post-card post" style="min-height:20px;padding:0 0 20px 0;margin:0 25px 25px 25px;">
						<div class="post-card-content">
							<a class="post-card-content-link" href="<?php echo($prev['url']); ?>">
								<header class="post-card-header" style="margin:0;">
									<div class="post-card-primary-tag"><?php echo i18n('Prev_post');?></div>
										
									<?php $img = get_image($prev['body']);?>
									<?php if (!empty($prev['image'])) { ?>
									<img class="post-card-image" alt="<?php echo $prev['title'];?>" style="margin-bottom:15px;" src="<?php echo $prev['image'];?>">
									<?php } elseif (!empty($img) && empty($prev['quote'])) { ?>
									<img class="post-card-image" alt="<?php echo $prev['title'];?>" style="margin-bottom:15px;" src="<?php echo $img;?>">
									<?php } ?>
									
									<?php if (!empty($prev['video'])) { ?>
									<span class="post-card-image-link" style="margin-bottom:15px;">
										<iframe width="100%" height="200" src="https://www.youtube.com/embed/<?php echo $prev['video']; ?>" frameborder="0" allowfullscreen></iframe>
									</span>
									<?php } ?>
									
									<?php if (!empty($prev['audio'])) { ?>
									<span class="post-card-image-link" style="margin-bottom:15px;">
										<iframe width="100%" height="200" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $prev['audio'];?>&amp;auto_play=false&amp;visual=true"></iframe>
									</span>
									<?php } ?>
									
									<?php if (!empty($prev['quote'])) { ?>
									<blockquote class="post-card-title"><p><?php echo $prev['quote']; ?></p></blockquote>
									<?php } ?>
										
									<h2 class="post-card-title"><?php echo($prev['title']); ?></h2>
								</header>

								<section class="post-card-excerpt">
										<?php echo($prev['description']); ?>
								</section>
							</a>

							<footer class="post-card-meta">
								<span class="post-card-byline-date"><time><?php echo format_date($prev['date']) ?></time> <span class="bull">•</span><?php echo $prev['category'];?></span>
							</footer>
						</div>
					</article>
					<?php endif;?>
					
				</div>
			</div>
		</aside>		
		<?php endif;?>
		
		<footer class="site-footer outer">
			<div class="site-footer-content inner">
            <style>.copyright p {display:inline;margin-right:5px;}</style>
            <section class="copyright"><?php echo copyright();?> </section>
				<nav class="site-footer-nav">
				<a href="<?php echo site_url();?>"><?php echo config('breadcrumb.home');?></a>
				<?php if(!empty(config('social.facebook'))):?><a rel="nofollow" target="_blank" href="<?php echo (config('social.facebook'));?>">Facebook</a><?php endif;?>
				<?php if(!empty(config('social.twitter'))):?><a rel="nofollow" target="_blank" href="<?php echo (config('social.twitter'));?>">Twitter</a><?php endif;?>
				</nav>
			</div>
		</footer>
	</div>
<?php if (facebook()) { echo facebook(); } ?>
<?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>
</body>
</html>
