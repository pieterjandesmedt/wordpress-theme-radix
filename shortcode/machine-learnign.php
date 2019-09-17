<?php 
// machine_learning Shortocode
add_shortcode('machine_learning','machine_learning');
function machine_learning($atts,$content){

	$machine_learning = shortcode_atts(array(
		'leraning_img'   => get_template_directory_uri().'/assets/images/whyai/learnign2.png',
		'machine_title' => 'What is Machine Learning?',

	),$atts); 
	extract($machine_learning);
	
	$machine_image = wp_get_attachment_image_src($leraning_img,'full');
	
	ob_start();
	
?>
<!--=======================================================================================
									Start Machine-learning2  area
	========================================================================================-->
	<div class="Machine-learning2-area" data-scroll-index="7">
	
		<img src="<?php echo $machine_image[0];?>" alt="image">
		
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="learnign2-content">
						<h2><?php echo $machine_title;?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End Machine-learning2  area
	========================================================================================-->
<?php 
	$output= ob_get_clean();
		return $output;
	}
	if(function_exists('vc_map')){
	vc_map(array(
		'name'	=> 'Machine Learning',
		'base'	=> 'machine_learning',
		'category'=> 'Coder Item Elements',
		'params' => array(
			array(
				'heading'	=> 'Image',
				'type'		=> 'attach_image',
				'param_name'=> 'leraning_img',
			),
			array(
				'heading'	=> 'Machine Learning Title',
				'type'		=> 'textfield',
				'param_name'=> 'machine_title',
				'value'	=> 'What is Machine Learning?'
			),
		)
	));
}