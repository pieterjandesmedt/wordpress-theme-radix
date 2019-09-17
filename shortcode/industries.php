<?php
	add_shortcode('industries','industries');
	function industries($atts,$content){
		$industries = shortcode_atts(array(
			'industries_title' => 'Industries.',
		
		),$atts);
		
		extract($industries);
		ob_start();
	
?>
	
	<!--=======================================================================================
									Start industries area
	========================================================================================-->
	<div class="industries-area" data-scroll-index="2">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">
						<div class="col-xl-12">
							<div class="industries-title">
								<h3><?php echo $industries_title;?></h3>
							</div>
						</div>
					</div>
					<div class="row">
						<?php 
							$industries =new WP_Query(array(
								'post_type'   => 'industries',
								'order'       => ASC,
							)); 
							
							while($industries->have_posts()): $industries->the_post();
						?>
						<div class="col-lg-4 col-md-6">
							<div class="industries-single-item">
								<div class="industries-img">
									<img src="<?php echo get_post_meta(get_the_ID(),'industries_image',true);?>">
								</div>
								<p><?php the_title();?></p>
							</div>
						</div>
						<?php endwhile;?>
						<?php wp_reset_postdata();?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End industries area
	========================================================================================-->
	
	<?php
	$output = ob_get_clean();
	return $output;
	
	}
	
	if(function_exists('vc_map')){
	vc_map(array(
		'name'   => 'Industries',
		'base'   => 'industries',
		'category'=> 'Coder Item Elements',
		'params'  => array(
			array(
				'heading'   => 'Industries Title',
				'type'      => 'textfield',
				'param_name'=> 'industries_title',
				'value'     => 'Industries.'
			),
		)
	));
	}