<?php 
/*
	Template Name: Main Page Home
*/
get_header();

include('slider.php');
include('middlebar.php');
 ?>

<style type="text/css">
	.opacback{
		background-image: url('/wp-content/themes/MyDesign1/slide3.jpg');
			}
	.opacfalse{
		opacity: 0.6;
	}
</style>
<div class="row opacback well">
	
	<div class="well well-sm col-lg-6 opacfalse">
		<header class="entry-header"><h1 class="entry-title"><em>What we offer!</em></h1></header>
		<em>OUR SERVICES INCLUDE BUT ARE NOT LIMITED TO WEBSITE DEVELOPMENT, APP-DEVELOPMENT, SOCIAL MEDIA MARKETING, SOFTWARE DEVELOPMENT; AND WE OFFER IT ALL FREE OF COST TO NGOS, AND AT AFFORDABLE PRICES FOR OUR OTHER CLIENTS.
WITH OUR PASSIONATE DESIGNERS AND DEVELOPERS TEAM, YOU CAN SIT BACK AND RELAX WHILE WE MAKE SURE THAT YOUR VISION AND YOUR MISSION COME TO LIFE.</em>
	</div>
<div class="col-lg-6">
	
		
</div>
</div>

<?php 
get_footer();
?>