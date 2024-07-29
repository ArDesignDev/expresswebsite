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
 * @package aquaAr
 */

get_header();
?>

	<main id="home-page" class="site-main">



	<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	        <?php aquaAr_post_thumbnail(); ?>

			<div class="entry-content">
				<?php
				the_content();

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aquaAr' ),
						'after'  => '</div>',
					)
				);
				?>
			</div>

			</article>

		<?php
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>



<?php
get_footer();
