<?php

/**
 * Template Name: Login
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
                    <h3>Login to your Account</h3>
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
                    <?php 
                        $home_url = home_url();                       
                        echo do_shortcode('[edd_login redirect="'.$home_url. '/my-account' .'"]');
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