<?php

/**
 * Template Name: Contact
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
                    <h3>Contact</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="contact-wrapper">
                    <?php echo do_shortcode('[fluentform id="1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>