<?php
get_header();

$module_top_title        = get_post_meta(get_the_ID(), "woofusion_module_top_title", true);
$module_top_sub_title    = get_post_meta(get_the_ID(), "woofusion_module_top_sub_title", true);
$module_top_content      = get_post_meta(get_the_ID(), "woofusion_module_top_content", true);
$module_top_pricing_url  = get_post_meta(get_the_ID(), "woofusion_module_top_pricing_url", true);
$module_top_document_url = get_post_meta(get_the_ID(), "woofusion_module_top_document_url", true);
$module_top_image_url    = get_post_meta(get_the_ID(), "woofusion_module_top_image", true);
$module_repeater      = get_post_meta(get_the_ID(), "wf_modules", true);

?>

<!-- Banner Area -->
<div class="single-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="single-banner-left">
                    <h5><?php echo  $module_top_sub_title ?   $module_top_sub_title : ''; ?></h5>

                    <?php if (!empty($module_top_title)) : ?>
                        <h1><?php echo $module_top_title ?  $module_top_title : ''; ?></h1>
                    <?php endif; ?>
                    <p> <?php echo  $module_top_content ?   $module_top_content : ''; ?> </p>
                    <div class="single-banner-btn-area">
                        <?php if (!empty($module_top_pricing_url)) : ?>
                            <a href="https://wceazy.com/pricing/" class="btn module-btn-custom banner-btn-custom">View Pricing</a>
                        <?php endif; ?>

                        <?php if (!empty($module_top_document_url)) : ?>
                            <a class="banner-doc" href="https://wceazy.com/docs/">Documentation</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-banner-right">
                    <?php if (!empty($module_top_image_url)) : ?>
                        <img class="img-fluid" src="<?php echo $module_top_image_url ? $module_top_image_url : '' ?>" alt="Banner Images">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if (!empty($module_repeater)) : ?>
    <!-- Setup Area  -->
    <div class="setup-area">
        <div class="container">
            <?php
            $i = 0;
            foreach ($module_repeater as $repeater) :
            ?>

                <?php if ($i % 2 == 0) { ?>

                    <div class="row setup-first mt-80">
                        <div class="col-md-6">
                            <div class="setup-left">
                                <img class="img-fluid" src="<?php echo $repeater['wf_image'] ? $repeater['wf_image'] : ''; ?>" alt="Setup Image">
                                <div class="setup-shape1">
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/setup-shape1.png" alt="shape">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-110">
                            <div class="setup-right ml-60">
                                <h5><?php echo isset ($repeater['wf_sub_title'] ) ? $repeater['wf_sub_title'] : ''; ?></h5>
                                <h2><?php echo $repeater['wf_title'] ? $repeater['wf_title'] : ''; ?></h2>
                                <div><?php echo $repeater['wf_content'] ? $repeater['wf_content'] : ''; ?></div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="row">
                        <div class="col-md-6 mt-190">
                            <div class="setup-left">

                                <h5><?php echo $repeater['wf_sub_title'] ? $repeater['wf_sub_title'] : ''; ?></h5>
                                <h2 class="pr-18"><?php echo $repeater['wf_title'] ? $repeater['wf_title'] : ''; ?> </h2>
                                <div><?php echo $repeater['wf_content'] ? $repeater['wf_content'] : ''; ?></div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-80">
                            <div class="setup-right">
                                <img class="img-fluid" src="<?php echo $repeater['wf_image'] ? $repeater['wf_image'] : ''; ?>" alt="Setup Image">
                                <div class="setup-shape2">
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/setup-shape2.png" alt="shape">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }  ?>

            <?php
                
                $i++;
            endforeach;
            ?>

        </div>
    </div>
    <!-- Setup Area End -->

<?php endif; ?>

<!-- Signle Module Mid Content -->
<div class="single-module-mid-content">
    <!-- Modules Area -->
    <section class="modules">
        <div class="container">
            <div class="woofusion-header modules-header text-center">
                <h2>wcEazy Modules</h2>
            </div>
            <div class="all-modules">
                <div class="row">
                    <?php
                    $args  = [
                        'posts_per_page'  => 9,
                        'post_type'       => 'modules',
                        'order'           => 'ASC',
                    ];

                    $query = new \WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                            $query->the_post();
                    ?>
                            <div class="col-md-3">
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
                    <a href="<?php echo site_url(); ?>/all-modules" class="btn module-btn-custom banner-btn-custom">View All Modules</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Module Section End -->

    <!-- Supercharge Area -->
    <div class="supercharge-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-module-supercharge-cont after-img">
                        <h2>Supercharge your WooCommerce store today</h2>
                        <a href="https://wceazy.com/pricing/" class="btn module-btn-custom banner-btn-custom">Get Started Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Supercharge End -->
</div>

<?php
get_footer();
?>