<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package esp
 */

?>

	<footer id="colophon" class="site-footer">
		<!-- <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'esp' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'esp' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'esp' ), 'esp', '<a href="http://underscores.me/">El Arif Sami</a>' );
				?>
		</div>.site-info -->
		<h1>TIM 2020</h1>

		<div id="footer-contact" class="contenant-footer">
			<img src="http://localhost/esp/wp-content/uploads/2022/03/Mon-Logo2.png" alt="">
			<div class="contenu-contact">
				<h3>Social</h3>
				<ul>
					<li><a href="mailto:sami.elarif@hotmail.com" target="_blank"><i class="fa-solid fa-envelope"></i></a></li>
					<li><a href="https://www.behance.net/Sami-El-Arif" target="_blank"><i class="fa-brands fa-behance"></i></a></li>
					<li><a href="https://www.artstation.com/sami_elarif" target="_blank"><i class="fa-brands fa-artstation"></i></a></li>
					<li><a href="https://www.linkedin.com/in/elarifsami/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
					<li><a href="https://www.instagram.com/samiiii.jpg/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCB5m0aeQE8nF5b-XhHnTb5g" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
				</ul>
			</div>
			
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
