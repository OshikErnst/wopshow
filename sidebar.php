<div id="sidebar">

<div id="search">
<?php get_search_form(); ?>
</div>


<ul>
<?php wp_list_categories('title_li=<h2><span>' . __('Categories') . '</span></h2>'); ?>
<?php 	/* Widgetized sidebar, if you have the plugin installed. */
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

		
		
 
 
<?php endif; ?>

</ul>
</div>


