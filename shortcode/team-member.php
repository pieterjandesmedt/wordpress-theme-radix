<?php 
// team_member Shortocode
add_shortcode('team_member','team_member');
function team_member($atts,$content){

	$team_member = shortcode_atts(array(
		'work_title' => 'Want to work with us?',
		'show_button' => 'Show me the job openings',
		'show_button_url' => '#',

	),$atts); 
	extract($team_member);
	
	ob_start();
	
?>
	<!--=======================================================================================
									Start team area
	========================================================================================-->
	<div class="team-member-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="team-member-item">
						<div class="row">
						<?php 
							$team = new WP_Query(array(
								'post_type'   => 'team',
								'order'       => ASC,
								'posts_per_page' => 7
							));
							while($team->have_posts()) : $team->the_post();
						?>
							<div class="col-md-4">
								<div class="team-single-item">
									<div class="team-member-img">
										<img src="<?php echo get_post_meta(get_the_ID(),'team_image',true);?>" alt="team">
										<div class="overlay">
											<div class="overlay_content">
												<ul>
													<li><a href="<?php echo get_post_meta(get_the_ID(),'email_link',true);?>"><i class="fa <?php echo get_post_meta(get_the_ID(),'email_icon',true);?>" aria-hidden="true"></i></a></li>
													<li><a href="<?php echo get_post_meta(get_the_ID(),'linkedin_link',true);?>"><i class="fa <?php echo get_post_meta(get_the_ID(),'linkedin_icon',true);?>" aria-hidden="true"></i></a></li>
													<li><a href="<?php echo get_post_meta(get_the_ID(),'twitter_link',true);?>"><i class="fa <?php echo get_post_meta(get_the_ID(),'twitter_icon',true);?>" aria-hidden="true"></i></a></li>
													<li><a href="<?php echo get_post_meta(get_the_ID(),'github_link',true);?>"><i class="fa <?php echo get_post_meta(get_the_ID(),'github_icon',true);?>" aria-hidden="true"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<h3><?php the_title();?></h3>
									<h4><?php echo get_post_meta(get_the_ID(),'designation',true);?></h4>
									<p><?php echo get_post_meta(get_the_ID(),'team_desc',true);?></p>
									<a href="<?php echo get_post_meta(get_the_ID(),'read_button_url',true);?>"><?php echo get_post_meta(get_the_ID(),'read_button',true);?><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
								</div>
							</div>
							<?php endwhile;?>
							<?php wp_reset_postdata();?>
							
							
							
							<div class="col-md-8">
								<div class="work-area">
									<div class="work-content">
										<h2><?php echo $work_title;?></h2>
										<p><?php echo $content;?></p>
										<a href="<?php echo $show_button_url;?>"><?php echo $show_button;?></a>
									</div>
								</div>
							</div>
							
							
							<?php 
							$team = new WP_Query(array(
								'post_type'   => 'team',
								'order'       => ASC,
								'offset' => 7,  
							));
							while($team->have_posts()) : $team->the_post();
						?>
							<div class="col-md-4">
								<div class="team-single-item">
									<div class="team-member-img">
										<img src="<?php echo get_post_meta(get_the_ID(),'team_image',true);?>" alt="team">
										<div class="overlay">
											<div class="overlay_content">
												<ul>
													<li><a href="<?php echo get_post_meta(get_the_ID(),'email_link',true);?>"><i class="fa <?php echo get_post_meta(get_the_ID(),'email_icon',true);?>" aria-hidden="true"></i></a></li>
													<li><a href="<?php echo get_post_meta(get_the_ID(),'linkedin_link',true);?>"><i class="fa <?php echo get_post_meta(get_the_ID(),'linkedin_icon',true);?>" aria-hidden="true"></i></a></li>
													<li><a href="<?php echo get_post_meta(get_the_ID(),'twitter_link',true);?>"><i class="fa <?php echo get_post_meta(get_the_ID(),'twitter_icon',true);?>" aria-hidden="true"></i></a></li>
													<li><a href="<?php echo get_post_meta(get_the_ID(),'github_link',true);?>"><i class="fa <?php echo get_post_meta(get_the_ID(),'github_icon',true);?>" aria-hidden="true"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<h3><?php the_title();?></h3>
									<h4><?php echo get_post_meta(get_the_ID(),'designation',true);?></h4>
									<p><?php echo get_post_meta(get_the_ID(),'team_desc',true);?></p>
									<a href="<?php echo get_post_meta(get_the_ID(),'read_button_url',true);?>"><?php echo get_post_meta(get_the_ID(),'read_button',true);?><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
								</div>
							</div>
							<?php endwhile;?>
							<?php wp_reset_postdata();?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End team area
	========================================================================================-->
	
	<?php
	$output = ob_get_clean();
	return $output;
	}
	if(function_exists('vc_map')){
		vc_map(array(
			'name'   => 'Tean Member',
			'base'  => 'team_member',
			'category'=> 'Coder Item Elements',
			'params'  => array(
				array(
					'heading'   => 'Work Title',
					'type'      => 'textfield',
					'param_name'=> 'work_title',
					'value'     => 'Want to work with us?'
				),
				array(
					'heading'   => 'Work Description',
					'type'      => 'textarea_html',
					'param_name'=> 'content',
					'value'     => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.'
				),
				array(
					'heading'   => 'Button Text',
					'type'      => 'textfield',
					'param_name'=> 'show_button',
					'value'     => 'Show me the job openings'
				),
				array(
					'heading'   => 'Work Title',
					'type'      => 'textfield',
					'param_name'=> 'show_button_url',
					'value'     => '#'
				),
			),
		));
	}