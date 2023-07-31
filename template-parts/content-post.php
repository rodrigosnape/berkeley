<?php
/**
 *
 * Template  para mostrar posts individuais do Blog
 *
**/

?>

<section class="rv_blog_titulo">
			<header>
				<?php
					//the_title( '<h1 class="entry-title">Nome interessante do ', '</h1>' );

				?>
					<!--<h1>Berkeley em pauta</h1>-->
				<svg class="rv_pagina_fundo_baixo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
					<polygon fill="white" points="0,100 100,70 100,100"/>
						<!--<polygon fill="white" points="0,50 62,90 100,10 100,100 0,100"/>-->
					</svg>
			</header>


</section>

<article>


<div class="container">
	<div class="row">
		<div class="rv_blog_esquerda rv_blog_post col-12 col-md-9">
				<article <?php post_class(); ?>>
					<div class="row">
						<div class="rv_blog_bloco col-12">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<h1><?php the_title(); ?></h1>
										<small><em>postado em</em> <?php the_time('d/m/Y') ?> </small>
									</div>
									<div class="rv_imagem col-12">
										<?php	if ( has_post_thumbnail() ) : ?>
												<img class="img-fluid" src="<?php the_post_thumbnail_url( 'large' )?>">
										<?php	endif; ?>
									</div>

									<div class="rv_texto col-12">
										<div><?php the_content(); ?></div>
									</div>
									<?php
											if ( comments_open() || get_comments_number() ) :
													comments_template();
											endif;
									?>
								</div><!-- row -->
							</div> <!-- container -->
						</div> <!-- rv_blog_bloco -->
					</div> <!-- row -->
				</article>
		</div>

  	<?php rv_mostrar_barra_lateral_blog();?>

	</div> <!--row-->
</div> <!-- container -->
</article>
