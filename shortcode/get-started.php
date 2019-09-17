<?php 
// banner Shortocode
add_shortcode('get_started','get_started');
function get_started($atts,$content){

	$get_started = shortcode_atts(array(
		'get_started_title' => 'Excited to get started?',
		'chat_button' => 'Yes, i want to have a chat',
		'chat_button_url' => '#',
		'get_started_description' => 'Yes, but i am still curious <a href="#">how you can</a> help me precisely',

	),$atts); 
	extract($get_started);
	
	ob_start();
	
?>
	<!--=======================================================================================
									Start exited get started area
	========================================================================================-->
	<div class="exited-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="exited-content">
						<h3><?php echo $get_started_title;?></h3>
						<a href="<?php echo $chat_button_url;?>" class="chat-button"><?php echo $chat_button;?></a>
						<p><?php echo $get_started_description;?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End exited get started  area
	========================================================================================-->
	
<?php 
	$output= ob_get_clean();
		return $output;
	}
	if(function_exists('vc_map')){
	vc_map(array(
		'name'	=> 'Get Started',
		'base'	=> 'get_started',
		'category'=> 'Coder Item Elements',
		'params' => array(
			array(
				'heading'	=> 'Get Started Title',
				'type'		=> 'textfield',
				'param_name'=> 'get_started_title',
				'value'     => 'Excited to get started?'
			),
			array(
				'heading'	=> 'Get Started Button',
				'type'		=> 'textfield',
				'param_name'=> 'chat_button',
				'value'     => 'Yes, i want to have a chat'
			),
			array(
				'heading'	=> 'Get Started Button url',
				'type'		=> 'textfield',
				'param_name'=> 'chat_button_url',
				'value'     => '#'
			),
			array(
				'heading'	=> 'Get Started Description',
				'type'		=> 'textarea',
				'param_name'=> 'get_started_description',
				'value'     => 'Yes, but i am still curious <a href="#">how you can</a> help me precisely'
			),
		)
	));
}	