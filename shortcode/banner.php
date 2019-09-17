<?php 
// banner Shortocode
add_shortcode('banner','banner_function');
function banner_function($atts,$content){

	$banner = shortcode_atts(array(
		'banner_title' => 'Get ahead. Think AI.',
		'banner_button' => 'get started',
		'banner_button_url' => '#',
		'banner_bg'   => get_template_directory_uri().'/images/banner/banner.png',

	),$atts); 
	extract($banner);
	
	$banner_background = wp_get_attachment_image_src($banner_bg,'full');
	
	ob_start();
	
?>

	<!--=======================================================================================
									Start banner area
	========================================================================================-->
	<div class="banner-area" style="background-image: url(<?php echo $banner_background[0];?>);">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="banner-content">
						<h2><?php echo $banner_title?></h2>
						<p><?php echo $content?></p>
						<a href="<?php echo $banner_button_url ?>"><?php echo $banner_button ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="arrow_down" class="active" data-scroll-nav="1">
		<i class="fa fa-angle-down" aria-hidden="true"></i>
	</div>
	<!--=======================================================================================
									End banner area
	========================================================================================-->
	<?php 
		$output= ob_get_clean();
		return $output;
	}
	if(function_exists('vc_map')){
	vc_map(array(
		'name'	=> 'Banner',
		'base'	=> 'banner',
		'category'=> 'Coder Item Elements',
		'params' => array(
			array(
				'heading'	=> 'Background Image',
				'type'		=> 'attach_image',
				'param_name'=> 'banner_bg'
			),
			array(
				'heading'	=> 'Banner Title',
				'type'		=> 'textfield',
				'param_name'=> 'banner_title',
				'value'	=> 'Get ahead. Think AI.'
			),
			array(
				'heading'	=> 'Banner Description',
				'type'		=> 'textarea_html',
				'param_name'=> 'content',
				'value'	=> 'Wherever you are in your AI journey, we can help you get ahead.'
			),
			array(
				'heading'	=> 'Banner Button Text',
				'type'		=> 'textfield',
				'param_name'=> 'banner_button',
				'value'	=> 'get started'
			),
			array(
				'heading'	=> 'Banner Button URL',
				'type'		=> 'textfield',
				'param_name'=> 'banner_button_url',
				'value'	=> '#'
			),
			
		)
	));
}