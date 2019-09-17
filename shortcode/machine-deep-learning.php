<?php
// machine_deep_learning Shortocode
add_shortcode('machine_deep_learning','machine_deep_learning');
function machine_deep_learning($atts,$content){

	$machine_deep_learning = shortcode_atts(array(
		'learning_title' => 'How do AI, Machine learning and Deep learning relate?',
		'learning_desc' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus.
		</br>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.',
		'machine_deep_learning_img'   => get_template_directory_uri().'/assets/images/whyai/machine-learning.png',
		'icon_img'   => get_template_directory_uri().'/assets/images/icon/play.png',
		'machine_deep_learning_video_url'   =>'',
	),$atts);
	extract($machine_deep_learning);

	$machine_deep_learning_img = wp_get_attachment_image_src($machine_deep_learning_img,'full');
	$icon_image = wp_get_attachment_image_src($icon_img,'full');

	ob_start();

?>
<!--=======================================================================================
									Start whyai Machine learning  area
	========================================================================================-->
	<div class="Machine-learning-area" data-scroll-index="6">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="culture-item">
						<div class="row">
							<div class="col-md-6">
								<div class="learning-content">
									<h3><?php echo $learning_title;?></h3>
									<p><?php echo $learning_desc;?></p>
								</div>
							</div>

							<div class="col-xl-6 col-md-6">
								<div class="arficial-img">
									<img src="<?php echo $machine_deep_learning_img[0] ?>" alt="image">
								</div>
								<div class="magnific-popup">
									<a class="popup" href="<?php echo $machine_deep_learning_video_url; ?>"><img src="<?php echo $icon_image[0];?>"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End whyai Machine learning  area
	========================================================================================-->
<?php
	$output= ob_get_clean();
		return $output;
	}
	if(function_exists('vc_map')){
	vc_map(array(
		'name'	=> 'Machine and Deep Learning',
		'base'	=> 'machine_deep_learning',
		'category'=> 'Coder Item Elements',
		'params' => array(
			array(
				'heading'	=> 'Learning Title',
				'type'		=> 'textfield',
				'param_name'=> 'learning_title',
				'value'     => 'How do AI, Machine learning and Deep learning relate?'
			),
			array(
				'heading'	=> 'Learning Description',
				'type'		=> 'textarea_html',
				'param_name'=> 'learning_desc',
				'value'	=> 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus.

				</br>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.'
			),
			array(
				'heading'	=> 'Learning Image',
				'type'		=> 'attach_image',
				'param_name'=> 'machine_deep_learning_img',
			),
			array(
				'heading'	=> 'Play Icon',
				'type'		=> 'attach_image',
				'param_name'=> 'icon_img',
			),
			array(
				'heading'	=> 'Popup Video url',
				'type'		=> 'textfield',
				'param_name'=> 'machine_deep_learning_video_url',
			),
		)
	));
}
