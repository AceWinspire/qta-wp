<div class="banner-wrapper bg-light">
    <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">

        <!-- Start slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <div class="py-5 row d-flex align-items-center">
                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                            <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                <?php the_field('slider_1_title'); ?>
                            </h1>
                            <?php echo str_replace('<p>', '<p class="banner-body text-muted py-3">', get_field('slider_1_subtitle')); ?>
                            <?php
                            $link1 = get_field('slider_1_link');
                            $link_url_1 = $link1['url'];
                            $link_title_1 = $link1['title'];
                            $link_target_1 = $link1['target'] ? $link1['target'] : '_self';
                            ?>
                            <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" role="button" href="<?php echo esc_url($link_url_1); ?>" target="<?php echo esc_attr($link_target_1); ?>"><?php echo esc_html($link_title_1); ?></a>
                         </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="py-5 row d-flex align-items-center">
                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                            <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                <?php the_field('slider_2_title'); ?>
                            </h1>
                            <?php echo str_replace('<p>', '<p class="banner-body text-muted py-3">', get_field('slider_2_subtitle')); ?>
                            <?php
                            $link2 = get_field('slider_2_link');
                            $link_url_2 = $link2['url'];
                            $link_title_2 = $link2['title'];
                            $link_target_2 = $link2['target'] ? $link1['target'] : '_self';
                            ?>
                            <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" role="button" href="<?php echo esc_url($link_url_2); ?>" target="<?php echo esc_attr($link_target_2); ?>"><?php echo esc_html($link_title_2); ?></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="py-5 row d-flex align-items-center">
                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                            <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                <?php the_field('slider_3_title'); ?>
                            </h1>
                            <?php echo str_replace('<p>', '<p class="banner-body text-muted py-3">', get_field('slider_3_subtitle')); ?>
                            <?php
                            $link3 = get_field('slider_2_link');
                            $link_url_3 = $link3['url'];
                            $link_title_3 = $link3['title'];
                            $link_target_3 = $link3['target'] ? $link1['target'] : '_self';
                            ?>
                            <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" role="button" href="<?php echo esc_url($link_url_3); ?>" target="<?php echo esc_attr($link_target_3); ?>"><?php echo esc_html($link_title_3); ?></a>
                        </div>
                    </div>

                </div>
            </div>
            <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <i class='bx bx-chevron-left'></i>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <i class='bx bx-chevron-right'></i>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        <!-- End slider -->

    </div>
</div>
<!-- End Banner Hero -->