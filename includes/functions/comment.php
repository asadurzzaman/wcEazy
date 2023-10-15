<?php


// Comment list
function woofusion_comments($comment, $args, $depth){
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);
    ?>

        <ul class="comment-section">
            <li class="single-comment">
                <div class="single-comment-left">

                <?php
                    if(get_avatar($comment)) : 
                ?>                  
                    <div class="commentor-img">
                        <?php echo get_avatar($comment, 70, null, null, array('class'=> 'img-fulid')); ?>
                    </div>
                <?php endif ?>

                    <div class="comment-info">
                        <div class="comment-header">
                            <p class="commentor-name"><?php echo strtoupper(get_comment_author()); ?></p>

                            <p> ON </p>
                            <p><?php comment_time(get_option('date_format')); ?></p>
                            <?php 	edit_comment_link( __( '(edit)', 'wc-fusion' ), '<p class="edit">', '</p>' ); ?>
                        </div>
                        <div class="comment-text"><?php comment_text(); ?></div>
                    </div>
                </div>
                <div class="single-comment-right">
                    <div class="comment-right">
                        <ul class="comment-icons">
                            <li>
                                <?php comment_reply_link(array_merge( $args, array('reply_text'=>'<span class="btn">Reply</span>', 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                            </li>
                        </ul>
                    </div>
                </div>

            </li>
        </ul>
           
<?php
}


function comment_custom_form( $fields ){
    $comment_field  = $fields['comment'];
    $comment_author = $fields['author'];
    $comment_email  = $fields['email'];
    $comment_url    = $fields['url'];

    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['url'] );
    unset( $fields['cookies'] );
    
    $fields['comment'] = $comment_field;
    $fields['author']  = $comment_author;
    $fields['email']   = $comment_email;
    $fields['url']     = $comment_url;
   
    
    return $fields;
}

add_filter( 'comment_form_fields','comment_custom_form');


// Add custom comment area
function comment_textarea($comment_field) {
    
    $comment_field = '<div class="row"><div class="col-lg-12"><div class="comment-textarea"><label for="comment" class="screen-reader-text"></label><textarea id="comment" name="comment" placeholder="Type here.." cols="45" rows="8" aria-required="true"></textarea></div></div>';


    return $comment_field;
    }
    add_filter( 'comment_form_field_comment', 'comment_textarea' );


// Add custom  fields
function comment_custom_fields( $fields ){
    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );


    $fields['author']  = '<div class="col-lg-4"><div class="comments-input"> <label for="author" class="screen-reader-text"></label><input id="author" name="author" type="text"  placeholder="Name*" size="30" value="'. esc_attr( $commenter['comment_author'] ) .'"  ' . $aria_req . '></div></div>';

    $fields['email']  = '<div class="col-lg-4"><div class="comments-input"><label for="email" class="screen-reader-text"></label><input id="email" name="email" type="text" placeholder="Email*" size="30" value="'. esc_attr( $commenter['comment_author_email'] ) .'"  ' . $aria_req . '></div></div>';

    $fields['url']   =  '<div class="col-lg-4"><div class="comments-input"><label for="url" class="screen-reader-text"></label><input id="url" name="url" type="text"  placeholder="Website" size="30"  value="'. esc_attr( $commenter['comment_author_url'] ) .'"  ' . $aria_req . ' ></div></div></div>';


    return $fields;
}

add_filter( 'comment_form_default_fields','comment_custom_fields');




 // Add custom comment title
 function custom_comment_title( $defaults ) {
    $defaults['title_reply_before'] = '<h3>';
    $defaults['title_reply']        = __( 'Leave A Comment' );
    $defaults['title_after']        = '</h3>';
    $defaults['label_submit'] = 'Post Comment »';
    return $defaults;
}
add_filter( 'comment_form_defaults', 'custom_comment_title' );