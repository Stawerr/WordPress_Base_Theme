<?php get_header(); ?>
<!-- -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero" style="background-image: url('http://localhost/udemy/wp-content/uploads/2022/11/Foto_Vinhos.jpg')">
                        <div class="overlay" style="min-height: 800px">
                            <div class="container">
                                <div class="hero-items">
                                    <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad atque eaque
                                        exercitationem harum incidunt ipsam maxime nesciunt, nostrum possimus, quaerat,
                                        quidem repellendus suscipit.
                                    </p>
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
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