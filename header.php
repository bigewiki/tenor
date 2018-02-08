<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
			<div id="page" class="site">
				    <div class="container">
				<!--header.php-->
				<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

				<div class="columns">
					<div class="column is-one-fifth left-sidebar nav-and-branding">
						<header id="masthead" class="site-header">

									<nav class="navbar" role="navigation" aria-label="main navigation">
									  <div class="navbar-brand">
										<a class="navbar-item">
											<?php
											the_custom_logo();
											if ( is_front_page() && is_home() ) : ?>
										</a>

										<button class="button navbar-burger">
										  <span></span>
										  <span></span>
										  <span></span>
										</button>
										<div class="navbar-menu">
											<?php
												wp_nav_menu( array(
													'theme_location' => 'menu-1',
													'menu_id'        => 'primary-menu',
												) );
											?>
										</div>
									  </div>
									</nav>


									<div class="site-branding">
										<?php
										the_custom_logo();
										if ( is_front_page() && is_home() ) : ?>
											<h1 class="site-title font-cabin"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
										<?php else : ?>
											<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
										<?php
										endif;

										$description = get_bloginfo( 'description', 'display' );
										if ( $description || is_customize_preview() ) : ?>
											<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
										<?php
										endif; ?>
									</div><!-- .site-branding -->


									<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
									<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css.map">
									<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
									<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
									<link href="https://fonts.googleapis.com/css?family=Cabin|Orbitron|Oswald" rel="stylesheet">

						</header><!-- #masthead -->
						<?php get_sidebar(); ?>
					</div><!--column-->
					<div class="column main-area-column is-desktop-only">
<!-- 							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</button>
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									) );
								?> -->
							</nav><!-- #site-navigation -->


			<div id="content" class="site-content">
