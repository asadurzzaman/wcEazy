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
                            <a href="<?php echo  $module_top_pricing_url ?  $module_top_pricing_url : ''; ?>" class="btn module-btn-custom banner-btn-custom" target="_blank">View Pricing</a>
                        <?php endif; ?>

                        <?php if (!empty($module_top_document_url)) : ?>
                            <a class="banner-doc" href="<?php echo $module_top_document_url ? $module_top_document_url : ''; ?>" target="_blank">Documentation</a>
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

<!-- Setup Area  -->
<div class="bogo-area">
    <div class="container">
     <h1 class="title">Description</h1>
        <div class="row">
            <div class="col-sm-6">
                <ul>
                    <li> Create amazing BOGO Deal to attract your customers.</li>
                    <li> This module provides flat discounts on specific products as there are two types of discounts supported: fixed and percentage discounts.</li>
                    <li> It provides quantity-based discounts for certain products. And it helps you to make rules as you like and run multiple discount offers.</li>
                    <li>You can offer the same or different product as a gift for BOGO Deal.</li>
                </ul>
                
            </div>
            <div class="col-sm-6">
                <ul>
                    <li> Offer specific Products for BOGO Deal. You also have the scope to choose the discount type and amount for creating a particular BOGO Deal.</li>
                    <li> A feasible module for your WooCommerce site that will help you to create bulk discount offers.</li>
                    <li>Allows the business owner to quickly manage and maintain coupon data and also allows consumers to effortlessly apply bulk discounts.</li>
                    <li>Add and delete rules whenever you want. </li>                  
                </ul>
              
            </div>
        </div>
    </div>
</div>
<!-- Setup Area End -->



<!-- Signle Module Mid Content -->
<div class="single-module-mid-content">
    <!-- Modules Area -->
    <section class="modules">
        <div class="container">
            <div class="woofusion-header modules-header text-center">
                <h2>Why Use wcEazy?</h2>
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
                        <a href="#" class="btn module-btn-custom banner-btn-custom">Get Started Now</a>
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