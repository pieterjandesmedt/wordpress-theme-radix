<?php
	add_shortcode('Address','Address');
	function Address($atts,$content){
		$Address = shortcode_atts(array(
		
		),$atts);
		
		extract($Address);
		ob_start();
	
?>
	<!--=======================================================================================
									Start contact address area
	========================================================================================-->
	<div class="contact-address-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<?php echo $content;?>
				</div>
			</div>
		</div>
	</div>
	<!--=======================================================================================
									End contact address area
	========================================================================================-->
<?php
	$output = ob_get_clean();
	return $output;
	
	}
	
	if(function_exists('vc_map')){
	vc_map(array(
		'name'   => 'Contact Address',
		'base'   => 'Address',
		'category'=> 'Coder Item Elements',
		'params'  => array(
			array(
				'heading'   => 'Contact Address',
				'type'      => 'textarea_html',
				'param_name'=> 'content',
				'value'     => '<div class="row">
						<div class="col-md-3 col-6">
							<div class="address-single-area">
								<h3>Brussels office</h3>
								<ul>
									<li>BeCentral</li>
									<li>Cantersteen 10</li>
									<li>1000 Brussel</li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-3 col-6">
							<div class="address-single-area">
								<h3>Ghent office</h3>
								<ul>
									<li>Spaces Gent Zuiderpoort</li>
									<li>Gaston Crommenlaan 8</li>
									<li>9050 Gent</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-6">
							<div class="address-single-area">
								<h3>Contact</h3>
								<ul>
									<li><a href="tel:+32 9 253 84 31">+32 9 253 84 31</a></li>
									<li><a href="mailto:hello@radix.ai">hello@radix.ai</a></li>
									<li><a href="mailto:jobs@radix.ai">jobs@radix.ai</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-6">
							<div class="address-single-area">
								<h3></h3>
								<ul>
									<li>VAT BE 0660.746.974</li>
									<li>BNP Paribas Fortis</li>
									<li>IBAN BE28 0019 2136 6673</li>
								</ul>
							</div>
						</div>
					</div>'
			),
		)
	));
	}