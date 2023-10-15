<?php
get_header();
?>

<section class="wfn-blog pt-5">
    <div class="container">
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
    </div>
</section>


<?php
get_footer();
?>