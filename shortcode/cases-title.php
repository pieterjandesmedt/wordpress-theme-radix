<?php
	add_shortcode('cases_title','cases_title');
	function cases_title($atts,$content){
		$cases_title = shortcode_atts(array(
			'cases_title' => 'Cases.',
		
		),$atts);
		
		extract($cases_title);
		ob_start();
	
?>
	<div class="cases-area" data-scroll-index="3">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="cases-title">
						<div class="row">
							<div class="col-xl-12">
								<div class="title">
									<h3><?php echo $cases_title;?></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php
	$output = ob_get_clean();
	return $output;
	
	}
	
	if(function_exists('vc_map')){
	vc_map(array(
		'name'   => 'Cases Title',
		'base'   => 'cases_title',
		'category'=> 'Coder Item Elements',
		'params'  => array(
			array(
				'heading'   => 'Cases Title',
				'type'      => 'textfield',
				'param_name'=> 'cases_title',
				'value'     => 'Cases.'
			),
		)
	));
	}