<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 *
 */

get_header(); ?>
<div class="content-area">
	<main>
		<section class="rv_pagina_titulo">
			<header>
			<?php
			echo "<h1>Pesquisa</h1>";
			?>
			<svg class="rv_curso_fundo_baixo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
				<polygon fill="white" points="0,100 100,70 100,100"/>
					<!--<polygon fill="white" points="0,50 62,90 100,10 100,100 0,100"/>-->
			</svg>
		</header>
		</section>

		<div class="container">
				<div class="row">
					<section id="primary" class="content-area col-12">


						<?php
						if ( have_posts() ) : ?>

							<header class="page-header">
								<h1 class="page-title"><?php printf( esc_html__( 'Resultado da pesquisa: %s', 'wp-bootstrap-starter' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							the_posts_navigation();

						else : ?>

							<!--get_template_part( 'template-parts/content', 'search' );-->

							<header class="page-header">
								<h1 class="page-title"><?php printf( esc_html__( 'Resultado da pesquisa: %s', 'wp-bootstrap-starter' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							</header><!-- .page-header -->
							<h3>Nada foi encontrado</h3>

						<? endif; ?>


					</section><!-- #primary -->
				</div>
			</div>
	</main>
</div>
<?php
get_footer();
