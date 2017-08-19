<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
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

<body id="top" <?php body_class(); ?>>
    <!-- header -->
    <header class="short-header">
        <div class="gradient-block"></div>
        <div class="row header-content">
            <div class="logo">
                <a href="index.html">Author</a>
            </div>

            <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'container' => 'nav',
                    'container_id' => 'main-nav-wrap',
                    'menu_class' => 'main-navigation sf-menu'
                ) );
            ?>

            <div class="search-wrap">
                <form role="search" method="get" class="search-form" action="#">
                    <label>
                        <span class="hide-content">Search for:</span>
                        <input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
                    </label>
                    <input type="submit" class="search-submit" value="Search">
                </form>
                <a href="#" id="close-search" class="close-btn">Close</a>
            </div> <!-- end search wrap -->

            <div class="triggers">
                <a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
                <a class="menu-toggle" href="#"><span>Menu</span></a>
            </div> <!-- end triggers -->
        </div>
    </header> <!-- end header -->
