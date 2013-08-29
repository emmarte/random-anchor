<?php theme_include('header'); ?>
<!-- If page is set to home, show the content of the page followed by a latest post and the archive of posts-->
<?php if(is_homepage()): ?>
<h2 class="greeting"><?php echo page_title($fallback = ''); ?></h2>
<?php echo page_content(); ?>
<?php while(zleek_latest_post()): ?>
<article class="latest-item <?php echo article_category();?>">
<h3><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h3>
<p class="date"><?php echo relative_time(article_time()); ?></p>
</article>
<?php endwhile; ?>
<?php else: ?>
<h2><?php echo page_title(); ?></h21>
<?php echo page_content(); ?>
<?php endif; ?>
<!-- Loop -->
<?php while(footer_latest_posts()): ?>
<article class="item">
<h3><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a> <span class="cat">It's a <?php echo article_category();?>.</span></h3>
</article>
<?php endwhile; ?>
<?php theme_include('footer'); ?>