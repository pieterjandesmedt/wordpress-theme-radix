<?php
// deep_learning Shortocode
add_shortcode('deep_learning','deep_learning');
function deep_learning($atts,$content){

	$deep_learning = shortcode_atts(array(
		'deep_learning_title' => 'What is Deep Learning?',
		'deep_learnign_desc' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus.

		</br>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.',
		'deep_img'   => get_template_directory_uri().'/assets/images/whyai/whyai4.png',
		'icon_img'   => get_template_directory_uri().'/assets/images/icon/play.png',
		'deep_url'   =>'',
	),$atts);
	extract($deep_learning);

	$deep_image = wp_get_attachment_image_src($deep_img,'full');
	$icon_image = wp_get_attachment_image_src($icon_img,'full');

	ob_start();

?>
<!--=======================================================================================
									Start Deep Learning area
	========================================================================================-->
	<div class="deep-learnign-area" data-scroll-index="8">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="culture-item">
						<div class="row">
							<div class="col-md-6 img-item1">
								<div class="culture-img">
									<img src="<?php echo $deep_image[0];?>" alt="single_img">
								</div>
								<div class="magnific-popup">
									<a class="popup" href="<?php echo $deep_url; ?>"><img src="<?php echo $icon_image[0];?>"></a>
								</div>
							</div>
							<div class="col-md-6 culture_item2">
								<div class="deep-learnign-content culture-content">
									<h3><?php echo $deep_learning_title?></h3>
									<p><?php echo $deep_learnign_desc;?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End Deep Learning area
	========================================================================================-->
<?php
	$output= ob_get_clean();
		return $output;
	}
	if(function_exists('vc_map')){
	vc_map(array(
		'name'	=> 'Deep Learning',
		'base'	=> 'deep_learning',
		'category'=> 'Coder Item Elements',
		'params' => array(
			array(
				'heading'	=> 'Learning Title',
				'type'		=> 'textfield',
				'param_name'=> 'deep_learnign_title',
				'value'     => 'What is Deep Learning?'
			),
			array(
				'heading'	=> 'Learning Description',
				'type'		=> 'textarea_html',
				'param_name'=> 'deep_learnign_desc',
				'value'	=> 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus.

				</br>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.'
			),
			array(
				'heading'	=> 'Image',
				'type'		=> 'attach_image',
				'param_name'=> 'deep_img',
			),
			array(
				'heading'	=> 'Play Icon',
				'type'		=> 'attach_image',
				'param_name'=> 'icon_img',
			),
			array(
				'heading'	=> 'Popup Video url',
				'type'		=> 'textfield',
				'param_name'=> 'deep_url',
			),
		)
	));
}
