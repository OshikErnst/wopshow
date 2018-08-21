<?php get_header(); ?>
<?php wp_reset_query() ?>
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
	
	
	<div id="main">
	<?php wp_reset_query(); ?>
<div id="content">



<?php query_posts('category_name=blog&showposts=5'); ?>
<?php if (have_posts()) : ?>
	
	<?php while (have_posts()) : the_post(); ?>
		<div class="post_hp" id="post-<?php the_ID(); ?>">
				<div id="post_image"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php $key="hp_image"; echo get_post_meta($post->ID, $key, true); ?>" alt="<?php the_title(); ?>"></a></div>
				
				<div id="post_content">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small>By <?php the_author_posts_link() ?> Posted on <?php the_time('F jS, Y') ?> In <?php the_category(', ') ?></small>
				<ul class="postmetadata">
				<li class="pm_comments"><?php comments_popup_link('Add a comment', '1 Comment', '% Comments '); ?></li>
				<li class="pm_tags"><?php the_tags('', ', ', '<br />'); ?></li>
				<li class="pm_edit"><?php edit_post_link('<b>Edit</b>', '', ''); ?></li>
				</ul>
				

				<div class="hp_entry">
					<?php the_excerpt(); ?>
				</div>

				
			</div>
			</div>
	
	<?php endwhile; ?>
		
	<?php endif; ?>
</div>
<?php get_sidebar();?>
<?php get_footer(); ?>