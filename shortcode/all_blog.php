<?php 
// banner Shortocode
add_shortcode('all_blog','all_blog');
function all_blog($atts,$content){

	$all_blog = shortcode_atts(array(
		'read_more' => 'read more',

	),$atts); 
	extract($all_blog);
	ob_start();
?>
	
	<!--=======================================================================================
									Start blog area
	========================================================================================-->
	<div class="all-blog-post blog-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="blog-item">
						<div class="row">
							<div class="col-xl-12">
								<div class="blog-title">
									<h2><?php echo $blog_title; ?></h2>
								</div>
							</div>
						</div>
						<div class="row">
							<?php
								$blog = new WP_Query(array(
									'post_type'    => 'post',
									'posts_per_page' => 4,
									'order'         => ASC,
								));
								
								while($blog->have_posts()) : $blog->the_post();
							?>
							<div class="col-lg-3 col-md-6">
								<div class="all_blog blog-single-item">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
									<div class="blog-content">
										<a href="<?php the_permalink(); ?>"><p><?php the_title();?></p></a>
										<span>By <?php echo get_post_meta(get_the_ID(),'author_name',true)?></span>
										<span>on <?php echo get_the_date(); ?></span>
									</div>
									<a href="<?php echo the_permalink();?>" class="read-more">read more</a>
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
									End blog area
	========================================================================================-->
		<?php 
		$output= ob_get_clean();
		return $output;
	}
	if(function_exists('vc_map')){
	vc_map(array(
		'name'	=> 'All Blog',
		'base'	=> 'all_blog',
		'category'=> 'Coder Item Elements',
		'params' => array(array(
				'heading'	=> 'Read More Button',
				'type'		=> 'textfield',
				'param_name'=> 'blog_text_url',
				'value'	=> 'read_more'
			),
		)
	));
}