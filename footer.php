<?php
if( !is_page_template( 'special-offer.php' )):
    ?>
	<!-- Footer Section Start -->
	<footer class="footer-area">
		<div class="container">
			<div class="footer">
				<div class="footer-widgets">
					<div class="row">
						<div class="col-md-3">
							<div class="widget-single">
								<div class="footer-logo">
									<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/wceazy.png" alt="Footer Logo">
								</div>

								<?php
									if (has_nav_menu('footer-one')) {
										$nav =  wp_nav_menu(
											array(
												'theme_location'  => 'footer-one',
												'container'       => 'div',
												'container_class' => 'footer-menu',
												'link_before'     => '',
												'link_after'      => '',
												'after'           => '',
												'container_id'    => '',
												'menu_class'      => '',
												'fallback_cb'     => '',
												'menu_id'         => '',
												'depth'           => 4,
											)
										);
									}

								?>

							</div>
						</div>
						<div class="col-md-3">
							<h4>Quick Links</h4>
							    <?php
									if (has_nav_menu('footer-two')) {
										$nav =  wp_nav_menu(
											array(
												'theme_location'  => 'footer-two',
												'container'       => 'div',
												'container_class' => 'footer-menu',
												'link_before'     => '',
												'link_after'      => '',
												'after'           => '',
												'container_id'    => '',
												'menu_class'      => '',
												'fallback_cb'     => '',
												'menu_id'         => '',
												'depth'           => 4,
											)
										);
									}

								?>
						</div>
						<div class="col-md-2">
							<h4>Resources</h4>
							    <?php
									if (has_nav_menu('footer-three')) {
										$nav =  wp_nav_menu(
											array(
												'theme_location'  => 'footer-three',
												'container'       => 'div',
												'container_class' => 'footer-menu',
												'link_before'     => '',
												'link_after'      => '',
												'after'           => '',
												'container_id'    => '',
												'menu_class'      => '',
												'fallback_cb'     => '',
												'menu_id'         => '',
												'depth'           => 4,
											)
										);
									}

								?>
						</div>
						<div class="col-md-4">
							<div class="footer-right">
								<h4>Subscribe</h4>
								<div class="footer-intput-form">
									<?php echo do_shortcode('[mailjet_subscribe widget_id="1"]'); ?>
								</div>
								<div class="footer-social-icons">
									<ul>
				<?php
                    $args  = [
                        'post_type'       => 'footer_social',
                    ];

                    $query = new \WP_Query($args);
                   
                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                          $query->the_post();
                          $icon_class = get_post_meta(get_the_ID(), "wf_footer_social_icon_class", true);
                          $social_background = get_post_meta(get_the_ID(), "wf_footer_social_background", true);
                          $social_url = get_post_meta(get_the_ID(), "wf_footer_social_url", true);
                ?>
							<li><a href="<?php echo $social_url; ?>" class="footer-icon"><i style="background:<?php echo $social_background ; ?> " class="<?php echo $icon_class ?>"></i></a></li>

				<?php
                        endwhile;
                    endif;
                    wp_reset_query();
                ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom text-center">
					<span>© 2022. All Rights Reserved. A Product of <a href="https://wpcommerz.com/" target="blank"> WPCommerz</a></span>
				</div>
			</div>
		</div>
	</footer>
<?php endif; ?>
	<!-- All Js Files -->
	<?php wp_footer(); ?>
	</body>

	</html>