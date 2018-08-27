<?php
/**
 * Template Name: Products Page
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
            <nav class="navbar navbar-expand-lg justify-content-between greyNav">
                <a class="navbar-brand"></a>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 darkSearch" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav>

            <section class="row productArea">
                <div class="col-3" style="background: linear-gradient(rgba(0, 0, 0, 0.59),rgba(0, 0, 0, 0.59)), url('<?php bloginfo('stylesheet_directory'); ?>/assets/images/adventure-autumn-camp-756780.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    <h3>Family Tent</h3>
                    <button class="btn btn-outline-success my-2 my-sm-0 btnSmall">See More</button>
                </div>
                <div class="col-3" style="background: linear-gradient(rgba(0, 0, 0, 0.59),rgba(0, 0, 0, 0.59)), url('<?php bloginfo('stylesheet_directory'); ?>/assets/images/adventure-autumn-camp-756780.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    <h3>Single Tent</h3>
                    <button class="btn btn-outline-success my-2 my-sm-0 btnSmall">See More</button>
                </div>
                <div class="col-3" style="background: linear-gradient(rgba(0, 0, 0, 0.59),rgba(0, 0, 0, 0.59)), url('<?php bloginfo('stylesheet_directory'); ?>/assets/images/adventure-autumn-camp-756780.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    <h3>The Tree Hanging Tent</h3>
                    <button class="btn btn-outline-success my-2 my-sm-0 btnLarge">See More</button>
                </div>
                <div class="col-3" style="background: linear-gradient(rgba(0, 0, 0, 0.59),rgba(0, 0, 0, 0.59)), url('<?php bloginfo('stylesheet_directory'); ?>/assets/images/adventure-autumn-camp-756780.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    <h3>The LightWeight Tent</h3>
                    <button class="btn btn-outline-success my-2 my-sm-0 btnLarge">See More</button>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
