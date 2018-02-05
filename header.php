	<!doctype html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Design 1 Theme</title>
			<?php wp_head(); ?>
			<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Pacifico'>
			<link rel="stylesheet" type="text/css" href="/wp-content/themes/MyDesign1/style.css">
		</head>
		
		<?php 
			
			if( is_front_page() ):
				$simplyorange_classes = array( 'simplyorange-class', 'my-class' );
			else:
					$simplyorange_classes = array( 'no-simplyorange-class' );
			endif;
				
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		?>
		<?php $blog_title = get_bloginfo( 'name' ); ?>
		<?php $blog_description = get_bloginfo( 'description' ); ?>
		<body<?php body_class( $simplyorange_classes ); ?>>

			<div class="container">
				<div class="row">
				<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      
	      	<a href="/">
	      	<img class="navbar-brand" src="<?php echo $image[0];?>"/>
	      	<p class="navbar-brand"><?php echo $blog_title; ?> - </p>
	      </a>
	      <p class="navbar-brand" ><?php echo $blog_description; ?></p>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <?php wp_nav_menu(array(
									'theme_location' => 'primary',
									'menu_class' => 'nav navbar-nav'
									)
								);
							?>



	      <form class="navbar-form navbar-right">
	        <div class="form-group">
	        <?php get_search_form();?>
	        </div>
	      </form> 

	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
			
				</div>