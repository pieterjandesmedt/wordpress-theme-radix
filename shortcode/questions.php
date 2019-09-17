<?php
	add_shortcode('questions','questions');
	function questions($atts,$content){
		$questions = shortcode_atts(array(
			'questions_title' => 'You have a question or want to meet us?',
			'questions_description' => 'We love to chat about all things AI and see how we can help you.',
		
		),$atts);
		
		extract($questions);
		ob_start();
	
?>

	<!--=======================================================================================
									Start ai delivered area
	========================================================================================-->
	<div class="ai-delivered-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 offset-xl-1">
					<div class="help-contact ai-delivered-content">
						<h2><?php echo $questions_title;?></h2>
						<p><?php echo $questions_description;?></p>
						<div class="line">
							<h4></h4>
						</div>
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
		'name'   => 'Questions',
		'base'   => 'questions',
		'category'=> 'Coder Item Elements',
		'params'  => array(
			array(
				'heading'   => 'Title',
				'type'      => 'textfield',
				'param_name'=> 'questions_title',
				'value'     => 'You have a question or want to meet us?'
			),
			array(
				'heading'   => 'Description',
				'type'      => 'textarea',
				'param_name'=> 'questions_description',
				'value'     => 'We love to chat about all things AI and see how we can help you.'
			),
		)
	));
}