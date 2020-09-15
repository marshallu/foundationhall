<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Landing
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo SENTINEL_FONT_URL ?>" />

	<script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
	<script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>


</head>

<body <?php body_class(); ?> x-data="{ mobileMenuOpen: false }">
<?php wp_body_open(); ?>
	<div>

		<header class="bg-repeat pt-8" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/darkbg.png)">
			<div class="w-full xl:max-w-screen-xl xl:mx-auto bg-white flex pt-4 px-6 lg:px-0">
				<div class="w-full lg:w-2/3 lg:pl-1 lg:pr-12 pb-4 lg:pb-1"><a href="<?php echo get_site_url(); ?>"><img class="w-56 lg:w-auto" src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="Brad D. Smith Foundation Hall logo" /></a></div>
				<div class="lg:hidden text-darker-brown">
					<svg role="button" x-show="!mobileMenuOpen" aria-label="show mobile menu" xmlns="http://www.w3.org/2000/svg" x-on:click="mobileMenuOpen = true" viewBox="0 0 24 24" class="fill-current w-8 h-8 lg:hidden cursor-pointer">
						<path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" class="heroicon-ui"></path>
					</svg>
					<svg role="button" x-show="mobileMenuOpen" aria-label="hide mobile menu" x-on:click="mobileMenuOpen = false" class="fill-current w-6 h-6 lg:hidden cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						<path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" />
					</svg>

				</div>
				<div class="hidden lg:flex lg:w-1/3 text-xs justify-between pr-4">
					<div><a href="http://www.marshall.edu" class="border-t-2 border-green text-gray pt-1">MU Homepage</a></div>
					<div><a href="http://www.marshall.edu/foundation/" class="border-t-2 border-dark-green text-gray pt-1">MU Foundation</a></div>
					<div><a href="https://www.herdalum.com/" class="border-t-2 border-light-green text-gray pt-1">MU Alumni Association</a></div>
				</div>
			</div>
		</header>

		<div class="bg-dark-brown">
			<div class="w-full xl:max-w-screen-xl xl:mx-auto">
				<?php
					wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu' => 'Primary Navigation', 'menu_class' => 'primary_nav' ) );
				?>
			</div>
		</div>

		<div class="bg-dark-brown" x-show="mobileMenuOpen" x-cloak>
			<?php
					wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu' => 'Primary Navigation', 'menu_class' => 'mobile_nav' ) );
				?>
		</div>

		<div class="w-full bg-dark-brown">