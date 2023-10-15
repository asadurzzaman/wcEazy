<?php
get_header();
?>

<style>
    .header-area {
        display: none !important;
    }

    .footer-area {
        display: none;
    }
</style>


<section class="not-found-area">
    <div class="container">
        <div class="row custom-row">
            <div class="col-sm-4">
                <div class="not-found-left-wrapper">
                    <div class="sub-title">
                        <span>Page Not Found</span>
                    </div>
                    <div class="title">
                        <h3>Oh No! Error 404</h3>
                    </div>
                    <div class="content">
                        <p>Maybe Bigfoot has broken this page.
                            Come back to the homepage</p>
                    </div>
                    <div class="back-btn">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn banner-btn-custom">Back to Homepage</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="not-found-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/not-found.jpg" alt="">
                </div>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();
?>