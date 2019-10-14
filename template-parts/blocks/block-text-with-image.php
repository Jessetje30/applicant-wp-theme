<section class="fp-content">
    <div class="container">
        <div class="row-wrapper pb-lg-5">
            <div class="row">
                <div class="col-12 col-md-5 <?php echo (get_field('position') === 'left') ? 'order-1 order-md-2 ' : 'order-2 order-md-1' ?> d-flex align-items-center">
                    <div>
                        <h2 class="fpc-title">
                            <?php the_field('title'); ?>
                        </h2>
                        <div class="fpc-text">
                            <?php the_field('text'); ?>
                        </div>
                        <?php if(get_field('button')): ?>
                            <a href="<?php the_field('button_link'); ?>" class="btn main-button">
                                <span><?php the_field('button_text'); ?></span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-md-7 <?php echo (get_field('position') === 'left') ? 'order-1' : 'order-2' ?> fpc-image-<?php echo (get_field('position') === 'left') ? 'left' : 'right' ?>">
                    <?php if (get_field('image')): ?>
                        <img src="<?php the_field('image'); ?>" class="img-fluid"/>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>