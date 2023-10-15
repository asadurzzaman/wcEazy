<?php
get_header();
?>
<style>
.footer-area {
/*     margin-top: 100px; */
    padding-top: 100px !important;
}
</style>

<!-- Single Blog Content -->
<div class="single-blog-content-area">
    <div class="single-container">
        <div class="single-blog-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <?php if (have_posts()) :
                            /* Start the Loop */
                            while (have_posts()) :
                                the_post();

                                get_template_part('loop-templates/content', 'single');

                            endwhile;
                        endif;
                        ?>

                        <div class="post-navigation">
                            <div class="post-nav-links">
                                <div class="nav-previous">
                                    <?php
                                    $prev_post = get_previous_post();
                                    if (!empty($prev_post)) : ?>
                                        <a href="<?php echo get_permalink($prev_post->ID); ?>"><i class="fa-solid fa-arrow-left-long"></i>Previous Post</a>
                                    <?php endif; ?>
                                </div>
                                <div class="nav-next">
                                    <?php
                                    $next_post = get_next_post();
                                    if (!empty($next_post)) : ?>
                                        <a href="<?php echo get_permalink($next_post->ID); ?>">Next Post<i class="fa-solid fa-arrow-right-long"></i></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div> <!-- post-navigation end -->

                        <?php
                        if (comments_open() && !post_password_required()) {
                            comments_template();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Blog Content End -->


<?php
get_footer();
?>

<div class="container"></div>
<div class="row">
    <div class="col-xl-3"></div>
</div>
</div>