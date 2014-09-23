<?php
/*-----------------------------------------------------------------------------------*/
/*  Begin processing our comments
/*-----------------------------------------------------------------------------------*/
?>

<!-- BEGIN #comments -->
<div id="comments">


<?php 
    /* Password protected? ----------------------------------------------------------*/
    if ( post_password_required() ) : 
?>
    	<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'zilla' ); ?></p>
        </div><!-- #comments -->
<?php
	/* Stop processing comments.php, but don't kill the script entirely -------------*/
		return;
	endif;

/*-----------------------------------------------------------------------------------*/
/*	Comment Form
/*-----------------------------------------------------------------------------------*/
if ( comments_open() ) : 
?>
<h3 style="margin-left:15px;">Leave a Comment or Question</h3>
<div style="background-color:#FFFFFF; padding: 1.875em 1.875em 0px 20px;  -moz-box-shadow: 1px 1px rgba(0,0,0,0.2);
-webkit-box-shadow: 1px 1px rgba(0,0,0,0.2);
box-shadow: 1px 1px rgba(0,0,0,0.2);"><b>Comment Rules:</b> Ralph Waldo Emerson once said, <i>"Life is short, but there
is always time enough for courtesy."</i> Please remember to treat others with
kindness. Criticism is all right, but if you're inconsiderate, we'll delete
your comment. Thank you!</div>

<?php

	
	

	    $fields = array(
            'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
            'must_log_in' => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.', 'zilla' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
            'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out &raquo;</a>', 'zilla' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
            'comment_notes_before' => '',
            'comment_notes_after' => '',
            'title_reply' => __('Leave a Comment', 'zilla'),
            'title_reply_to' => __('Leave a Reply to %s', 'zilla'),
            'cancel_reply_link' => __('Cancel Reply', 'zilla'),
            'label_submit' => __('Submit Comment', 'zilla')
	    );
		    	
	    comment_form($fields); 

	 endif; // end if comments open check ?>



<?php 
/*-----------------------------------------------------------------------------------*/
/*	Display the Comments & Pings
/*-----------------------------------------------------------------------------------*/

	if ( have_comments() ) :
	
        /* Display Comments ---------------------------------------------------------*/    
        if ( ! empty($comments_by_type['comment']) ) : // if there are normal comments ?>
	
	       
	
        	<ol class="commentlist">
            <?php wp_list_comments( 'type=comment&callback=zilla_comment' ); ?>
            </ol>

        <?php endif; // end normal comments 
        
        /* Display Pings -------------------------------------------------------------*/
        if ( ! empty($comments_by_type['pings']) ) : // if there are pings ?>
		
    		<h3 class="pings-title"><?php _e('Trackbacks for this post', 'zilla') ?></h3>
		
    		<ol class="pinglist">
            <?php wp_list_comments( 'type=pings&callback=zilla_list_pings' ); ?>
            </ol>

        <?php endif; // end pings 
		
		/* Display Comment Navigation -----------------------------------------------*/
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    		<div class="comment-navigation">
    			<div class="nav-previous"><?php previous_comments_link( '&larr; ' . __('Older Comments', 'zilla') ); ?></div>
    			<div class="nav-next"><?php next_comments_link( __('Newer Comments', 'zilla' ) . ' &rarr;' ); ?></div>
    		</div>
		<?php endif; // end comment pagination check
		
		
/*-----------------------------------------------------------------------------------*/
/*	Deal with no comments or closed comments
/*-----------------------------------------------------------------------------------*/
	elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		
		<p class="nocomments"><?php _e('Comments are closed.', 'zilla') ?></p>
		
	<?php endif;

 ?>
	
<!-- END #comments -->

	

</div>