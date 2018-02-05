<?php

foreach((get_the_category()) as $category) {
?>
<style type="text/css">
	.cat-design{


	}
</style>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row well">

		<div class="entry-header">
			<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
			Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in
			<?php echo '<a href="'.get_category_link($category->cat_ID).'"">'. $category->cat_name. '</a>';?> 
				<!--<div style="list-style: none;"><?php the_category(); ?></div></small>-->
		</div>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php if( has_post_thumbnail() ): ?>				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<?php the_post_thumbnail('thumbnail'); ?>

				</div>
			
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<?php the_content(); ?>
			</div>
		
		<?php else: ?>		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php the_content(); ?>
			</div>
		<?php endif; ?>
		</div>
	</div>
</article>
<?php
};

?>