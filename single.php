<?php

/* 	Simplify Theme's Single Page to display Single Page or Post
	Copyright: 2012-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Simplify 1.0
*/


get_header(); ?>
<div id="container">
<div id="content">
          
		  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          
            <h1 class="page-title"><?php the_title(); ?></h1>
            <p class="postmetadataw"><?php echo __('Posted by:', 'simplify'); ?> <?php the_author_posts_link() ?> | <?php echo __(' on', 'simplify'); ?> <?php the_time('F j, Y'); ?></p> 
                        
            <div class="content-ver-sep"> </div>
            <div class="entrytext"><?php the_post_thumbnail('thumbnail'); ?>
			<?php the_content(); ?>
            </div>
            <div class="clear"> </div>
            <div class="up-bottom-border">
            <?php  wp_link_pages( array( 'before' => '<div class="page-link"><span>' . 'Pages:' . '</span>', 'after' => '</div><br/>' ) ); ?>
            
            <p class="postmetadata"><?php echo __('Posted in', 'simplify'); ?> <?php the_category(', ') ?> | <?php edit_post_link( __('Edit', 'simplify'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'simplify'), __('1 Comment &#187;', 'simplify'), __('% Comments &#187;', 'simplify')); ?> <?php the_tags('<br />'. __('Tags: ', 'simplify'), ', ', '<br />'); ?></p><br />
            <div class="floatleft"><?php previous_post_link('&laquo; %link'); ?></div>
			<div class="floatright"><?php next_post_link('%link &raquo;'); ?></div><br /><br />
            
            <div class="floatleft"><?php previous_image_link( false, '&laquo; Previous Image' ); ?></div>
			<div class="floatright"><?php next_image_link( false, 'Next Image &raquo;' ); ?></div> 
          	</div>
			
			<?php endwhile;?>
          	            
          <!-- End the Loop. -->          
        	
			<?php comments_template(); ?>
            
</div>			
<?php get_sidebar(); ?>
<?php get_footer(); ?>