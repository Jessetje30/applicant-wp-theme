<section class="block-companies">
    <div class="container">
        <div class="companies-holder">
                <h4 class="text-center"><?php the_field('title'); ?></h4>
            <div class="row">
                <?php

                if (have_rows('companies')):
                    while (have_rows('companies')) : the_row('companies');
                        ?>
                        <div class="col-6 col-sm-4 col-md-3 d-flex align-items-end flex-wrap">
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