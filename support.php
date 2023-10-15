<?php

if ( is_user_logged_in() ) {
    wp_redirect(site_url('my-account/?target_tab=support'));
    exit;
}

/**
 * Template Name: Support
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
                    <h3>Support Tickets</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="login-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="login-wrapper">
                    <h3 class="wfn_ticket-title">Please login to view tickets</h3> 
                    <?php 
                        $home_url = home_url();                       
                        echo do_shortcode('[edd_login redirect="'.$home_url. '/my-account/?target_tab=support' .'"]');
                     ?>
                     <div class="sign-btn-wrapper">
                        <p> New user to wcFusion? <a href="<?php echo  home_url() . '/sign-up'; ?>" class="signup-btn">Sign Up Now</a></p> 
                     </div> 
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
?>