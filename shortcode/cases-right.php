<?php 
// case_right Shortocode
add_shortcode('case_right','case_right');
function case_right($atts,$content){

	$case_right = shortcode_atts(array(
		'cases_img_right'   => get_template_directory_uri().'/assets/images/cases/cases.png',
		'cases_feature_tittle_right' => 'Operational excellence',
		'cases_content_title_right' => '30% better search results for the VDAB job seeker',
		'cases_buton_right' => 'see how we applied AI',
		'cases_button_url_right' => '#',

	),$atts); 
	extract($case_right);
	
	$cases_left_img_right = wp_get_attachment_image_src($cases_img_right,'full');
	
	ob_start();
	
?>
<div class="cases-item">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="cases-single-item">
						<div class="row">
							<div class="col-md-6">
								<div class="cases-content culture-content">
									<span><?php echo $cases_feature_tittle_right;?></span>
									<h3><?php echo $cases_content_title_right;?></h3>
									<p><?php echo $content;?></p>
									<a href="<?php echo $cases_button_url_right;?>"><?php echo $cases_buton_right;?><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
								</div>
							</div>
							
							<div class="col-md-6 img-item2">
								<div class="culture-img">
									<img src="<?php echo $cases_left_img_right[0]?>" alt="case">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php 
	$output= ob_get_clean();
		return $output;
	}
	if(function_exists('vc_map')){
	vc_map(array(
		'name'	=> 'Cases Right',
		'base'	=> 'case_right',
		'category'=> 'Coder Item Elements',
		'params' => array(
			array(
				'heading'	=> 'Cases Image',
				'type'		=> 'attach_image',
				'param_name'=> 'cases_img_right',
			),
			array(
				'heading'	=> 'Cases Feature Title',
				'type'		=> 'textfield',
				'param_name'=> 'cases_feature_tittle_right',
				'value'	=> 'Operational excellence'
			),
			array(
				'heading'	=> 'Cases Heading Title',
				'type'		=> 'textfield',
				'param_name'=> 'cases_content_title_right',
				'value'	=> '30% better search results for the VDAB job seeker'
			),	
			array(
				'heading'	=> 'Cases Description',
				'type'		=> 'textarea_html',
				'param_name'=> 'content',
				'value'	=> 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor'
			),
			array(
				'heading'	=> 'Cases Button',
				'type'		=> 'textfield',
				'param_name'=> 'cases_buton_right',
				'value'	=> 'see how we applied AI'
			),
			array(
				'heading'	=> 'Cases Button url',
				'type'		=> 'textfield',
				'param_name'=> 'cases_button_url_right',
				'value'	=> '#'
			),
		)
	));
}