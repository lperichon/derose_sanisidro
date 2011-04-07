<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage derose_si
 * @since derose_si 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
				<h1 class=page-title><?php printf( __( 'Resultados de la búsqueda por: %s', 'derose_si' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
				<div id=post-0 class="post no-results not-found">
					<h2 class=entry-title><?php _e( 'No se encontró nada', 'derose_si' ); ?></h2>
					<div class=entry-content>
						<p><?php _e( 'Perdón, tu búsqueda no devolvió ningún resultado. Por favor intentá con otras palabras clave.', 'derose_si' ); ?></p>
					</div>
				</div>
<?php endif; ?>

<?php get_footer(); ?>