<?php get_header(); ?>
<style>
	.blog-single-item{
		margin-bottom: 20px;
	}
	.blog-item .col-lg-3{
		margin-bottom: 30px;
	}
	.blog-title h2{
		padding-bottom:0px;
	}
	.page-numbers {
		display: inline-block;
		padding: 5px 15px;
		color: #0066FF;
		border: 1px solid #0066FF;
		font-size: 14px;
		text-decoration: none !important;
		margin: 0 5px;
	}
	.page-numbers.current{
		background: #0066FF;
		color: #FFF;
	}


</style>
	<div class="homebar-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="homebar-content">
						<a href="<?php echo bloginfo('home');?>">Home</a>
						<a href="<?php the_permalink();?>"><?php wp_title(); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="blog-page_title ai-delivered-area" style="padding-bottom:0;">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="ai-delivered-content">
						<h2>Blog</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
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
							<?php while(have_posts()) : the_post();
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
						<div class="row justify-content-center">
							<div class="pagination">
								<?php 
									the_posts_pagination( array(
										'mid_size'  => 0,
										'prev_text' => 'Prev',
										'next_text' => 'Next',
										 'screen_reader_text' => __( '&nbsp;' )
									) );
							 	?>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



</div>
<?php get_footer(); ?>