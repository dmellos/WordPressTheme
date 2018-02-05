<style type="text/css">
	
.slide1{
	background-image: url('/wp-content/themes/MyDesign1/slide1.jpg');
	height: 400px;
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
}

.slide2{
	background-image: url('/wp-content/themes/MyDesign1/slide2.jpg');
	height: 400px;
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
}

.slide3{
	background-image: url('/wp-content/themes/MyDesign1/slide3.jpg');
	height: 400px;
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
}
.carousel-caption h1{
	font-size: 5.4em;
	font-family: 'Pacifico', cursive;
	padding-bottom: .4em;
}
.carousel-caption p{
	font-size: 2em;
}

</style>

	
    <div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div id="theCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#theCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#theCarousel" data-slide-to="1"></li>
				<li data-target="#theCarousel" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
				<div class="item active">
					<div class="slide1"></div>
					<div class="carousel-caption">
						<h1>Amazing Slide1</h1>
						<p>Thousands of buildings</p>
						<p><a href="#" class="btn btn-primary btn-sm">Get them now</a></p>
					</div>
				</div>
				<div class="item">
					<div class="slide2"></div>
					<div class="carousel-caption">
						<h1>Amazing Slide2</h1>
						<p>Thousands of Stones</p>
						<p><a href="#" class="btn btn-default btn-sm">Get them now</a></p>
					</div>
				</div>
				<div class="item">
					<div class="slide3"></div>
					<div class="carousel-caption">
						<h1>Amazing Slide3</h1>
						<p>Thousands of Trees</p>
						<p><a href="#" class="btn btn-success btn-sm">Get them now</a></p>
					</div>
				</div>
				
			</div>

			<a class="left carousel-control" href="#theCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>

			<a class="right carousel-control" href="#theCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
			</div>
		</div>
	</div>