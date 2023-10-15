<?php
get_header();
?>


<!-- Blog Banner -->
<div class="wfn-blog-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mx-auto">
                <h1>Join our newsletter </h1>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7 mx-auto">
                <form action="#">
                    <input type="email" placeholder="enter your email">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Blog Banner End -->

<section class="wfn-blog pt-5">
    <div class="container">
        <div class="blog-supercharge-position">
            <div class="row">
                <?php if (have_posts()) :
                    /* Start the Loop */
                    while (have_posts()) :
                        the_post();

                        get_template_part('loop-templates/content');

                    endwhile;
                endif;
                ?>

            </div>
            <!-- Blog Pagination Area-->
            <?php  get_template_part( 'template-parts/blog/pagination'); ?>
            <!-- Blog Pagination Area End -->

            <!-- Super charge area -->
            <div class="supercharge blog-supercharge">
                <div class="supercharge-quote">
                    <h2>
                        Supercharge your WooCommerce store today
                    </h2>
                </div>
                <div class="supercharge-btn text-center">
                    <a href="#" class="btn module-btn-custom banner-btn-custom">Get Started Now</a>
                </div>
            </div>
            <!-- Super charge area end-->
        </div>
    </div>
</section>
 
<?php
get_footer();
?>