<?php get_header(); ?>

<div class="row">
	
	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">

		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content',get_post_format()); ?>
			
			<?php endwhile;
			
		endif;
				
		?>
	
	</div>
	
	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
		<?php get_sidebar(); ?>
	</div>
	
</div>

<?php get_footer(); ?>