<?php

/**
 * Template Name: About Us
 *
 */

get_header();
?>
<!-- Start Banner Hero -->
<section class="bg-light w-100">
    <div class="container">
        <div class="row d-flex align-items-center py-5">
            <div class="col-lg-6 text-start">
                <h1 class="h2 py-5 text-primary typo-space-line"><?php the_title() ?></h1>
                <p class="light-300">
                    <?php echo get_post_field('post_content', $post->ID); ?>
                </p>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/banner-img-02.svg'); ?>">
            </div>
        </div>
    </div>
</section>
<!-- End Banner Hero -->

<!-- Start Team Member -->
<?php get_template_part('template-parts/team'); ?>
<!-- End Team Member -->

<!-- Start Our Partner -->
<?php get_template_part('template-parts/partner'); ?>
<!--End Our Partner-->

<!-- Start Progress -->
<?php get_template_part('template-parts/creative'); ?>
<!-- End Progress -->

<!-- Start Choice -->
<?php get_template_part('template-parts/choice'); ?>
<!-- End Choice -->

<!-- Start Aim -->
<?php get_template_part('template-parts/aim'); ?>
<!-- End Aim -->

<!-- Start Contact -->
<?php get_template_part('template-parts/contact'); ?>
<!-- End Contact -->

<?php
get_footer();
