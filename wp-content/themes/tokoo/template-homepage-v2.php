<?php
/**
 * Template name: Home v2
 *
 * @package tokoo
 */

remove_action( 'tokoo_before_site_content', 'tokoo_breadcrumb', 10 );

get_header();
    
    do_action( 'tokoo_before_home_v2' ); ?>
    
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            /**
             */
            do_action( 'tokoo_home_v2' ); ?>

        </main><!-- #main -->
    </div><!-- #primary -->

    <?php do_action( 'tokoo_after_home_v2' );

get_footer();