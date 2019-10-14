<?php
$query = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1
];
?>
<section class="blogs">
    <div class="blog-block">
        <div class="container">
            <div class="content-wrapper">
                <div class="row">
                    <?php $blogs = new WP_Query($query); ?>
                    <?php if ($blogs->have_posts()): ?>
                        <?php while ($blogs->have_posts()) : $blogs->the_post(); ?>
                            <?php $permalink = get_permalink(); ?>
                            <div class="col-12 col-lg-6 col-xl-4 mb-3">
                                <div class="card h-100">
                                    <a href="<?php echo $permalink; ?>" class="image-link">
                                        <img src="<?php the_post_thumbnail_url() ?>" class="card-img-top" alt="">
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title"><?php the_title(); ?></h4>
                                        <?php the_excerpt(); ?>
                                        <div class="d-flex justify-content-center w-100 align-self-end">
                                            <a href="<?php echo $permalink; ?>" class="btn main-button mt-5">
                                                <span>LEES MEER</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <?php _e('Sorry, there are no posts matched your criteria.'); ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

