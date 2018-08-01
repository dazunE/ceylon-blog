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
                <div class="header-left col-3">
                    <div class="ui-menu">
                        <span class="ui-menu__content">
                            <i class="ui-menu__line ui-menu__line_1"></i>
                            <i class="ui-menu__line ui-menu__line_2"></i>
                            <i class="ui-menu__line ui-menu__line_3"></i>
                        </span>
                    </div>
                </div>
                <div class="site-branding col-3">
		            <?php the_custom_logo(); ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		            <?php
		            $ceylon_blog_description = get_bloginfo( 'description', 'display' );
		            if ( $ceylon_blog_description || is_customize_preview() ) :
			            ?>
                        <p class="site-description"><?php echo $ceylon_blog_description; /* WPCS: xss ok. */ ?></p>
		            <?php endif; ?>
                </div><!-- .site-branding -->
                <div class="header-right col-3">
                    Search and Lang Switch
                </div>
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
        </header><!-- #masthead -->
        <div id="content" class="site-content">

