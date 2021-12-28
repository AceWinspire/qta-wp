<?php
$queried_obj  = get_queried_object();
$args = array(
    'post_type' => 'recentwork',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order'   => 'DESC',
);
$loop = new WP_Query($args);

?>
<section class="bg-secondary">
    <div class="container py-5">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bx bxs-box bx-lg'></i>
            </div>
            <div class="col-lg-7 col-12 text-light pt-2">
                <h3 class="h4 light-300">Great transformations successful</h3>
                <p class="light-300">Quis ipsum suspendisse ultrices gravida.</p>
            </div>
            <div class="col-lg-3 col-12 pt-4">
                <a href="#" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">View Our Work</a>
            </div>
        </div>
    </div>
</section>

<!-- Start Recent Work -->
<section class="py-5 mb-5">
    <div class="container">
        <div class="recent-work-header row text-center pb-5">
            <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">Recent Works</h2>
        </div>
        <div class="row gy-5 g-lg-5 mb-4">
            <?php
            if ($loop->have_posts()) {
                while ($loop->have_posts()) {
                    $loop->the_post();
                    get_template_part('template-parts/cards/work', 'card');
                }
            } else {
                echo '<h1>Please cteate some rercent work posts</h1>';
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
