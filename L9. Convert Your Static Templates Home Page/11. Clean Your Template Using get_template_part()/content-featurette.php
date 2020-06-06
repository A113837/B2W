<?php 

$featurette_title			=  	get_field('featurette_title');
$featurette_video			=  	get_field('featurette_video');

 ?>


<!-- VIDEO FEATURETTE
================================================== -->
<section id="featurette">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2><?php echo $featurette_title; ?></h2>
				<iframe width="100%" height="415" src="http:////www.youtube.com/embed/q-mJJsnOHew" frameborder="0" allowfullscreen></iframe>
			</div><!-- end col -->
		</div><!-- row -->			
	</div><!-- container -->
</section><!-- featurette -->