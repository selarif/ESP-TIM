<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package esp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<!-- Connections aux typographies de Google Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Josefin+Sans:ital,wght@0,100;0,200;0,400;0,700;1,400;1,700&family=Montserrat:ital,wght@0,600;0,700;1,600;1,700&display=swap" rel="stylesheet">
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url().'/wp-content/uploads/2022/02/apple-touch-icon.png';?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url().'/wp-content/uploads/2022/02/favicon-32x32.png';?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url().'/wp-content/uploads/2022/02/favicon-16x16.png';?>">
	<link rel="manifest" href="<?php echo site_url().'/wp-content/uploads/2022/02/site.webmanifest';?>">
	<!-- Swiper API -->
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/329a0d8f65.js" crossorigin="anonymous"></script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'esp' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<!-- <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$esp_description = get_bloginfo( 'description', 'display' );
			if ( $esp_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $esp_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?> -->

			<!-- Le menu burger -->
			<div class="menu-icon">
				<span></span>
				<span></span>
			</div>

			<!-- La navigation du site web -->
			<nav class="menu-principal">
				<ul>
					<li><a href="#presentation">Un peu sur moi</a></li>
					<li><a href="#lien-projet">Le court-métrage</a></li>
					<li><a href="#inspiration">Mes inspirations</a></li>
					<li><a href="https://www.behance.net/Sami-El-Arif" target="_blank">Mon Behance</a><i class="fa-brands fa-behance-square"></i></li>
					<li><a href="https://www.artstation.com/sami_elarif" target="_blank">Mon ArtStation</a><i class="fa-brands fa-artstation"></i></li>
					<li><a href="https://www.linkedin.com/in/elarifsami/" target="_blank">Mon Linkedin</a><i class="fa-brands fa-linkedin"></i></li>
					
				</ul>
			</nav>

			<div class="titres">
				<h1 class="nom">SAMI EL ARIF</h1>
				<h1 class="projet" style="background-image: url('<?php echo site_url().'/wp-content/uploads/2022/02/7.1-min.png';?>');">
					<div>Mais qu'est-ce qu'on a fait de Poséidon ? </div>
				</h1>
			</div>
		</div><!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'esp' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>#site-navigation -->
		
		
	</header><!-- #masthead -->
