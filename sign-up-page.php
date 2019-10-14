<?php
/**
 * Template Name: Sign-up Template
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
while (have_posts()) : the_post();

//            the_content();

endwhile;
?>
    <section id="hero" class="sign-up">
        <div class="container">
            <div class="row">
                <div class="col-md-12 justify-content-center d-flex">
                    <div class="form-block">
                        <h3 class="mb-5 d-flex justify-content-center">
                            Registreer
                        </h3>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Wachtwoord">
                            </div>
                            <div class="form-group mb-2">
                                <input type="password" class="form-control" placeholder="Herhaal Wachtwoord">
                            </div>
                            <h3 class="d-flex justify-content-start mt-4">
                                Naam
                            </h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Voornaam">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <input type="text" class="form-control" placeholder="Achternaam">
                                </div>
                            </div>
                            <h3 class="d-flex justify-content-start mt-4">
                                Bedrijf
                            </h3>
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <input type="text" class="form-control" placeholder="KvK-nummer">
                                </div>
                                <div class="form-group checkbox d-flex justify-content-center mt-4">
                                </div>
                            </div>
                            <label>
                                <input type="checkbox">
                                Ik accepteer de <a href="#">Algemene Voorwaarden</a>
                            </label>
                            <div class="submit btn-hero d-flex justify-content-center">
                                <input type="submit" value="SIGN UP">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-text justify-content-center d-flex mt-4">
                        <span>
                        Heeft u een account? <a href="/log-in">Log in</a>
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
