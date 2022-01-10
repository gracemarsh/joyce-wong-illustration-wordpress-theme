<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Joyce_Wong_Concept_Artist
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="description" content="Joyce Wong is a Melbourne-based illustrator and concept artist. Her works range from small, detailed inking pieces to large flourishing paintings. In her spare time she loves exploring the hidden streets and arcades of Melbourne and drinking exorbitant amounts of tea. " />

	<link rel="apple-touch-icon" sizes="180x180" href="<? echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<? echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<? echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png">

	<link rel="manifest" href="<? echo get_stylesheet_directory_uri(); ?>/site.webmanifest">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'joycewongconceptartist'); ?></a>

		<header id="masthead" class="site-header sticky-top">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<div class="d-flex w-100">

						<div class="p-2 ps-0">
							<?php the_custom_logo(); ?>
						</div>

						<div class="d-flex align-items-center">
							<div class="site-title">
								<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="navbar-brand">
									<?php bloginfo('name'); ?>
								</a>

								<div class="site-branding">
									<?php
									$joycewongconceptartist_description = get_bloginfo('description', 'display');
									if ($joycewongconceptartist_description || is_customize_preview()) :
									?>
										<small class="site-description">
											<?php
											echo $joycewongconceptartist_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
											?>
										</small>
									<?php endif; ?>
								</div><!-- .site-branding -->
							</div>
						</div>

						<div class="collapse navbar-collapse d-none d-lg-block">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
						</div>

						<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
					</div>

					<div class="collapse navbar-collapse d-lg-none mobile-nav" id="navbarNav">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
						?>
					</div>
				</div>
			</nav>
		</header><!-- #masthead -->