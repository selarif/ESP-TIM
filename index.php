<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package esp
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

		endif;
		?>
		
		<!-- La section Introduction sur moi -->
		<?php
			while ( have_posts() ) :
				the_post(); 
				if(get_field('type-article') == "presentation"):
		?>	
			<div id="presentation" class="presentation">
				<div class="presentation-contenant js-defilement">
					<div class="texte-presentation transition-gauche">
						<h2><?php the_title() ?></h2>
						<p> <?php the_content(); ?> </p>
					</div>
					<div class="portrait transition-droite">
						<a href="https://www.artstation.com/sami_elarif" target="_blank">
							<?php the_post_thumbnail( 'large'); ?>	
							<span>Mon ArtStation</span>
						</a>
					</div>
				</div>
			</div>
		<?php
				endif; 
			endwhile; 
		?>

		<!-- Le premier parallax -->
		<div class="parallax js-defilement transition-hauteur" style="background-image: url('http://localhost/esp/wp-content/uploads/2022/02/7.1-min.png');"></div>

		<!-- La section Capture d'écran du projet  -->
		<?php
			if ( have_posts() ) :
				the_post(); 
				if(get_field('type-article') == "capture-principale"):
		?>	
			<div class="capture js-defilement" >
				<div class="capture-contenant">
					<div class="img-capture">
						<?php the_post_thumbnail( 'large'); ?>
					</div>
					<h2><?php the_title() ?></h2>
					<p> <?php the_content(); ?> </p>
				</div>
				
			</div>
		<?php
				endif; 
			endif; 
		?>

		<!-- Le carrousel  -->
			<div class="swiper js-defilement">
				<div class="swiper-wrapper">
					<?php
						while ( have_posts() ) :
							the_post(); 
							if(get_field('type-article') == "avancement"): 
					
							get_template_part( 'template-parts/content', 'accueil-avancement' );

							endif; 
						endwhile; 
						?>	
				</div>
				<!-- La pagination (les pastilles au pied du carrousel) -->
				<div class="swiper-pagination"></div>

				<!-- Les flèches de navigation -->
				<!-- <div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div> -->
			</div>

			<!-- Le deuxième parallax  -->
			<div class="parallax js-defilement" style="background-image: url('http://localhost/esp/wp-content/uploads/2022/02/4.1-min.png');"></div>

			<!-- La section lien du projet  -->
			<article class="lien-projet js-defilement" id="lien-projet" >
				<img src="http://localhost/esp/wp-content/uploads/2022/02/10-min.png" alt="">
				<div class="contenu-lien-projet">
					<h3>Visionnez le court-métrage dès maintenant !</h3>
				</div>
			</article>

			<!-- La section des inspirations  -->
			<div id="inspiration" class="inspiration js-defilement">
				<div class="inspiration-contenant">
					<h2>Les inspirations du projet</h2>
						<div class="inspiration-liste">
							
							<?php
								while ( have_posts() ) :
								the_post(); 
								if(get_field('type-article') == "inspiration"): 
							?>	
							<div class="inspiration-item">
								<div class="inspiration-image">
									<?php the_post_thumbnail( 'large'); ?>
								</div>
								<div class="inspiration-texte">
									<h3><?php the_title() ?></h3>
									<p> <?php the_content(); ?> </p>
								</div>
							</div>
							<?php
								endif; 
								endwhile; 
							?>	
							
						</div>
					
				</div>
			</div>
			
			<?php
			/* Start the Loop */
			// while ( have_posts() ) :
			// 	the_post();

			// 	/*
			// 	 * Include the Post-Type-specific template for the content.
			// 	 * If you want to override this in a child theme, then include a file
			// 	 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
			// 	 */
			// 	get_template_part( 'template-parts/content', get_post_type() );

			// endwhile;

			// the_posts_navigation();

		// else :

		// 	get_template_part( 'template-parts/content', 'none' );

		// endif;
		?>

	</main><!-- #main -->
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>				


<?php
// get_sidebar();
get_footer();
