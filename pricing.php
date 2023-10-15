<?php

/**
 * Template Name: Pricing Page
 */
?>
<?php get_header();

$wf_btn_colors        = array();
$wf_btn_text          = array();
$wf_btn_url           = array();
$wff_price_types      = array();
$wf_domain_arr        = array();
$wf_plugin_update_arr = array();
$wf_support_arr       = array();
$wf_total_modules_arr = array();


$pricing_comparision_main_title = get_post_meta( get_the_ID(), "pricing_comparision_main_title", true );
$pricing_comparision_sub_title  = get_post_meta( get_the_ID(), "pricing_comparision_sub_title", true );
$pricing_comparision_content    = get_post_meta( get_the_ID(), "pricing_comparision_content", true );
$other_plugins_title            = get_post_meta( get_the_ID(), "pricing_comparision_other_plugins_title", true );
$other_plugins_price            = get_post_meta( get_the_ID(), "pricing_comparision_other_plugins_price", true );
$other_image                    = get_post_meta( get_the_ID(), "pricing_comparision_other_image", true );
$other_pricing                  = get_post_meta( get_the_ID(), "pricing_comparision_other_pricing", true );
$other_total                    = get_post_meta( get_the_ID(), "pricing_comparision_other_total", true );

$wcfusion_title   = get_post_meta( get_the_ID(), "pricing_comparision_wcfusion_title", true );
$wcfusion_price   = get_post_meta( get_the_ID(), "pricing_comparision_wcfusion_price", true );
$wcfusion_image   = get_post_meta( get_the_ID(), "pricing_comparision_wcfusion_image", true );
$wcfusion_pricing = get_post_meta( get_the_ID(), "pricing_comparision_wcfusion_pricing", true );


error_log(print_r($other_pricing,true ));

?>

<!-- Pricing Banner text -->
<div class="woofusion-pricing-banner-text">
    <div class="container">
        <div class="row">
            <h1 class="mt-50">Best WooCommerce Solution, For Best Price</h1>
        </div>
    </div>
</div>
<!-- Pricing Banner text End -->
<!-- Pricing Area  -->
<div class="woofusion-pricing-area text-center">
    <div class="woofusion-pricing-button">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="price-table-tab mb-50 mt-48">
                        <?php
                        $price_types = get_terms(array(
                            'taxonomy' => 'price_type',
                            'hide_empty' => false,
                        ));

                        $cat_count = 0;
                        ?>
                        <div class="nav text-center justify-content-center" id="nav-tab" role="tablist">
                            <?php foreach ($price_types as $price_type) :  $cat_count++;  ?>
                            <button
                                class="<?php echo $price_type->slug;  ?>-tab  <?php echo '1' == $cat_count ? 'active' : ''; ?>"
                                id="nav-<?php echo $price_type->slug;  ?>-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-<?php echo $price_type->slug;  ?>" type="button" role="tab"
                                aria-controls="nav-<?php echo $price_type->slug;  ?>" aria-selected="true">
                                <?php echo $price_type->name;  ?></button>
                            <?php endforeach; ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Price Table Start -->
    <div class="tab-content" id="nav-tabContent">
        <?php $tab_count = 0;  ?>
        <?php foreach ($price_types as $price_type) : $tab_count++; ?>

        <div class="woofusion-pricing-table tab-pane <?php echo '1' == $tab_count ? 'show active' : ''; ?>"
            data-id="nav-<?php echo $price_type->slug;  ?>" id="nav-<?php echo $price_type->slug;  ?>" role="tabpanel"
            aria-labelledby="nav-<?php echo $price_type->slug;  ?>-tab">
            <div class="container">
                <div class="row">
                    <?php

                        $wf_pricing_args = array(
                            'post_type' => 'pricing',
                            'posts_per_page' => 5,
                            'order'           => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'price_type',
                                    'field'    => 'slug',
                                    'terms'    => $price_type->slug,
                                ),
                            ),
                        );

                        $query = new WP_Query($wf_pricing_args);

                        if ($query->have_posts()) :
                            while ($query->have_posts()) :
                                $query->the_post();

                                $pricing_sub_title = get_post_meta(get_the_ID(), "wf_pricing_sub_title", true);
                                $price             = get_post_meta(get_the_ID(), "wf_pricing_price", true);
                                $price_btn_text    = get_post_meta(get_the_ID(), "wf_pricing_button_text", true);
                                $price_btn_url     = get_post_meta(get_the_ID(), "wf_pricing_button_url", true);
                                $pricing_options   = get_post_meta(get_the_ID(), "wf_pricing_option", true);
                                $pricing_color     = get_post_meta(get_the_ID(), "wf_pricing_color", true) ? get_post_meta(get_the_ID(), "wf_pricing_color", true) : '#1B9204';
                                $price_index       = strtolower(get_the_title());

                                $wf_btn_colors[$price_index] = $pricing_color;
                                $wf_btn_text[$price_index]   = $price_btn_text;
                                $wf_btn_url[$price_index]    = $price_btn_url;
                                $wff_price_types[$price_index]  = get_the_title();

                                $wf_domain_arr[$price_index] = get_post_meta(get_the_ID(), "wf_pricing_domain", true);
                                $wf_plugin_update_arr[$price_index] = get_post_meta(get_the_ID(), "wf_pricing_plugin_update", true);
                                $wf_support_arr[$price_index] = get_post_meta(get_the_ID(), "wf_pricing_support", true);
                                $wf_total_modules_arr[$price_index] = get_post_meta(get_the_ID(), "wf_pricing_total_modules", true);

                        ?>
                                <div class="col-xl col-lg-6 col-md-6">
                                    <div class="pricing-table-item border-bottom-1" style="border-bottom: 4px solid <?php echo  $pricing_color; ?>">
                                        <div class="pricing-table-header">
                                            <h3 style="color:<?php echo  $pricing_color; ?>"><?php the_title(); ?></h3>
                                            <p><?php echo  $pricing_sub_title; ?></h3>
                                            </p>
                                        </div>
                                        <div class="pricing-table-price">
                                            <span style="color:<?php echo  $pricing_color; ?>">$<?php echo $price; ?></span>
                                        </div>
                                        <div class="pricing-table-btn btn-mt-40">
                                            <?php 
                                                 $free = get_the_title(); 
                                                 $free = strtolower($free);
                                                
                                                 $free_download_attr = '';

                                                 if( 'free' == $free ){
                                                    $free_download_attr = " target='_blank' ";
                                                 }
                                            ?>
                                            <a class="download-btn" <?php echo  $free_download_attr; ?> href="<?php echo $price_btn_url; ?>" style="background:<?php echo  $pricing_color; ?>;" onmouseover='this.style.border="1px solid <?php echo $pricing_color; ?>";'><?php echo $price_btn_text; ?></a>
                                        </div>
                                        <div class="pricing-table-features">
                                            <ul>
                                                <?php
                                                foreach ($pricing_options as $pricing_option) :
                                                ?>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        <span><?php echo $pricing_option; ?></span>
                                    </li>
                                    <?php endforeach;  ?>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php
                            endwhile;
                        endif;
                        wp_reset_query();

                        ?>

                </div>
                <div class="row" style="display: none;">
                    <div class="col-lg-12">
                        <!-- Pricing Feature Annual -->
                        <div class="woofusion-features">
                            <div data-pricing-feature-item class="woofusion-pricing-features-items active">
                                <table class="woofusion-features-table">
                                    <thead class="tableFloatingHeaderOriginal">
                                        <tr>

                                            <th class="table-head-left" style="min-width: 328px; max-width: 328px;">
                                                <div class="woofusion-features-header">
                                                    <span><i class="fa-solid fa-chevron-up"></i></span>
                                                    <h3>Feature <br> Comparison</h3>
                                                </div>
                                            </th>


                                            <?php foreach ($wff_price_types as $key => $wff_price_type) : ?>

                                            <th style="min-width: 125px; max-width: 125px;">
                                                <div class="woofusion-features-header features-package-header">
                                                    <span class="woofusion-features-package">
                                                        <?php echo $wff_price_type; ?> </span>
                                                    <a class="features-download-btn wff-btn-feature <?php echo 'free' == $key ? '' : 'bg-color1' ?>"
                                                        href="<?php echo $wf_btn_url[$key]; ?>"
                                                        style="background:<?php echo $wf_btn_colors[$key]; ?>;"
                                                        onmouseover='this.style.border="1px solid <?php echo $wf_btn_colors[$key]; ?>";'><?php echo $wf_btn_text[$key]; ?></a>
                                                </div>
                                            </th>

                                            <?php endforeach; ?>

                                        </tr>
                                    </thead>

                                    <tbody class="feature-table-body">
                                        <tr class="domain-bg">
                                            <td class="text-start" style="min-width: 328px; max-width: 328px;"><a
                                                    href="/features/tasks"><b>Domain</b></a></td>

                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#">
                                                    <?php echo array_key_exists("free", $wf_domain_arr) ? $wf_domain_arr['free'] : ''; ?>
                                                </a></td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo array_key_exists("basic", $wf_domain_arr) ? $wf_domain_arr['basic'] : ''; ?></a>
                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo array_key_exists("professional", $wf_domain_arr) ? $wf_domain_arr['professional'] : '';  ?></a>
                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo array_key_exists("business", $wf_domain_arr) ? $wf_domain_arr['business'] : ''; ?></a>
                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo array_key_exists("enterprise", $wf_domain_arr) ? $wf_domain_arr['enterprise']  : ''; ?></a>
                                            </td>
                                        </tr>
                                        <tr class="domain-pd">
                                            <td scope="" class="text-start" style="min-width: 328px; max-width: 328px;">
                                                <a href="/features/tasks"><b>Plugin Update</b></a>
                                            </td>

                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo array_key_exists("free", $wf_plugin_update_arr) ? $wf_plugin_update_arr['free'] : ''; ?></a>
                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo array_key_exists("basic", $wf_plugin_update_arr) ? $wf_plugin_update_arr['basic'] : ''; ?></a>
                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo array_key_exists("professional", $wf_plugin_update_arr) ? $wf_plugin_update_arr['professional'] : ''; ?></a>
                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo array_key_exists("business", $wf_plugin_update_arr) ?  $wf_plugin_update_arr['business'] : ''; ?></a>
                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo array_key_exists("enterprise", $wf_plugin_update_arr) ? $wf_plugin_update_arr['enterprise'] : ''; ?></a>
                                            </td>
                                        </tr>
                                        <tr class="domain-bg">
                                            <td class="text-start" style="min-width: 328px; max-width: 328px;"><a
                                                    href="/features/tasks"><b>Support</b></a></td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo array_key_exists("free", $wf_support_arr) ? $wf_support_arr['free'] : ''; ?></a>
                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo array_key_exists("basic", $wf_support_arr) ? $wf_support_arr['basic'] : ''; ?></a>
                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo array_key_exists("professional", $wf_support_arr) ? $wf_support_arr['professional'] : ''; ?></a>
                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo array_key_exists("business", $wf_support_arr) ? $wf_support_arr['business'] : ''; ?></a>
                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo array_key_exists("enterprise", $wf_support_arr) ? $wf_support_arr['enterprise'] : ''; ?></a>
                                            </td>
                                        </tr>

                                        <tr class="domain-pd domain-border">
                                            <td class="text-start" style="min-width: 328px; max-width: 328px;"><a
                                                    href="/features/tasks"><b> Total Modules</b></a></td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo  array_key_exists("free", $wf_total_modules_arr) ? $wf_total_modules_arr['free'] : ''; ?></a>
                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo  array_key_exists("basic", $wf_total_modules_arr) ? $wf_total_modules_arr['basic']  : ''; ?></a>
                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo  array_key_exists("professional", $wf_total_modules_arr) ? $wf_total_modules_arr['professional'] : ''; ?></a>
                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo  array_key_exists("business", $wf_total_modules_arr) ? $wf_total_modules_arr['business'] : ''; ?></a>
                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;"><a
                                                    href="#"><?php echo array_key_exists("enterprise", $wf_total_modules_arr) ? $wf_total_modules_arr['enterprise'] : ''; ?></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="woofusion_pricing-features__item-wrapper">
                                    <div class="woofusion_pricing-features__title-wrapper">
                                        <div class="woofusion-features-header">
                                            <span><i class="fa-solid fa-chevron-down"></i></span>
                                            <h3>Feature <br> Comparison</h3>
                                        </div>
                                    </div>
                                    <div class="woofusion_pricing-features__label">
                                        <a class="features-wrapper-btn bg-color2" href="#">25 features</a>
                                    </div>
                                </div>
                            </div>
                            <div data-pricing-feature-item class="woofusion-pricing-features-items active">
                                <table class="woofusion-features-table">
                                    <thead class="tableFloatingHeaderOriginal">
                                        <tr>
                                            <th class="table-head-left" style="min-width: 328px; max-width: 328px;">
                                                <div class="woofusion-features-header">
                                                    <span><i class="fa-solid fa-chevron-up"></i></span>
                                                    <h3 class="module-heading-feature">Modules</h3>
                                                </div>
                                            </th>

                                            <?php foreach ($wff_price_types as $key => $wff_price_type) : ?>
                                            <th style="min-width: 125px; max-width: 125px;">
                                                <div class="woofusion-features-header features-package-header">
                                                    <span
                                                        class="woofusion-features-package"><?php echo $wff_price_type; ?></span>
                                                    <a class="features-download-btn <?php echo 'free' == $key ? '' : 'bg-color1' ?>"
                                                        href="<?php echo $wf_btn_url[$key]; ?>"
                                                        style="background:<?php echo $wf_btn_colors[$key]; ?>;"
                                                        onmouseover='this.style.border="1px solid <?php echo $wf_btn_colors[$key]; ?>";'><?php echo $wf_btn_text[$key]; ?></a>
                                                </div>
                                            </th>

                                            <?php endforeach; ?>

                                        </tr>
                                    </thead>
                                    <tbody class="feature-table-body wf-modules-table">

                                        <?php
                                            $args  = [
                                                'post_type'       => 'modules',
                                                'order'           => 'ASC',
                                            ];

                                            $query = new \WP_Query($args);

                                            $wf_module_cnt = 0;
                                            $wf_module_bg_class = '';

                                            if ($query->have_posts()) :
                                                while ($query->have_posts()) :
                                                    $query->the_post();

                                                    if ($wf_module_cnt % 2 == 0) {
                                                        $wf_module_bg_class = 'domain-bg';
                                                    } else {
                                                        $wf_module_bg_class = 'domain-pd';
                                                    }
                                                    $wf_module_cnt++;

                                                    $module_packages  = get_post_meta(get_the_ID(), "woofusion_module_packages", true);

                                            ?>


                                        <tr class="<?php echo $wf_module_bg_class; ?>">
                                            <td class="text-start" style="min-width: 328px; max-width: 328px;"><a
                                                    href="/features/tasks"><b><?php the_title(); ?></b></a></td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;">
                                                <?php

                                                            if (in_array('free', $module_packages)) {
                                                            ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    class="bi bi-check-circle" viewBox="0 0 16 16" height="18"
                                                    width="18">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                                    </path>
                                                    <path
                                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z">
                                                    </path>
                                                </svg>

                                                <?php
                                                            } else {
                                                            ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                                    </path>
                                                    <path
                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                                    </path>
                                                </svg>

                                                <?php
                                                            }

                                                            ?>


                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;">
                                                <?php

                                                            if (in_array('basic', $module_packages)) {
                                                            ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    class="bi bi-check-circle" viewBox="0 0 16 16" height="18"
                                                    width="18">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                                    </path>
                                                    <path
                                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z">
                                                    </path>
                                                </svg>

                                                <?php
                                                            } else {
                                                            ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                                    </path>
                                                    <path
                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                                    </path>
                                                </svg>

                                                <?php
                                                            }

                                                            ?>
                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;">
                                                <?php

                                                            if (in_array('professional', $module_packages)) {
                                                            ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    class="bi bi-check-circle" viewBox="0 0 16 16" height="18"
                                                    width="18">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                                    </path>
                                                    <path
                                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z">
                                                    </path>
                                                </svg>

                                                <?php
                                                            } else {
                                                            ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                                    </path>
                                                    <path
                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                                    </path>
                                                </svg>

                                                <?php
                                                            }

                                                            ?>
                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;">
                                                <?php

                                                            if (in_array('business', $module_packages)) {
                                                            ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    class="bi bi-check-circle" viewBox="0 0 16 16" height="18"
                                                    width="18">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                                    </path>
                                                    <path
                                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z">
                                                    </path>
                                                </svg>

                                                <?php
                                                            } else {
                                                            ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                                    </path>
                                                    <path
                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                                    </path>
                                                </svg>

                                                <?php
                                                            }

                                                            ?>
                                            </td>
                                            <td class="text-center" style="min-width: 125px; max-width: 125px;">
                                                <?php

                                                            if (in_array('enterprise', $module_packages)) {
                                                            ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    class="bi bi-check-circle" viewBox="0 0 16 16" height="18"
                                                    width="18">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                                    </path>
                                                    <path
                                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z">
                                                    </path>
                                                </svg>

                                                <?php
                                                            } else {
                                                            ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                                    </path>
                                                    <path
                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                                    </path>
                                                </svg>

                                                <?php
                                                            }

                                                            ?>
                                            </td>
                                        </tr>


                                        <?php
                                                endwhile;
                                            endif;
                                            wp_reset_query();
                                            ?>

                                    </tbody>
                                </table>
                                <div class="woofusion_pricing-features__item-wrapper">
                                    <div class="woofusion_pricing-features__title-wrapper">
                                        <div class="woofusion-features-header">
                                            <span><i class="fa-solid fa-chevron-down"></i></span>
                                            <h3>Modules</h3>
                                        </div>
                                    </div>
                                    <div class="woofusion_pricing-features__label">
                                        <a class="features-wrapper-btn bg-color2" href="#">15 features</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.woofusion-features -->
                        <!-- Pricing Feature Annual End-->

                        <!-- Pricing Feature Mobile Annual-->
                        <div class="pricing-features-mobile mt-5">

                            <?php

                                $mo_pr_query = new WP_Query($wf_pricing_args);

                                if ($mo_pr_query->have_posts()) :
                                    while ($mo_pr_query->have_posts()) :
                                        $mo_pr_query->the_post();

                                        $primo_sub_title  = get_post_meta(get_the_ID(), "wf_pricing_sub_title", true);
                                        $mo_price         = get_post_meta(get_the_ID(), "wf_pricing_price", true);
                                        $primo_btn_text   = get_post_meta(get_the_ID(), "wf_pricing_button_text", true);
                                        $primo_btn_url    = get_post_meta(get_the_ID(), "wf_pricing_button_url", true);
                                        $primo_color      = get_post_meta(get_the_ID(), "wf_pricing_color", true) ? get_post_meta(get_the_ID(), "wf_pricing_color", true) : '#1B9204';

                                        $mo_domain        = get_post_meta(get_the_ID(), "wf_pricing_domain", true);
                                        $mo_plugin_update = get_post_meta(get_the_ID(), "wf_pricing_plugin_update", true);
                                        $mo_support       = get_post_meta(get_the_ID(), "wf_pricing_support", true);
                                        $mo_total_modules = get_post_meta(get_the_ID(), "wf_pricing_total_modules", true);
                                        $packeg_index     = strtolower(get_the_title());

                                ?>

                            <div class="woofusion-pricing-plan-free-package mb-5">
                                <div class="woofusion-pricing-plan-free text-center pricing-table-header">
                                    <h3 class="woofusion-features-package" style="color:<?php echo $primo_color; ?>">
                                        <?php the_title(); ?></h3>
                                    <div class="pricing-table-btn">
                                        <a class="features-download-btn" href="<?php echo $primo_btn_url; ?>"
                                            style="background:<?php echo  $primo_color; ?>;"
                                            onmouseover='this.style.border="1px solid <?php echo $primo_color; ?>";'><?php echo $primo_btn_text; ?></a>
                                    </div>
                                </div>


                                <div class="woofusion-pricing-features-items-mobile">
                                    <div data-pricing-feature-item class="woofusion-pricing-features-items active">
                                        <table class="woofusion-features-table">
                                            <thead class="tableFloatingHeaderOriginal">
                                                <tr>
                                                    <th class="table-head-left"
                                                        style="min-width: 328px; max-width: 328px;">
                                                        <div class="woofusion-features-header">
                                                            <h3>Feature <br> Comparison</h3>
                                                        </div>
                                                    </th>
                                                    <th style="min-width: 125px; max-width: 125px;">
                                                        <div class="woofusion-features-header features-package-header">
                                                            <span><i
                                                                    class="fa-solid fa-chevron-up bg-color1"></i></span>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="feature-table-body">

                                                <tr class="domain-bg">
                                                    <td class="text-start" style="min-width: 328px; max-width: 328px;">
                                                        <a href="/features/tasks"><b>Domain</b></a>
                                                    </td>
                                                    <td class="text-center" style="min-width: 125px; max-width: 125px;">
                                                        <a href="#"><?php echo $mo_domain; ?></a>
                                                    </td>
                                                </tr>
                                                <tr class="domain-pd">
                                                    <td class="text-start" style="min-width: 328px; max-width: 328px;">
                                                        <a href="/features/tasks"><b>Plugin Update</b></a>
                                                    </td>
                                                    <td class="text-center" style="min-width: 125px; max-width: 125px;">
                                                        <a href="#"><?php echo $mo_plugin_update; ?></a>
                                                    </td>
                                                </tr>
                                                <tr class="domain-bg">
                                                    <td class="text-start" style="min-width: 328px; max-width: 328px;">
                                                        <a href="/features/tasks"><b>Support</b></a>
                                                    </td>
                                                    <td class="text-center" style="min-width: 125px; max-width: 125px;">
                                                        <a href="#"><?php echo $mo_support; ?></a>
                                                    </td>

                                                </tr>
                                                <tr class="domain-pd domain-border">
                                                    <td class="text-start" style="min-width: 328px; max-width: 328px;">
                                                        <a href="/features/tasks"><b>Modules</b></a>
                                                    </td>
                                                    <td class="text-center" style="min-width: 125px; max-width: 125px;">
                                                        <a href="#"> <?php echo  $mo_total_modules; ?> </a>
                                                    </td>
                                                </tr>



                                            </tbody>
                                        </table>
                                        <div class="woofusion_pricing-features__item-wrapper">
                                            <div class="woofusion_pricing-features__title-wrapper">
                                                <div class="woofusion-features-header">
                                                    <h3>Feature <br> Comparison</h3>
                                                </div>
                                            </div>
                                            <div class="woofusion_pricing-features__label woofusion-features-header">
                                                <span><i class="fa-solid fa-chevron-down bg-color1"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="woofusion-pricing-features-items-mobile">
                                    <div data-pricing-feature-item class="woofusion-pricing-features-items active">
                                        <table class="woofusion-features-table">
                                            <thead class="tableFloatingHeaderOriginal">
                                                <tr>
                                                    <th class="table-head-left"
                                                        style="min-width: 328px; max-width: 328px;">
                                                        <div class="woofusion-features-header">
                                                            <h3>Modules</h3>
                                                        </div>
                                                    </th>
                                                    <th style="min-width: 125px; max-width: 125px;">
                                                        <div class="woofusion-features-header features-package-header">
                                                            <span><i
                                                                    class="fa-solid fa-chevron-up bg-color1"></i></span>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="feature-table-body">

                                                <?php
                                                            $mo_args  = [
                                                                'post_type'       => 'modules',
                                                                'order'           => 'ASC',
                                                            ];

                                                            $query = new \WP_Query($mo_args);

                                                            $wfmo_cnt = 0;
                                                            $wfmo_bg_class = '';

                                                            if ($query->have_posts()) :
                                                                while ($query->have_posts()) :
                                                                    $query->the_post();

                                                                    if ($wfmo_cnt % 2 == 0) {
                                                                        $wfmo_bg_class = 'domain-bg';
                                                                    } else {
                                                                        $wfmo_bg_class = 'domain-pd';
                                                                    }
                                                                    $wfmo_cnt++;

                                                                    $wfmo_packages  = get_post_meta(get_the_ID(), "woofusion_module_packages", true);

                                                            ?>

                                                <tr class="<?php echo $wfmo_bg_class; ?>">
                                                    <td class="col text-start"><a
                                                            href="/features/tasks"><b><?php the_title(); ?></b></a></td>
                                                    <td class="col pricing-plan-free-mobile-right">

                                                        <?php

                                                                            if (in_array($packeg_index, $wfmo_packages)) {
                                                                            ?>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            class="bi bi-check-circle" viewBox="0 0 16 16" height="18"
                                                            width="18">
                                                            <path
                                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                                            </path>
                                                            <path
                                                                d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z">
                                                            </path>
                                                        </svg>

                                                        <?php
                                                                            } else {
                                                                            ?>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                            fill="currentColor" class="bi bi-x-circle"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                                            </path>
                                                            <path
                                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                                            </path>
                                                        </svg>

                                                        <?php
                                                                            }

                                                                            ?>


                                                    </td>
                                                </tr>

                                                <?php
                                                                endwhile;
                                                            endif;
                                                            wp_reset_query();
                                                            ?>


                                            </tbody>
                                        </table>
                                        <div class="woofusion_pricing-features__item-wrapper">
                                            <div class="woofusion_pricing-features__title-wrapper">
                                                <div class="woofusion-features-header">
                                                    <h3>Modules</h3>
                                                </div>
                                            </div>
                                            <div class="woofusion_pricing-features__label woofusion-features-header">
                                                <span><i class="fa-solid fa-chevron-down bg-color1"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <?php
                                    endwhile;
                                endif;
                                wp_reset_query();

                                ?>


                        </div>


                        <!-- Pricing Feature Mobile Annual-->
                    </div>
                </div>
            </div>
        </div>

        <?php endforeach; ?>


    </div>
</div>
<!-- Pricing Area End -->

<!-- Guarantee Area Start -->
<div class="guarantee-area">
    <div class="container">
        <div class="guarantee">
            <div class="row align-items">
                <div class="col-md-3">
                    <div class="guarantee-thumb">
                        <img class="img-fluid"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/refund-days.png"
                            alt="Guarantee">
                    </div>
                </div>
                <div class="col-md-9 pl-30">
                    <div class="guarantee-content">
                        <h2>Our Refund Policy</h2>
                        <p>
                            We promise your complete happiness and are sure that you will admire our product.

                            We always keep our product's quality high.We guarantee our customers on the product's
                            excellent performance and service. As a customer, you will find that the product meets your
                            needs.
                        </p>
                        <p>However, unintended consequences can arise.
                            In that situation, we offer a 30-day money-back guarantee with no questions asked.
                        </p>
                    </div>
                    <div class="guarantee-payments">
                        <span>Payment Options:</span>
                        <ul>
                            <li><a href="#"><img class="img-fluid"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/payment/visa.png"
                                        alt="Visa"></a></li>
                            <li><a href="#"><img class="img-fluid"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/payment/paypal.png"
                                        alt="Visa"></a></li>
                            <li><a href="#"><img class="img-fluid"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/payment/discover.png"
                                        alt="Visa"></a></li>
                            <li><a href="#"><img class="img-fluid"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/payment/master.png"
                                        alt="Visa"></a></li>
                            <li><a href="#"><img class="img-fluid"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/payment/amirican-express.png"
                                        alt="Visa"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Guarantee Area End -->

<!-- Start: Pricing Table  -->
<div class="doc_pricing">
    <div class="container">
        <div class="row">
            <div class="doc_price_heading">
                <h3><?php echo $pricing_comparision_main_title;  ?></h3>
                <h4><?php echo $pricing_comparision_sub_title;  ?></h4>
                <p><?php echo $pricing_comparision_content; ?></p>
            </div>
            <!-- End: /.doc_price_heading -->
            <div class="doc_price_wrap">
                <div class="doc_price_table">
                    <div class="doc_price_head">
                        <img alt="doc"
                            src="<?php echo $other_image; ?>">
                        <div class="doc_price_head_content">
                            <h4> <?php echo $other_plugins_title ; ?></h4>
                            <h3><?php echo $other_plugins_price;  ?></h3>
                        </div>
                    </div>
                    <div class="doc_price_body">
                        <ul>
                            <?php
                                foreach( $other_pricing as $other_item ):
                            ?>
                            <li> <?php echo $other_item;  ?></li>
                            <?php
                                endforeach;
                            ?>
                        </ul>
                    </div>
                    <div class="doc_price_footer">
                       <?php echo $other_total; ?>
                    </div>
                </div>
                <!-- End: / Table 1 -->

                <div class="doc_price_table price_table_active">
                    <div class="doc_price_vs">
                        <h3> VS</h3>
                    </div>
                    <div class="doc_price_head">
                        <img alt="doc"
                            src="<?php echo $wcfusion_image; ?> ">
                        <div class="doc_price_head_content">
                            <h4> <?php echo $wcfusion_title; ?></h4>
                            <h3><?php echo  $wcfusion_price; ?></span></h3>
                        </div>
                    </div>
                    <div class="doc_price_body">
                        <ul>
                            <?php
                                foreach( $wcfusion_pricing as $fusion_price ):
                            ?>
                            <li> <i class="fa-solid fa-check"></i> <?php echo $fusion_price; ?></li>
        
                            <?php  endforeach; ?>
                        </ul>
                    </div>
                </div>
                <!-- End: / Table 2 -->
            </div>
            <!-- End: /.doc_price_wrap -->
        </div>
        <!-- End: /.row -->
    </div>
    <!-- End: /.container -->
</div>
<!-- End: /.doc_pricing -->



<!-- Woofusion Pricing FAQ Area -->
<div class="wfn-faq-area-wrapper">
    <div class="woofusion-pricing-faq-area">
        <div class="container blog-supercharge-position">
            <div class="row">
                <div class="col-lg-12">
                    <div class="woofusion-faq">
                        <h2>Frequently Asked Questions</h2>

                        <div class="accordion" id="wf_faq_accordion">

                            <?php
                            $args  = [
                                'post_type'       => 'faq',
                                'order'           => 'ASC',
                                'paged' =>  get_query_var('paged') ? get_query_var('paged') : 1
                            ];

                            $query = new \WP_Query($args);
                            $faq_cnt = 0;

                            if ($query->have_posts()) :
                                while ($query->have_posts()) :
                                    $query->the_post();
                                    $faq_cnt++;
                            ?>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?php echo $faq_cnt; ?>">
                                    <button class="accordion-button <?php echo '1' == $faq_cnt ? '' : 'collapsed' ?>"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?php echo $faq_cnt; ?>"
                                        aria-expanded="<?php echo '1' == $faq_cnt ? 'true' : 'false' ?>"
                                        aria-controls="collapse<?php echo $faq_cnt; ?>">
                                        <?php the_title(); ?>
                                    </button>
                                </h2>
                                <div id="collapse<?php echo $faq_cnt; ?>"
                                    class="accordion-collapse collapse <?php echo '1' == $faq_cnt ? 'show' : '' ?>"
                                    aria-labelledby="heading<?php echo $faq_cnt; ?>" data-bs-parent="#wf_faq_accordion">
                                    <div class="accordion-body">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>

                            <?php
                                endwhile;
                            endif;
                            wp_reset_query();
                            ?>
                        </div>

                    </div> <!-- /.woofusion-faq -->
                </div>
            </div> <!-- /.row -->
            <!-- Super charge area -->
            <div class="supercharge pricing blog-supercharge">
                <div class="supercharge-quote">
                    <h2>
                        Supercharge your WooCommerce store today
                    </h2>
                </div>
                <div class="supercharge-btn text-center">
                    <a href="https://wceazy.com/pricing/" class="btn module-btn-custom banner-btn-custom">Get Started Now</a>
                </div>
            </div>
            <!-- Super charge area end-->
        </div> <!-- /.container -->
    </div>
</div>
<!-- Woofusion Pricing FAQ Area End -->


<!-- Scroll Up -->
<a id="scrollUp" href="#top" style="display:none;"><i class="fa-solid fa-arrow-up"></i></a>
<!-- Scroll Up End-->

<?php get_footer(); ?>