<?php

function coddin_block_category($categories, $post)
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'coddin-blocks',
                'title' => __('Coddin blokken', 'coddin-blocks'),
            ),
        )
    );
}

add_filter('block_categories', 'coddin_block_category', 10, 2);

function applicant_block_render_callback($block)
{
    $slug = str_replace('acf/', '', $block['name']);

    if (file_exists(get_theme_file_path("/template-parts/blocks/block-{$slug}.php"))) {
        ob_start();
        include(get_theme_file_path("/template-parts/blocks/block-{$slug}.php"));
        $content = ob_get_clean();
        echo str_replace("\n", "", $content);
    }

    remove_filter ('the_content', 'wpautop');
}


add_action('acf/init', 'applicant_block_init');
function applicant_block_init()
{
    if (function_exists('acf_register_block')) {

        acf_register_block(array(
            'name' => 'hero',
            'title' => __('Hero'),
            'description' => __('A custom hero block.'),
            'render_callback' => 'applicant_block_render_callback',
            'category' => 'coddin-blocks',
            'icon' => 'feedback',
            'keywords' => array('hero'),
        ));

        acf_register_block(array(
            'name' => 'text-with-image',
            'title' => __('Tekst met plaatje'),
            'description' => __('A custom block, text with image.'),
            'render_callback' => 'applicant_block_render_callback',
            'category' => 'coddin-blocks',
            'icon' => 'id',
            'keywords' => array('text', 'image'),
        ));

        acf_register_block(array(
            'name' => 'blog-posts',
            'title' => __('Blog kolommen'),
            'description' => __('A custom block, blog with columns.'),
            'render_callback' => 'applicant_block_render_callback',
            'category' => 'coddin-blocks',
            'icon' => 'admin-site-alt3',
            'keywords' => array('blog'),
        ));

        acf_register_block(array(
            'name' => 'companies',
            'title' => __('Bedrijven'),
            'description' => __('A custom block, with companies that believe in us.'),
            'render_callback' => 'applicant_block_render_callback',
            'category' => 'coddin-blocks',
            'icon' => 'admin-site-alt',
            'keywords' => array('companies'),
        ));

        acf_register_block(array(
            'name' => 'all-blogs',
            'title' => __('Alle blogs'),
            'description' => __('A custom block, showing all blogs.'),
            'render_callback' => 'applicant_block_render_callback',
            'category' => 'coddin-blocks',
            'icon' => 'admin-site-alt',
            'keywords' => array('blogs', 'blog'),
        ));

        acf_register_block(array(
            'name' => 'features',
            'title' => __('Features'),
            'description' => __('A custom block, showing all features.'),
            'render_callback' => 'applicant_block_render_callback',
            'category' => 'coddin-blocks',
            'icon' => 'feedback',
            'keywords' => array('feature', 'features'),
        ));
    }
}