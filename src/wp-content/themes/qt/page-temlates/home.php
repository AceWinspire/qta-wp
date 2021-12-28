<?php

/**
 * Template Name: Home
 *
 */

get_header();

?>

<!-- Start Banner Hero -->
<?php get_template_part('template-parts/hero', 'slider'); ?>
<!-- End Banner Hero -->

<!-- Start Service -->
<?php get_template_part('template-parts/services'); ?>
<!-- End Service -->

<!-- Start View Work -->
<?php get_template_part('template-parts/portfolio'); ?>
<!-- End View Work -->

<?php
get_footer();
