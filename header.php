<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package yourweblayout
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- <link rel="shortcut icon" href="<?php //echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
need to keep the below jQuery files to keep the functionality for sidebar toggle 
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->	
<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'yourweblayout' ); ?></a>
    
	<!-- <header id="masthead" class="site-header navbar-fixed-top"> This is used for sticky header -->
    <header id="masthead" class="site-header">
    	<div class="pre-header">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="preheader-left">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('preheader-left') ) : endif; ?>
						</div><!-- .preheader-left -->
					</div><!-- .col -->
					<div class="col-sm-6">
						<div class="preheader-right">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('preheader-right') ) : endif; ?>
						</div><!-- .preheader-right -->
					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- end pre-header -->
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div id="logo">
						<!-- If no logo uploaded, the Site Title will be pulled in through the dashboard General Settings -->
						<?php yourweblayout_custom_logo(); ?>
						<!-- The Tagline will be pulled in through the dashboard General Settings -->
						<!-- <h3 class="site-description"><?php //bloginfo( 'description' ); ?></h3> -->
					</div><!-- #logo -->
				</div><!-- .col -->
                <div class="col-sm-6">
					<div class="header-right">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header-right') ) : endif; ?>
                    </div><!-- header-right -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
			
		<!-- <nav id="site-navigation" class="navbar navbar-default navbar-fixed-top"> This is used for sticky nav -->
		<nav id="site-navigation" class="navbar navbar-default">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="navbar-header">
							<!-- <a class="navbar-brand visible-xs" data-toggle="collapse" data-target="#primary-navbar" href="#">Main Menu</a> -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div><!-- .navbar-header -->

						<?php wp_nav_menu( array(
							'menu'              => 'primary',
							'theme_location'    => 'primary',
							'depth'             => 3,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'navbar-nav mr-auto',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						) );
						?>
					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- .container -->
		</nav><!-- #site-navigation -->
		<div class="scroll-header">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-3">					
						<div class="header-scroll-logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header-scroll-logo') ) : endif; ?></a>
						</div><!-- end header-scroll-logo -->
					</div><!-- .col -->
					<div class="col-sm-12 col-md-9">
						<nav id="site-navigation" class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-navbar-scroll">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div><!-- .navbar-header -->
						<?php wp_nav_menu( array(
							'menu'              => 'primary',
							'theme_location'    => 'primary',
							'depth'             => 3,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1-scroll',
							'menu_class'        => 'navbar-nav mr-auto',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						) );
						?>
						</nav><!-- #site-navigation -->
					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- scroll-header -->
	</header><!-- .site-header -->

	<div id="content" class="site-content">
		<div class="container">
