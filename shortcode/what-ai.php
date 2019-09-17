<?php 
// what_ai Shortocode
add_shortcode('what_ai','what_ai');
function what_ai($atts,$content){

	$what_ai = shortcode_atts(array(
		'data_scroll' => '5',
		'what_ai_title' => 'What is AI?',

	),$atts); 
	extract($what_ai);
	
	ob_start();
	
?>
	<!--=======================================================================================
									Start whyai description area
	========================================================================================-->
	<div class="why-ai-area" data-scroll-index="<?php echo $data_scroll;?>">
		<div class="container">
			<div class="row">
				<div class="col-xl-7 offset-xl-3">
					<div class="ai_description">
						<h2><?php echo $what_ai_title;?></h2>
						<p><?php echo $content;?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End whyai description area
	========================================================================================-->
<?php 
	$output= ob_get_clean();
		return $output;
	}
	if(function_exists('vc_map')){
	vc_map(array(
		'name'	=> 'Ai',
		'base'	=> 'what_ai',
		'category'=> 'Coder Item Elements',
		'params' => array(
			array(
				'heading'	=> 'Data Scroll',
				'type'		=> 'textfield',
				'param_name'=> 'data_scroll',
			),
			array(
				'heading'	=> 'What ai title',
				'type'		=> 'textfield',
				'param_name'=> 'what_ai_title',
				'value'     => 'What is AI?'
			),
			array(
				'heading'	=> 'What ai description',
				'type'		=> 'textarea_html',
				'param_name'=> 'content',
				'value'	=> 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores.
				
				</br>		
				Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'
			),
		)
	));
}