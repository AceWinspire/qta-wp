<section class="bg-white py-5">
    <div class="container my-4">
        <h1 class="creative-heading h2 pb-3">Creative & Make Perfect</h1>
        <div class="creative-content row py-3">
            <div class="col-md-5">
                <p class="text-muted col-lg-8 light-300"><?php the_field('creative_desc') ?>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus.
                </p>
            </div>
            <div class="creative-progress col-md-7">
                <div class="row mt-4 mt-sm-2">
                    <div class="col-6">
                        <h4 class="h5">Development</h4>
                    </div>
                    <div class="col-6 text-right"><?php the_field('development'); ?>%</div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: <?php the_field('development'); ?>%" aria-valuenow="<?php the_field('development'); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="row mt-4 mt-sm-2">
                    <div class="col-6">
                        <h4 class="h5">Design</h4>
                    </div>
                    <div class="col-6 text-right"><?php the_field('design'); ?>%</div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: <?php the_field('design'); ?>%" aria-valuenow="<?php the_field('design'); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="row mt-4 mt-sm-2">
                    <div class="col-6">
                        <h4 class="h5">Marketing</h4>
                    </div>
                    <div class="col-6 text-right"><?php the_field('marketing'); ?>%</div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: <?php the_field('marketing'); ?>%" aria-valuenow="<?php the_field('marketing'); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</section>