<?php

/**
 * Template Name: Affilate
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
                    <h3>Affiliate Area</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="affiliate-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <div class="affiliate-wrapper"> 
                    <?php                                               
                        echo do_shortcode('[affiliate_area]');
                     ?>                 
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();


                            
?>