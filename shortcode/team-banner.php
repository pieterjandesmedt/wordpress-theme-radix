<?php 
// team_banner Shortocode
add_shortcode('team_banner','team_banner');
function team_banner($atts,$content){

	$team_banner = shortcode_atts(array(
		'team_img'   => get_template_directory_uri().'/assets/images/team/teambanner.png',
		'team_title' => 'Our team',

	),$atts); 
	extract($team_banner);
	
	$team_image = wp_get_attachment_image_src($team_img,'full');
	
	ob_start();
	
?>
	<!--=======================================================================================
									Start team banner area
	========================================================================================-->
	<div class="teambanner-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="teambanner-content">
						<h2><?php echo $team_title;?></h2>
						<img src="<?php echo $team_image[0];?>" alt="team">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End team banner area
	========================================================================================-->
	<?php
	$output = ob_get_clean();
	return $output;
	}
	if(function_exists('vc_map')){
		vc_map(array(
			'name'   => 'Tean Banner',
			'base'  => 'team_banner',
			'category'=> 'Coder Item Elements',
			'params'  => array(
				array(
					'heading'   => 'Team Title',
					'type'      => 'textfield',
					'param_name'=> 'team_title',
					'value'     => 'Our team'
				),
				array(
					'heading'   => 'Team Banner Image',
					'type'      => 'attach_image',
					'param_name'=> 'team_img',
				),
			),
		));
	}