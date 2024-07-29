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
		<div class="banner-container">
			<?php // get_template_part( 'template-parts/blocks/banner-blog', 'page' ); ?>
		</div>

		<!--
		<div class="container">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
			?>
		</div>
			-->
		<div class="blog-inner">
		<div class="container-mini">

			<div class="row">
				<!--
				<div class="col-sm-3">
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
				</div>-->
				<div class="col-sm-12">
					<div class="blog-posts">
					<div class="row">
					<?php
							while ( have_posts() ) :
								the_post(); ?>

								<div class="single-post-wrapper">
									
									<?php the_post_thumbnail(); ?>

										<div class="single-blog-title-wrapper">

											<h1 class="single-blog-title"><?php the_title(); ?></h1>
											<div class="single-blog-category">
												<?php
													$categories = get_the_category();
													$separator = ", ";
													$output = '';

													if ($categories) {

														foreach ($categories as $category) {

															$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;

														}

														echo trim($output, $separator);

													}
												?>
											</div>
										</div>
												
									
		
													
								<div class="single-blog-meta">
									<span class="single-blog-meta-date">Posted on: <?php the_time(get_option('date_format')); ?></span>
									<span class="single-blog-meta-author">Posted By  <?php the_author_posts_link(); ?></span>
								</div> 

								
						

								<?php the_content();

								the_post_navigation(
									array(
										'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i> <span class="nav-title">%title</span>',
										'next_text' => '<span class="nav-title">%title</span> <i class="fa fa-angle-right" aria-hidden="true"></i>',
									)
								);


								// If comments are open or we have at least one comment, load up the comment template.
								/*
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif; */
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
