<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 hero-content">
                <div class="hero-introtext">
                    <?php the_field('intro') ?>
                </div>
                <?php if (get_field('button')): ?>
                    <a class="btn btn-hero mb-3 mr-2" href="<?php the_field('button_link'); ?>">
                        <span><?php the_field('button_text'); ?></span>
                    </a>
                <?php endif; ?>
                <?php if (get_field('button_2')): ?>
                    <a class="btn btn-hero mb-3" href="<?php the_field('button_link_2'); ?>">
                        <span><?php the_field('button_text_2'); ?></span>
                    </a>
                <?php endif; ?>

                <div class="hero-textend">
                    <?php the_field('end_text') ?>
                </div>

            </div>
            <div class="col-12 col-md-7 hero-image">
                <?php if (get_field('hero_image')): ?>
                    <img src="<?php the_field('hero_image'); ?>" class="img-fluid"/>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
</section>