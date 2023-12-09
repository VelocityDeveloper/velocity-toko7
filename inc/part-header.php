<div class="container scroll-header bg-topheader text-white py-1 px-2">
    <div class="kontak-header text-md-start align-items-center justify-content-end py-0 m-0">
        <div class="px-1 d-none d-md-block"><?php echo do_shortcode('[kontak style="false"]'); ?></div>
        <div class="px-1 d-none d-md-block"><?php echo do_shortcode('[vd-search]'); ?></div>
        <div class="px-1 d-md-none d-block"><?php echo get_search_form(); ?></div>
        <div class="px-1 profile-icons"><?php echo do_shortcode('[cart]'); ?></div>
    </div>
</div>

<div class="card rounded-0 p-0 py-1 mt-3 border-light border-0 container">
    <nav id="main-navi" class="m-md-0 my-2 p-0 navbar navbar-expand-md d-block navbar-light bg-white p-0" aria-labelledby="main-nav-label">

        <div class="menu-header text-start d-md-none position-relative" data-bs-theme="dark">

            <button class="navbar-toggler p-0 m-2 rounded-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavOffcanvas" aria-controls="navbarNavOffcanvas" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'justg'); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-dark bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg> Menu
            </button>

        </div>

        <div class="menu-styles bg-white">
            <div class="pb-0">

                <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarNavOffcanvas">

                    <div class="offcanvas-header justify-content-end">
                        <button type="button" class="btn-close btn-close-dark text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div><!-- .offcancas-header -->

                    <!-- The WordPress Menu goes here -->
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'container_class' => 'offcanvas-body',
                            'container_id'    => '',
                            'menu_class'      => 'navbar-nav navbar-light justify-content-md-start justify-content-start flex-md-wrap flex-grow-1',
                            'fallback_cb'     => '',
                            'menu_id'         => 'primary-menu',
                            'depth'           => 4,
                            'walker'          => new justg_WP_Bootstrap_Navwalker(),
                        )
                    ); ?>

                </div><!-- .offcanvas -->
            </div>

    </nav><!-- .site-navigation -->
</div>

<div class="card container p-0 rounded-0 border-light border-0 shadow">
    <div class="haeder-images">
        <?php if (has_header_image()) {
            echo '<a href="' . get_home_url() . '">';
            echo '<img class="w-100" src="' . esc_url(get_header_image()) . '" />';
            echo '</a>';
        } ?>
    </div>
</div>