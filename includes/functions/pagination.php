<?php
function woofusion_pagination(){
    global $wp_query;
	$links = paginate_links( array(
		'current'  => max( 1, get_query_var( 'paged' ) ),
		'total'    => $wp_query->max_num_pages,
		'type'     => 'list',
		'mid_size' => apply_filters( "conskip_pagination_mid_size", 7 ),
        'prev_text' => __('<i class="fa-solid fa-arrow-left-long"></i>'),
        'next_text' => __('<i class="fa-solid fa-arrow-right-long"></i>')
	) );

    $links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination justify-content-center'>", $links );
    $links = str_replace( "<li>", "<li class='page-item'>", $links );
    
	echo wp_kses_post( $links );
}