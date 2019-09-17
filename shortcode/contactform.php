<?php
	add_shortcode('contact_form','contact_form');
	function contact_form($atts,$content){
		$contact_form = shortcode_atts(array(
			'help_title' => 'How can we help you?',
			'events_title' => 'Meet us at the following events.',
		
		),$atts);
		
		extract($contact_form);
		ob_start();
	
?>
	<div class="contact-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">
						<div class="col-lg-5">
							<div class="contact-form-area">
								<h3><?php echo $help_title?></h3>
								<?php $cf7 = $content;
									echo do_shortcode($content);
								?>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="events-area">
								<h3><?php echo $events_title;?></h3>
								<div class="events-item">
									<?php 
										$events = new WP_Query(array(
											'post_type'   => 'events',
											'order'        => ASC,
											'posts_per_page'=> 5,
										));
										while($events->have_posts()) : $events->the_post();
									?>
									<div class="evets-single-item">
										<div class="events-date">
											<?php $year = get_the_terms(get_the_id(),'year');
											?>
											<p><?php echo get_the_date('d.m').'.'.$year[0]->slug;?></p>
										</div>
										<div class="events-content">
											<a href="#"><?php the_title();?></a>
										</div>
										<div class="events-name">
											<p><?php echo get_post_meta(get_the_ID(),'state_text',true);?></p>
										</div>
									</div>
									<?php endwhile;?>
									<?php wp_reset_postdata();?>
								</div>
							</div>
							
							<div class="past-events-area">
								<div class="tabs" id="tabs">
									<div class="past-events">
										<div class="past-events-title">
											<h2>Past events.</h2>
										</div>
										<div class="tabs-item">
											<ul>
												
												<?php 
												$allFilter = get_terms('year');
												foreach ($allFilter as $filter_name) :?>
												  <li  class="filter" data-filter=".<?php echo $filter_name->slug;?>"><a href="#<?php echo $filter_name->slug;?>"><?php echo $filter_name->name;?></a></li>
												<?php endforeach;?>
											</ul>
										</div>
									</div>
									
									<!-- past-events -->
									<?php 
									$allFilter = get_terms('year');
									foreach ($allFilter as $filter_name) :?>
									
									<div class="past_events_item events-item" id="<?php echo $filter_name->slug ?>">
										<?php 
											$events = new WP_Query(array(
												'post_type'   => 'events',
												'taxonomy'    => 'year',
												'term'        => $filter_name->slug,
												'order'       => ASC,
											));
											while($events->have_posts()) : $events->the_post(); 
										?>

										<div class="evets-single-item">
											<div class="events-date">
												<p><?php echo get_the_date('d.m').'.'.$filter_name->slug;?></p>
											</div>
											<div class="events-content">
												<a href="#"><?php the_title();?></a>
											</div>
											<div class="events-name">
												<p><?php echo get_post_meta(get_the_ID(),'state_text',true);?></p>
											</div>
										</div>
										<?php endwhile;?>
										<?php wp_reset_postdata();?>
									</div>
									<?php endforeach;?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	$output = ob_get_clean();
	return $output;
	
	}
	
	if(function_exists('vc_map')){
	vc_map(array(
		'name'   => 'Contact Form And Events',
		'base'   => 'contact_form',
		'category'=> 'Coder Item Elements',
		'params'  => array(
			array(
				'heading'   => 'Help Title',
				'type'      => 'textfield',
				'param_name'=> 'help_title',
				'value'     => 'How can we help you?'
			),
			array(
				'heading'   => 'Contact Form Shortcode',
				'type'      => 'textarea_html',
				'param_name'=> 'content',
			),
			array(
				'heading'   => 'Events Title',
				'type'      => 'textfield',
				'param_name'=> 'events_title',
				'value'     => 'Meet us at the following events.'
			),
		)
	));
}