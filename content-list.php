<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row">

		<header class="entry-header">
			<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
			<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
		</header>
		
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
			
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<?php the_excerpt(); ?>
			</div>
		
		<?php else: ?>		
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<?php the_excerpt(); ?>
			</div>
		<?php endif; ?>
		</div>
	</div>
</article>