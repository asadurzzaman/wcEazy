<?php

$wf_header_class     = '';
$single_class = '';
$wf_header_logo      = 'wceazy.png';

$wf_current_page = sanitize_post($GLOBALS['wp_the_query']->get_queried_object());

if (!empty($wf_current_page)) {
	// Get the page slug
	$wf_page_slug = $wf_current_page->post_name;

	if ('blog' == $wf_page_slug ) {
		$wf_header_class = 'wfn-blog-header';
		$wf_header_logo      = 'wceazy-white.png';
	} else if ('pricing' == $wf_page_slug) {
		$wf_header_class = 'pricing-header';
		$wf_header_logo      = 'wceazy-white.png';
	}

	if (is_single() && 'modules' == get_post_type()) {
		$single_class = 'single-module-banner-bg';
		$wf_header_logo      = 'wceazy.png';
	} elseif (is_single() && 'post' == get_post_type()) {
		$single_class   = 'single-blog-header-bg';
		$wf_header_logo = 'wceazy.png';
	}
}

?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Supercharge Your WooCommerce Store with World's Best Plugin">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon">


	<!-- All Css Files -->
	<?php
	wp_head();
	$home_url = home_url();
	?>


</head>

<body>
	<script>
		var templete_dir_url = "<?php echo get_template_directory_uri(); ?>";
	</script>

<style>
	.top-bar{
		background-position: center center;
		background-size: cover;
		background-repeat: no-repeat;
		height: 60px;
		position: relative;
	}
</style>
	<script>
        jQuery(document).ready(function(){
            jQuery("#hide").click(function(){
                jQuery(".top-bar").hide();
            });
            // jQuery("#show").click(function(){
            //     jQuery(".top-bar").show();
            // });
        });
	</script>

	<!-- Header Area -->
<?php
if( !is_page_template( 'special-offer.php' )):
?>
	<div class="top-bar" style="background-image: url('<?php echo get_template_directory_uri() ?> . /assets/images/offer/top-banner2.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-xxl-5 col-lg-5 col-5">
					<div class="top-bar-left text-start">
						<p>EARLY BIRD OFFER</p>
					</div>
				</div>
				<div class="col-xxl-2 col-lg-2 col-3">
					<div class="discount-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer/discount.png">
					</div>
				</div>
				<div class="col-xxl-5 col-lg-65 col-4">
					<div class="top-bar-right text-end">
						<a href="<?php echo site_url(); ?>/special-offer/">Claim Now</a>
					</div>

				</div>
			</div>
		</div>
		<button id="hide"><i class="fa-solid fa-xmark"></i></button>
	</div>

	<header class="header-area site-header <?php echo $wf_header_class ? $wf_header_class : ''; ?>">

		<nav class="navbar navbar-expand-lg navbar-light <?php echo $single_class ? $single_class : ''; ?>">
			<div class="container">
				<a class="navbar-brand" href="<?php echo $home_url; ?>"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $wf_header_logo; ?>" alt="logo"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<?php
					if (has_nav_menu('main-menu')) {
						$nav =  wp_nav_menu(
							array(
								'theme_location'  => 'main-menu',
								'container'       => '',
								'container_class' => '',
								'link_before'     => '',
								'link_after'      => '',
								'after'           => '',
								'container_id'    => '',
								'menu_class'      => 'navbar-nav me-auto mt-custom-btn mb-lg-0 ms-auto',
								'fallback_cb'     => '',
								'menu_id'         => '',
								'depth'           => 4,
								'echo'            => false
							)
						);

						$nav = str_replace("menu-item", "menu-item nav-item", $nav);
						$nav = str_replace("<a", "<a class='nav-link'", $nav);

						echo $nav;
					}

					?>
					<form class="d-flex mt-custom-btn">
						<?php
						if (is_user_logged_in()) {
						?>
							<a href="<?php echo home_url() . '/my-account'; ?>" class="btn btn-left-custom">My Account</a>

						<?php } else { ?>
							<a href="<?php echo home_url() . '/log-in' ?>" class="btn btn-left-custom">Log In</a>
						<?php } ?>
						<a target="_blank" href="https://wordpress.org/plugins/wceazy/" class="btn btn-right-custom">Free Download</a>
					</form>
				</div>
			</div>
		</nav>
	</header>
<?php endif; ?>