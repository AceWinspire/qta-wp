<?php
$p_id     = get_the_ID();
$p_title  = get_the_title($p_id);
$p_desc = get_the_content($p_id);
$p_url    = get_permalink($p_id);
$p_img = get_the_post_thumbnail_url($p_id);
?>
<div <?php post_class('col-xl-3 col-md-4 col-sm-6 project'); ?> data-id="<?php echo esc_attr($p_id); ?>">
    <a href="<?php echo esc_url($p_url); ?>" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
        <img class="card-img" src="<?php echo esc_url($p_img); ?>" data-src="<?php echo esc_url($p_img); ?>" alt="<?php echo esc_attr($p_title_raw); ?>">
        <div class="service-work-vertical card-img-overlay d-flex align-items-end">
            <div class="service-work-content text-left text-light">
                <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300"><?php echo wp_kses_post($p_title); ?></span>
                <p class="card-text"><?php echo esc_attr($p_desc); ?></p>
            </div>
        </div>
    </a>
</div>