<?php

?>
<section class="fp-content">
    <div class="blog-block">
        <div class="container">
            <div class="content-wrapper">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-4 fpc-articles">
                        <h2 class="fpc-title">
                            <?php the_field('title_block_1'); ?>
                        </h2>
                        <div class="fpc-text">
                            <?php the_field('text_block_1'); ?>
                        </div>
                        <?php if(get_field('button')): ?>
                        <a href="<?php the_field('button_link_block_1'); ?>" class="btn main-button">
                            <span><?php the_field('button_text_block_1'); ?></span>
                        </a>
                        <?php endif; ?>
                    </div>

                    <?php

                    $args = array(
                        'numberposts' => 2,
                        'offset' => 0,
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'suppress_filters' => true
                    );

                    $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
                    ?>

                    <?php foreach ($recent_posts as $recent_post) : ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="<?php echo get_permalink($recent_post['ID']); ?>" class="card">
                            <img src="<?php echo get_the_post_thumbnail_url($recent_post['ID'], 'large'); // @todo add image size for this ?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $recent_post['post_title']; ?></h4>
                                <?php echo get_the_excerpt($recent_post['ID']); ?>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
