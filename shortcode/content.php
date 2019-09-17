<?php 
// leraning_content Shortocode
add_shortcode('leraning_content','leraning_content');
function leraning_content($atts,$content){

	$leraning_content = shortcode_atts(array(
		'content_right' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. ',
		'leraning_img2'   => get_template_directory_uri().'/assets/images/whyai/apps.png',
		'learning_video'   => 'http://www.youtube.com/watch?v=0O2aH4XLbto',

	),$atts); 
	extract($leraning_content);
	
	$content_image = wp_get_attachment_image_src($leraning_img2,'full');
	
	ob_start();
	
?><!--=======================================================================================
									Start ai content and image  area
	========================================================================================-->
	<div class="aicontent-img-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">
						<div class="col-md-6">
							<div class="ai-single-content">
								<p><?php echo $content;?></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="ai-single-content">
								<p><?php echo $content_right;?></p>
							</div>
						</div>
					</div>
					
					<div class="row mobile_apps">
						<div class="col-xl-12">
							<div class="whyai_img-area">
								<img class="ai_img "src="<?php echo $content_image[0]?>" alt="image">
								
								<div class="magnific-popup">
									<a class="popup" href="<?php echo $learning_video;?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon/play.png"></a>
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
									End ai content and image  area
	========================================================================================-->
<?php 
	$output= ob_get_clean();
		return $output;
	}
	if(function_exists('vc_map')){
	vc_map(array(
		'name'	=> 'Content',
		'base'	=> 'leraning_content',
		'category'=> 'Coder Item Elements',
		'params' => array(
			array(
				'heading'	=> 'Content Left',
				'type'		=> 'textarea_html',
				'param_name'=> 'content',
				'value'     => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
								
				</br>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero'
			),
			array(
				'heading'	=> 'Content Right',
				'type'		=> 'textarea',
				'param_name'=> 'content_right',
				'value'     => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. '
			),
			array(
				'heading'	=> 'Image',
				'type'		=> 'attach_image',
				'param_name'=> 'leraning_img2',
			),
			array(
				'heading'	=> 'Popup Video url',
				'type'		=> 'textfield',
				'param_name'=> 'learning_video',
				'value'     => 'http://www.youtube.com/watch?v=0O2aH4XLbto'
			),
		)
	));
}