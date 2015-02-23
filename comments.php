<div class="commentbox">
<div class="leavereply" id="leavereply">LEAVE A REPLY</div><br />
<p class="commentspan">Your email address will not be published. Required fields are marked *</p>

<?php if(comments_open()) : ?>  
    <?php if(get_option('comment_registration') && !$user_ID) : ?>  
        <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>  
        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform"> 
            <?php if($user_ID) : ?>  
                <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>  
            <?php else : ?>  
                <p><label for="author">Name <?php if($req) echo "*"; ?></label>
		<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" /></p>  
                <p><label for="email">Email <?php if($req) echo "*"; ?></label>
		<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" /></p>  
                <p> <label for="url">Website</label>
		<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" /></p>  
               
            <?php endif; ?>  
	    <label for="comment">Comment</label><br />
            <p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>  
            <p><input name="submit" type="submit" id="postcomment" tabindex="5" value="POST COMMENT >" />  
            <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>  
            <?php do_action('comment_form', $post->ID); ?>  
        </form>  
    <?php endif; ?>  
<?php else : ?>  
    <p>The comments are closed.</p>  
<?php endif; ?> 
</div> <!-- end commentbox -->

<div class="commentlist">
<span style="text-transform: uppercase; font-family: Futura, Arial, Helvetica; font-size: 12pt;"><?php comments_number( 'no response', 'one response', '% responses' ); ?> to <?php the_title(); ?></span>
	<?php wp_list_comments(); ?>
</div> <!-- commentlist -->
