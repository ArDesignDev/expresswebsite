<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aquaAr
 */

?>
<!doctype html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="site">


<div class="header-wrapper">
	<div class="container">
	<header id="header" class="header">

			<!-- Site logo -->
			<div class="header-logo">
				<a href="<?php echo home_url(); ?>" rel="home">	
				  	Express website
				</a>			
			</div>

			<nav id="site-navigation" class="main-navigation nav-toggle">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>

			<div class="header-cta">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'cta',
						'menu_id'        => 'cta',
					)
				);
				?>
			</div>



		<!-- Main navigation -->
		<div class="header-right">
			<div class="menu-icon">
				<div class="menu-icon-middle"></div>
			</div>
		</div>


	</header>


</div>

</div>
