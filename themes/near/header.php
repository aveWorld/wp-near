<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Near-Guilds
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="header__wrapper">
			<div class="header__slick">
              <?php
								the_custom_logo();
							?>
            <nav class="header__nav">
              <a class="header__item" href="/near-guilds">NEAR Guilds</a>
              <a class="header__item" href="/about-guilds">About Guilds</a>
              <a class="header__item" href="/near-news">NEAR News</a>
            </nav>
            <a
              class="btn__transparent-border b-radius-contact-us"
              href="/contact-us"
              >Contact Us</a
            >
      </div>
		</div><!-- .site-branding -->

	
	</header><!-- #masthead -->
