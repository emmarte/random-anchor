<?php theme_include('header'); ?>
<article>
<header>
<h3><?php echo article_title(); ?></h3>
<p class="date"><?php echo relative_time(article_time()); ?></p>
</header>
<?php echo article_markdown(); ?>
</article>
<?php theme_include('footer'); ?>