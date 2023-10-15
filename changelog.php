<?php

/**
 * Template Name: Changelog
 */
?>
<?php
get_header();
?>
<style>
    .footer-area {
        padding-top: 100px !important;
    }
</style>

<section class="service-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="banner-title">
                    <h3>Changelog</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="changelog-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="changelog-wrapper">
                    <?php
                    $args  = [
                        'post_type'       => 'changelog',
                        'order'           => 'DSC',
                    ];

                    $query = new \WP_Query($args);
                   
                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                          $query->the_post();
                          $log_items  = get_post_meta(get_the_ID(), "wf_changelog_logitems", true);
                    ?>
                            <div class="single-changelog">
                                <h2><?php the_title(); ?></h2>
                                <?php 
                                    if(! empty( $log_items )){
                                        $log_cnt = 0;
                                        foreach( $log_items as $item){
                                            $log_cnt++;
                                ?>
                                <p><?php echo  $log_cnt . '. '. $item; ?></p>
                                <?php  } }?>
                                
                            </div>

                    <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>