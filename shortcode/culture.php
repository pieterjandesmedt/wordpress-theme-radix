<?php
// culture Shortocode
add_shortcode('culture','culture_function');
function culture_function($atts,$content){

	$culture = shortcode_atts(array(
		'culture_title' => 'Culture is on #1',
		'culture_content' => 	'<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, beatae vitae dicta.</p>
									<ul>
										<li><span>-</span> Focus on people</li>
										<li><span>-</span> Open and honest interaction</li>
										<li><span>-</span> Laudantium totam rem aperiam</li>
									</ul>',
		'culture_button' => 'our way of life',
		'culture_button_url' => '#',
		'culture_img' => get_template_directory_uri().'/assets/images/single_img/single_img1.png',

		'whats_me_title'	=>"AI, what�s in it for me?",
		'whats_me_content'	=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.',

		'whats_me_button'	=>'Discover more and get inspired',
		'whats_me_button_url'	=>'#',
		'whats_me_img'   => get_template_directory_uri().'/assets/images/single_img/single_img2.png',
		'video_popup'   => 'http://www.youtube.com/watch?v=0O2aH4XLbto',

	),$atts);
	extract($culture);

	$culture_img = wp_get_attachment_image_src($culture_img,'full');
	$whats_me_img = wp_get_attachment_image_src($whats_me_img,'full');

	ob_start();
?>
<!--=======================================================================================
									Start culture area
	========================================================================================-->
	<div class="culture-area" data-scroll-index="1">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="culture-item">
						<div class="row">
							<div class="col-md-6 img-item1">
								<div class="culture-img">
									<img src="<?php echo $culture_img[0]?>" alt="single_img">
								</div>
								<?php if ($video_popup): ?>
								<div class="magnific-popup">
									<a class="popup" href="<?php echo $video_popup?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icon/play.png"></a>
									<p>play</p>
								</div>
								<?php endif ?>
							</div>
							<div class="col-md-6 culture_item2">
								<div class="culture-content">
									<h3><?php echo $culture_title; ?></h3>
									<?php echo $culture_content; ?>
									<a href="<?php echo $culture_button_url; ?>"><?php echo $culture_button; ?><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="culture-item">
						<div class="row">
							<div class="col-md-6">
								<div class="discover-content culture-content">
									<h3><?php echo $whats_me_title; ?></h3>
									<p><?php echo $whats_me_content; ?></p>
									<a href="<?php echo $whats_me_button_url; ?>"><?php echo $whats_me_button; ?><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
								</div>
							</div>

							<div class="col-md-6 img-item2">
								<div class="culture-img">
									<img src="<?php echo $whats_me_img[0]?>" alt="single_img">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End culture area
	========================================================================================-->
	<?php
		$output= ob_get_clean();
		return $output;
	}

		if(function_exists('vc_map')){
	vc_map(array(
		'name'	=> 'Culture',
		'base'	=> 'culture',
		'category'=> 'Coder Item Elements',
		'params' => array(
			array(
				'heading'	=> 'Culture Image',
				'type'		=> 'attach_image',
				'param_name'=> 'culture_img'
			),
			array(
				'heading'	=> 'Culture Title',
				'type'		=> 'textfield',
				'param_name'=> 'culture_title',
				'value'	=> 'Culture is on #1'
			),
			array(
				'heading'	=> 'Culture Description',
				'type'		=> 'textarea_html',
				'param_name'=> 'culture_content',
				'value'	=> '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, beatae vitae dicta.</p>
									<ul>
										<li><span>-</span> Focus on people</li>
										<li><span>-</span> Open and honest interaction</li>
										<li><span>-</span> Laudantium totam rem aperiam</li>
									</ul>.'
			),
			array(
				'heading'	=> 'Culture Button',
				'type'		=> 'textfield',
				'param_name'=> 'culture_button',
				'value'	=> 'our way of life'
			),
			array(
				'heading'	=> 'Culture Button URL',
				'type'		=> 'textfield',
				'param_name'=> 'Culture_button_url',
				'value'	=> '#'
			),

			array(
				'heading'	=> 'Discover Image',
				'type'		=> 'attach_image',
				'param_name'=> 'whats_me_img'
			),
			array(
				'heading'	=> 'Discover Title',
				'type'		=> 'textfield',
				'param_name'=> 'whats_me_title',
				'value'	=> 'AI, what�s in it for me?'
			),
			array(
				'heading'	=> 'Discover Description',
				'type'		=> 'textarea',
				'param_name'=> 'whats_me_content',
				'value'	=> 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.'
			),
			array(
				'heading'	=> 'Discover Button',
				'type'		=> 'textfield',
				'param_name'=> 'whats_me_button',
				'value'	=> 'Discover more and get inspired'
			),
			array(
				'heading'	=> 'Discover Button URL',
				'type'		=> 'textfield',
				'param_name'=> 'whats_me_button_url',
				'value'	=> '#'
			),

			array(
				'heading'	=> 'Video Popup URL',
				'type'		=> 'textfield',
				'param_name'=> 'video_popup',
				'value'	=> 'http://www.youtube.com/watch?v=0O2aH4XLbto'
			),

		)
	));
}
