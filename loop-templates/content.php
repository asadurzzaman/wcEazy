<div class="col-md-6 col-lg-6 mt-5">
    <div class="wfn-blog-img">

    <?php
        if( has_post_thumbnail()){
            the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid img-custom-style']);
        }
    ?>
     
    </div>
    <div class="wfn-blog-content">
        <div class="blog-text-top">
            <div class="blog-text-top-left">
                <div class="admin-img">
                     <?php echo get_avatar( get_the_author_meta( 'ID' ) , 32 ); ?>
                </div>
                <?php $author_url = get_author_posts_url( get_the_author_meta( "ID" ) );?>
                <a href="javascript:void(0)"> <h5><?php echo  get_the_author(); ?></h5> </a>
            </div>
            <div class="blog-text-top-right text-end">
                <h5><?php echo get_the_date(); ?></h5>
            </div>
        </div>
        <div class="blog-text-bottom">
             <a href="<?php the_permalink(); ?>"> <h3> <?php the_title();  ?> </h3></a> 
        </div>
    </div>
</div>