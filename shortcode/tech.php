<?php
// tech Shortocode
add_shortcode('tech','tech');
function tech($atts,$content){

	$tech = shortcode_atts(array(
		'stack_title' => 'Our tech stack',
		'stack_desc' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
		'api_text' => 'API stack',
		'deployment_text' => 'Deployment stack',
		'artificial_text' => 'Artificial intelligence stack',
		'prototyping_text' => 'Prototyping stack',

	),$atts);
	extract($tech);

	ob_start();

?>
	<!--=======================================================================================
									Start tech area
	========================================================================================-->
	<div class="tech-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-7 offset-xl-3">
					<div class="row">
						<div class="col-xl-12">
							<div class="tech-title">
								<h2><?php echo $stack_title;?></h2>
								<p><?php echo $stack_desc;?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-10 offset-xl-1">
					<div class="row tech-item">
						<div class="col-lg-3">
							<div class="tech-single-item">
								<h2><?php echo $api_text;?></h2>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="tech-icons-area">
								<ul>
									<?php
										$api = new WP_Query(array(
											'post_type'   => 'tech',
											'taxonomy'    => 'stack',
											'term'        => 'API',
											'order'       => ASC,
										));
										while($api->have_posts()) : $api->the_post();
									?>
									<li><a href="#"><img src="<?php echo get_post_meta(get_the_ID(),'stack_image',true)?>" alt="image"></a></li>
									<?php endwhile;?>
									<?php wp_reset_postdata();?>
								</ul>
							</div>
						</div>
					</div>

					<div class="row tech-item">
						<div class="col-lg-3">
							<div class="tech-single-item">
								<h2><?php echo $deployment_text;?></h2>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="tech-icons-area">
								<ul>
									<?php
										$api = new WP_Query(array(
											'post_type'   => 'tech',
											'taxonomy'    => 'stack',
											'term'        => 'Deployment',
											'order'       => ASC,
										));
										while($api->have_posts()) : $api->the_post();
									?>
									<li><a href="#"><img src="<?php echo get_post_meta(get_the_ID(),'stack_image',true)?>" alt="image"></a></li>
									<?php endwhile;?>
									<?php wp_reset_postdata();?>
								</ul>
							</div>
						</div>
					</div>

					<div class="row tech-item">
						<div class="col-lg-3">
							<div class="tech-single-item">
								<h2><?php echo $artificial_text;?></h2>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="tech-icons-area">
								<ul>
									<?php
										$api = new WP_Query(array(
											'post_type'   => 'tech',
											'taxonomy'    => 'stack',
											'term'        => 'Artificial',
											'order'       => ASC,
										));
										while($api->have_posts()) : $api->the_post();
									?>
									<li><a href="#"><img src="<?php echo get_post_meta(get_the_ID(),'stack_image',true)?>" alt="image"></a></li>
									<?php endwhile;?>
									<?php wp_reset_postdata();?>
								</ul>
							</div>
						</div>
					</div>

					<div class="row tech-item">
						<div class="col-lg-3">
							<div class="tech-single-item">
								<h2><?php echo $prototyping_text;?></h2>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="tech-icons-area">
								<ul>
									<?php
										$api = new WP_Query(array(
											'post_type'   => 'tech',
											'taxonomy'    => 'stack',
											'term'        => 'Prototyping ',
											'order'       => ASC,
										));
										while($api->have_posts()) : $api->the_post();
									?>
									<li><a href="#"><img src="<?php echo get_post_meta(get_the_ID(),'stack_image',true)?>" alt="image"></a></li>
									<?php endwhile;?>
									<?php wp_reset_postdata();?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End tech area
	========================================================================================-->

<?php
	$output = ob_get_clean();
	return $output;
	}
	if(function_exists('vc_map')){
		vc_map(array(
			'name'   => 'Tech Stack',
			'base'  => 'tech',
			'category'=> 'Coder Item Elements',
			'params'  => array(
				array(
					'heading'   => 'Tech Title',
					'type'      => 'textfield',
					'param_name'=> 'stack_title',
					'value'     => 'Our tech stack'
				),
				array(
					'heading'   => 'Tech Description',
					'type'      => 'textarea_html',
					'param_name'=> 'stack_desc',
					'value'     => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'
				),
				array(
					'heading'   => 'API Text',
					'type'      => 'textfield',
					'param_name'=> 'api_text',
					'value'     => 'API stack'
				),
				array(
					'heading'   => 'Deployment Text',
					'type'      => 'textfield',
					'param_name'=> 'deployment_text',
					'value'     => 'Deployment stack'
				),
				array(
					'heading'   => 'Artificial Text',
					'type'      => 'textfield',
					'param_name'=> 'artificial_text',
					'value'     => 'Artificial intelligence stack'
				),
				array(
					'heading'   => 'Prototyping Text',
					'type'      => 'textfield',
					'param_name'=> 'prototyping_text',
					'value'     => 'Prototyping stack'
				),
			),
		));
	}
