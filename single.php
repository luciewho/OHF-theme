<div id="blogwrapper">
<div id="blogwhitecontent" class="clearfix" style="overflow: visible; padding-bottom: 50px; position: relative; min-height: 1600px;">
<?php get_header('blog'); ?>
<div id="blogmaincontent">	
		<div id="contentpage">


				<?php the_post(); ?>

                <!-- <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->

					
					<div class="entry">
						<img class="arrow" src="http://ohf.luciewu.com/wp-content/uploads/2014/01/pinkarrow.png" width=850 />
			<h2 class="blogtitle"><?php the_title(); ?></h2>
	
			<!-- Display the date (November 16th, 2009 format) -->
			<span class="blogdate"><?php the_time('F jS, Y') ?></span>
			
			
			<!-- Display the Post's content in a div box. -->
   			<div class="blogcontent"><?php the_content(); ?></div>

			<div class="entrybottom">
				<p class="blogshare"><em style="vertical-align: top;">LIKE IT? SHARE IT!</em>
        			<!--Facebook-->
       				 <a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;"><img src="http://ohf.luciewu.com/wp-content/uploads/2014/01/blogfacebook.png" width=20 style="margin-top: -5px;"></a>
				<!--Twitter-->
        			<a class="twitter" href="http://twitter.com/home?status=Reading: <?php the_permalink(); ?>" title="Share this post on Twitter!" target="_blank"><img src="http://ohf.luciewu.com/wp-content/uploads/2014/01/blogtwitter.png" width=25 style="vertical-align: top;"></a>
        			<!--Pinterest-->
        			<a class="pinterest" target="_blank" href="http://pinterest.com/pin/create/link/?url=<?php the_permalink(); ?>"><img src="http://ohf.luciewu.com/wp-content/uploads/2014/01/blogpinterest.png" width=25 style="vertical-align: top;"></a>
				</p><!--end blogshare-->
	
				<!-- Display a comma separated list of the Post's Categories. -->
				<p class="postmetadata">LABELS: <?php the_category(', '); ?> | <?php comments_number( 'no comments', 'one comment', '% comments' ); ?></p>
	
				<img class="similarposts" src="http://ohf.luciewu.com/wp-content/uploads/2014/01/blog_similarposts.png" width=100 />
				<?php related_posts() ?>
			</div> <!-- end entrybottom -->

			<?php comments_template('', true); ?>
			
			</div><!-- end entry -->
					
				
            
 				

            </div><!-- #content -->
        </div><!-- #container -->


 <?php get_sidebar('anchorblog'); ?>


</div> <!-- end blogwhitecontent -->
</div>  <!-- end wrapper -->

<?php get_footer('blog'); ?>
</div> <!-- end blogwrapper -->

</body> 
</html> 
