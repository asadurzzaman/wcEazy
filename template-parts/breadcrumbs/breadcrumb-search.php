   <!-- =============== Breadcrumb area start =============== -->
<div class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-14.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="breadcrumb-content">
                        <h3><?php printf( esc_html__( 'Search Results for: %s', 'conskip' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
                    <h5>We Make the world’s Beautiful Everyday.</h5>
                        <?php
                           conskip_breadcrumb( 'ul', '', 'breadcrumb-links',);
                        ?>
                    
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== Breadcrumb area end =============== -->