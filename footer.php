<?php
	global $radix;
?>

	<!--=======================================================================================
									Start footer area
	========================================================================================-->
	<div class="footer-area">
		<div class="container">
			<div class="footer-top-area">
				<div class="row">
					<div class="col-lg-4">
						<div class="footer-left-area">
							<?php dynamic_sidebar('footer_widget_1')?>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="footer-right-area">
							<div class="row">
								<div class="col-md-3 col-6">
									<?php dynamic_sidebar('footer_widget_2')?>
								</div>
								<div class="col-md-3 col-6">
									<?php dynamic_sidebar('footer_widget_3')?>
								</div>
								<div class="col-md-3 col-6">
									<?php dynamic_sidebar('footer_widget_4')?>
								</div>
								<div class="col-md-3 col-6">
									<?php dynamic_sidebar('footer_widget_5')?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom-area">
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<div class="copyright-area">
								<p><?php echo $radix['copyright_text'];?></p>
							</div>
						</div>
						<div class="col-md-5">
							<div class="tearms-area">
								<?php echo $radix['privacy_term_text'];?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End footer area
	========================================================================================-->
	</div>


	<?php wp_footer();?>
</body>

</html>
