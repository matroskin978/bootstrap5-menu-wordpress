<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mytesttheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Offcanvas dark navbar</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarMenu" aria-controls="offcanvasDarkNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="navbarMenu" aria-labelledby="offcanvasDarkNavbarLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container' => false,
							'menu_class' => 'navbar-nav justify-content-end flex-grow-1 pe-3',
							'walker' => new My_Walker_Menu(),
						)
					);
					?>
					<!-- <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Link</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
									Dropdown
								</a>
								<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end animate slideIn">
									<li>
										<a class="dropdown-item" href="#">Item 1</a>
									</li>
									<li>
										<a class="dropdown-item" href="#">Item 2</a>
									</li>
									<li class="nav-item dropstart">
										<a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Item 3</a>
										<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end animate slideIn">
											<li>
												<a class="dropdown-item" href="#">Item 3.1</a>
											</li>
											<li class="nav-item dropstart">
												<a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Item 3.2</a>
												<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end animate slideIn">
													<li>
														<a class="dropdown-item" href="#">Item 3.2.1</a>
													</li>
													<li>
														<a class="dropdown-item" href="#">Item 3.2.3</a>
													</li>
													<li>
														<a class="dropdown-item" href="#">Item 3.2.3</a>
													</li>
												</ul>
											</li>
											<li>
												<a class="dropdown-item" href="#">Item 3.3</a>
											</li>
											<li>
												<a class="dropdown-item" href="#">Item 3.4</a>
											</li>
										</ul>
									</li>
									<li>
										<a class="dropdown-item" href="#">Item 4</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Link</a>
							</li>
						</ul> -->
				</div>
			</div>
		</div>
	</nav>