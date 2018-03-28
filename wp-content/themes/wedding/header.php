<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wedding
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
    <div id="top"><div><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" id="top-text"><?php bloginfo( 'name' ); ?></a></div></div>
    <div id="bottom"></div>

    <div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$wedding_description = get_bloginfo( 'description', 'display' );
			if ( $wedding_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $wedding_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav>
			<button class="main-menu" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Strona główna', 'wedding' ); ?></button>
                        <button class="main-menu" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'ślub i wesele', 'wedding' ); ?></button>
                        <button class="main-menu" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Nasza galeria', 'wedding' ); ?></button>
                        <button class="main-menu" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Kontakt', 'wedding' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
