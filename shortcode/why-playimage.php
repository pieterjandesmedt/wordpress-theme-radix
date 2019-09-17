<?php 
// why_ai_image Shortocode
add_shortcode('why_ai_image','why_ai_image');
function why_ai_image($atts,$content){

	$why_ai_image = shortcode_atts(array(
		'why_ai_image'   => get_template_directory_uri().'/assets/images/whyai/whyai.png',
		'video_url' => 'http://www.youtube.com/watch?v=0O2aH4XLbto',

	),$atts); 
	extract($why_ai_image);
	
	$why_image = wp_get_attachment_image_src($why_ai_image,'full');
	
	ob_start();
	
?>
	<!--=======================================================================================
									Start whyai image area
	========================================================================================-->
	<div class="why-ai-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">
						<div class="col-xl-12">
							<div class="whyai_img-area">
								<img class="ai_img "src="<?php echo $why_image[0];?>" alt="image">
								
								<div class="magnific-popup">
									<a class="popup" href="<?php echo $video_url;?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon/play.png"></a>
									<p>play</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End whyai image area
	========================================================================================-->
<?php 
	$output= ob_get_clean();
		return $output;
	}
	if(function_exists('vc_map')){
	vc_map(array(
		'name'	=> 'Why Image',
		'base'	=> 'why_ai_image',
		'category'=> 'Coder Item Elements',
		'params' => array(
			array(
				'heading'	=> 'Why ai Image',
				'type'		=> 'attach_image',
				'param_name'=> 'why_ai_image',
			),
			array(
				'heading'	=> 'Popup video url',
				'type'		=> 'textfield',
				'param_name'=> 'video_url',
				'value'	=> 'http://www.youtube.com/watch?v=0O2aH4XLbto'
			),
		)
	));
}