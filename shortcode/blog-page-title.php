<?php
	add_shortcode('blog_page_title','blog_page_title');
	function blog_page_title($atts,$content){
		$blog_page_title = shortcode_atts(array(
			'blog_page_title' => 'Blog',
			'blog_page_description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor',
		
		),$atts);
		
		extract($blog_page_title);
		ob_start();
	
?>


	<!--=======================================================================================
									Start ai delivered area
	========================================================================================-->
	<div class="blog-page_title ai-delivered-area" style="padding-bottom:0;">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="ai-delivered-content">
						<h2><?php echo $blog_page_title;?></h2>
						<p><?php echo $blog_page_description;?></p>
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
		'name'   => 'Blog Page Title',
		'base'   => 'blog_page_title',
		'category'=> 'Coder Item Elements',
		'params'  => array(
			array(
				'heading'   => 'Title',
				'type'      => 'textfield',
				'param_name'=> 'blog_page_title',
				'value'     => 'Blog.'
			),
			array(
				'heading'   => 'Description',
				'type'      => 'textarea',
				'param_name'=> 'ai_description',
				'value'     => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor'
			),
		)
	));
	}