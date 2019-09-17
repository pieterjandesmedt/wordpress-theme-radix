<?php 
// case_left Shortocode
add_shortcode('case_left','case_left');
function case_left($atts,$content){

	$case_left = shortcode_atts(array(
		'cases_img'   => get_template_directory_uri().'/assets/images/cases/cases.png',
		'cases_feature_tittle' => 'Customer experience',
		'cases_content_title' => '30% better search results for the VDAB job seeker',
		'cases_left_description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor',
		'cases_buton' => 'see how we applied AI',
		'cases_button_url' => '#',

	),$atts); 
	extract($case_left);
	
	$cases_left_img = wp_get_attachment_image_src($cases_img,'full');
	
	ob_start();
	
?>
<div class="cases-item">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="cases-single-item">
						<div class="row">
							<div class="col-md-6 img-item1">
								<div class="culture-img">
									<img src="<?php echo $cases_left_img[0]?>" alt="case">
								</div>
							</div>
							<div class="col-md-6 culture_item2">
								<div class="cases-content culture-content">
									<span><?php echo $cases_feature_tittle;?></span>
									<h3><?php echo $cases_content_title;?></h3>
									<p><?php echo $cases_left_description;?></p>
									<a href="<?php echo $cases_button_url;?>"><?php echo $cases_buton;?><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
		'name'	=> 'Cases left',
		'base'	=> 'case_left',
		'category'=> 'Coder Item Elements',
		'params' => array(
			array(
				'heading'	=> 'Cases Image',
				'type'		=> 'attach_image',
				'param_name'=> 'cases_img',
			),
			array(
				'heading'	=> 'Cases Feature Title',
				'type'		=> 'textfield',
				'param_name'=> 'cases_feature_tittle',
				'value'	=> 'Customer experience'
			),
			array(
				'heading'	=> 'Cases Heading Title',
				'type'		=> 'textfield',
				'param_name'=> 'cases_content_title',
				'value'	=> '30% better search results for the VDAB job seeker'
			),	
			array(
				'heading'	=> 'Cases Description',
				'type'		=> 'textarea_html',
				'param_name'=> 'cases_left_description',
				'value'	=> 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor'
			),
			array(
				'heading'	=> 'Cases Button',
				'type'		=> 'textfield',
				'param_name'=> 'cases_buton',
				'value'	=> 'see how we applied AI'
			),
			array(
				'heading'	=> 'Cases Button url',
				'type'		=> 'textfield',
				'param_name'=> 'cases_button_url',
				'value'	=> '#'
			),
		)
	));
}