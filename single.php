<?php get_header();?>
	<div class="single_page">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<?php
						while(have_posts()) : the_post();
					?>
					<div class="author_area">
						<p><i class="fa fa-user" aria-hidden="true"></i><a href="#"><?php echo get_post_meta(get_the_ID(),'author_name',true)?></a></p>
						<p><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date();?></p>
					</div>
					<div class="single_item">
						<h1><?php the_title();?></h1>
						<p><?php the_content();?></p>
					</div>
					<?php endwhile;?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer();?>
