<?php
// blog Shortocode
add_shortcode('blog','blog_function');
function blog_function($atts,$content){

	$blog = shortcode_atts(array(
		'blog_title' => 'Our latest thinking',
		'blog_link_text' => "i�m interested in all posts",
		'blog_text_url' => '#',

	),$atts);
	extract($blog);
	ob_start();
?>

	<!--=======================================================================================
									Start blog area
	========================================================================================-->
	<div class="blog-area">
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
									'order'         => DESC,
								));

								while($blog->have_posts()) : $blog->the_post();
							?>
							<div class="col-lg-3 col-md-6">
								<div class="blog-single-item">
									<?php
									$medium_url = get_post_meta(get_the_ID(),'medium_url',true);
									if ($medium_url): ?>
									<a href="<?php echo $medium_url ?>"><?php the_post_thumbnail();?></a>
									<?php else: ?>
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
									<?php endif ?>

									<div class="blog-content">
										<?php
										$medium_url = get_post_meta(get_the_ID(),'medium_url',true);
										if ($medium_url): ?>
										<a href="<?php echo $medium_url ?>"><?php the_title();?></a>
										<?php else: ?>
										<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
										<?php endif ?>
										<span>By <?php echo get_post_meta(get_the_ID(),'author_name',true)?></span>
										<span>on <?php echo get_the_date(); ?></span>
									</div>
								</div>
							</div>
							<?php endwhile;?>
							<?php wp_reset_postdata();?>

							<div class="col-xl-12">
								<div class="blog-button">
									<a href="<?php echo $blog_text_url; ?>"><?php echo $blog_link_text; ?><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
								</div>
							</div>
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
		'name'	=> 'Blog',
		'base'	=> 'blog',
		'category'=> 'Coder Item Elements',
		'params' => array(
			array(
				'heading'	=> 'Blog Title',
				'type'		=> 'textfield',
				'param_name'=> 'blog_title',
				'value'	=> 'Our latest thinking'
			),
			array(
				'heading'	=> 'Blog Button',
				'type'		=> 'textfield',
				'param_name'=> 'blog_link_text',
				'value'	=> 'i�m interested in all posts'
			),	array(
				'heading'	=> 'Blog Button url',
				'type'		=> 'textfield',
				'param_name'=> 'blog_text_url',
				'value'	=> '#'
			),
		)
	));
}
