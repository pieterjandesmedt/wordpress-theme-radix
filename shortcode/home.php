<?php 
// home_bar Shortocode
add_shortcode('home_bar','home_bar');
function home_bar($atts,$content){

	$home_bar = shortcode_atts(array(

	),$atts); 
	extract($home_bar);
	
	ob_start();
	
?>
<!--=======================================================================================
									Start home bar area
	========================================================================================-->
	<div class="homebar-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="homebar-content">
						<a href="<?php echo bloginfo('home');?>">Home</a>
						<a href="<?php the_permalink();?>"><i class="fa fa-angle-right"></i><?php the_title();?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End home bar area
	========================================================================================-->
	
	<?php
	$output = ob_get_clean();
	return $output;
	}
	if(function_exists('vc_map')){
		vc_map(array(
			'name'   => 'Page Bar',
			'base'  => 'home_bar',
			'category'=> 'Coder Item Elements',
		));
	}