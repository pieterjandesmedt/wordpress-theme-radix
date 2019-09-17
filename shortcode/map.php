<?php
	add_shortcode('map','map');
	function map($atts,$content){
		$map = shortcode_atts(array(
			'map_iframe'  => '<iframe src="https://www.google.com/maps/d/embed?mid=1I9gstzCE60UqAfhag0rTFiBphgm7Qssj" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
		),$atts);

		extract($map);

		ob_start();



?>
<!--=======================================================================================
									Start map area
	========================================================================================-->
	<div class="map-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="map-iframe">
						<?php echo $map_iframe;?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End map area
	========================================================================================-->
	<?php
	$output = ob_get_clean();
	return $output;
	}
	if(function_exists('vc_map')){
		vc_map(array(
			'name'   => 'Map',
			'base'   => 'map',
			'category'=> 'Coder Item Elements',
			'params' => array(
				array(
					'heading'   => 'Map Iframe',
					'type'      => 'textarea_html',
					'param_name'=> 'map_iframe',
					'value'     => '<iframe src="https://www.google.com/maps/d/embed?mid=1I9gstzCE60UqAfhag0rTFiBphgm7Qssj" frameborder="0" style="border:0;" allowfullscreen=""></iframe>'

				)
			)
		));
	}
