<?php
/**
 * Template Name: Login Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coddin
 */

get_header();
?>

    <!--	<div id="primary" class="content-area">-->
    <!--		<main id="main" class="site-main">-->
    <!--            <div class="container">-->
<?php
while ( have_posts() ) : the_post();

//            the_content();

endwhile;
?>
    <section id="hero" class="sign-up">
        <div class="container">
            <div class="row">
                <div class="col-md-12 justify-content-center d-flex">
                    <div class="form-block">
                        <h3 class="mb-5 d-flex justify-content-center">
                            LOGIN
                        </h3>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group mb-2">
                                <input type="password" class="form-control" placeholder="Wachtwoord">
                            </div>
                            <div class="form-group d-flex justify-content-end mt-2">
                                <a class="forgot-password" href="#">Wachtwoord vergeten?</a>
                            </div>
                            <div class="submit d-flex justify-content-center">
                                <input type="submit" value="LOG IN">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-text justify-content-center d-flex mt-4">
                        <span>
                        Heeft u nog geen account? <a class="" href="#">Registeren</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--            </div>-->
    <!--		</main> #main -->
    <!--	</div> #primary -->

<?php
get_footer();
