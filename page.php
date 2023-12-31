<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package juracy
 */
get_header();
?>

<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<?php
				while (have_posts()) :
					the_post();

					the_content();
				// If comments are open or we have at least one comment, load up the comment template.

				endwhile;
				?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
