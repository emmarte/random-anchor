 <?php theme_include('header'); ?>
<?php if(has_posts()): ?>
<!-- We have posts, it's safe to loop. -->
<?php while(posts()): ?>
<article>
<h3><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h3>
<p class="date"><?php echo relative_time(article_time()); ?></p>
<?php echo article_markdown(); ?>
</article>
<?php endwhile; ?>
<?php if(has_pagination()): ?>
<nav class="pagination">
<?php echo posts_prev(); ?>
<?php echo posts_next(); ?>
</nav>
<?php endif; ?>
<?php else: ?>
<p>Yeah, I haven't actually written anything yet.</p>
<?php endif; ?>
<p id="back-top"><a href="#top"><span></span>Back to Top</a></p>
</div>
</div>
</body>
</html>