<section class="block-companies">
    <div class="container">
        <div class="companies-holder">
            <div class="h4 text-center">
                <h4><?php the_field('title'); ?></h4>
            </div>
            <div class="d-flex">
                <?php

                if (have_rows('companies')):
                    while (have_rows('companies')) : the_row('companies');
                        ?>
                        <div class="logo-wrapper">
                            <?php if (get_sub_field('link')): ?>
                            <a href="<?php the_sub_field('link') ?>">
                                <?php endif; ?>
                                <img src="<?php the_sub_field('logo'); ?>"
                                     alt="<?php the_sub_field('name') ?>"
                                     class="img-fluid"/>
                                <?php if (get_sub_field('link')): ?>
                            </a>
                        <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>