<?php
/**
 * Template Name: Front Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package exploreOutdoor
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <header style="background: linear-gradient(rgba(0, 0, 0, 0.59),rgba(0, 0, 0, 0.59)), url('<?php bloginfo('stylesheet_directory'); ?>/assets/images/pexels-photo-428400.jpeg');  background-position: center; background-repeat: no-repeat; background-size: cover;">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand grey" href="#"><strong>explore</strong><span class="green">Outdoor</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                        <?php bootstrap_nav(); ?>
                        <form class="form-inline my-2 my-lg-0">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign Up</button>
                            <a href="#">Sign In</a>
                        </form>
                    </div>
                </nav>
                <div class="call">
                    <h1>Explore.<span class="green">Adapt.</span>Evolve.</h1>
                    <div class="btnArea">
                        <a href="#" class="borderBtn">Explore</a>
                        <a href="#" class="fullBtn">Contact</a>
                    </div>
                </div>
            </header>

            <section class="section1 row">
                <div class="col-4 call">
                    <h3>No need to worry</h3>
                    <hr>
                    <p>Praesent aliquet commodo convallis. Maecenas cursus odio non dolor placerat auctor. Nulla non diam posuere, lacinia orci nec, dictum tellus. Nulla lacinia id augue sit amet blandit. Suspendisse quis vulputate mi.</p>
                </div>
                <div class="col-8">
                    <div class="image" style="background: linear-gradient(rgba(0, 0, 0, 0.59),rgba(0, 0, 0, 0.59)), url('<?php bloginfo('stylesheet_directory'); ?>/assets/images/bonfire-camp-campfire-1061640.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
                </div>
            </section>

            <section class="section2 row">
                <div class="col-4">
                    <div class="image" style="background: linear-gradient(rgba(0, 0, 0, 0.59),rgba(0, 0, 0, 0.59)), url('<?php bloginfo('stylesheet_directory'); ?>/assets/images/camp-camping-dark-45241.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
                </div>
                <div class="col-8 call">
                    <h3>Easy to setup</h3>
                    <hr>
                    <p>Praesent aliquet commodo convallis. Maecenas cursus odio non dolor placerat auctor. Nulla non diam posuere, lacinia orci nec, dictum tellus. Nulla lacinia id augue sit amet blandit. Suspendisse quis vulputate mi.</p>
                    <p>Praesent aliquet commodo convallis. Maecenas cursus odio non dolor placerat auctor. Nulla non diam posuere, lacinia orci nec, dictum tellus. Nulla lacinia id augue sit amet blandit. Suspendisse quis vulputate mi.</p>
                </div>
            </section>

            <section class="section3">
                <div class="image" style="background: linear-gradient(rgba(19, 122, 3, 0.4),rgba(19, 122, 3, 0.4)), url('<?php bloginfo('stylesheet_directory'); ?>/assets/images/adventure-camping-clouds-743765.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    <h2><strong>The world's most reliable tent</strong></h2> 
                    <p>In porttitor egestas dolor sed sagittis. Fusce et leo sit amet tortor vulputate dictum a non massa.
                        In augue elit, tincidunt sed nisl vitae, efficitur lobortis diam. </p>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
