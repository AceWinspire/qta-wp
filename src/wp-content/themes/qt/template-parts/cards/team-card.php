<?php
$p_id     = get_the_ID();
$p_title  = get_the_title($p_id);
$p_desc = get_the_content($p_id);
$p_url    = get_permalink($p_id);
$p_img = get_the_post_thumbnail_url($p_id);
?>
<div class="team-member col-md-4">
    <img class="team-member-img img-fluid rounded-circle p-4" src="<?php echo esc_url($p_img); ?>" data-src="<?php echo esc_url($p_img); ?>" alt="<?php echo esc_attr($p_title_raw); ?>">
    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
        <li><?php echo wp_kses_post($p_title); ?></li>
        <li><?php echo esc_attr($p_desc); ?></li>
    </ul>
</div>