<?php
	add_shortcode('ai_delivered','ai_delivered');
	function ai_delivered($atts,$content){
		$ai_delivered = shortcode_atts(array(
			'ai_title' => 'AI delivered.',
			'ai_description' => 'Our team is part of your digital transformation. We apply AI to',
			'industries_text' => 'Industries',
			'cases_button_text' => 'Cases'
		
		),$atts);
		
		extract($ai_delivered);
		ob_start();
	
?>


	<!--=======================================================================================
									Start ai delivered area
	========================================================================================-->
	<div class="ai-delivered-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="ai-delivered-content">
						<h2><?php echo $ai_title;?></h2>
						<p><?php echo $ai_description;?></p>
						<ul>
							<li><a href="#" class="ai-active" data-scroll-nav="2"><?php echo $industries_text?></a></li>
							<li><a href="#" data-scroll-nav="3"><?php echo $cases_button_text;?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End ai delivered area
	========================================================================================-->

<?php
	$output = ob_get_clean();
	return $output;
	
	}
	
	if(function_exists('vc_map')){
	vc_map(array(
		'name'   => 'Ai Delivered',
		'base'   => 'ai_delivered',
		'category'=> 'Coder Item Elements',
		'params'  => array(
			array(
				'heading'   => 'Ai Title',
				'type'      => 'textfield',
				'param_name'=> 'ai_title',
				'value'     => 'AI delivered.'
			),
			array(
				'heading'   => 'Ai Description',
				'type'      => 'textarea',
				'param_name'=> 'ai_description',
				'value'     => 'Our team is part of your digital transformation. We apply AI to'
			),
			array(
				'heading'   => 'Industries Text',
				'type'      => 'textfield',
				'param_name'=> 'industries_text',
				'value'     => 'Industries'
			),
			array(
				'heading'   => 'Cases Text',
				'type'      => 'textfield',
				'param_name'=> 'cases_button_text',
				'value'     => 'Cases'
			),
		)
	));
	}