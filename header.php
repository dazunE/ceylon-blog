<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CeylonBlog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display:700" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ceylon-blog' ); ?></a>
    <div class="container">
        <header id="masthead" class="site-header">
            <div class="col-wrap">
                <div class="site-branding col-6">
		            <?php the_custom_logo(); ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                </div><!-- .site-branding -->
                <div class="nav-wrap col-6-offset">
                    <div class="tool-bar">
                        search , languges my accounts
                    </div>
                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ceylon-blog' ); ?></button>
		                <?php
		                wp_nav_menu( array(
			                'theme_location' => 'menu-1',
			                'menu_id'        => 'primary-menu',
		                ) );
		                ?>
                    </nav><!-- #site-navigation -->
                </div>
            </div>
        </header><!-- #masthead -->
        <div id="content" class="site-content">

