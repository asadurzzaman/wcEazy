	<?php
	/**
	 * Template Name: Home Page
	 */
	?>
	<?php
	get_header();

	$home_top_sub_title      = get_post_meta(get_the_ID(), "wcfusion_home_top_sub_title", true);
	$home_top_title          = get_post_meta(get_the_ID(), "wcfusion_home_top_title", true);
	$home_button_text        = get_post_meta(get_the_ID(), "wcfusion_home_top_button_text", true);
	$home_button_url         = get_post_meta(get_the_ID(), "wcfusion_home_top_button_url", true);
	$home_banner_image       = get_post_meta(get_the_ID(), "wcfusion_home_top_image", true);
	$home_image_bottom_text  = get_post_meta(get_the_ID(), "wcfusion_home_top_image_bottom_text", true);
	$home_page_sections      = get_post_meta(get_the_ID(), "wf_homepage", true);
	$testimoial_name   		 = get_post_meta(get_the_ID(), "wf_testimonial_name", true);
	$testimoial_designation  = get_post_meta(get_the_ID(), "wf_testimonial_designation", true);
	$testimoial_company_name = get_post_meta(get_the_ID(), "wf_testimonial_company_name", true);
	$testimoial_image        = get_post_meta(get_the_ID(), "wf_testimonial_image", true);
	$enable_testimonial      = get_post_meta(get_the_ID(), "wf_testimonial_enable_testimonial", true);
	$testimonial_content   	 = get_post_meta(get_the_ID(), "wf_testimonial_content", true);
?>

	<!-- Banner Area  -->
	<section class="wfn-banner-area">
		<div class="container">
			<div class="row">
				<div class="wfn-banner-full">
					<div class="wfn-banner-top text-center mt-5">
						<h4 data-aos-duration="1000" data-aos="fade-right"> <?php echo $home_top_sub_title; ?> </h4>
						<h1 data-aos-duration="1000" data-aos="fade-left"><?php echo $home_top_title; ?></h1>
						<div class="banner-btn">
							<a href="<?php echo $home_button_url; ?>" class="btn banner-btn-custom"><?php echo $home_button_text; ?> </a>
						</div>
					</div>
					<div class="wfn-banner-mid text-center" data-aos-duration="1000" data-aos="fade-right">
						<img class="img-fluid" src="<?php echo $home_banner_image; ?>" alt="banner woo imgage">
						<h4><?php echo $home_image_bottom_text; ?></h4>
					</div>
					<div class="wfn-banner-bottom ms-auto">
						<h2>Tired of installing dozens of plugins? We got you covered.</h2>
						<div class="row">
							<div class="col-md-4 col-lg-4" data-aos-duration="1000" data-aos="fade-right">
								<div class="covered-single text-center">
									<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/store-img.png" alt="Store Images">
									<h3>Uplifts Your Store</h3>
								</div>
							</div>
							<div class="col-md-4 col-lg-4" data-aos-duration="1000" data-aos="fade-down">
								<div class="covered-single text-center">
									<img class="img-fluid cost-img-shadow" src="<?php echo get_template_directory_uri(); ?>/assets/images/cost-img.png" alt="Store Images">
									<h3>80% Less Cost</h3>
								</div>
							</div>
							<div class="col-md-4 col-lg-4" data-aos-duration="1000" data-aos="fade-left">
								<div class="covered-single text-center">
									<img class="img-fluid use-img-shadow" src="<?php echo get_template_directory_uri(); ?>/assets/images/use-img.png" alt="Store Images">
									<h3>Easy to Use</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<?php

	if (!empty($home_page_sections)) {
		$count_section = 0;
		foreach ($home_page_sections as $sections_item) {
			$count_section++;
	?>

			<?php if ($count_section % 2 == 0) { ?>
				<!-- Cost Effect Section -->
				<section class="cost-effect">
					<div class="container">
						<div class="easy-to-setup easy-setup-mb easy-setup-mt">
							<div class="row">
								<div class="col-md-6" data-aos-duration="1000" data-aos="fade-right">
									<div class="easy-to-setup-right cost-effect-left">
										<h3 class="cost-heading-mt"><?php echo $sections_item['wf_title']; ?></h3>
										<p><?php echo $sections_item['wf_content']; ?></p>
									</div>
								</div>
								<div class="col-md-6" data-aos-duration="1000" data-aos="fade-left">
									<div class="easy-to-setup-left easy-mt easy-mb">
										<img class="img-fluid" src="<?php echo $sections_item['wf_image']; ?>" alt="Image">
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<?php 
				 if( 'on' == $enable_testimonial ){
					if ( $count_section  == 2 ) {   ?>
					<div class="testimonial-area" data-aos-duration="1000" data-aos="fade-up">
						<div class="container">
							<div class="testimonial">
								<div class="row">
									<div class="col-md-8">
										<div class="testimonial-quote">
											<p>
												<?php  echo $testimonial_content;?>
											</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="testimonila-right text-center">
											<div class="testimonial-qoute-cursor">
												<div class="testimonial-quote__photo">
													<img class="img-fluid" src="<?php echo $testimoial_image; ?>" alt="Shahin Shalehiin Image">
												</div>
											</div>
											<p><span><?php  echo $testimoial_name; ?></span> <?php echo $testimoial_designation; ?></p>
											<p class="wpcomrz "><?php echo $testimoial_company_name; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php  } } ?>

			<?php } else { ?>
				<!-- Why WooFusion Section -->
				<section class="why-woofusion">
					<div class="container">
						<?php if ($count_section  == 1) { ?>
							<div class="woofusion-header text-center">
								<h2>Why Use wcEazy?</h2>
							</div>
						<?php }  ?>
						<div class="row d-flex woofusion-mt">
							<div class="col-md-6 col-lg-6" data-aos-duration="1000" data-aos="fade-right">
								<div class="easy-to-setup-left animate__animated animate__fadeInLeft">
									<img class="img-fluid" src="<?php echo $sections_item['wf_image']; ?>" alt="Image">
								</div>
							</div>
							<div class="col-md-6 col-lg-6" data-aos-duration="1000" data-aos="fade-left">
								<div class="easy-to-setup-right animate__animated animate__fadeInRight">
									<h3><?php echo $sections_item['wf_title']; ?></h3>
									<p><?php echo $sections_item['wf_content']; ?></p>
								</div>
							</div>
						</div>
					</div>
				</section>

				
				<!-- Testimonial Section -->
				<?php 
				if( 'on' == $enable_testimonial ){
				  if ($count_section  == 1) {   ?>
					<div class="testimonial-area" data-aos="fade-up">
						<div class="container">
							<div class="testimonial">
								<div class="row">
									<div class="col-md-8">
										<div class="testimonial-quote">
										
											<p>
												<?php  echo $testimonial_content;?>
											</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="testimonila-right text-center">
											<div class="testimonial-qoute-cursor">
												<div class="testimonial-quote__photo">
													<img class="img-fluid" src="<?php echo $testimoial_image; ?>" alt="Shahin Shalehiin Image">
												</div>
											</div>
											<p><span><?php echo $testimoial_name; ?></span> <?php echo $testimoial_designation; ?></p>
											<p class="wpcomrz "><?php echo  $testimoial_company_name; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php  } } ?>


	<?php
			}
		}
	}
?>

	<!-- Modules Section  -->
	<section class="modules">
		<div class="container">
			<div class="woofusion-header modules-header text-center">
				<h2>wcEazy Modules</h2>
			</div>
			<div class="all-modules">
				<div class="row">

					<?php
					$args  = [
						'posts_per_page'  => 8,
						'post_type'       => 'modules',
						'order'           => 'ASC',
						'paged' =>  get_query_var('paged') ? get_query_var('paged') : 1
					];

					$query = new \WP_Query($args);

					if ($query->have_posts()) :
						while ($query->have_posts()) :
							$query->the_post();
					?>

							<div class="col-lg-3 col-md-6" data-aos-duration="1000" data-aos="fade-right">
								<div class="single-module">
									<div class="module-small-thum2">
										<?php
										if (has_post_thumbnail()) {
											the_post_thumbnail("module-small");
										}
										?>
									</div>

									<div class="module-text">
										<a href="<?php the_permalink(); ?>">
											<h4><?php the_title(); ?></h4>
										</a>
									</div>
								</div>
							</div>

					<?php
						endwhile;
					endif;
					wp_reset_query();
					?>
				</div>
				<div class="module-btn text-center">
					<a href="<?php echo site_url(); ?>/all-modules" class="woofusion-load-all-modules  btn module-btn-custom banner-btn-custom">View All Modules</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Improove Section -->
	<section class="improove-area">
		<div class="container">
			<div class="improove-full">
				<h2 class="text-center">Improove the way you play</h2>
				<div class="improove">
					<div class="row">
						<div class="col-md-5" data-aos-duration="1000" data-aos="fade-right">
							<div class="improove-img">
								<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/improove1.png" alt="Improove Image">
								<h5 class="improve-title">Plugins you play daily</h5>
							</div>
						</div>
						<div class="col-md-2 improove-vs">
							<div class="improove-mid text-center">
								<h4>vs</h4>
							</div>
						</div>
						<div class="col-md-5" data-aos-duration="1000" data-aos="fade-left">
							<div class="improove-img">
								<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/improove2.png" alt="Improove Image">
								<h5 class="improve-title2">wcEazy</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="supercharge" data-aos-duration="1000" data-aos="fade-right">
					<div class="supercharge-quote">
						<h2>
							Supercharge your WooCommerce store today
						</h2>
					</div>
					<div class="supercharge-btn text-center">
						<a href="https://wceazy.com/pricing/" class="btn module-btn-custom banner-btn-custom">Get Started Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php
	get_footer();
	?>