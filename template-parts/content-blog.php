<?php
/**
 *
 * Template de Página para listar os Posts do Blog
 *
**/

?>

<section class="rv_blog_titulo">
			<header>
				<?php
					//the_title( '<h1 class="entry-title">Nome interessante do ', '</h1>' );

				?>
					<h1></h1>
				<svg class="rv_pagina_fundo_baixo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
					<polygon fill="white" points="0,100 100,70 100,100"/>
						<!--<polygon fill="white" points="0,50 62,90 100,10 100,100 0,100"/>-->
					</svg>
			</header>


</section>

<article>

	<?php

/*
Problema: Paginação
Solução: http://web-profile.net/wordpress/themes/wordpress-custom-loop/
*/

	if ( get_query_var('paged') ) {
		$paged = get_query_var('paged');
	} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
		$paged = get_query_var('page');
	} else {
		$paged = 1;
	}

	$custom_query_args = array(
		'post_type' => 'post',
		'posts_per_page' => get_option('posts_per_page'),
		'paged' => $paged,
		'post_status' => 'publish',
		'ignore_sticky_posts' => true,
		//'category_name' => 'custom-cat',
		'order' => 'DESC', // 'ASC'
		'orderby' => 'date' // modified | title | name | ID | rand
	);
	$custom_query = new WP_Query( $custom_query_args ); ?>

<div class="container">
	<div class="row">
		<div class="rv_blog_esquerda col-12 col-md-9">
			<?php $contador = 0; ?>
	<?php if ( $custom_query->have_posts() ) :
		while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

			<?php if ($contador == 0 && $paged == 1): ?>

				<article <?php post_class(); ?>>
					<div class="row">
						<div class="rv_blog_bloco col-12">
							<div class="container">
								<div class="row">
									<div class="rv_imagem col-12 col-md-6">
										<?php	if ( has_post_thumbnail() ) : ?>
												<img class="img-fluid" src="<?php the_post_thumbnail_url( 'large' )?>">
										<?php	endif; ?>
									</div>
									<div class="rv_texto col-12 col-md-6">
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
										<div><?php the_excerpt(); ?></div>
										<div><a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-outline-info">Ler mais</button></a></div>
									</div>
								</div><!-- row -->
							</div> <!-- container -->
						</div> <!-- rv_blog_bloco -->
					</div> <!-- row -->
				</article>

			<?php else: ?>

			<article <?php post_class(); ?>>
				<div class="row">
					<div class="rv_blog_bloco col-12">
						<div class="container">
							<div class="row">
								<div class="rv_imagem  col-12 col-md-3">
									<?php	if ( has_post_thumbnail() ) : ?>
											<img class="img-fluid" src="<?php the_post_thumbnail_url( 'thumbnail' )?>">;
									<?php	endif; ?>
								</div>
								<div class="rv_texto col-12 col-md-9">
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
									<div><?php the_excerpt(); ?></div>
									<div><a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-outline-info">Ler mais</button></a></div>
								</div>
							</div><!-- row -->
						</div> <!-- container -->
					</div> <!-- rv_blog_bloco -->
				</div> <!-- row -->
			</article>

		<?php endif;?>

		<?php
		$contador++;
		endwhile;
		?>

		<?php if ($custom_query->max_num_pages > 1) : // custom pagination  ?>
			<?php
			$orig_query = $wp_query; // fix for pagination to work
			$wp_query = $custom_query;
			?>
			<nav class="prev-next-posts">
				<div class="prev-posts-link">
					<?php echo get_next_posts_link( 'Posts antigos', $custom_query->max_num_pages ); ?>
				</div>
				<div class="next-posts-link">
					<?php echo get_previous_posts_link( 'Posts novos' ); ?>
				</div>
			</nav>
			<?php
			$wp_query = $orig_query; // fix for pagination to work
			?>
		<?php endif; ?>

	<?php
		wp_reset_postdata(); // reset the query
	else:
		echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
	endif;
	?>
		</div>

				<?php rv_mostrar_barra_lateral_blog();?>

	</div> <!--row-->
</div> <!-- container -->
</article>
