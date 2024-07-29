<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package aquaAr
 */

get_header();
?>

	<main id="primary" class="site-main single-blog">
		<div class="blog-inner">
		<div class="container-mini">

			<div class="row">
				<div class="col-sm-12">
					<div class="blog-posts">
					<div class="row">
					<?php
							while ( have_posts() ) :
								the_post(); ?>

								<div class="single-post-wrapper">
						

								<?php the_content();

								the_post_navigation(
									array(
										'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i> <span class="nav-title">%title</span>',
										'next_text' => '<span class="nav-title">%title</span> <i class="fa fa-angle-right" aria-hidden="true"></i>',
									)
								);

								 ?>
								
								</div>

							<?php	
							endwhile; // End of the loop.
							?>

									
						</div>
					</div>		
				</div>
				

			</div>

		</div>
	</div>

		
		

	</main><!-- #main -->

<?php
get_footer();
