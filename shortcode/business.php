<?php 
// business Shortocode
add_shortcode('business','business_function');
function business_function($atts,$content){

	$business = shortcode_atts(array(
		'business_title' => 'The impact of AI on your business',
		'business_content' => 'We strongly believe in showing the impact AI has on your day-to-day activities. That’s why we have categorised our projects in 5 clear business objectives for you to see the impact in practice.',
		'business_button' => 'ai we deliver',
		'business_button_url' => '#',
		
		'business_icon1'   => get_template_directory_uri().'/assets/images/icon/icon1.png',
		'business_tool_title1' => 'Decision Making',
		'business_tool_content1' => 'Natus error sed ut perspiciatis unde omnis iste sit voluptatem.',
		'business_tool_url1' => '#',
		
		
		'business_icon2'   => get_template_directory_uri().'/assets/images/icon/icon2.png',
		'business_tool_title2' => 'Competitive advantage',
		'business_tool_content2' => 'Omnis iste voluptatem natus perspiciatis sit.',
		'business_tool_url2' => '#',
		
		'business_icon3'   => get_template_directory_uri().'/assets/images/icon/icon3.png',
		'business_tool_title3' => 'innovation',
		'business_tool_content3' => 'Perspiciatis unde omnis iste sit natus error.',
		'business_tool_url3' => '#',
		
		'business_icon4'   => get_template_directory_uri().'/assets/images/icon/icon1.png',
		'business_tool_title4' => 'Customer Experience',
		'business_tool_content4' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem.',
		'business_tool_url4' => '#',
		
		'business_icon5'   => get_template_directory_uri().'/assets/images/icon/icon1.png',
		'business_tool_title5' => 'Business Operations',
		'business_tool_content5' => 'This is an example of a hover state sed iste omnis.',
		'business_tool_url5' => '#',

	),$atts); 
	extract($business);
	
	$business_icon1 = wp_get_attachment_image_src($business_icon1,'full');
	$business_icon2 = wp_get_attachment_image_src($business_icon2,'full');
	$business_icon3 = wp_get_attachment_image_src($business_icon3,'full');
	$business_icon4 = wp_get_attachment_image_src($business_icon4,'full');
	$business_icon5 = wp_get_attachment_image_src($business_icon5,'full');
	
	ob_start();
	
?>
	<!--=======================================================================================
									start business area
	========================================================================================-->
	<div class="business-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="business-item">
						<div class="row">
							<div class="col-xl-4 col-md-5">
								<div class="business-content culture-content">
									<h3><?php echo $business_title; ?></h3>
									<p><?php echo $business_content; ?></p>
									<a href="<?php echo $business_button_url?>"><?php echo $business_button?><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
								</div>
							</div>
							<div class="col-xl-8 col-md-7">
								<div class="business-icon-area">
									<div class="row">
										<div class="col-xl-6">
											<a href="<?php echo $business_tool_url1;?>" target=""><div class="business-icon-item">
												<div class="icon_img">
													<img src="<?php echo $business_icon1[0]; ?>">
												</div>
												<div class="icon-content">
													<h4><?php echo $business_tool_title1; ?></h4>
													<p><?php echo $business_tool_content1; ?></p>
												</div>
											</div>
											</a>
											
											<a href="<?php echo $business_tool_url2;?>"><div class="business-icon-item">
												<div class="icon_img">
													<img src="<?php echo $business_icon2[0];?>">
												</div>
												<div class="icon-content">
													<h4><?php echo $business_tool_title2; ?></h4>
													<p><?php echo $business_tool_content2; ?></p>
												</div>
											</div>
											</a>
											
											<a href="<?php echo $business_tool_url3;?>"><div class="business-icon-item">
												<div class="icon_img">
													<img src="<?php echo $business_icon3[0];?>">
												</div>
												<div class="icon-content">
													<h4><?php echo $business_tool_title3; ?></h4>
													<p><?php echo $business_tool_content3; ?></p>
												</div>
											</div>
											</a>
										</div>
										
										<div class="col-xl-6">
											<a href="<?php echo $business_tool_url4;?>">
											<div class="business-icon-item">
												<div class="icon_img">
													<img src="<?php echo $business_icon4[0];?>">
												</div>
												<div class="icon-content">
													<h4><?php echo $business_tool_title4; ?></h4>
													<p><?php echo $business_tool_content4; ?></p>
												</div>
											</div>
											</a>
											
											<a href="<?php echo $business_tool_url5;?>">
											<div class="business-icon-item business-active">
												<div class="icon_img">
													<img src="<?php echo $business_icon5[0];?>">
												</div>
												<div class="icon-content">
													<h4><?php echo $business_tool_title5; ?></h4>
													<p><?php echo $business_tool_content5; ?></p>
												</div>
											</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End business area
	========================================================================================-->
	<?php 
		$output= ob_get_clean();
		return $output;
	}
	if(function_exists('vc_map')){
	vc_map(array(
		'name'	=> 'Business',
		'base'	=> 'business',
		'category'=> 'Coder Item Elements',
		'params' => array(
			array(
				'heading'	=> 'Business Title',
				'type'		=> 'textfield',
				'param_name'=> 'business_title',
				'value'	=> 'The impact of AI on your business'
			),
			array(
				'heading'	=> 'Business Description',
				'type'		=> 'textarea',
				'param_name'=> 'business_content',
				'value'	=> 'We strongly believe in showing the impact AI has on your day-to-day activities. That’s why we have categorised our projects in 5 clear business objectives for you to see the impact in practice.'
			),
			array(
				'heading'	=> 'Business Button Text',
				'type'		=> 'textfield',
				'param_name'=> 'business_button',
				'value'	=> 'ai we deliver'
			),
			array(
				'heading'	=> 'Business Button URL',
				'type'		=> 'textfield',
				'param_name'=> 'business_button_url',
				'value'	=> '#'
			),
			
			array(
				'heading'	=> 'Business Icon1',
				'type'		=> 'attach_image',
				'param_name'=> 'business_icon1'
			),
			array(
				'heading'	=> 'Decision Making url',
				'type'		=> 'textfield',
				'param_name'=> 'business_tool_url1',
				'value'	=> '#'
			),
			array(
				'heading'	=> 'Business Tool Title1',
				'type'		=> 'textfield',
				'param_name'=> 'business_tool_title1',
				'value'	=> 'Decision Making'
			),
			array(
				'heading'	=> 'Business Tool Description1',
				'type'		=> 'textarea',
				'param_name'=> 'business_tool_content1',
				'value'	=> 'Natus error sed ut perspiciatis unde omnis iste sit voluptatem.'
			),
			
			array(
				'heading'	=> 'Business Icon2',
				'type'		=> 'attach_image',
				'param_name'=> 'business_icon2'
			),
			array(
				'heading'	=> 'Competitive advantage url',
				'type'		=> 'textfield',
				'param_name'=> 'business_tool_url2',
				'value'	=> '#'
			),
			array(
				'heading'	=> 'Business Tool Title2',
				'type'		=> 'textfield',
				'param_name'=> 'business_tool_title2',
				'value'	=> 'Competitive advantage'
			),
			array(
				'heading'	=> 'Business Tool Description2',
				'type'		=> 'textarea',
				'param_name'=> 'business_tool_content2',
				'value'	=> 'Omnis iste voluptatem natus perspiciatis sit.'
			),
			
			array(
				'heading'	=> 'Business Icon',
				'type'		=> 'attach_image',
				'param_name'=> 'business_icon3'
			),
			array(
				'heading'	=> 'innovation url',
				'type'		=> 'textfield',
				'param_name'=> 'business_tool_url3',
				'value'	=> '#'
			),
			array(
				'heading'	=> 'Business Tool Title3',
				'type'		=> 'textfield',
				'param_name'=> 'business_tool_title3',
				'value'	=> 'innovation'
			),
			array(
				'heading'	=> 'Business Tool Description3',
				'type'		=> 'textarea',
				'param_name'=> 'business_tool_content3',
				'value'	=> 'Perspiciatis unde omnis iste sit natus error.'
			),
			
			array(
				'heading'	=> 'Business Icon',
				'type'		=> 'attach_image',
				'param_name'=> 'business_icon4'
			),
			array(
				'heading'	=> 'Customer Experience url',
				'type'		=> 'textfield',
				'param_name'=> 'business_tool_url4',
				'value'	=> '#'
			),
			array(
				'heading'	=> 'Business Tool Title4',
				'type'		=> 'textfield',
				'param_name'=> 'business_tool_title4',
				'value'	=> 'Customer Experience'
			),
			array(
				'heading'	=> 'Business Tool Description4',
				'type'		=> 'textarea',
				'param_name'=> 'business_tool_content4',
				'value'	=> 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem.'
			),
			
			array(
				'heading'	=> 'Business Icon',
				'type'		=> 'attach_image',
				'param_name'=> 'business_icon5'
			),
			array(
				'heading'	=> 'Business Operations url',
				'type'		=> 'textfield',
				'param_name'=> 'business_tool_url5',
				'value'	=> '#'
			),
			array(
				'heading'	=> 'Business Tool Title5',
				'type'		=> 'textfield',
				'param_name'=> 'business_tool_title5',
				'value'	=> 'Business Operations'
			),
			array(
				'heading'	=> 'Business Tool Description5',
				'type'		=> 'textarea',
				'param_name'=> 'business_tool_content5',
				'value'	=> 'This is an example of a hover state sed iste omnis.'
			),
			
		)
	));
}