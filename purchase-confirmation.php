<?php

/**
 * Template Name: Purchase Confirmation 
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

<!-- Checkout  Area  -->
<section class="wfn-purchase-confirm-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="page-title">
                    <h3>Thank you for your purchase!</h3>
                </div>
                <div class="purchase-confirm-wrapper">
                    <?php echo do_shortcode('[edd_receipt]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>