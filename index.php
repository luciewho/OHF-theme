<?php get_header(); ?>

<?php get_sidebar(); ?>




<div id="contentdiv">
<div id="content">
	
<h1 class="pagetitle"><span class="maintitle"><?php wp_title( $sep ) ?></span> <span class="subtitle"><?php the_subtitle(); ?></span> </h1> 
	
	<div id="contentpage">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>  <?php the_content(); ?>  <?php endwhile; endif; ?> 
	</div> <!-- end contentpage -->

</div> <!-- end content  -->
</div><!-- end contentdiv  -->
	</div> <!-- end main-->
<?php get_footer(); ?>
