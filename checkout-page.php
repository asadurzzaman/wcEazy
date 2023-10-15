<?php

/**
 * Template Name: Checkout Page Template
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
<section class="wfn-checkout-area">
    <div class="container">
        <div class="row">
           <div class="col-sm-8 offset-sm-2">
               <h3 class="checkout-page-title" >Checkout</h3>
               <div class="checkout-wrapper">
                  <?php  echo do_shortcode( '[download_checkout]' ); ?>
               </div>             
           </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>