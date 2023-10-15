<article>
    <div class="entry-header">
        <div class="single-post-thumb-img">

        <?php
            if( has_post_thumbnail()){
                the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
            }
        ?>
        </div>
        <div class="signle-post-order">
            <div class="entry-title">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="entry-meta">
                <span class="dev-links">
                    <span>Posted</span>
                </span>
                / By
                <span class="posted-by">
                    <?php $author_url = get_author_posts_url( get_the_author_meta( "ID" ) );?>
                    <a href="javascript:void(0)"> <?php echo ucfirst(get_the_author()); ?> </a>
                </span>
            </div>
        </div>
    </div>
    <div class="entry-content">
        <?php  the_content(); ?>
    </div> <!-- entry-content end -->
    
</article>