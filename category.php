<?php /*
Template Name: Custom Blog Template
*/ ?>

<div id="blogwrapper">
<div id="blogwhitecontent">
<?php get_header('blog'); ?>
<div id="blogmaincontent">
	
	<div id="contentpage">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>  

 		<div class="entry">
			<!-- Display the Title as a link to the Post's permalink. -->
			<img class="arrow" src="http://ohf.luciewu.com/wp-content/uploads/2014/01/pinkarrow.png" width=850 />
			<h2 class="blogtitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	
			<!-- Display the date (November 16th, 2009 format) -->
			<span class="blogdate"><?php the_time('F jS, Y') ?></span>
			
			
			<!-- Display the Post's content in a div box. -->
   			<div class="blogcontent"><?php the_content(); ?></div>
			
			<div class="entrybottom">
				<p class="blogshare"><em style="vertical-align: top;">LIKE IT? SHARE IT!</em>
        			<!--Facebook-->
       				 <a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;"><img src="http://ohf.luciewu.com/wp-content/uploads/2014/01/blogfacebook.png" width=20 style="margin-top: -5px;"></a>
				<!--Twitter-->
        			<a class="twitter" href="http://twitter.com/home?status=<?php the_title(); ?> <?php the_permalink(); ?>" title="Share this post on Twitter!" target="_blank"><img src="http://ohf.luciewu.com/wp-content/uploads/2014/01/blogtwitter.png" width=25 style="vertical-align: top;"></a>
        			<!--Pinterest-->
        			<a class="pinterest" target="_blank" href="http://pinterest.com/pin/create/link/?url=<?php the_permalink(); ?>"><img src="http://ohf.luciewu.com/wp-content/uploads/2014/01/blogpinterest.png" width=25 style="vertical-align: top;"></a>
				</p><!--end blogshare-->
	
				<!-- Display a comma separated list of the Post's Categories. -->
				<p class="postmetadata">LABELS: <?php the_category(', '); ?> | <a href="<?php the_permalink() ?>#leavereply"><?php comments_number( 'no comments', 'one comment', '% comments' ); ?></a></p>
	
				<img class="similarposts" src="http://ohf.luciewu.com/wp-content/uploads/2014/01/blog_similarposts.png" width=100 />
				<?php related_posts() ?>
			</div> <!-- end entrybottom -->
			
 		</div> <!-- end entry -->

	
			
 	<?php endwhile; endif; ?> 

	</div> <!-- end contentpage -->

	<!-- Pagination -->
	<div class="blogpagination">
		<div class="nav-next"><?php previous_posts_link( '< NEWER POSTS' ); ?></div>
		<div class="homepagination"><a href="/blog">HOME</a></div>
		<div class="nav-previous"><?php next_posts_link( 'PREVIOUS POSTS >' ); ?></div>
	</div>

</div> <!-- end blogmaincontent  -->

<?php get_sidebar('blog'); ?>



</div> <!-- end blogwhitecontent -->
<div class="clear"></div>
</div> <!-- end wrapper -->

<?php get_footer('blog'); ?>
</div> <!-- end blogwrapper -->

