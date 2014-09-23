<?php if ( is_singular( 'download' ) && 'download' == get_post_type( intval( $id ) ) ) { ?>
    
    <?php if( is_singular() ) { ?>
    
        <h1 class="entry-title"><?php the_title(); ?></h1>

    <?php } ?>
    
    <?php /* if the post has a WP 2.9+ Thumbnail */

    if( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) { ?>
    
        <div class="post-thumb">
        
            <?php if( is_singular() ) { 
                
        	    the_post_thumbnail('blog-large');
    
        	} ?>
    
        </div>
    
    <?php } ?>
    
    <!-- BEGIN .entry-content -->

    <div class="entry-content">
    
    	<?php 
    
            the_content( __('Read more...', 'zilla') ); 
    
            wp_link_pages(array('before' => '<p><strong>'.__('Pages:', 'framework').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); 
    
        ?>
    
    <!-- END .entry-content -->
    
    </div>
    
<?php } else { ?>    

<div class="entry-meta-header2">

    <span class="published"><?php the_time( get_option('date_format') ); ?></span>

    <?php edit_post_link( __('edit', 'zilla'), '<span class="edit-post">[', ']</span>' ); ?>

<!-- END .entry-meta-header -->

</div>

<?php if( !is_singular() ) { ?>

    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'zilla'), get_the_title()); ?>"> <?php the_title(); ?></a></h2>

<?php } else { ?>

    <h1 class="entry-title"><?php the_title(); ?></h1>

<?php } ?>



<?php /* if the post has a WP 2.9+ Thumbnail */

if( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) { ?>

    <div class="post-thumb">



        <?php if( !is_singular() ) { ?>



    	    <a title="<?php printf(__('Permanent Link to %s', 'zilla'), get_the_title()); ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-large'); ?></a>

    	    

    	<?php } else {

    	    

    	    the_post_thumbnail('blog-large');

    	    

    	} ?>    	    

    </div>

<?php } ?>



<div class="entry-meta-footer2">

<p>

 <div style="color:#9da2a8"> <?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?></div>



Topics: <?php the_category(', '); ?>

</p>

    <span class="author"><?php _e('Written by:', 'zilla') ?> <?php the_author_posts_link(); ?></span>



	

    

</div>





<!-- BEGIN .entry-content -->

<div class="entry-content">

	<?php 

        the_content( __('Read more...', 'zilla') ); 

        wp_link_pages(array('before' => '<p><strong>'.__('Pages:', 'framework').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); 

    ?>

<!-- END .entry-content -->

</div>

<?php } ?>