<?php
$p_id     = get_the_ID();
$p_title  = get_the_title($p_id);
$p_desc = get_the_content($p_id);
$p_url    = get_permalink($p_id);
$p_img = get_the_post_thumbnail_url($p_id);
?>
<div class="col-md-4 mb-3">
    <a href="<?php echo esc_url($p_url); ?>" class="recent-work card border-0 shadow-lg overflow-hidden">
        <img class="recent-work-img card-img" src="<?php echo esc_url($p_img); ?>" data-src="<?php echo esc_url($p_img); ?>" alt="<?php echo esc_attr($p_title_raw); ?>">
        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                <h3 class="card-title light-300"><?php echo wp_kses_post($p_title); ?></h3>
                <p class="card-text"><?php echo esc_attr($p_desc); ?></p>
            </div>
        </div>
    </a>
</div>