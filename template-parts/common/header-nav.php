<?php
    if ( has_nav_menu( 'main-menu' ) ) {
    $nav =  wp_nav_menu(
                array(
                    'theme_location'  => 'main-menu',
                    'container'       => 'ul',
                    'container_class' => 'main-nav-wrapper',
                    'link_before'     => '',
                    'link_after'      => '',
                    'after'           => '<i class="fl flaticon-plus">+</i>',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'fallback_cb'     => '',
                    'menu_id'         => '',
                    'depth'           => 4,
                    'echo'            => false
                )
            );
        $nav = str_replace("menu-item-has-children", " menu-item-has-children has-child-menu",$nav );  

            echo $nav;
    }

?>