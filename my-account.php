<?php
if (!is_user_logged_in()) {
    wp_redirect(site_url('log-in'));
    exit;
}

/**
 * Template Name: Myaccount Page Template
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

<?php 
    $target_tab = isset($_GET['target_tab']) ? $_GET['target_tab'] : 'dashboard';
    $display_block = "display:block;";
    $display_none = "display:none;";
?>

<!-- Checkout  Area  -->
<section class="wfn-myaccount-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="myaccount-wrapper">
                    <div class="tabs">
                        <a class="tab_item <?php echo ($target_tab == 'dashboard') ? 'active' : '';?>" href="<?php echo home_url() . '/my-account?target_tab=dashboard'; ?>" data-target="tab_dashboard">Dashboard</a>
                        <a href="<?php echo home_url() . '/my-account?target_tab=purches_history'; ?>" class="tab_item <?php echo ($target_tab == 'purches_history') ? 'active' : '';?>" data-target="tab_purchase_history">Purchase History</a>
                        <a href="<?php echo home_url() . '/my-account?target_tab=support'; ?>" class="tab_item <?php echo ($target_tab == 'support') ? 'active' : '';?>" data-target="tab_support">Support</a>
                        <a href="<?php echo home_url() . '/my-account?target_tab=profile'; ?>" class="tab_item <?php echo ($target_tab == 'profile') ? 'active' : '';?>" data-target="tab_profile">Profile</a>
                        <a class="tab_item" href="<?php echo wp_logout_url(home_url() . '/log-in'); ?>" class="btn btn-left-custom">Log Out</a>
                
                    </div>

                    <div class="tap-body-wrapper">
                        <div class="tab_body" style="<?php echo ($target_tab == 'dashboard') ? $display_block : $display_none; ?>">

                            <div class="download-file">
                                 <?php echo do_shortcode('[download_history]'); ?>
                            </div>
                        </div>
                        <div class="tab_body" style="<?php echo ($target_tab == 'purches_history') ? $display_block : $display_none; ?>">
                            <?php echo do_shortcode('[purchase_history]'); ?>
                        </div>
                        <div class="tab_body" style="<?php echo ($target_tab == 'support') ? $display_block : $display_none; ?>">
                            <?php echo do_shortcode('[fluent_support_portal]'); ?>
                        </div>
                        <div class="tab_body" style="<?php echo ($target_tab == 'profile') ? $display_block : $display_none; ?>">
                            <?php echo do_shortcode('[edd_profile_editor]'); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<?php
get_footer();
?>