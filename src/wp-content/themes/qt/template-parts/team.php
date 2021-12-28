<?php
$args = array(
    'post_type' => 'ourteam',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order'   => 'DESC',
);
$loop = new WP_Query($args);
?>
<section class="container py-5">
    <div class="pt-5 pb-3 d-lg-flex align-items-center gx-5">
        <div class="col-lg-3">
            <h2 class="h2 py-5 typo-space-line">Our Team</h2>
            <?php echo str_replace('<p>', '<p class="text-muted light-300">', get_field('our_team_desc')); ?>
        </div>
        <div class="col-lg-9 row">
            <?php
            if ($loop->have_posts()) {
                while ($loop->have_posts()) {
                    $loop->the_post();
                    get_template_part('template-parts/cards/team', 'card');
                }
            } else {
                $post_large = '<h1>Please create some rercent work posts</h1>';
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>