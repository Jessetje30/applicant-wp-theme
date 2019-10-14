<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coddin
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <section id="header-hero"
             style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/bg-hero.png');" class="">
        <header>
            <div class="container">
                <div class="account d-none d-md-block">
                    <a href="/sign-up" class="register-btn">Registreer</a>
                </div>
                <nav class="navbar navbar-expand-xl">
                    <div class="logo">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="logo"
                                 class="img-fluid">
                        </a>
                    </div>

                    <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#primary-menu"
                            aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'navbar-collapse collapse',
                        'container_id' => 'primary-menu',
                        'menu_class' => 'navbar-nav navbar-right ml-auto',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker()
                    ));
                    ?>
                </nav>
            </div>
        </header>
        <svg class="hero-footer" xmlns="http://www.w3.org/2000/svg" width="100%" preserveAspectRatio="none"
             viewBox="0 0 1920 670">
            <path d="M0,1131.23H1920v-670s2.449,314.139-382.041,409.854-715.1-105.531-1045.714-51.538S0,1020.791,0,1020.791Z"
                  transform="translate(0 -461.23)" fill="#fff"/>
        </svg>