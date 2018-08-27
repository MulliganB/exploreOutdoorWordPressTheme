<?php
/**
 * Template Name: Contact Page
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
            <header class="contactHead">
                <nav class="navbar navbar-expand-lg darkNav">
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
            </header>

            <section class="contentContact">
                <?php get_the_content(); ?>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
