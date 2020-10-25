<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Newsphere
 */

get_header(); ?>
    <div class="container">
        
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">

                        <section class="error-404 not-found">
                            <div class="error-wrap">
                            <header class="header-title-wrapper">
                                <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'newsphere'); ?></h1>
                            </header><!-- .header-title-wrapper -->

                            <div class="page-content">
                                <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'newsphere'); ?></p>

                                <?php
                                get_search_form();
                                ?>
                            </div><!-- .page-content -->
                            </div>
                        </section><!-- .error-404 -->

                    </main><!-- #main -->
                </div><!-- #primary -->

            
    </div>
<?php


get_footer();
