<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rommel
 * @subpackage PandaCorp
 * @since 1.0.0
 */

get_header();
?>

	<main id="main" class="site-main">
        <div id="primary" class="content-area">

            <!-- Get the content -->
            <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            ?>

            <h1 class="enry-title">
            <!-- Get the page title  -->
                <?php the_title(); ?>
            </h1>

            <?php the_content(); ?>

            <?php endwhile; ?>

            <?php else: ?>

            <p>No posts found..</p>

            <?php endif; ?>            

        </div><!-- #primary -->
	</main>

<?php
get_footer();
