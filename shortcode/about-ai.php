<?php 
// about_ai Shortocode
add_shortcode('about_ai','about_ai');
function about_ai($atts,$content){

	$deep_learning = shortcode_atts(array(
		'about_learning_title' => 'Now… You thought about AI.',
		'about_img'   => get_template_directory_uri().'/assets/images/whyai/whyai6.png',
		'about_button' => 'see how we applied AI',
		'about_button_url' => 'see how we applied AI'
	),$atts); 
	extract($deep_learning);
	
	$about_image = wp_get_attachment_image_src($about_img,'full');
	
	ob_start();
	
?>
<!--=======================================================================================
									Start about ai area
	========================================================================================-->
	<div class="about-ai deep-learnign-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="culture-item">
						<div class="row">
							<div class="col-md-6 img-item1">
								<div class="culture-img">
									<img src="<?php echo $about_image[0]?>" alt="single_img">
								</div>
							</div>
							<div class="col-md-6 culture_item2">
								<div class="about-ai-content deep-learnign-content culture-content">
									<h3><?php echo $about_learning_title;?></h3>
									<p><?php echo $content;?></p>
									<a href="<?php echo $about_button_url;?>"><?php echo $about_button;?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End about ai area
	========================================================================================-->
<?php 
	$output= ob_get_clean();
		return $output;
	}
	if(function_exists('vc_map')){
	vc_map(array(
		'name'	=> 'About Ai',
		'base'	=> 'about_ai',
		'category'=> 'Coder Item Elements',
		'params' => array(
			array(
				'heading'	=> 'Image',
				'type'		=> 'attach_image',
				'param_name'=> 'about_img',
			),
			array(
				'heading'	=> 'Title',
				'type'		=> 'textfield',
				'param_name'=> 'about_learning_title',
				'value'     => 'Now… You thought about AI.'
			),
			array(
				'heading'	=> 'Description',
				'type'		=> 'textarea_html',
				'param_name'=> 'content',
				'value'	=> 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, beatae vitae dicta.'
			),
			array(
				'heading'	=> 'See Button Text',
				'type'		=> 'textfield',
				'param_name'=> 'about_button',
				'value'	=> 'see how we applied AI'
			),
			array(
				'heading'	=> 'See Button url',
				'type'		=> 'textfield',
				'param_name'=> 'about_button_url',
				'value'	=> '#'
			),
		)
	));
}