
text/x-generic blog-page.php
PHP script text

<?php /*
Template Name: Blog Page Template
*/ ?>

<div id="blogwrapper">
<div id="blogwhitecontent" class="clearfix" style="overflow: visible; padding-bottom: 50px; position: relative; min-height: 1600px;">
<?php get_header('blog'); ?>
<div id="blogmaincontent">
		
		
	
	<div id="contentpage">
		<div class="entry">
		<img class="arrow" src="http://ohf.luciewu.com/wp-content/uploads/2014/01/pinkarrow.png" width=850 />
			<h2 class="blogtitle"><?php wp_title( $sep ) ?></h2>
		<div class="blogpagecontent"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>  <?php the_content(); ?>  <?php endwhile; endif; ?></div>

		</div>


	</div> <!-- end contentpage -->
</div> <!-- end blogmaincontent  -->
			

 <?php get_sidebar('anchorblog'); ?>


</div> <!-- end blogwhitecontent -->
</div> <!-- end wrapper -->

<?php get_footer('blog'); ?>
</div> <!-- end blogwrapper -->

