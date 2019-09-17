<?php 
// why_ai Shortocode
add_shortcode('why_ai','why_ai');
function why_ai($atts,$content){

	$why_ai = shortcode_atts(array(
		'why_ai_title' => 'Why AI?',
		'why_ai_subtitle' => 'Everything you need to know.',
		'why_ai_desc' => '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 	dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
							</br>
								Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>',
		'why_ai_artificial' => '“The thing that’s going to make artificial intelligence so powerful is its ability to learn, and the way AI learns is to look at human culture. I believe this artificial intelligence is going to be our partner. If we misuse it, it will be a risk.”',
		'overview_title' => 'Overview',

	),$atts); 
	extract($why_ai);
	
	ob_start();
	
?>	
	<!--=======================================================================================
									Start team banner area
	========================================================================================-->
	<div class="why-ai-area" data-scroll-index="4">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">
						<div class="col-md-7">
							<div class="why-ai-content">
								<h2><?php echo $why_ai_title;?></h2>
								<h3><?php echo $why_ai_subtitle;?></h3>
								<p><?php echo $why_ai_desc;?></p>
							</div>
							<div class="ai_content_area">
								<p><?php echo $why_ai_artificial;?></p>
							</div>
						</div>
						
						<div class="col-md-5">
							<div class="overview-area">
								<h2><?php echo $overview_title;?></h2>
								<ul>
									<?php echo $content;?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End team banner area
	========================================================================================-->
<?php 
	$output= ob_get_clean();
		return $output;
	}
	if(function_exists('vc_map')){
	vc_map(array(
		'name'	=> 'Why ai',
		'base'	=> 'why_ai',
		'category'=> 'Coder Item Elements',
		'params' => array(
			array(
				'heading'	=> 'Why ai title',
				'type'		=> 'textfield',
				'param_name'=> 'why_ai_title',
				'value'     => 'Why AI?'
			),
			array(
				'heading'	=> 'Why ai subtitle',
				'type'		=> 'textfield',
				'param_name'=> 'why_ai_subtitle',
				'value'	=> 'Everything you need to know.'
			),
			array(
				'heading'	=> 'Why ai description',
				'type'		=> 'textarea',
				'param_name'=> 'why_ai_desc',
				'value'	=> '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>'
			),	
			array(
				'heading'	=> 'Artificial Content',
				'type'		=> 'textarea',
				'param_name'=> 'why_ai_artificial',
				'value'	=> '“The thing that’s going to make artificial intelligence so powerful is its ability to learn, and the way AI learns is to look at human culture. I believe this artificial intelligence is going to be our partner. If we misuse it, it will be a risk.”'
			),
			array(
				'heading'	=> 'Overview Title',
				'type'		=> 'textfield',
				'param_name'=> 'overview_title',
				'value'	=> 'Overview'
			),
			array(
				'heading'	=> 'Overview Content',
				'type'		=> 'textarea_html',
				'param_name'=> 'content',
				'value'	=> '
									<li><a href="#" data-scroll-nav="4"><i class="fa fa-arrow-right" aria-hidden="true"></i>Why AI?</a></li>
									<li><a href="#" data-scroll-nav="5"><i class="fa fa-arrow-right" aria-hidden="true"></i>What is AI?</a></li>
									<li><a href="#" data-scroll-nav="6"><i class="fa fa-arrow-right" aria-hidden="true"></i>How do AI, Machine Learning and Deep Learning relate?</a></li>
									<li><a href="#" data-scroll-nav="7"><i class="fa fa-arrow-right" aria-hidden="true"></i>What is Machine Learning?</a></li>
									<li><a href="#" data-scroll-nav="8"><i class="fa fa-arrow-right" aria-hidden="true"></i>What is Deep Learning?</a></li>
									<li><a href="#" data-scroll-nav="9"><i class="fa fa-arrow-right" aria-hidden="true"></i>From AI to Deep Learning.</a></li>
									<li><a href="#" data-scroll-nav="10"><i class="fa fa-arrow-right" aria-hidden="true"></i>Hw does NLP relate to AI?</a></li>
									<li><a href="#" data-scroll-nav="11"><i class="fa fa-arrow-right" aria-hidden="true"></i>Why we believe AI is the future.</a></li>
									<li><a href="#" data-scroll-nav="12"><i class="fa fa-arrow-right" aria-hidden="true"></i>Real world examples.</a></li>'
			),
		)
	));
}