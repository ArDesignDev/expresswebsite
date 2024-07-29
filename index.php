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

<main id="primary" class="site-main site-main-index blog">

	<div class="banner-container">
		<?php get_template_part( 'template-parts/blocks/banner-blog', 'page' ); ?>
	</div>

	<div class="blog-inner">
		<div class="container-mini">
			<div class="row">
				<div class="col-sm-3" style="display: none;">
					<div class="blog-sidebar">
						<div class="blog-categories">
							<h3>Kategorije</h3>
							<ul>
								<li><a href="<?php echo site_url('/blog'); ?>">Vse objave</a></li>
							</ul>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'blog-categories',
									'menu_id'        => 'blogCategories',
								)
							);
							?>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="blog-posts">
					<div class="row">
						<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) :
								the_post(); ?>
								<div class="col-sm-6">

								<div class="blog-post">
							
									<div class="blog-content">
										<div class="blog-content-top">
											<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3> 
											<h5 class="blog-post-date"><?php the_date(); ?></h5>
											<!--
											<a href="<?php the_permalink();?>">
												<?php the_excerpt('Read more'); ?>
											</a>-->
										</div>
										<!--
										<div class="btn">
											<a href="<?php the_permalink();?>"><?php  esc_html_e( 'Read more', 'aquaAr' );?></a>
										</div>
										-->
									</div>
									<div class="blog-img">
										<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
									</div>
								</div>
													
								</div>
							<?php 
							endwhile;

							//the_posts_navigation();

							else : ?>

							<p>No content</p>

						<?php endif;
						?>


									
						</div>
					</div>	
					
					<div class="blog-pagination">
						<?php aqua_numeric_posts_nav(); ?>
					</div>
				</div>

			</div>



		</div>
	</div>


	</main>

<?php
get_footer();
