<?php get_header(); ?>
<!-- -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero">
                        Hero
                    </section>
                    <section class="services">
                        <h2>Services</h2>
                        <div class="container">
                            <?php get_template_part('parts/content', 'services'); ?>
                        </div>
                    </section>
                    <section class="home-blog">
                        <h2>Latest News</h2>
                        <div class="container">
                                <?php

                                $args =array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 3,
                                    'category__in' => array(6,5),
                                    'category__not_in' => array(1)

                                );
                                $postlist = new WP_Query( $args );

                                    if( $postlist->have_posts() ):
                                        while( $postlist->have_posts() ) : $postlist->the_post();
                                        get_template_part('parts/content','latest-news');
                                        endwhile;
                                        wp_reset_postdata();
                                    else: ?>
                                        <p>Nothing yet to be displayed!</p>
                                    <?php endif; ?>
                        </div>
                    </section>
                </main>
            </div>
        </div>
<!-- -->
<?php get_footer(); ?>