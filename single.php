<?php get_header();?>
	<div class="single_page">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<?php
						while(have_posts()) : the_post();
					?>
					<div class="author_area">
						<p><i class="fa fa-user" aria-hidden="true"></i><a href="#"><?php the_author();?></a></p>
						<p><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date();?></p>
					</div>
					<div class="single_item">
						<h3><?php the_title();?></h3>
						<p><?php the_content();?></p>
					</div>
					<?php endwhile;?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer();?>
