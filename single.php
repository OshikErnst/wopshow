<?php get_header(); ?>
<?php if (is_single() && in_category('video') ){ ?>	
		<?php 
		if (is_front_page()) { 
		query_posts('category_name=video&showposts=1'); 
		}
		?>	
			
			
        

	
	<div id="video_top">
	<div id="video_box">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="video_box_l">
			<div id="player">
			<?php $key="embed"; echo get_post_meta($post->ID, $key, true); ?>
			</div>
			<div id="player_meta">
				<div id="video_text">
					<h2><?php the_title() ?></h2>
					<p><?php the_excerpt() ?></p>
				</div>
			</div>
		</div>
	
	
		<?php
		$share_id = get_the_ID();
		$share_title = get_the_title();
		
		?>
		<?php endwhile; else: ?>
		<?php endif; ?>
		<?php wp_reset_query() ?>
		
		
		<div id="video_box_r">

	<div class="container">

			<ul class="panel">
            <?php query_posts('category_name=video&showposts=5'); ?>      
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
            
            <li class="video_item">
                <a href="<?php the_permalink() ?>" title="View">
                <img src="<?php $key="thumb"; echo get_post_meta($post->ID, $key, true); ?>" alt="video_thumb" /></a>
                <a href="<?php the_permalink() ?>" title="View">
                <h3><?php the_title() ?></h3>
				</a>
                <?php the_excerpt() ?>
            </li>
			<?php endwhile; else: ?>
            <?php endif; ?>                
            </ul>
   	
	</div>
	
	<ul class="share">
		<li class="s_facebook"><a href="http://www.facebook.com/share.php?u=<?php echo bloginfo('url');?>/?p=<?php echo $share_id; ?>&t=<?php echo $share_title; ?>" target="_blank">Share Video On Facebook</a></li>
		<li class="s_twitter"><a rel="nofollow" href="http://twitter.com/home?status=Reading: (<?php echo $share_title; ?>) at <?php echo bloginfo('url');?>/?p=<?php echo $share_id; ?>" target="_blank">Share Video On Twitter</a></li>
		<li class="s_buzz"><a href='javascript:var%20b=document.body;var%20GR________bookmarklet_domain="http://www.google.com";if(b&amp;&amp;!document.xmlVersion){void(z=document.createElement("script"));void(z.src="http://www.google.com/reader/ui/link-bookmarklet.js");void(b.appendChild(z));}else{}'>Share Video On Google Buzz</a></li>
	</ul>

	</div>
	
	</div>
	</div>
	
	
	</div> <!-- end of top part -->
	<?php } ?>
	
	<div id="main">
	<?php wp_reset_query(); ?>
<div id="content">




<?php if (have_posts()) : ?>
		
	<?php while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">
				<div class="entry">
           <h2 class="title"><a href="<?php the_permalink() ?>#content" title="read <?php the_title() ?>"><?php the_title() ?></a></h2>
           <?php the_content() ?>
		</div>
		<div class="post_bottom">
		
		<div class="l">
		<span class="time"><?php the_time('F j, Y') ?> by <?php the_author_posts_link(); ?></span>
		<span class="post_comments"><?php comments_popup_link('Write a Comment', '1 Comment', '% Comments'); ?></span>
		</div>

	</div>
	
	<div class="post_bottom">
	<div class="l">
<span class="category">Under: <?php the_category(', '); ?></span>
</div>
</div>	
<div class="comments">
	<a name="respond"></a>
	<?php comments_template(); ?>
	</div>
</div>	
	<?php endwhile; ?>
		<p><?php next_posts_link('&laquo; next') ?> &nbsp; <?php previous_posts_link('previous &raquo;') ?></p>
	<?php else : ?>
	<?php endif; ?>
</div>
<?php get_sidebar();?>
<?php get_footer(); ?>