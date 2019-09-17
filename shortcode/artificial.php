<?php
// artificial Shortocode
add_shortcode('artificial','artificial');
function artificial($atts,$content){

	$artificial = shortcode_atts(array(
		'artificial_img'   => get_template_directory_uri().'/assets/images/whyai/artificial.png',
		'artificial_content' => '�The thing that�s going to make artificial intelligence so powerful is its ability to learn, and the way AI learns is to look at human culture. I believe this artificial intelligence is going to be our partner. If we misuse it, it will be a risk.�',

		'icon_img'   => get_template_directory_uri().'/assets/images/icon/play.png',
		'artifial_video_url'   =>'',

	),$atts);
	extract($artificial);

	$artificial_img = wp_get_attachment_image_src($artificial_img,'full');
	$icon_image = wp_get_attachment_image_src($icon_img,'full');

	ob_start();

?>
	<!--=======================================================================================
									Start whyai artificia area
	========================================================================================-->
	<div class="artificial-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">
						<div class="col-xl-12 col-md-12">
							<div class="arficial-img">
								<img src="<?php echo $artificial_img[0]; ?>" alt="image">
							</div>
							<div class="magnific-popup">
									<a class="popup" href="<?php echo $artifial_video_url;?>"><img src="<?php echo $icon_image[0];?>"></a>
								</div>
						</div>
						<!-- <div class="col-xl-5 offset-xl-1 col-md-6">
							<div class="artificaila-content">
								<p><?php echo $artificial_content;?></p>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End whyai artificia area
	========================================================================================-->
	<?php
	$output= ob_get_clean();
		return $output;
	}
	if(function_exists('vc_map')){
	vc_map(array(
		'name'	=> 'Artificial',
		'base'	=> 'artificial',
		'category'=> 'Coder Item Elements',
		'params' => array(
			array(
				'heading'	=> 'Artificial Image',
				'type'		=> 'attach_image',
				'param_name'=> 'artificial_img',
			),
			array(
				'heading'	=> 'Artificial Content',
				'type'		=> 'textarea',
				'param_name'=> 'artificial_content',
				'value'	=> '�The thing that�s going to make artificial intelligence so powerful is its ability to learn, and the way AI learns is to look at human culture. I believe this artificial intelligence is going to be our partner. If we misuse it, it will be a risk.�'
			),
			array(
				'heading'	=> 'Play Icon',
				'type'		=> 'attach_image',
				'param_name'=> 'icon_img',
			),
			array(
				'heading'	=> 'Popup Video url',
				'type'		=> 'textfield',
				'param_name'=> 'artifial_video_url',
			),
		)
	));
}
