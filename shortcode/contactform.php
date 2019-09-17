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
											<p><?php echo get_the_date();?></p>
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
												<li><a href="#tabs1">2018</a></li>
												<li><a href="#tabs2">2017</a></li>
												<li><a href="#tabs3">2016</a></li>
											</ul>
										</div>
									</div>
									
									<!-- past-events -->
									<div class="past_events_item events-item" id="tabs1">
										<div class="evets-single-item">
											<div class="events-date">
												<p>19.09.2018</p>
											</div>
											<div class="events-content">
												<a href="#">This is the name of the event</a>
											</div>
											<div class="events-name">
												<p>Ghent</p>
											</div>
										</div>
										<div class="evets-single-item">
											<div class="events-date">
												<p>19.09.2017</p>
											</div>
											<div class="events-content">
												<a href="#">This is the name of the event</a>
											</div>
											<div class="events-name">
												<p>Brussels</p>
											</div>
										</div>
										<div class="evets-single-item">
											<div class="events-date">
												<p>19.09.2017</p>
											</div>
											<div class="events-content">
												<a href="#">This is the name of the event</a>
											</div>
											<div class="events-name">
												<p>Brussels</p>
											</div>
										</div>
										<div class="evets-single-item">
											<div class="events-date">
												<p>19.09.2017</p>
											</div>
											<div class="events-content">
												<a href="#">This is the name of the event</a>
											</div>
											<div class="events-name">
												<p>Brussels</p>
											</div>
										</div>
									</div>
									
									<!-- past-events -->
									<div class="past_events_item events-item" id="tabs2">
										<div class="evets-single-item">
											<div class="events-date">
												<p>19.09.2017</p>
											</div>
											<div class="events-content">
												<a href="#">This is the name of the event</a>
											</div>
											<div class="events-name">
												<p>Ghent</p>
											</div>
										</div>
										<div class="evets-single-item">
											<div class="events-date">
												<p>19.09.2017</p>
											</div>
											<div class="events-content">
												<a href="#">This is the name of the event</a>
											</div>
											<div class="events-name">
												<p>Brussels</p>
											</div>
										</div>
										<div class="evets-single-item">
											<div class="events-date">
												<p>19.09.2017</p>
											</div>
											<div class="events-content">
												<a href="#">This is the name of the event</a>
											</div>
											<div class="events-name">
												<p>Brussels</p>
											</div>
										</div>
										<div class="evets-single-item">
											<div class="events-date">
												<p>19.09.2017</p>
											</div>
											<div class="events-content">
												<a href="#">This is the name of the event</a>
											</div>
											<div class="events-name">
												<p>Brussels</p>
											</div>
										</div>
									</div>
									
									<!-- past-events -->
									<div class="past_events_item events-item" id="tabs3">
										<div class="evets-single-item">
											<div class="events-date">
												<p>19.09.2016</p>
											</div>
											<div class="events-content">
												<a href="#">This is the name of the event</a>
											</div>
											<div class="events-name">
												<p>Ghent</p>
											</div>
										</div>
										<div class="evets-single-item">
											<div class="events-date">
												<p>19.09.2016</p>
											</div>
											<div class="events-content">
												<a href="#">This is the name of the event</a>
											</div>
											<div class="events-name">
												<p>Brussels</p>
											</div>
										</div>
										<div class="evets-single-item">
											<div class="events-date">
												<p>19.09.2016</p>
											</div>
											<div class="events-content">
												<a href="#">This is the name of the event</a>
											</div>
											<div class="events-name">
												<p>Brussels</p>
											</div>
										</div>
										<div class="evets-single-item">
											<div class="events-date">
												<p>19.09.2016</p>
											</div>
											<div class="events-content">
												<a href="#">This is the name of the event</a>
											</div>
											<div class="events-name">
												<p>Brussels</p>
											</div>
										</div>
									</div>
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