<?php

/**
 * Template Name: Sign Up
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
                    <h3>Create Account</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="signup-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="signup-wrapper"> 
                    <?php 
                        $home_url = home_url();
                        echo do_shortcode('[edd_register redirect="'.$home_url. '/my-account' .'"]');
                     ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
?>