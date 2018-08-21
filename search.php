<?php
get_header();
?>
<div id="nav">
	<ul>	
	<?php wp_list_categories('title_li=&depth=1'); ?>
	</ul>
	
	</div>
	
	<div id="main">
	<?php wp_reset_query() ?>
<div id="content">
<h2 class="pagetitle">Search Results for <i>'<?php the_search_query(); ?>'</i></h2>
<?php if (have_posts()) : ?>
		
	<?php while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">
           <h2 class="title"><a href="<?php the_permalink() ?>#content" title="read <?php the_title() ?>"><?php the_title() ?></a></h2>
           <?php the_excerpt() ?>
		</div>
		<div class="post_bottom">
		
<div class="l">
<span class="time"><?php the_time('F j, Y') ?> by <?php the_author_posts_link(); ?></span>
<span class="post_comments"><?php comments_popup_link('Write a Comment', '1 Comment', '% Comments'); ?></span>
</div>
<div class="r">
<span class="category">Under: <?php the_category(', '); ?></span>
</div>

			
			
		
		</div>

	<?php comments_template(); ?>
	<?php endwhile; ?>
		<p><?php next_posts_link('&laquo; next') ?> &nbsp; <?php previous_posts_link('previous &raquo;') ?></p>
	<?php else : ?>
	<?php endif; ?>
</div>
<?php get_sidebar();?>
<?php get_footer(); ?>



