<?php

/**
 * Template Name: All Modules
 */
?>


<?php get_header(); ?>

<!-- All Modules Banner -->
<div class="all-modules-mid-content">
    <div class="all-modules-banner">
        <div class="container">
            <h1 class="text-center">All Modules</h1>
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="modules-list-item">
                        <?php

                        $all_categories = get_terms(array(
                            'taxonomy' => 'module_category',
                            'hide_empty' => false,
                        ));


                        ?>
                        <ul>
                            <li><a class="active" href="#" data-filter="all">All</a></li>
                            <?php foreach ($all_categories as $category) : ?>
                                <li><a href="#" data-filter=".<?php echo $category->slug; ?>"> <?php echo $category->name; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="module-search-form">
                        <input class="woofusion-module-keyword-search" type="text" placeholder="Search by name">
                        <a href="javascript:void(0)" class="search"></a>
                    </div>
                </div>
            </div>

            <!-- Modules Box -->
            <div class="row module-box-all">

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

                        $categories = get_the_terms( get_the_ID(),'module_category' );
                        $slugs = wp_list_pluck($categories, 'slug');
                        $class_names = join(' ', $slugs);

                ?>
                        <div class="woofusion-frontend-module-item mix col-md-4 <?php if ($class_names) {
                                                                                    echo ' ' . $class_names;
                                                                                } ?>">
                            <div class="module-box">
                                
                                <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail();
                                    }
                                ?>
                                
                                <div class="woofusion-frontend-module-title module-box-text">
                                    <a href="<?php the_permalink(); ?>">
                                        <h4><?php the_title(); ?></h4>
                                    </a>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                        </div>

                <?php
                    endwhile;
                endif;
                wp_reset_query();
                ?>

            </div>
        </div>
    </div>

    <!-- All Module Super Charge -->
    <div class="all-module-supercharge">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="super-charge">
                        <div class="supercharge-store">
                            <div class="supercharge-quote">
                                <h2>
                                    Supercharge your WooCommerce store today
                                </h2>
                            </div>
                            <div class="supercharge-btn text-center">
                                <a href="https://wcfusion.com/pricing/" class="btn module-btn-custom banner-btn-custom">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- All Module Super Charge End -->

    <!-- All Modules Banner End -->
</div>

<?php get_footer(); ?>

<script>
    var mixit_config = document.querySelector('.module-box-all');
    var mixer = mixitup(mixit_config);
</script>